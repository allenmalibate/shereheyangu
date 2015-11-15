<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: joseph
 * Date: 11/15/15
 * Time: 4:15 AM
 */
class User extends CI_Controller{

    /*
     * function for login for registered members
     */
    function logIn(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('password','password','trim|required');
        $this->form_validation->set_rules('email','e-mail','trim|valid_email|required');

        if($this->form_validation->run() === FALSE){

            $this->memberForms();
        }else{

            print_r('login into system');
        }

    }

    /*
     * function for register new member into system
     */
    function createAccount(){
        /*
        $this->load->library('form_validation');
        $this->form_validation->set_rules('','','trim|required');

        if($this->form_validation->run() === FALSE){

            $this->memberForms();
        }else{

            print_r('login into system');
        }
        */

        print_r('create account');
    }


    /*
     * function to login form
     */
    function memberForms(){
        $this->load->view("home/includes/top_base");
        $this->load->view("home/page/members");
        $this->load->view("home/includes/bottom_base");
    }


}