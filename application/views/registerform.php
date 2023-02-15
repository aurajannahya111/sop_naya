              <div class="card">
              <div class="card-header">
                <a href="<?= base_url('registerform/tambah')?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data </a>
                <a href="<?= base_url('registerform/pdf')?>" class="btn btn-warning btn-sm"><i class="fas fa-file"></i> Export pdf </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead>
                  
                  <tr class="text-center">
                    <th>Formulir No</th>
                    <th>Company</th>
                    <th>Unit</th>
                    <th>Departement</th>
                    <th>Formulir Date</th>
                    <th>Formulir Title</th>
                    <th>Eff Date</th>
                    <th>Exp Date</th>
                    <th>Status</th>
                    <th>Remarks</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <?php
                foreach($registerform as $rf): ?>    
                  <tbody>
                  <tr class="text-center">
                    <td><?= $rf->formulir_no ?></td>
                    <td><?= $rf->company ?></td>
                    <td><?= $rf->unit ?></td>
                    <td><?= $rf->departement ?></td>
                    <td><?= $rf->formulir_date ?></td>
                    <td><?= $rf->formulir_title ?></td>
                    <td><?= $rf->eff_date ?></td>
                    <td><?= $rf->exp_date ?></td>
                    <td><?= $rf->status ?></td>
                    <td><?= $rf->Remarks ?></td>
                    <td>
                    <a href="<?php echo site_url('registerform/edit/' . $rf->formulir_no,); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="<?php echo base_url('registerform/hapus/'  .  $rf->formulir_no,); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')"><i class="fas fa-trash"></i></a>
                </tr>
            </tbody>
         <?php  endforeach ?>
        </table>
    </div>
</div>

                    