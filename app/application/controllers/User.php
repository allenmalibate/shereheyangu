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
        $this->form_validation->set_rules('email','e-mail','trim|required');

        if($this->form_validation->run() === FALSE){

            $data['loginError'] = 'Some error during submission of login form please correct first';
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

                $userRole = $this->Roles_model->getUserRoleById($user->user_roles_id);

                if($userRole->role == 'admin'){

                    //redirect to home page for administrator
                    redirect(site_url('admin-home'));
                }
                if($userRole->role == 'member'){

                    //redirect to view profile for success user
                    redirect(site_url('user-home'));
                }

            }else{

                $data['loginError'] = 'Some error during submission of login form, wrong e-mail or password';
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
            $this->session->unset_userdata($sessionData);


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
        $this->form_validation->set_rules('emailRegister','e-mail','trim|valid_email|required|is_unique[user.email]');
        $this->form_validation->set_rules('email_confirm','e-mail confirmation','trim|required|matches[emailRegister]');
        $this->form_validation->set_rules('phonenumber','phone number','trim|required');


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
            $userId = $newUser->iduser;
            $sessionData = array(
                'userId' => $userId,
                'loginStatus' => 1
            );

            $this->session->set_userdata($sessionData);
            //add contacts
            $this->Contact_model->createContact($userId,'mobile',$this->input->post('phonenumber'));

            redirect(site_url('user-home'));
        }

    }



    /*
     * function to view user home/landing page
     */
    function userHome(){

        if($this->session->has_userdata('userId')){

            $userId = $this->session->userdata('userId');
            $data['user'] = $this->User_model->getUserByUserId($userId);
            $data['businesses'] = $this->Work_model->getWorksByUser($userId);

            $this->load->vars($data);

            $this->load->view("home/includes/top_base");
            $this->load->view("user/userHome");
            $this->load->view("home/includes/bottom_base");

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
            $this->load->view("user/userProfileNav");
            $this->load->view("user/userProfile");
            $this->load->view("home/includes/bottom_base");

        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }

    /*
     * function to update user profile picture
     */
    function uploadMyProfilePicture(){

        if($this->session->has_userdata('userId')){

            $config['upload_path']  = './upload/user';
            $config['allowed_types']  = 'gif|jpg|png|jpe|jpeg|bmp';
            $config['max_size']      = 2048;

            $this->load->library('upload',$config);

            if ( ! $this->upload->do_upload('userProfile'))
            {
                $error['error']  = $this->upload->display_errors();
                $this->load->vars($error);

                $this->userProfile();
            }
            else{

                $fileName = $this->upload->data('file_name');
                $userId = $this->session->userdata('userId');
                $data = array(
                    'profile_picture' => $fileName
                );

                $this->User_model->updateUser($userId,$data);

                redirect(site_url('user-profile'));
            }


        }
        else{

            //redirect to home page
            redirect(site_url());
        }

    }

    /*
     * function to manage user mobile contacts
     */
    function userMobileContacts(){

        if($this->session->has_userdata('userId')){

            $userId = $this->session->userdata('userId');
            $user['user'] = $this->User_model->getUserByUserId($userId);

            $this->load->vars($user);

            $this->load->view("home/includes/top_base");
            $this->load->view("user/userProfileNav");
            $this->load->view("user/userMobileContacts");
            $this->load->view("home/includes/bottom_base");

        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }

    /*
     * function to add mobile contacts for user
     */
    function addMobileContact(){

        if($this->session->has_userdata('userId')){

            $this->load->library('form_validation');
            $this->form_validation->set_rules('mobileNumber','Mobile Number','trim|required');

            if($this->form_validation->run() === FALSE){

                $this->userMobileContacts();
            }else{

                $userId = $this->session->userdata('userId');
                $this->Contact_model->createContact($userId,'mobile',$this->input->post('mobileNumber'));

                redirect(site_url('user-mobile-contacts'));
            }
        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }

    /*
     * function to edit a given user contacts
     */
    function editMobileContact(){

        if($this->session->has_userdata('userId')){

            $this->load->library('form_validation');
            $this->form_validation->set_rules('editMobileNumber','Mobile Number','trim|required');

            if($this->form_validation->run() === FALSE){

                $this->userMobileContacts();
            }else{

                $userId = $this->session->userdata('userId');
                $mobileContactId = $this->uri->segment(2);

                $mobileContact = $this->Contact_model->getUserContactById($mobileContactId);
                if($mobileContact){
                    if($mobileContact->user_iduser === $userId){
                        $this->Contact_model->updateContact($mobileContactId,$this->input->post('editMobileNumber'));
                    }
                }

                redirect(site_url('user-mobile-contacts'));
            }
        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }

    /*
     * function delete mobile contact
     */
    function deleteMobileContact(){

        if($this->session->has_userdata('userId')){

            $userId = $this->session->userdata('userId');
            $mobileContactId = $this->uri->segment(2);

            $userContact = $this->Contact_model->getUserContactById($mobileContactId);
            if($userId === $userContact->user_iduser){

                $this->Contact_model->deleteUserContact($mobileContactId);
            }

            redirect(site_url('user-mobile-contacts'));
        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }


    /*
     * function to update user password
     */
    function updateUserPassword(){

        if($this->session->has_userdata('userId')){

            $this->load->library('form_validation');

            $this->form_validation->set_rules('password','New Password','trim|required');
            $this->form_validation->set_rules('confirmPassword','Confirm Password','trim|required|matches[password]');

            if($this->form_validation->run() === FALSE){

                $this->load->view("home/includes/top_base");
                $this->load->view("user/userProfileNav");
                $this->load->view("user/updateUserPassword");
                $this->load->view("home/includes/bottom_base");

            }else{

                //update user password
                $password = $this->input->post('password');

                //encrypt password
                $userId = $this->session->userdata('userId');
                $encryption_key = $this->config->item('encryption_key');
                $encryptedPassword = sha1($password.$encryption_key);
                $encryptedPassword = sha1($encryptedPassword);
                $data = array(
                    'password' =>$encryptedPassword
                );
                $this->User_model->updateUser($userId,$data);

                //redirect to user profile
                redirect(site_url('user-profile'));
            }

        }
        else{

            //redirect to home page
            redirect(site_url());
        }
    }


    /*
     * view user profile form get started page
     */
    function viewUserProfile(){

        $userId = $this->uri->segment(2);
        $data['member'] = $this->User_model->getUserByUserId($userId);
        $this->load->vars($data);

        $this->load->view("home/includes/top_base");
        $this->load->view("user/viewUserProfile");
        $this->load->view("home/includes/bottom_base");
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
                    'display_name'=>$this->input->post('displayname'),
                );
                $userId = $this->session->userdata('userId');

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
                redirect(site_url('user-home'));
            }

        }
        else{

            //redirect to home page
            redirect(site_url());
        }

    }


}