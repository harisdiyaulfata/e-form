<?php
define('FPDF_FONTPATH', 'font/');
require('./application/third_party/fpdf/fpdf.php');

class reportProduct extends FPDF
{
     var $widths;
     var $aligns;

     function SetWidths($w)
     {
          $this->widths = $w;
     }

     function SetAligns($a)
     {
          $this->aligns = $a;
     }

     function Row($data)
     {
          $nb = 0;
          for ($i = 0; $i < count($data); $i++)
               $nb = max($nb, $this->NbLines($this->widths[$i], $data[$i]));
          $h = (4 * $nb);
          $this->CheckPageBreak($h);
          for ($i = 0; $i < count($data); $i++) {
               $w = $this->widths[$i];
               $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
               $x = $this->GetX();
               $y = $this->GetY();
               $this->Rect($x, $y, $w, $h);
               $this->MultiCell($w, 4, $data[$i], 0, $a);
               $this->SetXY($x + $w, $y);
          }
          $this->Ln($h);
     }

     function CheckPageBreak($h)
     {
          if ($this->GetY() + $h > $this->PageBreakTrigger)
               $this->AddPage($this->CurOrientation);
     }

     function NbLines($w, $txt)
     {
          $cw = &$this->CurrentFont['cw'];
          if ($w == 0)
               $w = $this->w - $this->rMargin - $this->x;
          $wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
          $s = str_replace("r", '', $txt);
          $nb = strlen($s);
          if ($nb > 0 and $s[$nb - 1] == "n")
               $nb--;
          $sep = -1;
          $i = 0;
          $j = 0;
          $l = 0;
          $nl = 1;
          while ($i < $nb) {
               $c = $s[$i];
               if ($c == "n") {
                    $i++;
                    $sep = -1;
                    $j = $i;
                    $l = 0;
                    $nl++;
                    continue;
               }
               if ($c == ' ')
                    $sep = $i;
               $l += $cw[$c];
               if ($l > $wmax) {
                    if ($sep == -1) {
                         if ($i == $j)
                              $i++;
                    } else
                         $i = $sep + 1;
                    $sep = -1;
                    $j = $i;
                    $l = 0;
                    $nl++;
               } else
                    $i++;
          }
          return $nl;
     }

     // Page header
     function Header()
     {
          $this->SetFont('Arial', 'B', 6);
          $this->Cell(25, 10, '', 1, 0, 'C');
          $this->Image('application/controllers/PSG.png', 18, 10, 10);
          $this->Cell(120, 10, 'PT. PULAU SAMBU', 1, 0, 'C');
          $this->Cell(45, 5, 'Dok : MOM/DRP/20', 1, 10);
          $this->Cell(45, 5, 'Tgl :', 1, 1);
          $this->Cell(25, 5, 'JUDUL', 1, 0, 'C');
          $this->Cell(120, 5, 'MONITORING OPERASIONAL MESIN', 1, 0, 'C');
          $this->Cell(45, 5, 'Hal :', 1, 1);
          $this->Cell(190, 5, '', 1, 1);
          $this->Cell(10, 20, 'Jam', 1, 0, 'C');
          $this->Cell(180, 5, 'LINE HIJAU BELT PRESS I', 1, 10, 'C');
          $this->Cell(50, 10, 'GRINDER (1.8 - 4 mm)', 1, 0, 'C');
          $this->Cell(130, 5, 'SETTING ROLLER FEEDING 2 (1 - 5 mm)', 1, 1, 'C');
          $this->SetY(45);
          $this->SetX(20);
          $this->Cell(10, 5, 'GPB 1', 1, 0, 'C');
          $this->Cell(10, 5, 'GPB 2', 1, 0, 'C');
          $this->Cell(10, 5, 'GPB 3', 1, 0, 'C');
          $this->Cell(10, 5, 'GPB 4', 1, 0, 'C');
          $this->Cell(10, 5, 'GPB 5', 1, 0, 'C');
          $this->SetY(40);
          $this->SetX(70);
          $this->Cell(21, 10, 'Regulator 1', 1, 0, 'C');
          $this->Cell(21, 10, 'Regulator 2', 1, 0, 'C');
          $this->Cell(22, 10, 'Regulator 3', 1, 0, 'C');
          $this->Cell(22, 10, 'Regulator 4', 1, 0, 'C');
          $this->Cell(22, 10, 'Regulator 5', 1, 0, 'C');
          $this->Cell(22, 10, 'Main Motor', 1, 1, 'C');
     }

     // Page footer
     function Footer()
     {
          // Position at 1.5 cm from bottom
          $this->SetY(-15);
          // Arial italic 8
          $this->SetFont('Arial', 'I', 8);
          // Page number
          $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
     }

     public function setKriteria($i)
     {
          $this->kriteria = $i;
     }

     public function getKriteria()
     {
          return $this->kriteria;
     }

     public function setNama($n)
     {
          $this->nama = $n;
     }

     public function getNama()
     {
          return $this->nama;
     }

     public function setDataset($n)
     {
          $this->dataset = $n;
     }

     public function getDataset()
     {
          return $this->dataset;
     }
}
