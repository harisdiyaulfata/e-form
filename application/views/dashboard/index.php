<!-- <?php var_dump($header); ?> -->

<!-- Begin Page Content -->
<div class="container-fluid">
     <div class="card">
          <div class="card-header">
               <!-- Page Heading -->
               <h1 class="h3 mb-4 text-gray-800">Dokumen Monitoring Operasional Mesin</h1>
          </div>
          <div class="card-body">
               <?= form_error('header', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
               <?= $this->session->flashdata('message'); ?>

               <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newDocModal">Add New Dokumen</a>
               <table class="table">
                    <thead>
                         <tr>
                              <th scope="col">#</th>
                              <th scope="col">Document</th>
                              <th scope="col">Date</th>
                              <th scope="col">Created By</th>
                              <th scope="col">Created Date</th>
                              <th scope="col">Updated By</th>
                              <th scope="col">Updated Date</th>
                              <th scope="col">Action</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php $i = 1; ?>
                         <?php foreach ($header as $h) : ?>
                              <tr>
                                   <th scope="row"><?= $i; ?></th>
                                   <td><?= $h['doc']; ?></td>
                                   <td><?= $h['date']; ?></td>
                                   <td><?= $h['name']; ?></td>
                                   <td><?= $h['createdDate']; ?></td>
                                   <td><?= $h['updatedBy']; ?></td>
                                   <td><?= $h['updatedDate']; ?></td>
                                   <td>
                                        <a href="<?= base_url('dashboard/detail/' . $h['id_header']) ?>" class="badge badge-secondary">Detail</a>
                                        <a href="<?= base_url('dashboard/tambah/' . $h['id_header']) ?>" class="badge badge-primary">Add</a>
                                        <!-- <a href="<?= base_url('dashboard/edit/' . $h['id_header']) ?>" class="badge badge-success">Edit</a>
                                        <a href="<?= base_url('dashboard/delete/' . $h['id_header']) ?>" class="badge badge-danger">Delete</a> -->
                                   </td>
                              </tr>
                              <?php $i++; ?>
                         <?php endforeach; ?>
                    </tbody>
               </table>
          </div>
     </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newDocModal" tabindex="-1" role="dialog" aria-labelledby="newDocModalLabel" aria-hidden="true">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="newDocModalLabel">Add New Dokumen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
               </div>
               <form action="<?= base_url('dashboard') ?>" method="POST">
                    <div class="modal-body">
                         <div class="form-group">
                              <input type="text" class="form-control" id="doc" name="doc" placeholder="MOM/DRP/20/..">
                              <input type="date" class="form-control" id="date" name="date" <?= date('Y/m/d'); ?>>
                         </div>
                    </div>
                    <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary">Add</button>
                    </div>
               </form>
          </div>
     </div>
</div>