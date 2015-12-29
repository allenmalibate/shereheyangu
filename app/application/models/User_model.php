<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: joseph
 * Date: 11/15/15
 * Time: 4:26 AM
 */
class User_model extends CI_Model{


    /*
     * function to create or register new user
     */
    function createUser(){

        $encryption_key = $this->config->item('encryption_key');
        $defaultPassword = '12345';
        $encryptedPassword = sha1($defaultPassword.$encryption_key);
        $encryptedPassword = sha1($encryptedPassword);

        $memberRole = $this->Roles_model->getUserRole('member');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');

        $data = array(
            'full_name' => $firstname.' '.$lastname,
            'profile_picture' => '',
            'display_name' => '',
            'email' => $this->input->post('emailRegister'),
            'password' => $encryptedPassword,
            'user_roles_id' => $memberRole->id
        );

        $this->db->insert('user',$data);


    }

    /*
     * function to create admin account
     */
    function createAdminAccount(){

        $encryption_key = $this->config->item('encryption_key');
        $defaultPassword = '12345';
        $encryptedPassword = sha1($defaultPassword.$encryption_key);
        $encryptedPassword = sha1($encryptedPassword);

        $memberRole = $this->Roles_model->getUserRole('admin');
        $data = array(
            'full_name' => $this->input->post('fullName'),
            'profile_picture' => '',
            'display_name' => $this->input->post('displayName'),
            'email' => $this->input->post('username'),
            'password' => $encryptedPassword,
            'user_roles_id' => $memberRole->id
        );

        $this->db->insert('user',$data);
    }

    /*
     * function update user information
     */
    function updateUser($userId,$data){

        $this->db->where('iduser',$userId);
        $this->db->update('user',$data);
    }


    /*
     * function to get user information by using userId
     */
    function getUserByUserId($userId){

        $this->db->where('iduser',$userId);
        $output = $this->db->get('user');

        return $output->row();
    }


    /*
     * function to get user information using user's email
     */
    function getUserByEmail($email){

        $this->db->where('email',$email);
        $output = $this->db->get('user');

        return $output->row();
    }

    /*
     * function to authenticate user
     */
    function authenticate(){

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        //encrypt password
        $encryption_key = $this->config->item('encryption_key');
        $encryptedPassword = sha1($password.$encryption_key);
        $encryptedPassword = sha1($encryptedPassword);

        //select user using encrypted password and emial provided
        $user = $this->getUserByEmail($email);
        if($user){
            if($user->password == $encryptedPassword){

                return $user;

            }else{
                return 0;
            }
        }else{

            return 0;
        }
    }

    /*
     * function to get all member form the system
     */
    function getAllMembers(){

        $role = $this->Roles_model->getUserRole('member');
        $roleId =  $role->id;

        $this->db->where('user_roles_id',$roleId);
        $output = $this->db->get('user');

        return $output->result();
    }

    /*
     * function to get all admin on the system
     */
    function getAdministrators(){

        $role = $this->Roles_model->getUserRole('admin');
        $roleId =  $role->id;

        $this->db->where('user_roles_id',$roleId);
        $output = $this->db->get('user');

        return $output->result();
    }


}