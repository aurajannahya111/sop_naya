              <div class="card">
              <div class="card-header">
                <a href="<?= base_url('registerform/tambah')?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data </a>
                <a href="<?= base_url('registerform/excel')?>" class="btn btn-success btn-sm"><i class="fas fa-file-download"></i> Export Excel </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
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
<div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
  Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7">
    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
      <ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous">
        <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
        <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a>
      </li>
      <li class="paginate_button page-item ">
        <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a>
      </li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a>
    </li><li class="paginate_button page-item ">
          <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a>
        </li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a>
      </li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
    </li>
  </ul>
</div>
</div>
</div>





