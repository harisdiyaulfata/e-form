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
          //      ->setCreator($data['momitoringmom'][0]['name'] . ' - Laporan MOM')
          //      ->setLastModifiedBy($data['momitoringmom'][0]['name'] . ' - Laporan MOM')
          //      ->setTitle('Laporan' . $data['momitoringmom'][0]['doc'])
          //      ->setSubject('Laporan' . $data['momitoringmom'][0]['doc'])
          //      ->setDescription('Membuat Laporan Monitoring Operational Mesin')
          //      ->setKeywords('office 2007 openxml php')
          //      ->setCategory('Test result file');

          $borderAll = array(
               'borders' => array(
                    'allBorders' => array(
                         'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                         'color' => array('argb' => '000000'),
                    ),
               ),
          );

          $borderOutline = array(
               'borders' => array(
                    'outline' => array(
                         'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                         'color' => array('argb' => '000000'),
                    ),
               ),
          );

          $sheet = $spreadsheet->getActiveSheet();
          $sheet->getColumnDimension('A')->setWidth('6.29');
          $sheet->getColumnDimension('B')->setWidth('4.50');
          $sheet->getColumnDimension('C')->setWidth('4.50');
          $sheet->getColumnDimension('D')->setWidth('4.50');
          $sheet->getColumnDimension('E')->setWidth('4.50');
          $sheet->getColumnDimension('F')->setWidth('4.50');
          $sheet->getColumnDimension('G')->setWidth('9.20');
          $sheet->getColumnDimension('H')->setWidth('9.20');
          $sheet->getColumnDimension('I')->setWidth('9.20');
          $sheet->getColumnDimension('J')->setWidth('9.20');
          $sheet->getColumnDimension('K')->setWidth('9.20');
          $sheet->getColumnDimension('L')->setWidth('9.20');

          $sheet->getStyle('A1:L61')->applyFromArray($borderAll);
          $sheet->getStyle('A62:L63')->applyFromArray($borderOutline);
          $sheet->getStyle('A64:L64')->applyFromArray($borderOutline);

          $sheet->getStyle('A8:L32')->getAlignment()->setHorizontal('center');
          $sheet->getStyle('A37:L61')->getAlignment()->setHorizontal('center');

          $sheet->getStyle('A1:L64')->getFont()->setSize('8');
          $sheet->getStyle('C1')->getFont()->setBold(true)->setSize('14');
          $sheet->getStyle('A1:L7')->getFont()->setBold(true);
          $sheet->getStyle('A3:C3')->getFont()->setBold(true);
          $sheet->getStyle('A33:L36')->getFont()->setBold(true);
          $sheet->getStyle('A62')->getFont()->setBold(true)->setUnderline(true);
          $sheet->getStyle('A64:G64')->getFont()->setBold(true);



          $sheet->mergeCells('A1:B2');
          $sheet->mergeCells('A3:B3');
          $sheet->mergeCells('A4:A7');
          $sheet->mergeCells('A33:A36');
          $sheet->mergeCells('A62:B63');
          $sheet->mergeCells('A64:F64');

          $sheet->mergeCells('B4:L4');
          $sheet->mergeCells('B5:F6');
          $sheet->mergeCells('B33:L33');
          $sheet->mergeCells('B34:B36');

          $sheet->mergeCells('C1:J2');
          $sheet->mergeCells('C3:J3');
          $sheet->mergeCells('C34:F35');
          $sheet->mergeCells('C62:L62');
          $sheet->mergeCells('C63:L63');

          $sheet->mergeCells('G5:L5');
          $sheet->mergeCells('G6:G7');
          $sheet->mergeCells('G34:L34');
          $sheet->mergeCells('G35:G36');
          $sheet->mergeCells('G64:L64');

          $sheet->mergeCells('H6:H7');
          $sheet->mergeCells('H35:H36');

          $sheet->mergeCells('I6:I7');
          $sheet->mergeCells('I35:I36');

          $sheet->mergeCells('J6:J7');
          $sheet->mergeCells('J35:J36');

          $sheet->mergeCells('K1:L1');
          $sheet->mergeCells('K2:L2');
          $sheet->mergeCells('K3:L3');
          $sheet->mergeCells('K6:K7');
          $sheet->mergeCells('K35:K36');

          $sheet->mergeCells('L6:L7');
          $sheet->mergeCells('L35:L36');

          $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
          $drawing->setName('Paid');
          $drawing->setDescription('Paid');
          $drawing->setPath('assets\img\logoPS.jpg'); // put your path and image here
          $drawing->setCoordinates('A1');
          $drawing->setHeight(35)->setOffsetX(20)->setOffsetY(5);
          $drawing->setWorksheet($spreadsheet->getActiveSheet());

          $ps = $spreadsheet->setActiveSheetIndex(0);
          $ps->setCellValue('A3', 'JUDUL')->getStyle('A3')->getAlignment()->setHorizontal('center')->setVertical('center');
          $ps->setCellValue('A4', 'Jam')->getStyle('A4')->getAlignment()->setHorizontal('center')->setVertical('center');
          $ps->setCellValue('A33', 'Jam')->getStyle('A33')->getAlignment()->setHorizontal('center')->setVertical('center');
          $ps->setCellValue('A62', 'KETERANGAN')->getStyle('A62')->getAlignment()->setHorizontal('center')->setVertical('top');
          $ps->setCellValue('A64', 'Mulai Berlaku : 16.05.2019')->getStyle('A64')->getAlignment()->setHorizontal('left')->setVertical('top');

          $ps->setCellValue('B4', 'LINE HIJAU BELT PRESS I')->getStyle('B4')->getAlignment()->setHorizontal('center')->setVertical('center');
          $ps->setCellValue('B5', 'GRINDER (1.8 - 4 mm)')->getStyle('B5')->getAlignment()->setHorizontal('center')->setVertical('center');
          $ps->setCellValue('B7', 'GPH 1')->getStyle('B7')->getAlignment()->setHorizontal('center')->setVertical('center');
          $ps->setCellValue('B33', 'LINE HIJAU BELT PRESS II')->getStyle('B33')->getAlignment()->setHorizontal('center')->setVertical('center');
          $ps->setCellValue('B34', 'Spray water SB07')->getStyle('B34')->getAlignment()->setHorizontal('center')->setVertical('center')->setWrapText(true);

          $ps->setCellValue('C1', 'PT. PULAU SAMBU')->getStyle('C1')->getAlignment()->setHorizontal('center')->setVertical('center');
          $ps->setCellValue('C3', 'MONITORING OPERASIONAL MESIN')->getStyle('C3')->getAlignment()->setHorizontal('center')->setVertical('center');
          $ps->setCellValue('C7', 'GPH 2')->getStyle('C7')->getAlignment()->setHorizontal('center')->setVertical('center');
          $ps->setCellValue('C36', 'GPH 6')->getStyle('C36')->getAlignment()->setHorizontal('center')->setVertical('center');
          $ps->setCellValue('C34', 'GRINDER (1.8 - 4 mm)')->getStyle('C34')->getAlignment()->setHorizontal('center')->setVertical('center');
          $ps->setCellValue('C62', '-  : Tidak ada spray water')->getStyle('C62')->getAlignment()->setVertical('center');
          $ps->setCellValue('C63', '✓ : Ada spray water')->getStyle('C63')->getAlignment()->setVertical('center');

          $ps->setCellValue('D7', 'GPH 3')->getStyle('D7')->getAlignment()->setHorizontal('center')->setVertical('center');
          $ps->setCellValue('D36', 'GPH 7')->getStyle('D36')->getAlignment()->setHorizontal('center')->setVertical('center');

          $ps->setCellValue('E7', 'GPH 4')->getStyle('E7')->getAlignment()->setHorizontal('center')->setVertical('center');
          $ps->setCellValue('E36', 'GPH 8')->getStyle('E36')->getAlignment()->setHorizontal('center')->setVertical('center');

          $ps->setCellValue('F7', 'GPH 5')->getStyle('F7')->getAlignment()->setHorizontal('center')->setVertical('center');
          $ps->setCellValue('F36', 'GPH 9')->getStyle('F36')->getAlignment()->setHorizontal('center')->setVertical('center');

          $ps->setCellValue('G5', 'SETTING ROLLER FEEDING 2 (1 - 5 cm) :')->getStyle('G5')->getAlignment()->setVertical('center');
          $ps->setCellValue('G6', 'Regulator 1 Max 6 Bar')->getStyle('G6')->getAlignment()->setHorizontal('center')->setVertical('center')->setWrapText(true);
          $ps->setCellValue('G34', 'SETTING ROLLER FEEDING 2 (1 - 5 cm) :')->getStyle('G34')->getAlignment()->setVertical('center');
          $ps->setCellValue('G35', 'Regulator 1 Max 6 Bar')->getStyle('G35')->getAlignment()->setHorizontal('center')->setVertical('center')->setWrapText(true);
          $ps->setCellValue('G64', 'FRM-FSS-181-16')->getStyle('G64')->getAlignment()->setHorizontal('right')->setVertical('top');

          $ps->setCellValue('H6', 'Regulator 2 Max 6 Bar')->getStyle('H6')->getAlignment()->setHorizontal('center')->setVertical('center')->setWrapText(true);
          $ps->setCellValue('H35', 'Regulator 2 Max 6 Bar')->getStyle('H35')->getAlignment()->setHorizontal('center')->setVertical('center')->setWrapText(true);

          $ps->setCellValue('I6', 'Regulator 3 Max 1-3 Bar')->getStyle('I6')->getAlignment()->setHorizontal('center')->setVertical('center')->setWrapText(true);
          $ps->setCellValue('I35', 'Regulator 3 Max 1-3 Bar')->getStyle('I35')->getAlignment()->setHorizontal('center')->setVertical('center')->setWrapText(true);

          $ps->setCellValue('J6', 'Regulator 4 Max 5 Bar')->getStyle('J6')->getAlignment()->setHorizontal('center')->setVertical('center')->setWrapText(true);
          $ps->setCellValue('J35', 'Regulator 4 Max 5 Bar')->getStyle('J35')->getAlignment()->setHorizontal('center')->setVertical('center')->setWrapText(true);

          $ps->setCellValue('K3', 'Hal      :')->getStyle('K3')->getAlignment()->setHorizontal('left')->setVertical('center');
          $ps->setCellValue('K6', 'Regulator 5 Max 5 Bar')->getStyle('K6')->getAlignment()->setHorizontal('center')->setVertical('center')->setWrapText(true);
          $ps->setCellValue('K35', 'Regulator 5 Max 5 Bar')->getStyle('K35')->getAlignment()->setHorizontal('center')->setVertical('center')->setWrapText(true);

          $ps->setCellValue('L6', 'Main Motor Rpm 1 - 50Hz')->getStyle('L6')->getAlignment()->setHorizontal('center')->setVertical('center')->setWrapText(true);
          $ps->setCellValue('L35', 'Main Motor Rpm 1 - 50Hz')->getStyle('L35')->getAlignment()->setHorizontal('center')->setVertical('center')->setWrapText(true);

          $spreadsheet->setActiveSheetIndex(0)
               ->setCellValue('K1', 'Doc     : ' . $data['momitoringmom'][0]['doc'])
               ->setCellValue('K2', 'Tgl       : ' . $data['momitoringmom'][0]['date']);

          $a = count($data['momitoringmom']);
          for ($i = 0; $i < $a; $i++) {
               $dt = $data['momitoringmom'];

               $kolom_bp1 = 8;
               $kolom_bp2 = 37;
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

                         // ->setCellValue('B' . $kolom_bp2, $d['sprayWater'])

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
                    if ($d['sprayWater'] == 1) {
                         $spreadsheet->setActiveSheetIndex(0)->setCellValue('B' . $kolom_bp2, '✓');
                    } else {
                         $spreadsheet->setActiveSheetIndex(0)->setCellValue('B' . $kolom_bp2, '-');
                    }
                    $kolom_bp1++;
                    $kolom_bp2++;
               }
          }

          $writer = new Xlsx($spreadsheet);
          $filename = 'Laporan-' . $data['momitoringmom'][0]['doc'] . '-' . $data['momitoringmom'][0]['date'] . '-' . time();

          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
          header('Cache-Control: max-age=0');

          $writer->save('php://output');
     }

     public function laporanPDF($id_header)
     {
          $data['title'] = 'Detail MOM';
          $data['user'] = $this->dashboard_model->getSession();
          $dt['momitoringmom'] = $this->dashboard_model->getDetail($id_header);

          $this->load->library('pdfgenerator');
          $html = $this->load->view('dashboard/table_report', $dt, true);
          $filename = 'Laporan-' . $dt['momitoringmom'][0]['doc'] . time();
          $this->pdfgenerator->generate($html, $filename, true, 'A3', 'portrait');
     }

     public function laporanFPDF($id_header)
     {
          $data['title'] = 'Detail MOM';
          $data['user'] = $this->dashboard_model->getSession();
          $dt['momitoringmom'] = $this->dashboard_model->getDetail($id_header);

          $pdf = new FPDF('p', 'mm', 'A4');
          // membuat halaman baru
          $pdf->AddPage();
          $pdf->SetFont('Arial', 'B', 12);
          $pdf->Cell(25, 8, '', 1, 0, 'C');
          $pdf->Image('.\assets\img\logoPS.jpg', 18, 10.5, 8);
          $pdf->Cell(130, 8, 'PT. PULAU SAMBU', 1, 0, 'C');
          $pdf->SetFont('Arial', 'B', 8);
          $pdf->Cell(35, 4, 'Dok : ' . $dt['momitoringmom'][0]['doc'], 1, 10);
          $pdf->Cell(35, 4, 'Tgl  : ' . $dt['momitoringmom'][0]['date'], 1, 1);
          $pdf->Cell(25, 4, 'JUDUL', 1, 0, 'C');
          $pdf->Cell(130, 4, 'MONITORING OPERASIONAL MESIN', 1, 0, 'C');
          $pdf->Cell(35, 4, 'Hal  :', 1, 1);

          $pdf->Cell(15, 16, 'Jam', 1, 0, 'C');
          $pdf->Cell(175, 4, 'LINE HIJAU BELT PRESS I', 1, 10, 'C');
          $pdf->Cell(55, 8, 'GRINDER (1.8 - 4 mm)', 1, 0, 'C');
          $pdf->Cell(120, 4, 'SETTING ROLLER FEEDING 2 (1 - 5 mm)', 1, 1, 'L');
          $pdf->SetY(34);
          $pdf->SetX(25);
          $pdf->Cell(11, 4, 'GPH 1', 1, 0, 'C');
          $pdf->Cell(11, 4, 'GPH 2', 1, 0, 'C');
          $pdf->Cell(11, 4, 'GPH 3', 1, 0, 'C');
          $pdf->Cell(11, 4, 'GPH 4', 1, 0, 'C');
          $pdf->Cell(11, 4, 'GPH 5', 1, 0, 'C');
          $pdf->SetY(30);
          $pdf->SetX(80);
          $pdf->MultiCell(20, 4, 'Regulator 1 Max 6 Bar', 1, 'C', false);
          $pdf->SetY(30);
          $pdf->SetX(100);
          $pdf->MultiCell(20, 4, 'Regulator 2 Max 6 Bar', 1, 'C', false);
          $pdf->SetY(30);
          $pdf->SetX(120);
          $pdf->MultiCell(20, 4, 'Regulator 3 Max 1-3 Bar', 1, 'C', false);
          $pdf->SetY(30);
          $pdf->SetX(140);
          $pdf->MultiCell(20, 4, 'Regulator 4 Max 5 Bar', 1, 'C', false);
          $pdf->SetY(30);
          $pdf->SetX(160);
          $pdf->MultiCell(20, 4, 'Regulator 5 Max 5 Bar', 1, 'C', false);
          $pdf->SetY(30);
          $pdf->SetX(180);
          $pdf->MultiCell(20, 4, 'Main Motor Rpm 1-50 Hz', 1, 'C', false);

          $setY = 42;
          $pdf->SetFont('Arial', '', 8);

          foreach ($dt['momitoringmom'] as $mm) {
               $pdf->Cell(15, 4, $mm['jam'], 1, 0, 'C');
               $pdf->Cell(11, 4, $mm['gph1'], 1, 0, 'C');
               $pdf->Cell(11, 4, $mm['gph2'], 1, 0, 'C');
               $pdf->Cell(11, 4, $mm['gph3'], 1, 0, 'C');
               $pdf->Cell(11, 4, $mm['gph4'], 1, 0, 'C');
               $pdf->Cell(11, 4, $mm['gph5'], 1, 0, 'C');
               $pdf->Cell(20, 4, $mm['regulator1_bp1'], 1, 0, 'C');
               $pdf->Cell(20, 4, $mm['regulator2_bp1'], 1, 0, 'C');
               $pdf->Cell(20, 4, $mm['regulator3_bp1'], 1, 0, 'C');
               $pdf->Cell(20, 4, $mm['regulator4_bp1'], 1, 0, 'C');
               $pdf->Cell(20, 4, $mm['regulator5_bp1'], 1, 0, 'C');
               $pdf->Cell(20, 4, $mm['mainMotor_bp1'], 1, 1, 'C');
          }

          $a = count($dt['momitoringmom']);
          $b = 26 - $a;
          $setYy = $setY + (4 * $a);

          for ($i = 0; $i < $b; $i++) {
               $pdf->Cell(15, 4, '', 1, 0, 'C');
               $pdf->Cell(11, 4, '', 1, 0, 'C');
               $pdf->Cell(11, 4, '', 1, 0, 'C');
               $pdf->Cell(11, 4, '', 1, 0, 'C');
               $pdf->Cell(11, 4, '', 1, 0, 'C');
               $pdf->Cell(11, 4, '', 1, 0, 'C');
               $pdf->Cell(20, 4, '', 1, 0, 'C');
               $pdf->Cell(20, 4, '', 1, 0, 'C');
               $pdf->Cell(20, 4, '', 1, 0, 'C');
               $pdf->Cell(20, 4, '', 1, 0, 'C');
               $pdf->Cell(20, 4, '', 1, 0, 'C');
               $pdf->Cell(20, 4, '', 1, 0, 'C');
               $pdf->SetY($setYy);
               $setYy++;
               $setYy++;
               $setYy++;
               $setYy++;
          }

          $pdf->SetFont('Arial', 'B', 8);
          $pdf->Cell(15, 16, 'Jam', 1, 0, 'C');
          $pdf->Cell(175, 4, 'LINE HIJAU BELT PRESS II', 1, 10, 'C');
          $pdf->MultiCell(11, 4, 'Spray Water SB07', 1, 'C', false);
          $pdf->SetY(146);
          $pdf->SetX(36);
          $pdf->Cell(44, 8, 'GRINDER (1 - 3.5 mm)', 1, 0, 'C');
          $pdf->Cell(120, 4, 'SETTING ROLLER FEEDING 2 (1 - 5 mm)', 1, 1, 'L');
          $pdf->SetY(154);
          $pdf->SetX(36);
          $pdf->Cell(11, 4, 'GPH 6', 1, 0, 'C');
          $pdf->Cell(11, 4, 'GPH 7', 1, 0, 'C');
          $pdf->Cell(11, 4, 'GPH 8', 1, 0, 'C');
          $pdf->Cell(11, 4, 'GPH 9', 1, 0, 'C');
          $pdf->SetY(150);
          $pdf->SetX(80);
          $pdf->MultiCell(20, 4, 'Regulator 1 Max 6 Bar', 1, 'C', false);
          $pdf->SetY(150);
          $pdf->SetX(100);
          $pdf->MultiCell(20, 4, 'Regulator 2 Max 6 Bar', 1, 'C', false);
          $pdf->SetY(150);
          $pdf->SetX(120);
          $pdf->MultiCell(20, 4, 'Regulator 3 Max 1-3 Bar', 1, 'C', false);
          $pdf->SetY(150);
          $pdf->SetX(140);
          $pdf->MultiCell(20, 4, 'Regulator 4 Max 5 Bar', 1, 'C', false);
          $pdf->SetY(150);
          $pdf->SetX(160);
          $pdf->MultiCell(20, 4, 'Regulator 5 Max 5 Bar', 1, 'C', false);
          $pdf->SetY(150);
          $pdf->SetX(180);
          $pdf->MultiCell(20, 4, 'Main Motor Rpm 1-50 Hz', 1, 'C', false);

          $pdf->SetFont('Arial', '', 8);

          foreach ($dt['momitoringmom'] as $mm) {
               $pdf->Cell(15, 4, $mm['jam'], 1, 0, 'C');
               if ($mm['sprayWater'] == 1) {
                    $pdf->SetFont('ZapfDingbats');
                    $pdf->Cell(11, 4, chr(51), 1, 0, 'C');
               } else {
                    $pdf->SetFont('Arial', '', 8);
                    $pdf->Cell(11, 4, '-', 1, 0, 'C');
               }
               $pdf->SetFont('Arial', '', 8);
               $pdf->Cell(11, 4, $mm['gph6'], 1, 0, 'C');
               $pdf->Cell(11, 4, $mm['gph7'], 1, 0, 'C');
               $pdf->Cell(11, 4, $mm['gph8'], 1, 0, 'C');
               $pdf->Cell(11, 4, $mm['gph9'], 1, 0, 'C');
               $pdf->Cell(20, 4, $mm['regulator1_bp2'], 1, 0, 'C');
               $pdf->Cell(20, 4, $mm['regulator2_bp2'], 1, 0, 'C');
               $pdf->Cell(20, 4, $mm['regulator3_bp2'], 1, 0, 'C');
               $pdf->Cell(20, 4, $mm['regulator4_bp2'], 1, 0, 'C');
               $pdf->Cell(20, 4, $mm['regulator5_bp2'], 1, 0, 'C');
               $pdf->Cell(20, 4, $mm['mainMotor_bp2'], 1, 1, 'C');
          }
          $setY = 162;
          $setYy = $setY + (4 * $a);

          for ($i = 0; $i < $b; $i++) {
               $pdf->Cell(15, 4, '', 1, 0, 'C');
               $pdf->Cell(11, 4, '', 1, 0, 'C');
               $pdf->Cell(11, 4, '', 1, 0, 'C');
               $pdf->Cell(11, 4, '', 1, 0, 'C');
               $pdf->Cell(11, 4, '', 1, 0, 'C');
               $pdf->Cell(11, 4, '', 1, 0, 'C');
               $pdf->Cell(20, 4, '', 1, 0, 'C');
               $pdf->Cell(20, 4, '', 1, 0, 'C');
               $pdf->Cell(20, 4, '', 1, 0, 'C');
               $pdf->Cell(20, 4, '', 1, 0, 'C');
               $pdf->Cell(20, 4, '', 1, 0, 'C');
               $pdf->Cell(20, 4, '', 1, 0, 'C');
               $pdf->SetY($setYy);
               $setYy++;
               $setYy++;
               $setYy++;
               $setYy++;
          }

          $pdf->SetFont('Arial', 'BU', 8);
          $pdf->MultiCell(190, 8, '', 1, 'L', false);
          $pdf->SetY($setYy - 4);
          $pdf->Cell(26, 4, 'KETERANGAN', 0, 0, 'L');
          $pdf->SetX(35);
          $pdf->SetFont('Arial', 'B', 8);
          $pdf->Cell(5, 4, '-', 0, 0, 'L');
          $pdf->Cell(40, 4, ': Tidak ada spray water', 0, 0, 'L');
          $pdf->SetY($setYy);
          $pdf->SetX(35);
          $pdf->SetFont('ZapfDingbats');
          $pdf->Cell(5, 4, chr(51), 0, 0, 'L');
          $pdf->SetFont('Arial', 'B', 8);
          $pdf->Cell(40, 4, ': Ada spray water', 0, 0, 'L');
          $pdf->SetX(7);
          $pdf->SetY(270);
          $pdf->Cell(190, 4, 'Mulai Berlaku : 16.05.2019', 1, 0, 'L');
          $pdf->SetX(7);
          $pdf->SetY(270);
          $pdf->Cell(190, 4, 'FRM-FSS-181-16', 0, 0, 'R');


          $pdf->Output();
     }
}
