<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: joseph
 * Date: 1/7/16
 * Time: 2:48 PM
 */
class Business_location_model extends CI_Model
{

    /*
     * function  to get all business locations
     */
    function getAllLocations(){

        $output = $this->db->get('business_location');
        return $output->result();
    }

}