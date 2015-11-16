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

            $user = $this->User_model->authenticate();

            if($user){

                $sessionData = array(
                'userId' => $user->iduser,
                'loginStatus' => 1,
            );
            $this->session->set_userdata($sessionData);

            //redirect to view profile for success user
            redirect(site_url('user-profile'));
            }else{

                $data['loginError'] = 'Some error during submission of register form, wrong e-mail or password';
                $this->load->vars($data);

                $this->memberForms();
            }
        }

    }

    /*
     * function to log out form the system
     */
    function logOut(){

        if($this->session->has_userdata('userId')){

            //empty session values
            $sessionData = array('userId','loginStatus');
            $this->session->unset_userdata('userId');


            //redirect to login form
            redirect('members');
        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }


    /*
     * function for register new member into system
     */
    function createAccount(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname','first name','trim|required');
        $this->form_validation->set_rules('lastname','last name','trim|required');
        $this->form_validation->set_rules('emailRegister','e-mail','trim|valid_email|required');
        $this->form_validation->set_rules('email_confirm','e-mail confirmation','trim|required|matches[emailRegister]');


        if($this->form_validation->run() === FALSE){

            $data['createAccountError'] = 'Some error during submission of register form please correct first';
            $this->load->vars($data);

            $this->memberForms();
        }else{

            //register new user
            $this->User_model->createUser();

            $email = $this->input->post('emailRegister');
            $newUser = $this->User_model->getUserByEmail($email);

            //set session for new user
            $sessionData = array(
                'userId' => $newUser->iduser,
                'loginStatus' => 1
            );

            $this->session->set_userdata($sessionData);
            redirect(site_url('contacts-work'));
        }

    }

    /*
     * function to contacts Work for a given user
     */
    function contactsWork(){

        if($this->session->has_userdata('userId')){

            $this->load->library('form_validation');
            $this->form_validation->set_rules('displayname','display name','trim|required');
            $this->form_validation->set_rules('phonenumber','phone number','trim|required');
            $this->form_validation->set_rules('workCategory','category','trim|required');

            if($this->form_validation->run() === FALSE){

                $this->contactsWorkForm();
            }else{

                $userData = array(
                    'dispaly_name'=>$this->input->post('displayname'),
                );
                $userId = $this->session->has_userdata('userId');

                //update user profile
                $this->User_model->updateUser($userId,$userData);

                //add user work option
                $this->Work_model->createUserWork($userId);

                //add contacts
                $this->Contact_model->createContact($userId,'mobile',$this->input->post('phonenumber'));

                //checking if all contacts has been filled
                if($this->input->post('phonenumber2')){

                    $value = $this->input->post('phonenumber2');
                    $this->Contact_model->createContact($userId,'mobile',$value);
                }

                //redirect to view profile for success user
                redirect(site_url('user-profile'));
            }

        }
        else{

            //redirect to home page
            redirect(site_url());
        }

    }

    /*
     * function to view user profile
     */
    function userProfile(){

        if($this->session->has_userdata('userId')){

            $userId = $this->session->userdata('userId');
            $user['user'] = $this->User_model->getUserByUserId($userId);

            $this->load->vars($user);

            $this->load->view("home/includes/top_base");
            $this->load->view("user/userProfile");
            $this->load->view("home/includes/bottom_base");

        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }

    /*
     * function to provide for contact-Work for a given user
     */
    function contactsWorkForm(){

        $this->load->view("home/includes/top_base");
        $this->load->view("user/contactsWorkForm");
        $this->load->view("home/includes/bottom_base");

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