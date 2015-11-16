<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: joseph
 * Date: 11/15/15
 * Time: 7:12 PM
 */
class Roles_model extends CI_Model{


    /*
     * function to get user role information using role name
     */
    function getUserRole($roleName){

        $this->db->where('role',$roleName);
        $output = $this->db->get('user_roles');

        return $output->row();
    }

}