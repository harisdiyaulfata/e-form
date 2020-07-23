<!DOCTYPE html>
<html>

<head>
     <title></title>
     <style type="text/css">
          /* * {
               margin: 1px;
          } */

          table {
               border-collapse: collapse;
          }

          th,
          td {
               border: 1px solid;
               padding: 4px 8px;
               font-size: 9;
          }
     </style>
</head>

<body>
     <!-- In production server. If you choose this, then comment the local server and uncomment this one-->
     <!-- <img src="<?php // echo $_SERVER['DOCUMENT_ROOT']."/media/dist/img/no-signal.png"; 
                    ?>" alt=""> -->
     <!-- In your local server -->
     <!-- <img src="<?php echo $_SERVER['DOCUMENT_ROOT'] . "/ci-dompdf8/media/dist/img/no-signal.png"; ?>" alt=""> -->
     <table>
          <thead>
               <tr>
                    <th colspan="2" rowspan="2">
                         <img src="<?= 'assets\img\logoPS.jpg'; ?>" style="height: 45px; width: 45px;">
                    </th>
                    <th colspan=" 8" rowspan="2" style="font-size: large;">
                         PT. PULAU SAMBU
                    </th>
                    <th colspan="2" style="text-align:left;">
                         Dok : <?= $momitoringmom[0]['doc']; ?>
                    </th>
               </tr>
               <tr>
                    <th colspan="2" style="text-align:left;">
                         Tgl : <?= $momitoringmom[0]['date']; ?>
                    </th>
               </tr>
               <tr>
                    <th colspan="2">
                         JUDUL
                    </th>
                    <th colspan="8">
                         MONITORING OPERASIONAL MESIN
                    </th>
                    <th colspan="2" style="text-align:left;">
                         Hal :
                    </th>
               </tr>
               <tr>
                    <th rowspan="4" width="30px">
                         Jam
                    </th>
                    <th colspan="11">
                         LINE HIJAU BELT PRESS I
                    </th>
               </tr>
               <tr>
                    <th colspan="5" rowspan="2">
                         GRINDER (1.8 - 4 mm)
                    </th>
                    <th colspan="6" style="text-align:left;">
                         SETTING ROLLER FEEDING 2 (1 -5 cm) :
                    </th>
               </tr>
               <tr>
                    <th rowspan="2" width="80px">
                         Regulator 1 Max 6 Bar
                    </th>
                    <th rowspan="2" width="80px">
                         Regulator 2 Max 6 Bar
                    </th>
                    <th rowspan="2" width="80px">
                         Regulator 3 Max 1-3 Bar
                    </th>
                    <th rowspan="2" width="80px">
                         Regulator 4 Max 5 Bar
                    </th>
                    <th rowspan="2" width="80px">
                         Regulator 5 Max 5 Bar
                    </th>
                    <th rowspan="2" width="80px">
                         Main Motor Rpm 1-50 Hz
                    </th>
               </tr>
               <tr>
                    <th width="50px">
                         GPH 1
                    </th>
                    <th width="50px">
                         GPH 2
                    </th>
                    <th width="50px">
                         GPH 3
                    </th>
                    <th width="50px">
                         GPH 4
                    </th>
                    <th width="50px">
                         GPH 5
                    </th>
               </tr>
          </thead>
          <tbody>
               <?php foreach ($momitoringmom as $mm) : ?>
                    <tr>
                         <td style="text-align:center;">
                              <?= $mm['jam']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['gph1']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['gph2']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['gph3']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['gph4']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['gph5']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['regulator1_bp1']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['regulator2_bp1']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['regulator3_bp1']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['regulator4_bp1']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['regulator5_bp1']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['mainMotor_bp1']; ?>
                         </td>
                    </tr>
               <?php endforeach; ?>
          </tbody>
          <thead>
               <tr>
                    <th rowspan="4">
                         Jam
                    </th>
                    <th colspan="11">
                         LINE HIJAU BELT PRESS II
                    </th>
               </tr>
               <tr>
                    <th rowspan="3">
                         Spray Water SB07
                    </th>
                    <th colspan="4" rowspan="2">
                         GRINDER (1 - 3.5 mm)
                    </th>
                    <th colspan="6" style="text-align:left;">
                         SETTING ROLLER FEEDING 2 (1 -5 cm) :
                    </th>
               </tr>
               <tr>
                    <th rowspan="2">
                         Regulator 1 Max 6 Bar
                    </th>
                    <th rowspan="2">
                         Regulator 2 Max 6 Bar
                    </th>
                    <th rowspan="2">
                         Regulator 3 Max 1-3 Bar
                    </th>
                    <th rowspan="2">
                         Regulator 4 Max 5 Bar
                    </th>
                    <th rowspan="2">
                         Regulator 5 Max 5 Bar
                    </th>
                    <th rowspan="2">
                         Main Motor Rpm 1-50 Hz
                    </th>
               </tr>
               <tr>
                    <th>
                         GPH 6
                    </th>
                    <th>
                         GPH 7
                    </th>
                    <th>
                         GPH 8
                    </th>
                    <th>
                         GPH 9
                    </th>
               </tr>
          </thead>
          <tbody>
               <?php foreach ($momitoringmom as $mm) : ?>
                    <tr>
                         <td style="text-align:center;">
                              <?= $mm['jam']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['sprayWater']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['gph6']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['gph7']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['gph8']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['gph9']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['regulator1_bp2']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['regulator2_bp2']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['regulator3_bp2']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['regulator4_bp2']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['regulator5_bp2']; ?>
                         </td>
                         <td style="text-align:center;">
                              <?= $mm['mainMotor_bp2']; ?>
                         </td>
                    </tr>
               <?php endforeach; ?>
               <tr>
                    <th colspan="2" rowspan="2" style="border-right: hidden; vertical-align: top; text-decoration: underline;">
                         KETERANGAN
                    </th>
                    <td colspan=" 10" style="border-bottom: hidden; border-left: hidden;">
                         - : Tidak ada spray water
                    </td>
               </tr>
               <tr>
                    <td colspan="10" style="border-top: hidden; border-left: hidden;">
                         v : Ada spray water
                    </td>
               </tr>
               <tr>
                    <th colspan="5" style="text-align: left; border-right: hidden;">
                         Mulai Berlaku : 16.05.2019
                    </th>
                    <th colspan="7" style="text-align: right; border-left: hidden;">
                         FRM-FSS-181-16
                    </th>
               </tr>
          </tbody>
     </table>
</body>

</html>