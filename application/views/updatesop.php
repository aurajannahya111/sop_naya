<div class="card">
    <div class="card-header">
      <a href="<?= base_url('updatesop/tambah?beusih=true')?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data </a>                
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        
          <tr class="text-center">
            <th>Company</th>
            <th>Unit</th>
            <th>Trx No</th>
            <th>Trx Type</th>
            <th>Sop No</th>
            <th>Status</th>
            <th>Departement</th>
            <th>Trx Date</th>
            <th>Sop Date</th>
            <th>Sop Title</th>
            <th>Eff Date</th>
            <th>Exp Date</th>
            <th>Remarks</th>
            <th>Review_date</th>
            <th>Action</th>
          </tr>                  
        </thead>
      <?php
      foreach($updatesop as $us): ?>
      <tbody>
        <tr class="text-center">
          <td style="left-width: 100px;"><?= $us->company ?></td>
          <td style="left-width: 100px;"><?= $us->unit ?></td>
          <td style="left-width: 100px;"><?= $us->trx_no ?></td>
          <td style="left-width: 100px;"><?= $us->trx_type ?></td>
          <td style="left-width: 100px;"><?= $us->sop_no ?></td>
          <td style="left-width: 100px;"><?= $us->status ?></td>
          <td style="left-width: 100px;"><?= $us->departement ?></td>
          <td style="left-width: 100px;"><?= $us->trx_date ?></td>
          <td style="left-width: 100px;"><?= $us->sop_date ?></td>
          <td style="left-width: 100px;"><?= $us->sop_title ?></td>
          <td style="left-width: 100px;"><?= $us->eff_date ?></td>
          <td style="left-width: 100px;"><?= $us->exp_date ?></td>
          <td style="left-width: 100px;"><?= $us->Remarks ?></td>
          <td style="left-width: 100px;"><?= $us->review_date ?></td>
          <td style="left-width: 100px;">
            <a href="<?php echo site_url('updatesop/edit/' . $us->sop_no,); ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
            <a href="<?php echo base_url('updatesop/hapus/'  .  $us->sop_no,); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')"><i class="fas fa-trash"></i></a>
            <a href="<?= site_url('updatesop/show/'. $us->sop_no) ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
          </td>
        </tr>
      </tbody>
      <?php  endforeach ?>
    </table>
  </div>
</div>          