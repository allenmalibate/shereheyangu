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

            if(! $this->_isUserAdmin()){

                $this->deniedAccess();
            }else{

                $this->load->view("admin/includes/top_base");
                $this->load->view("admin/includes/adminNav");
                $this->load->view("admin/adminHome");
                $this->load->view("admin/includes/bottom_base");
            }
        }
        else{

            //redirect to home page
            redirect(site_url());
        }

    }

    /*
     * rending view for management of work option
     */
    function manageWorkOption(){

        if($this->session->has_userdata('userId')){

            if(! $this->_isUserAdmin()){

                $this->deniedAccess();
            }else{

                $this->load->view("admin/includes/top_base");
                $this->load->view("admin/includes/adminNav");
                $this->load->view("admin/manageWorkOption");
                $this->load->view("admin/includes/bottom_base");
            }
        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }

    /*
     * add work option
     */
    function addWorkOption(){

        if($this->session->has_userdata('userId')){

            $this->load->library('form_validation');
            $this->form_validation->set_rules('optionName','','trim|required');
            $this->form_validation->set_rules('optionType','','trim|required');
            if($this->form_validation->run() === TRUE){
                $this->Work_option_model->createWorkOption();
            }
            redirect(site_url('manage-work-options'));
        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }

    /*
     * function to edit work option
     */
    function editWorkOption(){

        if($this->session->has_userdata('userId')){

            if(! $this->_isUserAdmin()){

                $this->deniedAccess();
            }else{

                $workOptionId = $this->uri->segment(2);
                $this->Work_option_model->updateWorkOption($workOptionId);

                redirect(site_url('manage-work-options'));
            }
        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }


    /*
     * function to manage user
     *
     */
    function manageUser(){

        if($this->session->has_userdata('userId')){

            if(! $this->_isUserAdmin()){

                $this->deniedAccess();
            }else{

                $this->load->view("admin/includes/top_base");
                $this->load->view("admin/includes/adminNav");
                $this->load->view("admin/manageUser");
                $this->load->view("admin/includes/bottom_base");
            }
        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }

    /*
     * function  to manage settings
     */
    function manageSetting(){

        if($this->session->has_userdata('userId')){

            if(! $this->_isUserAdmin()){

                $this->deniedAccess();
            }else{

                $this->load->view("admin/includes/top_base");
                $this->load->view("admin/includes/adminNav");
                $this->load->view("admin/manageSetting");
                $this->load->view("admin/includes/bottom_base");
            }
        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }

    /*
     * function to create admin
     */
    function createAdmin(){

        if($this->session->has_userdata('userId')){

            if(! $this->_isUserAdmin()){

                $this->deniedAccess();
            }else{

                $this->load->library('form_validation');
                $this->form_validation->set_rules('fullName','','trim|required');
                $this->form_validation->set_rules('displayName','','trim|required');
                $this->form_validation->set_rules('username','','trim|required|is_unique[user.email]');

                if($this->form_validation->run() === TRUE){

                    $this->User_model->createAdminAccount();
                }

                redirect(site_url('manage-setting'));
            }
        }
        else{

            //redirect to home page
            redirect(site_url());
        }

    }

    /*
     * function to check is login user is admin of the system
     */
    function _isUserAdmin(){

        $output = 0;
        $userId = $this->session->userdata('userId');
        $user = $this->User_model->getUserByUserId($userId);
        $userRoleId = $user->user_roles_id;
        $userRole = $this->Roles_model->getUserRoleById($userRoleId);
        if($userRole->role === 'admin'){
            $output = 1;
        }
        return $output;
    }

    /*
     * access denied for user
     */
    function deniedAccess(){

        $this->load->view("admin/includes/top_base");
        $this->load->view("admin/includes/adminNav");
        $this->load->view("admin/deniedAccess");
        $this->load->view("admin/includes/bottom_base");

    }

}