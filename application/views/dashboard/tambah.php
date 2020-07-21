<!-- <?php var_dump($header); ?> -->

<!-- Begin Page Content -->
<div class="container-fluid">
     <div class="card">
          <div class="card-header">
               <!-- Page Heading -->
               <h1 class="h3 mb-4 text-gray-800">Tambah Data Monitoring Operasional Mesin</h1>
          </div>
          <div class="card-body">

               <form action="" method="POST">
                    <div class="form-group">
                         <input type="hidden" id="id_header" name="id_header" value="<?= $header['id_header']; ?>">
                         <div class="form-group row col-5">
                              <label for="doc" class="col-sm col-form-label">Dokumen</label>
                              <div class="col-sm">
                                   <input type="text" readonly class="form-control" id="doc" name="doc" value="<?= $header['doc']; ?>">
                              </div>
                         </div>
                         <div class="form-group row col-5">
                              <label for="date" class="col-sm col-form-label">Tanggal</label>
                              <div class="col-sm">
                                   <input type="text" readonly class="form-control" id="date" name="date" value="<?= $header['date']; ?>">
                              </div>
                         </div>

                         <div class="form-group row col-5">
                              <label for="jam" class="col-sm col-form-label">Jam</label>
                              <div class="col-sm">
                                   <input type="time" class="form-control" id="jam" name="jam" value="<?= set_value('jam'); ?>">
                                   <?= form_error('jam', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                         </div>
                    </div>
                    <hr>
                    <h5 class="h5 mb-4 text-gray-800">Belt Press I</h5>
                    <div class="form-group row">
                         <div class="form-group col-sm">
                              <label for="gph1">GPH 1</label>
                              <input type="text" class="form-control form-control-sm" id="gph1" name="gph1" value="<?= set_value('gph1'); ?>">
                              <?= form_error('gph1', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="form-group col-sm">
                              <label for="gph2">GPH 2</label>
                              <input type="text" class="form-control form-control-sm" id="gph2" name="gph2" value="<?= set_value('gph2'); ?>">
                              <?= form_error('gph2', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="form-group col-sm">
                              <label for="gph3">GPH 3</label>
                              <input type="text" class="form-control form-control-sm" id="gph3" name="gph3" value="<?= set_value('gph3'); ?>">
                              <?= form_error('gph3', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="form-group col-sm">
                              <label for="gph4">GPH 4</label>
                              <input type="text" class="form-control form-control-sm" id="gph4" name="gph4" value="<?= set_value('gph4'); ?>">
                              <?= form_error('gph4', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="form-group col-sm">
                              <label for="gph5">GPH 5</label>
                              <input type="text" class="form-control form-control-sm" id="gph5" name="gph5" value="<?= set_value('gph5'); ?>">
                              <?= form_error('gph5', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                    </div>
                    <div class="form-group row">
                         <div class="form-group col-sm">
                              <label for="regulator1_bp1">Regulator 1</label>
                              <input type="text" class="form-control form-control-sm" id="regulator1_bp1" name="regulator1_bp1" value="<?= set_value('regulator1_bp1'); ?>">
                              <?= form_error('regulator1_bp1', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="form-group col-sm">
                              <label for="regulator2_bp1">Regulator 2</label>
                              <input type="text" class="form-control form-control-sm" id="regulator2_bp1" name="regulator2_bp1" value="<?= set_value('regulator2_bp1'); ?>">
                              <?= form_error('regulator2_bp1', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="form-group col-sm">
                              <label for="regulator3_bp1">Regulator 3</label>
                              <input type="text" class="form-control form-control-sm" id="regulator3_bp1" name="regulator3_bp1" value="<?= set_value('regulator3_bp1'); ?>">
                              <?= form_error('regulator3_bp1', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="form-group col-sm">
                              <label for="regulator4_bp1">Regulator 4</label>
                              <input type="text" class="form-control form-control-sm" id="regulator4_bp1" name="regulator4_bp1" value="<?= set_value('regulator4_bp1'); ?>">
                              <?= form_error('regulator4_bp1', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="form-group col-sm">
                              <label for="regulator5_bp1">Regulator 5</label>
                              <input type="text" class="form-control form-control-sm" id="regulator5_bp1" name="regulator5_bp1" value="<?= set_value('regulator5_bp1'); ?>">
                              <?= form_error('regulator5_bp1', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="form-group col-sm">
                              <label for="mainMotor_bp1">Main Motor</label>
                              <input type="text" class="form-control form-control-sm" id="mainMotor_bp1" name="mainMotor_bp1" value="<?= set_value('mainMotor_bp1'); ?>">
                              <?= form_error('mainMotor_bp1', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                    </div>
                    <hr>
                    <h5 class="h5 mb-4 text-gray-800">Belt Press 2</h5>
                    <div class="form-group row">
                         <div class="form-group col-sm">
                              <label for="sprayWater">Spray Water</label>
                              <select class="form-control form-control-sm" id="sprayWater" name="sprayWater">
                                   <option value="">Pilih ...</option>
                                   <option value="1">Ada</option>
                                   <option value="0">Tidak Ada</option>
                              </select>
                              <?= form_error('sprayWater', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="form-group col-sm">
                              <label for="gph6">GPH 6</label>
                              <input type="text" class="form-control form-control-sm" id="gph6" name="gph6" value="<?= set_value('gph6'); ?>">
                              <?= form_error('gph6', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="form-group col-sm">
                              <label for="gph7">GPH 7</label>
                              <input type="text" class="form-control form-control-sm" id="gph7" name="gph7" value="<?= set_value('gph7'); ?>">
                              <?= form_error('gph7', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="form-group col-sm">
                              <label for="gph8">GPH 8</label>
                              <input type="text" class="form-control form-control-sm" id="gph8" name="gph8" value="<?= set_value('gph8'); ?>">
                              <?= form_error('gph8', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class="form-group col-sm">
                              <label for="gph9">GPH 9</label>
                              <input type="text" class="form-control form-control-sm" id="gph9" name="gph9" value="<?= set_value('gph9'); ?>">
                              <?= form_error('gph9', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                    </div>
                    <div class="form-group row">
                         <div class="form-group col-sm">
                              <label for="regulator1_bp2">Regulator 1</label>
                              <input type="text" class="form-control form-control-sm" id="regulator1_bp2" name="regulator1_bp2" value="<?= set_value('regulator1_bp2'); ?>">
                              <?= form_error('regulator1_bp2', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class=" form-group col-sm">
                              <label for="regulator2_bp2">Regulator 2</label>
                              <input type="text" class="form-control form-control-sm" id="regulator2_bp2" name="regulator2_bp2" value="<?= set_value('regulator2_bp2'); ?>">
                              <?= form_error('regulator2_bp2', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class=" form-group col-sm">
                              <label for="regulator3_bp2">Regulator 3</label>
                              <input type="text" class="form-control form-control-sm" id="regulator3_bp2" name="regulator3_bp2" value="<?= set_value('regulator3_bp2'); ?>">
                              <?= form_error('regulator3_bp2', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class=" form-group col-sm">
                              <label for="regulator4_bp2">Regulator 4</label>
                              <input type="text" class="form-control form-control-sm" id="regulator4_bp2" name="regulator4_bp2" value="<?= set_value('regulator4_bp2'); ?>">
                              <?= form_error('regulator4_bp2', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class=" form-group col-sm">
                              <label for="regulator5_bp2">Regulator 5</label>
                              <input type="text" class="form-control form-control-sm" id="regulator5_bp2" name="regulator5_bp2" value="<?= set_value('regulator5_bp2'); ?>">
                              <?= form_error('regulator5_bp2', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                         <div class=" form-group col-sm">
                              <label for="mainMotor_bp2">Main Motor</label>
                              <input type="text" class="form-control form-control-sm" id="mainMotor_bp2" name="mainMotor_bp2" value="<?= set_value('mainMotor_bp2'); ?>">
                              <?= form_error('mainMotor_bp2', '<small class="text-danger pl-3">', '</small>'); ?>
                         </div>
                    </div>
                    <a href=" <?= base_url('dashboard') ?>" class="btn btn-outline-secondary">Kembali</a>
                    <input type="submit" name="submit" class="btn btn-primary btn-xm float-right" value="Simpan">

               </form>

          </div>
     </div>
     <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->