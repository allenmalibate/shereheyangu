<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: joseph
 * Date: 10/2/15
 * Time: 9:29 AM
 */
class Admin extends CI_Controller{

    public function adminLoginForm(){

        $this->load->view("admin/includes/top_base");
        //$this->load->view("admin//");
        $this->load->view("admin/includes/bottom_base");
    }

    public function adminHome(){

        $this->load->view("admin/includes/top_base");
        //$this->load->view("admin//");
        $this->load->view("admin/includes/bottom_base");
    }

}