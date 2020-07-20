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

     public function getIdHeader($id_header)
     {
          return $this->db->get_where('header', ['id_header' => $id_header])->row_array();
     }

     public function getIdMom($id_mom)
     {
          $this->db->select('*', 'header.doc', 'header.date', 'header.id');
          $this->db->from('header');
          $this->db->join('momitoringmom', 'momitoringmom.header_id = header.id_header');
          $this->db->where('momitoringmom.id_mom', $id_mom);
          return $this->db->get()->row_array();
     }

     public function getDetail($id_header)
     {
          $this->db->select('*', 'header.doc', 'header.date', 'header.id');
          $this->db->from('header');
          $this->db->join('momitoringmom', 'momitoringmom.header_id = header.id_header');
          $this->db->where('momitoringmom.header_id', $id_header);
          return $this->db->get()->result_array();
     }

     public function inputDoc($data)
     {
          $this->db->insert('header', $data);
     }

     public function inputMOM($dt)
     {
          $this->db->insert('momitoringmom', $dt);
     }

     public function editMOM($dt)
     {
          $this->db->where('id_mom', $dt['id_mom']);
          $this->db->update('momitoringmom', $dt);
     }

     //hapus data
     public function delete($dt)
     {
          $this->db->where('id_mom', $dt['id_mom']);
          $this->db->delete('momitoringmom', $dt);
     }
}
