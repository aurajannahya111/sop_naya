<form action="<?= base_url('registersop/tambah_aksi') ?>" method="POST">
<div class="form-group">
    <label>sop No</label>
    <input type="text" name="sop_no" class="form-control">
  </div>
<div class="form-group">
    <label for="" >Company</label>
    <select name="company" class="form-control" required>
         <option value="SBF">--Pilih Company--</option>
         <option value="SBF">SBF</option>
         <option value="CPR">CPR</option>
    </select>
  </div>

  <div class="form-group">
    <label for="" >Unit</label>
    <select name="unit" class="form-control required">
    <option value="SBF">--Pilih Unit--</option>
         <option value="U1">U1</option>
         <option value="U2">U2</option>
         <option value="U3">U3</option>
         <option value="U4">U4</option>
         <option value="U5">U5</option>
    </select>
  </div>

    <div class="form-group">
    <label>Departement</label>
    <input type="text" name="departement" class="form-control" required>
  </div>

  <div class="form-group">
    <label>Sop Date</label>
    <input type="Date" name="sop_date" class="form-control" required>  
  </div>

  <div class="form-group">
    <label>Sop Title</label>
    <input type="text" name="sop_title" class="form-control" required>
  </div>

  <div class="form-group">
    <label>Eff Date</label>
    <input type="Date" name="eff_date" class="form-control" required>
  </div>

  <div class="form-group">
    <label>Expire Date</label>
    <input type="Date" name="exp_date" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="" >Status</label>
    <select name="status" class="form-control" required>
    <option value="SBF">--Pilih Status--</option>
         <option value="Draft">Draft</option>
         <option value="Active">Active</option>
         <option value="Review">Review</option>
         <option value="Obsolete">Obsolete</option>
         <option value="Pending">Pending</option>
    </select>
  </div>

  <div class="form-group">
    <label>Remarks</label>
    <textarea name="Remarks" class="form-control" required></textarea>
  </div>

<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
</form>

                           
