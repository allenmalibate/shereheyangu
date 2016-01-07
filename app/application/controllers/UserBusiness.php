<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: joseph
 * Date: 1/7/16
 * Time: 12:18 PM
 */
class UserBusiness extends CI_Controller
{
    function addMyBusiness(){

        if($this->session->has_userdata('userId')){

            $this->load->view("home/includes/top_base");
            $this->load->view("business/addMyBusiness");
            $this->load->view("home/includes/bottom_base");

        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }

    function editMyBusiness(){

        if($this->session->has_userdata('userId')){

            $workId = $this->uri->segment(2);

            $this->load->view("home/includes/top_base");
            $this->load->view("business/editMyBusiness");
            $this->load->view("home/includes/bottom_base");

        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }

    function viewMyBusiness(){

        if($this->session->has_userdata('userId')){

            $workId = $this->uri->segment(2);

            $this->load->view("home/includes/top_base");
            $this->load->view("business/viewMyBusiness");
            $this->load->view("home/includes/bottom_base");

        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }

    function deleteMyBusiness(){

        $workId = $this->uri->segment(2);
        echo $workId;
    }

}