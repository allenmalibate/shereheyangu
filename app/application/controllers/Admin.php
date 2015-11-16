<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: joseph
 * Date: 10/2/15
 * Time: 9:29 AM
 */
class Admin extends CI_Controller{

    function adminHome(){

        if($this->session->has_userdata('userId')){

            $this->load->view("admin/includes/top_base");
            $this->load->view("admin/includes/adminNav");
            $this->load->view("admin/adminHome");
            $this->load->view("admin/includes/bottom_base");
        }
        else{

            //redirect to home page
            redirect(site_url());
        }

    }

}