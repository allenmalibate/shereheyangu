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

            $data['loginError'] = 'Some error during submission of register form please correct first';
            $this->load->vars($data);

            $this->memberForms();
        }else{

            print_r('login into system');
        }

    }

    /*
     * function for register new member into system
     */
    function createAccount(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname','','trim|required');
        $this->form_validation->set_rules('lastname','','trim|required');
        $this->form_validation->set_rules('emailRegister','e-mail','trim|valid_email|required');
        $this->form_validation->set_rules('email_confirm','e-mail confirmation','trim|required|matches[emailRegister]');


        if($this->form_validation->run() === FALSE){

            $data['createAccountError'] = 'Some error during submission of register form please correct first';
            $this->load->vars($data);

            $this->memberForms();
        }else{

            print_r('login into system');
        }


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