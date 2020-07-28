<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report_model extends CI_Model
{
     public function getDetailReportPDF($id_header)
     {
          $this->db->select('*', 'header.doc', 'header.date', 'header.id', 'header.name');
          $this->db->from('header');
          $this->db->join('momitoringmom', 'momitoringmom.header_id = header.id_header');
          $this->db->where('momitoringmom.header_id', $id_header);
          $this->db->order_by('momitoringmom.jam');
          return $this->db->get()->result_array();
     }
}
