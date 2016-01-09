<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: joseph
 * Date: 1/9/16
 * Time: 6:57 AM
 */
class Work_gallery_model extends CI_Model
{
    /*
     * function to create photo gallery for a given business
     */
    function createWorkGallery($data){

        $this->db->insert('work_gallery',$data);
    }

    /*
     * function to get photo gallery for a given work
     */
    function getWorkGallery($workId){

        $this->db->where('work_id',$workId);
        $output = $this->db->get('work_gallery');

        return $output->result();
    }

}