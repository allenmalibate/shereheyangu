<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: joseph
 * Date: 10/5/15
 * Time: 8:15 AM
 */
class Home extends CI_Controller{

    //home page for any user
    public function index(){

        $this->load->view("home/includes/top_base");
        $this->load->view("home/page/home");
        $this->load->view("home/includes/bottom_base");
    }

    //page for FAQ
    public function faq(){

        $this->load->view("home/includes/top_base");
        $this->load->view("home/page/faq");
        $this->load->view("home/includes/bottom_base");
    }

    //page for members
    public function members(){

        $this->load->view("home/includes/top_base");
        $this->load->view("home/page/members");
        $this->load->view("home/includes/bottom_base");
    }

    //page for about us
    public function aboutUs(){

        $this->load->view("home/includes/top_base");
        $this->load->view("home/page/aboutUs");
        $this->load->view("home/includes/bottom_base");
    }

    //page for getStarted page
    function getStarted(){

        $workOptions = $this->Work_option_model->getAllWorkOptions();
        $count = 0;
        $workOptionId = 0;

        foreach ($workOptions as $workOption) {

            if(! ($count >0)){
                $workOptionId = $workOption->id;
                $count ++;
            };
        }
        $data['businesses'] = $this->Work_model->getWorksByWorkOptionId($workOptionId);
        $this->load->vars($data);

        $this->generateViewForGetStarted();

    }

    /*
     * function to get as specific get-started actions on nav     *
     */
    function getStartedOnSpecific(){

        $workOptionId = $this->uri->segment(2);
        $data['businesses'] = $this->Work_model->getWorksByWorkOptionId($workOptionId);
        $this->load->vars($data);
        $this->generateViewForGetStarted();
    }

    /*
     * get user based on specific work oprtion
     */
    function _getMemberBasedOnWorkOptionId($workOptionId){

        $works = $this->Work_model->getWorksByWorkOptionId($workOptionId);
        $members = array();
        $counter = 0;
        foreach($works as $work){
            $userId = $work->user_iduser;
            $user = $this->User_model->getUserByUserId($userId);
            $members[$counter] = $user;
            $counter ++;
        }
        return $members;
    }

    function generateViewForGetStarted(){

        $this->load->view("home/includes/top_base");
        $this->load->view("home/includes/getStartedNav");
        $this->load->view("home/page/getStarted");
        $this->load->view("home/includes/bottom_base");
    }

}