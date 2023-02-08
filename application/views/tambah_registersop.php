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

                            <hr/>
                            <h5>Detail SOP</h5>
                            
                            <table id='list_barang' class="table">
                              <tr>
                                <td>Form_no</td>
                                <td>Form Title</td>
                              </tr>
                            </table>
                            
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                           Launch demo modal
                           </button>         
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
            
                      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        ...

        <option selected>Pilih Detail</option>
              <?php
                  foreach($registerform as $rf) {
                    echo "<option value='".$rf->formulir_no."'>".$rf->formulir_title."</option>";
                }
              ?>
            </select>

        <table class='table'>
              <thead>
              <tr>
                <td>Infomasi</td>
                <td>Value</td>
              </tr>
              <tr>
                <td>Formuli No</td>
                <td><p id="formulir_no" name="formulir_no" placeholder="formulir no"><p></td>
              </tr>
              <tr>
                <td>Formulir Title</td>
                <td><p id="formulir_title" name="formulir_title" placeholder="formulir title"><p></td>
              </tr>
              </thead>
              <tbody>
              </tbody>

            </table>
            <input type="button" class="btn btn-primary" value="Tambah" onclick="clickMy()">
          </div>


        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>