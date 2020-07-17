<!-- Begin Page Content -->
<div class="container-fluid">
     <div class="card">
          <div class="card-header">
               <!-- Page Heading -->
               <h1 class="h3 mb-4 text-gray-800">Tambah Dokumen Monitoring Operasional Mesin</h1>
          </div>
          <div class="card-body">
               <form method="POST">
                    <div class="form-group">
                         <div class="form-group row">
                              <label for="doc" class="col-sm-1 col-form-label">Dokumen</label>
                              <div class="col-sm-4">
                                   <input type="text" class="form-control" id="doc" name="doc">
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="date" class="col-sm-1 col-form-label">Tanggal</label>
                              <div class="col-sm-4">
                                   <input type="date" class="form-control" id="date" class="date">
                              </div>
                         </div>
                         <div class="form-group row">
                              <label for="jenisBP" class="col-sm-1 col-form-label">Belt Press</label>
                              <div class="col-sm-4">
                                   <select class="form-control" id="jenisBP">
                                        <option>Default select</option>
                                        <option>Line Hijau Belt Press I</option>
                                        <option>Line Hijau Belt Press I</option>
                                   </select>
                              </div>
                         </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                         <div class="form-group col-md-2">
                              <label for="jam">Jam</label>
                              <input type="time" class="form-control" id="jam" class="jam">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="gph1">GPH 1</label>
                              <input type="text" class="form-control" id="gph1" class="jam">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="gph2">GPH 2</label>
                              <input type="text" class="form-control" id="gph2" class="jam">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="gph3">GPH 3</label>
                              <input type="text" class="form-control" id="gph3" class="jam">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="gph4">GPH 4</label>
                              <input type="text" class="form-control" id="gph4" class="jam">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="gph5">GPH 5</label>
                              <input type="text" class="form-control" id="gph5" class="jam">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="regulator1">Regulator 1</label>
                              <input type="text" class="form-control" id="regulator1" class="jam">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="regulator2">Regulator 2</label>
                              <input type="text" class="form-control" id="regulator2" class="jam">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="regulator3">Regulator 3</label>
                              <input type="text" class="form-control" id="regulator3" class="jam">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="regulator4">Regulator 4</label>
                              <input type="text" class="form-control" id="regulator4" class="jam">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="regulator5">Regulator 5</label>
                              <input type="text" class="form-control" id="regulator5" class="jam">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="mainMotor">Main Motor</label>
                              <input type="text" class="form-control" id="mainMotor" class="jam">
                         </div>
                    </div>
                    <hr>
                    <div class="form-group">
                         <div class="form-group col-md-5">
                              <label for="jenisBP" class="col-sm-2 col-form-label">Belt Press II</label>
                              <div class="col-sm-10">
                                   <input type="text" readonly class="form-control-plaintext" id="jenisBP" value="">
                              </div>
                         </div>
                    </div>
                    <div class="form-row">
                         <div class="form-group col-md-2">
                              <label for="jam">Jam</label>
                              <input type="text" readonly class="form-control-plaintext" id="jam">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="sprayWater">Spray Water</label>
                              <input type="text" readonly class="form-control-plaintext" id="sprayWater">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="gph6">GPH 6</label>
                              <input type="text" readonly class="form-control-plaintext" id="gph6">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="gph7">GPH 7</label>
                              <input type="text" readonly class="form-control-plaintext" id="gph7">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="gph8">GPH 8</label>
                              <input type="text" readonly class="form-control-plaintext" id="gph8">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="gph9">GPH 9</label>
                              <input type="text" readonly class="form-control-plaintext" id="gph9">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="regulator1">Regulator 1</label>
                              <input type="text" readonly class="form-control-plaintext" id="regulator1">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="regulator2">Regulator 2</label>
                              <input type="text" readonly class="form-control-plaintext" id="regulator2">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="regulator3">Regulator 3</label>
                              <input type="text" readonly class="form-control-plaintext" id="regulator3">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="regulator4">Regulator 4</label>
                              <input type="text" readonly class="form-control-plaintext" id="regulator4">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="regulator5">Regulator 5</label>
                              <input type="text" readonly class="form-control-plaintext" id="regulator5">
                         </div>
                         <div class="form-group col-md-2">
                              <label for="mainMotor">Main Motor</label>
                              <input type="text" readonly class="form-control-plaintext" id="mainMotor">
                         </div>
                    </div>
               </form>
          </div>
     </div>
     <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->