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
     * function to get all user contacts using user Id
     */
    function getUserContacts($userId){

        $this->db->where('user_iduser',$userId);
        $output = $this->db->get('contacts');

        return $output->result();
    }

}