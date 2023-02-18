<!DOCTYPE html>
<html>
<head>
<title></title>
</head><body>
<table><tr>
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
                    </tr>
            </tbody>
         <?php  endforeach ?>
        </table>
    </div></div>
