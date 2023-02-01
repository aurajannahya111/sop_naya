<!DOCTYPE html>
<html>
<head>

     <title>Menghubungkan Login</title>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style2.css')?>">

</head>
<body><center>
<h1>Login</h1>
     <form action="<?php echo site_url('login/aksi_login'); ?>"method="post">
<table>
<tr>
    <td>Username</td>
    <td><input type="text" name="username"></td>
</tr>
<tr>
    <td>Password</td>
    <td><input type="password"name="password"></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" value="Login"></td>
</tr>
</table>
</form>
    <br><hr>
    <h1>Data User</h1>
    <?php echo anchor('login/tambah','(+) Tambah User'); ?>
   
<tr>
    <th>Username</th>
    <th>Password</th>
    <th>Aksi</th>
</tr>
    <?php foreach($user as $s){ ?>
<tr>
    <td><?php echo $s->username ?></td>  
    <td><?php echo $s->password ?></td>
<td colspan="2">
    <?php echo anchor('login/hapus/'.$s->id,'Hapus'); ?>
</td>
</tr>
   <?php } ?>
</table>
</body>
</html>