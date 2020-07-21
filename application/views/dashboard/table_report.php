<!DOCTYPE html>
<html>

<head>
     <title>Report Table</title>
     <style type="text/css">
          #outtable {
               padding: 20px;
               border: 1px solid #e3e3e3;
               width: 600px;
               border-radius: 5px;
          }

          .short {
               width: 50px;
          }

          .normal {
               width: 150px;
          }

          table {
               border-collapse: collapse;
               font-family: arial;
               color: #5E5B5C;
          }

          thead th {
               text-align: left;
               padding: 10px;
          }

          tbody td {
               border-top: 1px solid #e3e3e3;
               padding: 10px;
          }

          tbody tr:nth-child(even) {
               background: #F6F5FA;
          }

          tbody tr:hover {
               background: #EAE9F5
          }
     </style>
</head>

<body>
     <!-- In production server. If you choose this, then comment the local server and uncomment this one-->
     <!-- <img src="<?php // echo $_SERVER['DOCUMENT_ROOT']."/media/dist/img/no-signal.png"; 
                    ?>" alt=""> -->
     <!-- In your local server -->
     <img src="<?php echo $_SERVER['DOCUMENT_ROOT'] . "/ci-dompdf8/media/dist/img/no-signal.png"; ?>" alt="">
     <div id="outtable">
          <form action="" method="POST">
               <div class="form-group row col-sm-9">
                    <label for="doc" class="col-sm-2 col-form-label">Dokumen</label>
                    <div class="col-sm">
                         <input type="text" readonly class="form-control" id="doc" name="doc" value="<?= $momitoringmom[0]['doc']; ?>">
                    </div>
                    <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm">
                         <input type="text" readonly class="form-control" id="date" name="date" value="<?= $momitoringmom[0]['date']; ?>">
                    </div>
               </div>
          </form>
          <hr>
          <h6 class="h5 mb-5 text-gray-800">Belt Press I</h6>
          <table class="table">
               <thead>
                    <tr>
                         <th scope="col">Jam</th>
                         <th scope="col">GPH 1</th>
                         <th scope="col">GPH 2</th>
                         <th scope="col">GPH 3</th>
                         <th scope="col">GPH 4</th>
                         <th scope="col">GPH 5</th>
                         <th scope="col">Regulator 1</th>
                         <th scope="col">Regulator 2</th>
                         <th scope="col">Regulator 3</th>
                         <th scope="col">Regulator 4</th>
                         <th scope="col">Regulator 5</th>
                         <th scope="col">Main Motor</th>
                    </tr>
               </thead>
               <tbody>
                    <?php foreach ($momitoringmom as $mm) : ?>
                         <tr>
                              <th><?= $mm['jam']; ?></th>
                              <td><?= $mm['gph1']; ?></td>
                              <td><?= $mm['gph2']; ?></td>
                              <td><?= $mm['gph3']; ?></td>
                              <td><?= $mm['gph4']; ?></td>
                              <td><?= $mm['gph5']; ?></td>
                              <td><?= $mm['regulator1_bp1']; ?></td>
                              <td><?= $mm['regulator2_bp1']; ?></td>
                              <td><?= $mm['regulator3_bp1']; ?></td>
                              <td><?= $mm['regulator4_bp1']; ?></td>
                              <td><?= $mm['regulator5_bp1']; ?></td>
                              <td><?= $mm['mainMotor_bp1']; ?></td>
                         </tr>
                    <?php endforeach; ?>
               </tbody>
          </table>
          <hr>
          <h6 class="h5 mb-5 text-gray-800">Belt Press II</h6>
          <table class="table">
               <thead>
                    <tr>
                         <th scope="col">Jam</th>
                         <th scope="col">Spray Water</th>
                         <th scope="col">GPH 6</th>
                         <th scope="col">GPH 7</th>
                         <th scope="col">GPH 8</th>
                         <th scope="col">GPH 9</th>
                         <th scope="col">Regulator 1</th>
                         <th scope="col">Regulator 2</th>
                         <th scope="col">Regulator 3</th>
                         <th scope="col">Regulator 4</th>
                         <th scope="col">Regulator 5</th>
                         <th scope="col">Main Motor</th>
                    </tr>
               </thead>
               <tbody>
                    <?php foreach ($momitoringmom as $mm) : ?>
                         <tr>
                              <th><?= $mm['jam']; ?></th>
                              <td><?= $mm['sprayWater']; ?></td>
                              <td><?= $mm['gph6']; ?></td>
                              <td><?= $mm['gph7']; ?></td>
                              <td><?= $mm['gph8']; ?></td>
                              <td><?= $mm['gph9']; ?></td>
                              <td><?= $mm['regulator1_bp2']; ?></td>
                              <td><?= $mm['regulator2_bp2']; ?></td>
                              <td><?= $mm['regulator3_bp2']; ?></td>
                              <td><?= $mm['regulator4_bp2']; ?></td>
                              <td><?= $mm['regulator5_bp2']; ?></td>
                              <td><?= $mm['mainMotor_bp2']; ?></td>
                         </tr>
                    <?php endforeach; ?>
               </tbody>
          </table>
     </div>
</body>

</html>