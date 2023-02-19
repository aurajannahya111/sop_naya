<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
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
                <?php foreach($details as $detail): ?>
                <tbody>
                    <tr class="text-center">
                        <td><?= $detail->sop_no ?></td>
                        <td><?= $detail->company ?></td>
                        <td><?= $detail->unit ?></td>
                        <td><?= $detail->departement ?></td>
                        <td></td>
                    </tr>
                </tbody>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</body>
</html>