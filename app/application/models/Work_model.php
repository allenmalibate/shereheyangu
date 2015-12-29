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
            'user_iduser' => $userId
        );

        $this->db->insert('work',$data);
    }

    /*
     * function to update user work
     */




    /*
     * function to get works based on work option id
     */
    function getWorksByWorkOptionId($workOptionId){

        $this->db->where('work_category_option_id',$workOptionId);
        $output = $this->db->get('work');

        return $output->result();
    }

}