<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: joseph
 * Date: 12/29/15
 * Time: 8:20 PM
 */
class Work_option_model extends CI_Model
{

    /*
     * function to create work option
     */
    function createWorkOption(){

        $optionType = $this->input->post('optionType');
        $optionName = ucwords($this->input->post('optionName'));



        if(! $this->getWorkOptionByName($optionName)){
            $data = array(
                'option_name'=> $optionName,
                'option_type'=> $optionType
            );
            $this->db->insert('work_category_option',$data);
        }
    }

    /*
     * function to get all work options
     *
     */
    function getAllWorkOptions(){

        $output = $this->db->get('work_category_option');

        return $output->result();
    }

    /*
     * get work option by name
     */
    function getWorkOptionByName($optionName){

        $this->db->where('option_name',$optionName);
        $output = $this->db->get('work_category_option');

        return $output->row();
    }

}