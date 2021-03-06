<!-- <?php var_dump($header); ?> -->

<!-- Begin Page Content -->
<div class="container-fluid">
     <div class="card">
          <div class="card-header">
               <!-- Page Heading -->
               <h1 class="h3 mb-4 text-gray-800">Detail Data Monitoring Operasional Mesin</h1>
          </div>
          <div class="card-body">
               <?= form_error('header', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
               <?= $this->session->flashdata('message'); ?>

               <form action="" method="POST">
                    <div class="form-group row">
                         <div class="form-group row col-sm-8">
                              <label for="doc" class="col-sm-2 col-form-label">Dokumen</label>
                              <div class="col-sm">
                                   <input type="text" readonly class="form-control" id="doc" name="doc" value="<?= $header['doc']; ?>">
                              </div>
                              <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
                              <div class="col-sm">
                                   <input type="text" readonly class="form-control" id="date" name="date" value="<?= $header['date']; ?>">
                              </div>
                         </div>

                    </div>
               </form>
               <hr>

               <a href="<?= base_url('dashboard/tambah/' . $header['id_header']) ?>" class="btn btn-success mb-3">Add New</a>
               <a href="<?= base_url('dashboard/laporanExcel/' . $header['id_header']) ?>" class="btn btn-outline-success mb-3" name="id_header">Excel</a>
               <a href="<?= base_url('dashboard/laporanPDF/' . $header['id_header']) ?>" class="btn btn-outline-primary mb-3" name="id_header">PDF</a>
               <a href="<?= base_url('dashboard/laporanFPDF/' . $header['id_header']) ?>" class="btn btn-outline-primary mb-3" name="id_header">FPDF</a>

               <table class="table">
                    <thead>
                         <tr>
                              <th colspan="13">
                                   LINE HIJAU BELT PRESS I
                              </th>
                         </tr>
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
                              <th scope="col">Action</th>
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
                                   <td>
                                        <a href="<?= base_url('dashboard/edit/' . $mm['id_mom']) ?>" class="badge badge-success" name="id_mom">Edit</a>
                                        <a href="<?= base_url('dashboard/delete/' . $mm['id_mom']) ?>" class="badge badge-danger" name="id_mom">Hapus</a>
                                   </td>
                              </tr>
                         <?php endforeach; ?>
                    </tbody>
                    <thead>
                         <tr>
                              <th colspan="13">
                                   LINE HIJAU BELT PRESS II
                              </th>
                         </tr>
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
                                   <td>
                                        <?php
                                        if ($mm['sprayWater'] == 1) {
                                             echo "✓";
                                        } else {
                                             echo "-";
                                        }
                                        ?>
                                   </td>
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