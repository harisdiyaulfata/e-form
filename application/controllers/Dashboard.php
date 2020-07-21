<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Load library phpspreadsheet
require('./assets/excel/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
// End load library phpspreadsheet

class Dashboard extends CI_Controller
{

     public function index()
     {
          $data['title'] = 'Dashboard';
          $data['header'] = $this->dashboard_model->getHeader();
          $data['user'] = $this->dashboard_model->getSession();

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
               $this->dashboard_model->inputDoc($data);
               $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Dokumen baru telah ditambahkan!</div>');
               redirect('dashboard');
          }
     }

     public function detail($id_header)
     {
          $data['title'] = 'Detail MOM';
          $data['user'] = $this->dashboard_model->getSession();
          $data['header'] = $this->dashboard_model->getIdHeader($id_header);
          $data['momitoringmom'] = $this->dashboard_model->getDetail($id_header);

          $this->load->view('tampilan/header', $data);
          $this->load->view('tampilan/navbar', $data);
          $this->load->view('tampilan/topbar', $data);
          $this->load->view('dashboard/detail', $data);
          $this->load->view('tampilan/footer');
     }

     public function tambah($id_header)
     {
          $data['title'] = 'Tambah Data MOM';
          $data['user'] = $this->dashboard_model->getSession();
          $data['header'] = $this->dashboard_model->getIdHeader($id_header);

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
               $dt = array(
                    'header_id' => $this->input->post('id_header'),
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
               $this->dashboard_model->inputMOM($dt);
               $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data MOM baru telah ditambahkan!</div>');
               // redirect('dashboard');
               $this->detail($data['header']['id_header']);
          }
     }

     public function edit($id_mom)
     {
          $data['title'] = 'Edit MOM';
          $data['user'] = $this->dashboard_model->getSession();
          $data['momitoringmom'] = $this->dashboard_model->getIdMom($id_mom);

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
               $this->load->view('dashboard/edit', $data);
               $this->load->view('tampilan/footer');
          } else {
               $dt = array(
                    'id_mom' => $id_mom,
                    'header_id' => $this->input->post('id_header'),
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
               $this->dashboard_model->editMOM($dt);
               $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data MOM telah diedit!</div>');
               // redirect('dashboard');
               $this->detail($data['momitoringmom']['header_id']);
          }
     }

     public function delete($id_mom)
     {
          $data['user'] = $this->dashboard_model->getSession(); //proteksi

          $momitoringmom = $this->dashboard_model->getIdMom($id_mom);
          $dt = array('id_mom' => $momitoringmom['id_mom']);
          $this->dashboard_model->delete($dt);
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data MOM telah dihapus!</div>');
          // redirect('dashboard');
          $this->detail($momitoringmom['header_id']);
     }

     public function laporanExcel($id_header)
     {
          $data['title'] = 'Detail MOM';
          $data['user'] = $this->dashboard_model->getSession();

          $data['momitoringmom'] = $this->dashboard_model->getDetail($id_header);

          // Create new Spreadsheet object
          $spreadsheet = new Spreadsheet();

          // Set document properties
          // $spreadsheet->getProperties()
          //      ->setCreator($header->name . ' - Laporan MOM')
          //      ->setLastModifiedBy($header->name . ' - Laporan MOM')
          //      ->setTitle('Laporan' . $momitoringmom->doc)
          //      ->setSubject('Laporan' . $momitoringmom->doc)
          //      ->setDescription('Membuat Laporan Monitoring Operational Mesin')
          //      ->setKeywords('office 2007 openxml php')
          //      ->setCategory('Test result file');

          $spreadsheet->setActiveSheetIndex(0)
               ->setCellValue('K1', 'Doc')
               ->setCellValue('K2', 'Tgl')
               ->setCellValue('A4', 'Jam')
               ->setCellValue('B4', 'GPH 1')
               ->setCellValue('C4', 'GPH 2')
               ->setCellValue('D4', 'GPH 3')
               ->setCellValue('E4', 'GPH 4')
               ->setCellValue('F4', 'GPH 5')
               ->setCellValue('G4', 'Regulator 1')
               ->setCellValue('H4', 'Regulator 2')
               ->setCellValue('I4', 'Regulator 3')
               ->setCellValue('J4', 'Regulator 4')
               ->setCellValue('K4', 'Regulator 5')
               ->setCellValue('L4', 'Main Motor')
               ->setCellValue('A20', 'Jam')
               ->setCellValue('B20', 'Spray Water')
               ->setCellValue('C20', 'GPH 6')
               ->setCellValue('D20', 'GPH 7')
               ->setCellValue('E20', 'GPH 8')
               ->setCellValue('F20', 'GPH 9')
               ->setCellValue('G20', 'Regulator 1')
               ->setCellValue('H20', 'Regulator 2')
               ->setCellValue('I20', 'Regulator 3')
               ->setCellValue('J20', 'Regulator 4')
               ->setCellValue('K20', 'Regulator 5')
               ->setCellValue('L20', 'Main Motor');

          $spreadsheet->setActiveSheetIndex(0)
               ->setCellValue('L1', $data['momitoringmom'][0]['doc'])
               ->setCellValue('L2', $data['momitoringmom'][0]['date']);

          $a = count($data['momitoringmom']);

          for ($i = 0; $i < $a; $i++) {
               $dt = $data['momitoringmom'];

               $kolom_bp1 = 5;
               $kolom_bp2 = 21;
               foreach ($dt as $d) {
                    $spreadsheet->setActiveSheetIndex(0)
                         ->setCellValue('A' . $kolom_bp1, $d['jam'])
                         ->setCellValue('B' . $kolom_bp1, $d['gph1'])
                         ->setCellValue('C' . $kolom_bp1, $d['gph2'])
                         ->setCellValue('D' . $kolom_bp1, $d['gph3'])
                         ->setCellValue('E' . $kolom_bp1, $d['gph4'])
                         ->setCellValue('F' . $kolom_bp1, $d['gph5'])
                         ->setCellValue('G' . $kolom_bp1, $d['regulator1_bp1'])
                         ->setCellValue('H' . $kolom_bp1, $d['regulator2_bp1'])
                         ->setCellValue('I' . $kolom_bp1, $d['regulator3_bp1'])
                         ->setCellValue('J' . $kolom_bp1, $d['regulator4_bp1'])
                         ->setCellValue('K' . $kolom_bp1, $d['regulator5_bp1'])
                         ->setCellValue('L' . $kolom_bp1, $d['mainMotor_bp1'])
                         ->setCellValue('A' . $kolom_bp2, $d['jam'])
                         ->setCellValue('B' . $kolom_bp2, $d['sprayWater'])
                         ->setCellValue('C' . $kolom_bp2, $d['gph6'])
                         ->setCellValue('D' . $kolom_bp2, $d['gph7'])
                         ->setCellValue('E' . $kolom_bp2, $d['gph8'])
                         ->setCellValue('F' . $kolom_bp2, $d['gph9'])
                         ->setCellValue('G' . $kolom_bp2, $d['regulator1_bp2'])
                         ->setCellValue('H' . $kolom_bp2, $d['regulator2_bp2'])
                         ->setCellValue('I' . $kolom_bp2, $d['regulator3_bp2'])
                         ->setCellValue('J' . $kolom_bp2, $d['regulator4_bp2'])
                         ->setCellValue('K' . $kolom_bp2, $d['regulator5_bp2'])
                         ->setCellValue('L' . $kolom_bp2, $d['mainMotor_bp2']);
                    $kolom_bp1++;
                    $kolom_bp2++;
               }
          }

          $writer = new Xlsx($spreadsheet);
          $filename = 'laporan-' . $data['momitoringmom'][0]['doc'] . '-' . $data['momitoringmom'][0]['date'];

          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
          header('Cache-Control: max-age=0');

          $writer->save('php://output');

          // $spreadsheet->getActiveSheet()->setTitle('Report Excel ' . date('d-m-Y H'));

          // // Set active sheet index to the first sheet, so Excel opens this as the first sheet
          // $spreadsheet->setActiveSheetIndex(0);

          // Redirect output to a client’s web browser (Xlsx)
          // header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
          // header('Content-Disposition: attachment;filename="Report Excel.xlsx"');
          // header('Cache-Control: max-age=0');
          // // If you're serving to IE 9, then the following may be needed
          // header('Cache-Control: max-age=1');

          // $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
          // $writer->save('php://output');
          // exit;

     }

     public function laporanPDF($id_header)
     {
          $data['title'] = 'Detail MOM';
          $data['user'] = $this->dashboard_model->getSession();
          $dt['momitoringmom'] = $this->dashboard_model->getDetail($id_header);

          $this->load->library('pdfgenerator');
          $html = $this->load->view('dashboard/table_report', $dt, true);
          $filename = 'report_' . time();
          $this->pdfgenerator->generate($html, $filename, true, 'A4', 'portrait');
     }
}
