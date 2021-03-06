<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: joseph
 * Date: 11/15/15
 * Time: 8:09 PM
 */
class Work_model extends CI_Model{

    /*
     * function to create user work
     */
    function createUserWork($userId){

        $data = array(
            'work_category_option_id' => $this->input->post('workCategory'),
            'user_iduser' => $userId,
            'name' => $this->input->post('business_name'),
            'email' => $this->input->post('business_email'),
            'website' => $this->input->post('business_website'),
            'address' => $this->input->post('business_address'),
            'description' => $this->input->post('business_description'),
            'business_location_id' => $this->input->post('business_location'),
            'logo'=>'businessLogo.png'
        );

        $this->db->insert('work',$data);
    }

    /*
     * function to update user work
     */
    function updateUserWork($userId,$workId){

        $data = array(
            'work_category_option_id' => $this->input->post('workCategory'),
            'user_iduser' => $userId,
            'name' => $this->input->post('business_name'),
            'email' => $this->input->post('business_email'),
            'website' => $this->input->post('business_website'),
            'address' => $this->input->post('business_address'),
            'description' => $this->input->post('business_description'),
            'business_location_id' => $this->input->post('business_location'),
        );

        $this->db->where('id', $workId);
        $this->db->update('work',$data);
    }

    /*
     * function to add business gallery
     */
    function addBusinessLogo($workId,$fileName){

        $data = array(
            'logo' => $fileName
        );
        $this->db->where('id',$workId);
        $this->db->update('work',$data);
    }

    /*
     * function to delete given business
     */
    function deleteWorkById($workId){

        $this->db->where('id', $workId);
        $this->db->delete('work');
    }


    /*
     * get works by using user
     */
    function getWorksByUser($userId){

        $this->db->where('user_iduser',$userId);
        $output = $this->db->get('work');

        return $output->result();
    }

    function getWorkById($workId){

        $this->db->where('id',$workId);
        $output = $this->db->get('work');

        return $output->row();
    }

    /*
     * function to get works based on work option id
     */
    function getWorksByWorkOptionId($workOptionId){

        $this->db->where('work_category_option_id',$workOptionId);
        $output = $this->db->get('work');

        return $output->result();
    }

}