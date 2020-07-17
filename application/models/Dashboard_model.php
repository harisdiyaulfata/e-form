<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
     public function getHeader()
     {
          $this->db->select('*', 'user.nama');
          $this->db->from('header');
          $this->db->join('user', 'user.id = header.createdBy');
          return $this->db->get()->result_array();
     }

     public function getDetail()
     {
          $this->db->select('*', 'user.nama', );
          $this->db->from('header');
          $this->db->join('user', 'user.id = header.createdBy');
          return $this->db->get()->result_array();
     }
}
