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
          $data['user'] = $this->dashboard->getSession();

          $this->form_validation->set_rules('doc', 'Dokumen', 'required');
          $this->form_validation->set_rules('date', 'Tanggal', 'required');

          if ($this->form_validation->run() == false) {
               $this->load->view('tampilan/header', $data);
               $this->load->view('tampilan/navbar', $data);
               $this->load->view('tampilan/topbar', $data);
               $this->load->view('dashboard/index', $data);
               $this->load->view('tampilan/footer');
          } else {
               $data = array(
                    'doc' => "MOM/DRP/20/" . $this->input->post('doc'),
                    'date' => $this->input->post('date'),
                    'createdBy' => $data['user']['id'],
                    'createdDate' => date('Y-m-d', strtotime($_POST['date'])),
                    'updatedBy' => null,
                    'updatedBy' => null
               );
               $this->dashboard->inputDoc($data);
               $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dokumen baru telah ditambahkan!</div>');
               redirect('dashboard');
          }
     }

     public function detail($id_header)
     {
          $data['title'] = 'Detail MOM';
          $data['user'] = $this->dashboard->getSession();
          $data['header'] = $this->dashboard->getIdHeader($id_header);
          $data['momitoringmom'] = $this->dashboard->getDetail($id_header);

          $this->load->view('tampilan/header', $data);
          $this->load->view('tampilan/navbar', $data);
          $this->load->view('tampilan/topbar', $data);
          $this->load->view('dashboard/detail', $data);
          $this->load->view('tampilan/footer');
     }

     public function tambah($id_header)
     {
          $data['title'] = 'Tambah Data MOM';
          $data['user'] = $this->dashboard->getSession();
          $data['header'] = $this->dashboard->getIdHeader($id_header);

          $this->form_validation->set_rules('jam', 'Jam', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('gph1', 'GPH 1', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('gph2', 'GPH 2', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('gph3', 'GPH 3', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('gph4', 'GPH 4', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('gph5', 'GPH 5', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('regulator1_bp1', 'Regulator 1', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('regulator2_bp1', 'Regulator 2', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('regulator3_bp1', 'Regulator 3', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('regulator4_bp1', 'Regulator 4', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('regulator5_bp1', 'Regulator 5', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('mainMotor_bp1', 'Main Motor', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('sprayWater', 'Spray Water', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('gph6', 'GPH 6', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('gph7', 'GPH 7', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('gph8', 'GPH 8', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('gph9', 'GPH 9', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('regulator1_bp2', 'Regulator 1', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('regulator2_bp2', 'Regulator 2', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('regulator3_bp2', 'Regulator 3', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('regulator4_bp2', 'Regulator 4', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('regulator5_bp2', 'Regulator 5', 'required', ['required' => 'Data kosong!']);
          $this->form_validation->set_rules('mainMotor_bp2', 'Main Motor', 'required', ['required' => 'Data kosong!']);

          if ($this->form_validation->run() == false) {
               $this->load->view('tampilan/header', $data);
               $this->load->view('tampilan/navbar', $data);
               $this->load->view('tampilan/topbar', $data);
               $this->load->view('dashboard/tambah', $data);
               $this->load->view('tampilan/footer');
          } else {
               $data = array(
                    'header_id' => $data['header']['id_header'],
                    'jam' => $this->input->post('jam'),
                    'gph1' => $this->input->post('gph1'),
                    'gph2' => $this->input->post('gph2'),
                    'gph3' => $this->input->post('gph3'),
                    'gph4' => $this->input->post('gph4'),
                    'gph5' => $this->input->post('gph5'),
                    'regulator1_bp1' => $this->input->post('regulator1_bp1'),
                    'regulator2_bp1' => $this->input->post('regulator2_bp1'),
                    'regulator3_bp1' => $this->input->post('regulator3_bp1'),
                    'regulator4_bp1' => $this->input->post('regulator4_bp1'),
                    'regulator5_bp1' => $this->input->post('regulator5_bp1'),
                    'mainMotor_bp1' => $this->input->post('mainMotor_bp1'),
                    'sprayWater' => $this->input->post('sprayWater'),
                    'gph6' => $this->input->post('gph6'),
                    'gph7' => $this->input->post('gph7'),
                    'gph8' => $this->input->post('gph8'),
                    'gph9' => $this->input->post('gph9'),
                    'regulator1_bp2' => $this->input->post('regulator1_bp2'),
                    'regulator2_bp2' => $this->input->post('regulator2_bp2'),
                    'regulator3_bp2' => $this->input->post('regulator3_bp2'),
                    'regulator4_bp2' => $this->input->post('regulator4_bp2'),
                    'regulator5_bp2' => $this->input->post('regulator5_bp2'),
                    'mainMotor_bp2' => $this->input->post('mainMotor_bp2')
               );
               $this->dashboard->inputMOM($data);
               $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data MOM baru telah ditambahkan!</div>');
               redirect('dashboard');
          }
     }

     public function edit()
     {
          $data['title'] = 'Edit MOM';
          $data['user'] = $this->dashboard->getSession();

          $this->load->view('tampilan/header', $data);
          $this->load->view('tampilan/navbar', $data);
          $this->load->view('tampilan/topbar', $data);
          $this->load->view('dashboard/edit', $data);
          $this->load->view('tampilan/footer');
     }
}
