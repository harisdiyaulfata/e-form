<!-- Begin Page Content -->
<div class="container-fluid">
     <div class="card">
          <div class="card-header">
               <!-- Page Heading -->
               <h1 class="h3 mb-4 text-gray-800">Tambah Data Monitoring Operasional Mesin</h1>
          </div>
          <div class="card-body">
               <form method="POST">
                    <div class="form-group">
                         <?php foreach ($momitoringmom as $mm) : ?>
                              <div class="form-group row">
                                   <label for="doc" class="col-sm-1 col-form-label">Dokumen</label>
                                   <div class="col-sm-4">
                                        <input type="text" readonly class="form-control-plaintext" id="doc" name="doc" value="<?= $mm['doc']; ?>">
                                   </div>
                              </div>
                              <div class="form-group row">
                                   <label for="date" class="col-sm-1 col-form-label">Tanggal</label>
                                   <div class="col-sm-4">
                                        <input type="text" readonly class="form-control-plaintext" id="date" class="date" value="<?= $mm['date']; ?>">
                                   </div>
                              </div>
                         <?php endforeach; ?>
                         <div class="form-group row">
                              <label for="jam" class="col-sm-1 col-form-label">Jam</label>
                              <div class="col-sm-4">
                                   <input type="time" class="form-control" id="jam" class="jam">
                              </div>
                         </div>
                    </div>
                    <hr>
                    <h5 class="h5 mb-4 text-gray-800">Belt Press I</h5>
                    <div class="form-group row">
                         <div class="form-group col-sm">
                              <label for="gph1">GPH 1</label>
                              <select class="form-control form-control-sm" id="gph1" class="gph1">
                                   <option selected>Pilih ...</option>
                                   <option value="1">Ada</option>
                                   <option value="0">Tidak Ada</option>
                              </select>
                         </div>
                         <div class="form-group col-sm">
                              <label for="gph2">GPH 2</label>
                              <select class="form-control form-control-sm" id="gph2" class="gph2">
                                   <option selected>Pilih ...</option>
                                   <option value="1">Ada</option>
                                   <option value="0">Tidak Ada</option>
                              </select>
                         </div>
                         <div class="form-group col-sm">
                              <label for="gph3">GPH 3</label>
                              <select class="form-control form-control-sm" id="gph3" class="gph3">
                                   <option selected>Pilih ...</option>
                                   <option value="1">Ada</option>
                                   <option value="0">Tidak Ada</option>
                              </select>
                         </div>
                         <div class="form-group col-sm">
                              <label for="gph4">GPH 4</label>
                              <select class="form-control form-control-sm" id="gph4" class="gph4">
                                   <option selected>Pilih ...</option>
                                   <option value="1">Ada</option>
                                   <option value="0">Tidak Ada</option>
                              </select>
                         </div>
                         <div class="form-group col-sm">
                              <label for="gph5">GPH 5</label>
                              <select class="form-control form-control-sm" id="gph5" class="gph5">
                                   <option selected>Pilih ...</option>
                                   <option value="1">Ada</option>
                                   <option value="0">Tidak Ada</option>
                              </select>
                         </div>
                    </div>
                    <div class="form-group row">
                         <div class="form-group col-sm">
                              <label for="regulator1_bp1">Regulator 1</label>
                              <input type="text" class="form-control form-control-sm" id="regulator1_bp1" class="regulator1_bp1">
                         </div>
                         <div class="form-group col-sm">
                              <label for="regulator2_bp1">Regulator 2</label>
                              <input type="text" class="form-control form-control-sm" id="regulator2_bp1" class="regulator2_bp1">
                         </div>
                         <div class="form-group col-sm">
                              <label for="regulator3_bp1">Regulator 3</label>
                              <input type="text" class="form-control form-control-sm" id="regulator3_bp1" class="regulator3_bp1">
                         </div>
                         <div class="form-group col-sm">
                              <label for="regulator4_bp1">Regulator 4</label>
                              <input type="text" class="form-control form-control-sm" id="regulator4_bp1" class="regulator4_bp1">
                         </div>
                         <div class="form-group col-sm">
                              <label for="regulator5_bp1">Regulator 5</label>
                              <input type="text" class="form-control form-control-sm" id="regulator5_bp1" class="regulator5_bp1">
                         </div>
                         <div class="form-group col-sm">
                              <label for="mainMotor_bp1">Main Motor</label>
                              <input type="text" class="form-control form-control-sm" id="mainMotor_bp1" class="mainMotor_bp1">
                         </div>
                    </div>
                    <hr>
                    <h5 class="h5 mb-4 text-gray-800">Belt Press 2</h5>
                    <div class="form-group row">
                         <div class="form-group col-sm">
                              <label for="sprayWater">Spray Water</label>
                              <select class="form-control form-control-sm" id="sprayWater" class="sprayWater">
                                   <option selected>Pilih ...</option>
                                   <option value="1">Ada</option>
                                   <option value="0">Tidak Ada</option>
                              </select>
                         </div>
                         <div class="form-group col-sm">
                              <label for="gph6">GPH 6</label>
                              <select class="form-control form-control-sm" id="gph6" class="gph6">
                                   <option selected>Pilih ...</option>
                                   <option value="1">Ada</option>
                                   <option value="0">Tidak Ada</option>
                              </select>
                         </div>
                         <div class="form-group col-sm">
                              <label for="gph7">GPH 7</label>
                              <select class="form-control form-control-sm" id="gph7" class="gph7">
                                   <option selected>Pilih ...</option>
                                   <option value="1">Ada</option>
                                   <option value="0">Tidak Ada</option>
                              </select>
                         </div>
                         <div class="form-group col-sm">
                              <label for="gph8">GPH 8</label>
                              <select class="form-control form-control-sm" id="gph8" class="gph8">
                                   <option selected>Pilih ...</option>
                                   <option value="1">Ada</option>
                                   <option value="0">Tidak Ada</option>
                              </select>
                         </div>
                         <div class="form-group col-sm">
                              <label for="gph9">GPH 9</label>
                              <select class="form-control form-control-sm" id="gph9" class="gph9">
                                   <option selected>Pilih ...</option>
                                   <option value="1">Ada</option>
                                   <option value="0">Tidak Ada</option>
                              </select>
                         </div>
                    </div>
                    <div class="form-group row">
                         <div class="form-group col-sm">
                              <label for="regulator1_bp2">Regulator 1</label>
                              <input type="text" class="form-control form-control-sm" id="regulator1_bp2" class="regulator1_bp2">
                         </div>
                         <div class="form-group col-sm">
                              <label for="regulator2_bp2">Regulator 2</label>
                              <input type="text" class="form-control form-control-sm" id="regulator2_bp2" class="regulator2_bp2">
                         </div>
                         <div class="form-group col-sm">
                              <label for="regulator3_bp2">Regulator 3</label>
                              <input type="text" class="form-control form-control-sm" id="regulator3_bp2" class="regulator3_bp2">
                         </div>
                         <div class="form-group col-sm">
                              <label for="regulator4_bp2">Regulator 4</label>
                              <input type="text" class="form-control form-control-sm" id="regulator4_bp2" class="regulator4_bp2">
                         </div>
                         <div class="form-group col-sm">
                              <label for="regulator5_bp2">Regulator 5</label>
                              <input type="text" class="form-control form-control-sm" id="regulator5_bp2" class="regulator5_bp2">
                         </div>
                         <div class="form-group col-sm">
                              <label for="mainMotor_bp2">Main Motor</label>
                              <input type="text" class="form-control form-control-sm" id="mainMotor_bp2" class="mainMotor_bp2">
                         </div>
                    </div>
                    <a href="<?= base_url('dashboard') ?>" class="btn btn-outline-secondary">Kembali</a>
                    <button type="submit" value="submit" class="btn btn-primary">Simpan</button>
               </form>
          </div>
     </div>
     <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->