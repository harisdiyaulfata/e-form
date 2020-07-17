<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
     public function login()
     {
          $email = $this->input->post('email');
          $password = $this->input->post('password');
          return $this->db->get_where('user', ['email' => $email])->row_array();
     }
}
