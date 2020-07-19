<?php var_dump($header); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
     <div class="card">
          <div class="card-header">
               <!-- Page Heading -->
               <h1 class="h3 mb-4 text-gray-800">Detail Data Monitoring Operasional Mesin</h1>
          </div>
          <div class="card-body">

               <form class="form-inline">
                    <label for="doc" class="my-1 mr-2">Dokumen</label>
                    <div class="col-sm-4">
                         <input type="text" readonly class="form-control" id="doc" name="doc" value="<?= $header['doc']; ?>">
                    </div>

                    <label for="date" class="col-sm-1 col-form-label">Tanggal</label>
                    <div class="col-sm-4">
                         <input type="text" readonly class="form-control" id="date" name="date" value="<?= $header['date']; ?>">
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
     </div>
     <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->