<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
     public function login()
     {
          $email = $this->input->post('email');
          return $this->db->get_where('user', ['email' => $email])->row_array();
     }

     public function registration($data)
     {
          $this->db->insert('user', $data);
     }
}
