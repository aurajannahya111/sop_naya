<form action="<?= base_url('registerform/ubah_aksi') ?>" method="POST">
<div class="form-group">
    <label>Formulir No</label>
    <input type="text" name="formulir_no" class="form-control" readonly>
  </div>
<div class="form-group">
    <label for="" >Company</label>
    <select name="company" value="<?php echo $register_form->company ?>" class="form-control" required></input>
         <option value="">--Pilih Company--</option>
         <option value="SBF"<?php if("SBF" == $register_form->company) echo "selected= 'selected'"  ?>>SBF</option>
         <option value="CPR"<?php if("CPR" == $register_form->company) echo "selected= 'selected'"  ?>>CPR</option>
    </select>
  </div>

  <div class="form-group">
    <label for="" >Unit</label>
    <select name="unit" value="<?=$register_form->unit ?>" class="form-control" required>
    <option value="SBF">--Pilih Unit--</option>
         <option value="U1"<?php if("U1" == $register_form->unit) echo "selected= 'selected'"  ?>>U1</option>
         <option value="U2"<?php if("U2" == $register_form->unit) echo "selected= 'selected'"  ?>>U2</option>
         <option value="U3"<?php if("U3" == $register_form->unit) echo "selected= 'selected'"  ?>>U3</option>
         <option value="U4"<?php if("U4" == $register_form->unit) echo "selected= 'selected'"  ?>>U4</option>
         <option value="U5"<?php if("U5" == $register_form->unit) echo "selected= 'selected'"  ?>>U5</option>
    </select>
  </div>
    <div class="form-group">
    <label>Departement</label>
    <input type="text" name="departement" value="<?php echo $register_form->departement ?>" class="form-control" />
  </div>

  <div class="form-group">
    <label>Formulir Date</label>
    <input type="Date" name="formulir_date" value="<?php echo $register_form->formulir_date ?>" class="form-control" >  
  </div>

  <div class="form-group">
    <label>Formulir Title</label>
    <input type="text" name="formulir_title" value="<?php echo $register_form->formulir_title ?>" class="form-control" >
  </div>

  <div class="form-group">
    <label>Eff Date</label>
    <input type="Date" name="eff_date" value="<?php echo $register_form->eff_date ?>" class="form-control" >
  </div>

  <div class="form-group">
    <label>Expire Date</label>
    <input type="Date" name="exp_date" value="<?php echo $register_form->exp_date ?>" class="form-control" >
  </div>

  <div class="form-group">
    <label for="" >Status</label>
    <select name="status" value="<?=$register_form->status ?>" class="form-control">
    <option value="SBF">--Pilih Status--</option>
         <option value="Draft"<?php if("Draft" == $register_form->status) echo "selected= 'selected'"  ?>>Draft</option>
         <option value="Active"<?php if("Active" == $register_form->status) echo "selected= 'selected'"  ?>>Active</option>
         <option value="Review"<?php if("Review" == $register_form->status) echo "selected= 'selected'"  ?>>Review</option>
         <option value="Obsolete"<?php if("Obsolete" == $register_form->status) echo "selected= 'selected'"  ?>>Obsolete</option>
         <option value="Pending"<?php if("Pending" == $register_form->status) echo "selected= 'selected'"  ?>>Pending</option>
        
    </select>
  </div>

  <div class="form-group">
    <label>Remarks</label>
    <textarea name="Remarks" class="form-control"><?=$register_form->Remarks ?></textarea>
  </div>

  <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>

</form>
