<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{

     function cetak($id_header)
     {
          $kodebarang = "A001";

          // ambil data dengan memanggil fungsi di model
          $temp_rec = $this->report_model->getDetailReportPDF($id_header);
          $num_rows = $temp_rec->num_rows();

          if ($num_rows > 0) // jika data ada di database
          {
               // memanggil (instantiasi) class reportProduct di file print_rekap_helper.php
               $a = new reportProduct();
               // anda dapat membuat report lainnya dalam satu file print_rekap_helper.php
               // dengan cukup mengubah setKriteria dan membuat kondisi (elseif) di file print_rekap_helper.php
               $a->setKriteria("transaksi");
               // judul report
               $a->setNama("DATA TRANSAKSI UNTUK BARANG " . $kodebarang);
               // buat halaman
               $a->AliasNbPages();
               // Potrait ukuran A4
               $a->AddPage("P", "A4");

               // ambil data dari database
               $data = $temp_rec->row();

               $a->Ln(2); // spasi enter
               $a->SetFont('Arial', 'B', 8); // set font,size,dan properti (B=Bold)
               $a->Cell(0, 4, 'Kode Barang : ' . $data->kodebarang, 0, 1, 'L');
               $a->Cell(0, 4, 'Nama Barang : ' . $data->namabarang, 0, 1, 'L');
               $a->Cell(0, 4, 'Harga Satuan : ' . number_format($data->hargasatuan, "2", ",", "."), 0, 1, 'L');
               $a->Ln(2);

               $a->SetFont('Arial', '', 8);
               // set lebar tiap kolom tabel transaksi
               $a->SetWidths(array(7, 15, 130, 15, 10, 10));
               // set align tiap kolom tabel transaksi
               $a->SetAligns(array("R", "L", "L", "C", "C", "C"));
               $a->SetFont('Arial', 'B', 7);
               $a->Ln(2);
               // set nama header tabel transaksi
               $a->Cell(7, 7, 'No.', 1, 0, 'C');
               $a->Cell(15, 7, 'KODE TRANSAKSI', 1, 0, 'C');
               $a->Cell(5, 7, 'QUANTITY', 1, 0, 'C');
               $a->Cell(15, 7, 'HARGA', 1, 0, 'C');
               $a->Cell(15, 7, 'TANGGAL', 1, 0, 'C');
               $a->Ln(7);

               $a->SetFont('Arial', '', 8);

               $rec = $temp_rec->result();
               $n = 0;
               foreach ($rec as $r) {
                    $n++;
                    $a->Row(array(($n), $r->kodetransaksi, $r->quantity, $r->harga, date("d-m-Y", strtotime($r->tanggal))));
                    $a->Ln(5);
               }

               $a->Output();
          } else // jika data kosong
          {
               redirect('report');
          }

          exit();
     }
}
