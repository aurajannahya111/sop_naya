<form action="<?php echo site_url('registerform/ubah_aksi'); ?>"method="post">
<div class="form-group">
    <label>Formulir No</label>
    <input type="text" name="formulir_no" class="form-control" readonly>
  </div>
<div class="form-group">
    <label for="" >Company</label>
    <select name="company" value="<?php echo $registerform->company ?>" class="form-control" required></input>
         <option value="SBF">--Pilih Company--</option>
         <option value="SBF">SBF</option>
         <option value="CPR">CPR</option>
         <?php
         foreach ($company as $key => $value) {
        $selected = "";
        if($key == $registerform->company){ 
            $selected="selected";}
        echo "<option value='$key' $selected>$value</option>"; }?>
    </select>
  </div>

  <div class="form-group">
    <label for="" >Unit</label>
    <select name="unit" value="<?=$registerform->unit ?>" class="form-control" required>
    <option value="SBF">--Pilih Unit--</option>
         <option value="U1">U1</option>
         <option value="U2">U2</option>
         <option value="U3">U3</option>
         <option value="U4">U4</option>
         <option value="U5">U5</option>
         <?php
         foreach ($unit as $key => $value) {
        $selected = "";
        if($key == $registerform->unit){ 
            $selected="selected";}
        echo "<option value='$key' $selected>$value</option>"; }?>
    </select>
  </div>

    <div class="form-group">
    <label>Departement</label>
    <input type="text" name="departement" value="<?php $registerform->departement ?>" class="form-control" >
  </div>

  <div class="form-group">
    <label>Formulir Date</label>
    <input type="Date" name="formulir_date" value="<?php $registerform->formulir_date ?>" class="form-control" >  
  </div>

  <div class="form-group">
    <label>Formulir Title</label>
    <input type="text" name="formulir_title" value="<?php $registerform->formulir_title ?>" class="form-control" >
  </div>

  <div class="form-group">
    <label>Eff Date</label>
    <input type="Date" name="eff_date" value="<?php $registerform->eff_date ?>" class="form-control" >
  </div>

  <div class="form-group">
    <label>Expire Date</label>
    <input type="Date" name="exp_date" value="<?php $registerform->exp_date ?>" class="form-control" >
  </div>

  <div class="form-group">
    <label for="" >Status</label>
    <select name="status" value="<?=$registerform->status ?>" class="form-control">
    <option value="SBF">--Pilih Status--</option>
         <option value="Draft">Draft</option>
         <option value="Active">Active</option>
         <option value="Review">Review</option>
         <option value="Obsolete">Obsolete</option>
         <option value="Pending">Pending</option>
         <?php
         foreach ($status as $key => $value) {
        $selected = "";
        if($key == $registerform->status){ 
            $selected="selected";}
        echo "<option value='$key' $selected>$value</option>"; }?>
    </select>
  </div>

  <div class="form-group">
    <label>Remarks</label>
    <textarea name="Remarks" value="<?=$registerform->Remarks ?>" class="form-control"></textarea>
  </div>



</form>
