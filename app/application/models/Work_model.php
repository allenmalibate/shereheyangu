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
     * function to all user works
     */

    /*
     * function to get works category options
     */
    function getWorksCategoryOptions(){

        $output = $this->db->get('work_category_option');
        return $output->result();
    }

    /*
     * function to create works category options
     */

    /*
     * function to Update works category options
     */


}