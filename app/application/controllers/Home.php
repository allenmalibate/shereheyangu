<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: joseph
 * Date: 10/5/15
 * Time: 8:15 AM
 */
class Home extends CI_Controller{

    public function index(){

        $this->load->view("home/includes/top_base");
        $this->load->view("home/page/home");
        $this->load->view("home/includes/bottom_base");
    }

}