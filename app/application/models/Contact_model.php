<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: joseph
 * Date: 11/15/15
 * Time: 7:15 PM
 */
class Contact_model extends CI_Model{

    /*
     * function to create contacts for given user
     */
    function createContact($userId,$contactType,$value){

        $data = array(
            'user_iduser' => $userId,
            'type_of_contact' => $contactType,
            'value_of_contact' => $value
        );

        $this->db->insert('contacts',$data);

    }

    /*
     * function to update user contact
     */
    function updateContact($mobileContactId,$value){

        $data = array(
            'value_of_contact' => $value
        );

        $this->db->where('id',$mobileContactId);
        $this->db->update('contacts',$data);
    }

    /*
     * function get use contact by id
     */
    function getUserContactById($contactId){

        $this->db->where('id',$contactId);
        $output = $this->db->get('contacts');

        return $output->row();
    }


    /*
     * function to get all user contacts using user Id
     */
    function getUserContacts($userId){

        $this->db->where('user_iduser',$userId);
        $output = $this->db->get('contacts');

        return $output->result();
    }

    /*
     * function to delete a user contact
     */
    function deleteUserContact($mobileContactId){

        $this->db->where('id',$mobileContactId);
        $this->db->delete('contacts');
    }

}