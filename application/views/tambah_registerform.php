<form action="<?= base_url('registerform/tambah_aksi') ?>" method="POST">
	<div class="row">
	    <div class="col-6">
            <div class="form-group">
                <label for="" >Company</label>
                <select name="company" class="form-control" required>
                    <option value="SBF">--Pilih Company--</option>
                    <option value="SBF">SBF</option>
                    <option value="CPR">CPR</option>
                </select>
            </div>
	    </div>
	    <div class="col-6">
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
	    </div>
	</div>
    <div class="row">
        <div class="col-6">
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
        </div>
        <div class="col-6">
        <div class="form-group">
            <label>Departement</label>
            <input type="text" name="departement" class="form-control" required>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>Formulir No</label>
                <input type="text" name="example" class="form-control" disabled value="<?= $formulir_no ?>">
                <input type="hidden" name="formulir_no" value="<?= $formulir_no ?>">
            </div>
        </div>
        <div class="col-6">
        <div class="form-group">
            <label>Formulir Date</label>
            <input type="Date" name="formulir_date" class="form-control" required>  
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label>Formulir Title</label>
                <input type="text" name="formulir_title" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>Eff Date</label>
                <input type="Date" name="eff_date" class="form-control" required>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label>Expire Date</label>
                <input type="Date" name="exp_date" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label>Remarks</label>
                <textarea name="Remarks" class="form-control" required></textarea>
            </div>
        </div>
    </div>
    <div class="row justify-content-end pr-2">
        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    </div>
</form>