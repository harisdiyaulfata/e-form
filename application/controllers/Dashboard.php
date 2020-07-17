<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
     public function __construct()
     {
          parent::__construct();
          $this->load->model('Dashboard_model', 'dashboard');
     }

     public function index()
     {
          $data['title'] = 'Dashboard';
          $data['header'] = $this->dashboard->getHeader();

          $this->load->view('tampilan/header', $data);
          $this->load->view('tampilan/navbar');
          $this->load->view('tampilan/topbar', $data);
          $this->load->view('dashboard/index', $data);
          $this->load->view('tampilan/footer');
     }

     public function input()
     {
          $data['title'] = 'Tambah MOM';

          $this->load->view('tampilan/header', $data);
          $this->load->view('tampilan/navbar');
          $this->load->view('tampilan/topbar', $data);
          $this->load->view('dashboard/input', $data);
          $this->load->view('tampilan/footer');
     }

     public function detail()
     {
          $data['title'] = 'Detail MOM';

          $this->load->view('tampilan/header', $data);
          $this->load->view('tampilan/navbar');
          $this->load->view('tampilan/topbar', $data);
          $this->load->view('dashboard/detail', $data);
          $this->load->view('tampilan/footer');
     }

     public function edit()
     {
          $data['title'] = 'Edit MOM';

          $this->load->view('tampilan/header', $data);
          $this->load->view('tampilan/navbar');
          $this->load->view('tampilan/topbar', $data);
          $this->load->view('dashboard/edit', $data);
          $this->load->view('tampilan/footer');
     }
}
