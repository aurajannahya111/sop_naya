               
              
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
                    <td style="left-width: 70px;"><?= $rs->sop_no ?></td>
                    <td style="left-width: 70px;"><?= $rs->company ?></td>
                    <td style="left-width: 70px;"><?= $rs->unit ?></td>
                    <td style="left-width: 70px;"><?= $rs->departement ?></td>
                    <td style="left-width: 70px;"><?= $rs->sop_date ?></td>
                    <td style="left-width: 70px;"><?= $rs->sop_title ?></td>
                    <td style="left-width: 70px;"><?= $rs->eff_date ?></td>
                    <td style="left-width: 70px;"><?= $rs->exp_date ?></td>
                    <td style="left-width: 70px;"><?= $rs->status ?></td>
                    <td style="left-width: 70px;"><?= $rs->Remarks ?></td>
                    <td style="left-width: 70px;">
                      <a href="<?php echo site_url('registersop/edit/' . $rs->sop_no,); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                      <a href="<?php echo base_url('registersop/hapus/'  .  $rs->sop_no,); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')"><i class="fas fa-trash"></i></a>
                      <a href="<?= site_url('registersop/show/'. $rs->sop_no) ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    </td>
                </tr>
            </tbody>
         <?php  endforeach ?>
        </table>
    </div>
</div>          