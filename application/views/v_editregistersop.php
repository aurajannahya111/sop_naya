<form action="<?= base_url('registersop/ubah_aksi') ?>" method="POST">
<div class="form-group">
    <label>Sop No</label>
    <input type="text" name="sop_no" value="<?php echo $sop_header->sop_no ?>" class="form-control" readonly>
  </div>
<div class="form-group">
    <label for="" >Company</label>
    <select name="company" value="<?php echo $sop_header->company ?>" class="form-control" required></input>
         <option value="">--Pilih Company--</option>
         <option value="SBF"<?php if("SBF" == $sop_header->company) echo "selected= 'selected'"  ?>>SBF</option>
         <option value="CPR"<?php if("CPR" == $sop_header->company) echo "selected= 'selected'"  ?>>CPR</option>
    </select>
  </div>

  <div class="form-group">
    <label for="" >Unit</label>
    <select name="unit" value="<?=$sop_header->unit ?>" class="form-control" required>
    <option value="SBF">--Pilih Unit--</option>
         <option value="U1"<?php if("U1" == $sop_header->unit) echo "selected= 'selected'"  ?>>U1</option>
         <option value="U2"<?php if("U2" == $sop_header->unit) echo "selected= 'selected'"  ?>>U2</option>
         <option value="U3"<?php if("U3" == $sop_header->unit) echo "selected= 'selected'"  ?>>U3</option>
         <option value="U4"<?php if("U4" == $sop_header->unit) echo "selected= 'selected'"  ?>>U4</option>
         <option value="U5"<?php if("U5" == $sop_header->unit) echo "selected= 'selected'"  ?>>U5</option>
    </select>
  </div>
    <div class="form-group">
    <label>Departement</label>
    <input type="text" name="departement" value="<?php echo $sop_header->departement ?>" class="form-control" />
  </div>

  <div class="form-group">
    <label>Sop Date</label>
    <input type="Date" name="sop_date" value="<?php echo $sop_header->sop_date ?>" class="form-control" >  
  </div>

  <div class="form-group">
    <label>Sop Title</label>
    <input type="text" name="sop_title" value="<?php echo $sop_header->sop_title ?>" class="form-control" >
  </div>

  <div class="form-group">
    <label>Eff Date</label>
    <input type="Date" name="eff_date" value="<?php echo $sop_header->eff_date ?>" class="form-control" >
  </div>

  <div class="form-group">
    <label>Expire Date</label>
    <input type="Date" name="exp_date" value="<?php echo $sop_header->exp_date ?>" class="form-control" >
  </div>

  <div class="form-group">
    <label for="" >Status</label>
    <select name="status" value="<?=$sop_header->status ?>" class="form-control">
    <option value="SBF">--Pilih Status--</option>
         <option value="Draft"<?php if("Draft" == $sop_header->status) echo "selected= 'selected'"  ?>>Draft</option>
         <option value="Active"<?php if("Active" == $sop_header->status) echo "selected= 'selected'"  ?>>Active</option>
         <option value="Review"<?php if("Review" == $sop_header->status) echo "selected= 'selected'"  ?>>Review</option>
         <option value="Obsolete"<?php if("Obsolete" == $sop_header->status) echo "selected= 'selected'"  ?>>Obsolete</option>
         <option value="Pending"<?php if("Pending" == $sop_header->status) echo "selected= 'selected'"  ?>>Pending</option>
        
    </select>
  </div>

  <div class="form-group">
    <label>Remarks</label>
    <textarea name="Remarks" class="form-control"><?=$sop_header->Remarks ?></textarea>
  </div>

  <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>

</form>
