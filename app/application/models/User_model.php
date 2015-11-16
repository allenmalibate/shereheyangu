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
            'dispaly_name' => '',
            'email' => $this->input->post('emailRegister'),
            'password' => $encryptedPassword,
            'user_roles_id' => $memberRole->id
        );

        $this->db->insert('user',$data);


    }

    /*
     * function update user informations
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

}