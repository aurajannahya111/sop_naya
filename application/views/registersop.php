               
              
              <div class="card">
              <div class="card-header">
                <a href="<?= base_url('registersop/tambah?bersih=true')?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data </a>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  
                  <tr class="text-center">
                    <th>Sop No</th>
                    <th>Company</th>
                    <th>Unit</th>
                    <th>Departement</th>
                    <th>sop Date</th>
                    <th>sop Title</th>
                    <th>Eff Date</th>
                    <th>Exp Date</th>
                    <th>Status</th>
                    <th>Remarks</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <?php
                foreach($registersop as $rs): ?>    
                  <tbody>
                  <tr class="text-center">
                    <td><?= $rs->sop_no ?></td>
                    <td><?= $rs->company ?></td>
                    <td><?= $rs->unit ?></td>
                    <td><?= $rs->departement ?></td>
                    <td><?= $rs->sop_date ?></td>
                    <td><?= $rs->sop_title ?></td>
                    <td><?= $rs->eff_date ?></td>
                    <td><?= $rs->exp_date ?></td>
                    <td><?= $rs->status ?></td>
                    <td><?= $rs->Remarks ?></td>
                    <td>
                    <a href="<?php echo site_url('registersop/edit/' . $rs->sop_no,); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="<?php echo base_url('registersop/hapus/'  .  $rs->sop_no,); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')"><i class="fas fa-trash"></i></a>
                </tr>
            </tbody>
         <?php  endforeach ?>
        </table>
    </div>
</div>

             
