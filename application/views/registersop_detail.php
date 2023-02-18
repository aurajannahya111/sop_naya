<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
        <table>         
        </table>           
    <div class="card">
        <div class="card-header">
     
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>                  
                    <tr class="text-center">
                        <th>Sop No</t>
                        <th>Form No</th>
                        <th>Form_title</th>
                    </tr>                  
                </thead>
                <?php foreach($details as $detail): ?>
                <tbody>
                    <tr class="text-center">
                        <td><?= $detail->sop_no ?></td>
                        <td><?= $detail->form_no ?></td>
                        <td><?= $detail->form_title ?></td>
                        <td></td>
                    </tr>
                </tbody>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</body>
</html>