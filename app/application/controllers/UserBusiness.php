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

            $this->load->library('form_validation');
            $this->form_validation->set_rules('workCategory','Business Category','trim|required');
            $this->form_validation->set_rules('business_name','Business Name','trim|required');
            //$this->form_validation->set_rules('business_mobile_number','Mobile Number','trim|required');
            $this->form_validation->set_rules('business_email','E-mail','trim|required');
            $this->form_validation->set_rules('business_website','Website','trim|required');
            $this->form_validation->set_rules('business_location','Location','trim|required');
            if($this->form_validation->run() === FALSE){

                $this->addMyBusinessForm();
            }
            else{

                $userId = $this->session->userdata('userId');
                $this->Work_model->createUserWork($userId);

                //redirect to view for all business on landing page
                redirect(site_url('user-home'));
            }
        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }

    function addMyBusinessForm(){

        $this->load->view("home/includes/top_base");
        $this->load->view("business/addMyBusiness");
        $this->load->view("home/includes/bottom_base");
    }

    function editMyBusiness(){

        if($this->session->has_userdata('userId')){

            $workId = $this->uri->segment(2);
            $business = $this->Work_model->getWorkById($workId);

            $this->load->library('form_validation');
            $this->form_validation->set_rules('workCategory','Business Category','trim|required');
            $this->form_validation->set_rules('business_name','Business Name','trim|required');
            //$this->form_validation->set_rules('business_mobile_number','Mobile Number','trim|required');
            $this->form_validation->set_rules('business_email','E-mail','trim|required');
            $this->form_validation->set_rules('business_website','Website','trim|required');
            $this->form_validation->set_rules('business_location','Location','trim|required');
            if($this->form_validation->run() === FALSE){

                $data['business'] = $business;

                $this->load->vars($data);
                $this->editMyBusinessForm();
            }
            else{

                $userId = $this->session->userdata('userId');
                if($business){

                    if($userId === $business->user_iduser){

                        $this->Work_model->updateUserWork($userId,$workId);
                    }
                }

                //redirect to view for all business on landing page
                redirect(site_url('user-home'));
            }



        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }

    /*
     * function to provide edit form for business
     */
    function editMyBusinessForm(){

        $this->load->view("home/includes/top_base");
        $this->load->view("business/editMyBusiness");
        $this->load->view("home/includes/bottom_base");
    }

    /*
     * function to view business for a give user
     */
    function viewMyBusiness(){

        if($this->session->has_userdata('userId')){

            $workId = $this->uri->segment(2);
            $data['business'] = $this->Work_model->getWorkById($workId);

            $this->load->vars($data);

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

        if($this->session->has_userdata('userId')){

            $workId = $this->uri->segment(2);
            $business = $this->Work_model->getWorkById($workId);
            $userId = $this->session->userdata('userId');
            if($business){

                if($userId === $business->user_iduser){
                    $this->Work_model->deleteWorkById($workId);
                }
            }

            redirect(site_url('user-home'));

        }
        else{

            //redirect to home page
            redirect(site_url());
        }


    }

}