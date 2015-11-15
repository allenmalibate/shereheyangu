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

        $this->User_model->login();
        print_r('login into system');
    }

    /*
     * function for register new member into system
     */
    function createAccount(){

        print_r('create account');
    }


}