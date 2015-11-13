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


}