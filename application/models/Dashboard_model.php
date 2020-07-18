<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
     public function getSession()
     {
          return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
     }

     public function getSessionUser()
     {
          return $this->db->get_where('user', ['id' => $this->session->userdata('id')])->result();
     }

     public function getHeader()
     {
          $this->db->select('*', 'user.nama');
          $this->db->from('header');
          $this->db->join('user', 'user.id = header.createdBy');
          return $this->db->get()->result_array();
     }

     public function getDetail()
     {
          $this->db->select('*', 'header.doc', 'header.date');
          $this->db->from('header');
          $this->db->join('momitoringmom', 'momitoringmom.header_id = header.id');
          $this->db->order_by('momitoringmom.jam');
          return $this->db->get()->result_array();
     }

     public function inputDoc($data)
     {
          $this->db->insert('header', $data);
     }

     public function inputMOM($data)
     {
          $this->db->insert('momitoringmom', $data);
     }

     public function editMOM($data)
     {
     }
}
