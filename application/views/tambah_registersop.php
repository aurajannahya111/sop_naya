<!-- Inputan panjagn panjang -->

<!-- <form action="<?= base_url('registersop/tambah_aksi') ?>" method="POST">

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
			<label>sop No</label>
			<input type="text" name="sop_no" class="form-control">
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
			<label>Remarks</label>
			<textarea name="Remarks" class="form-control" required></textarea>
		</div>
<hr>
		<div class="form-group">
			<label for="formno">FORM NO</label>
			<select name="formno" id="formno" class="form-control" required>
				<?php foreach($forms as $form): ?>   
					<option value="<?= $form->formulir_no ?>"><?= $form->formulir_no ?> - <?= $form->formulir_title ?></option>
				<?php  endforeach ?>
			</select>
		</div>
			<div class="form-group">
				<label for="formtitle">FORM Title</label>
				<input type="text" name="formtitle" id="formtitle" class="form-control" disabled>
			</div>
			<button type="button" class="btn btn-primary">
				Add
			</button>
		<table class="table table-hover border">
			<thead>
				<tr>
					<th>No</th>
					<th>Form No</th>
					<th>Form Title</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td scope="row">123123</td>
					<td>123123123</td>
					<td>12312312</td>
				</tr>
				<tr>
					<td scope="row">123123213</td>
					<td>123123123</td>
					<td>1232131213</td>
				</tr>
			</tbody>
		</table>

<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
</form> -->


<!-- menyesuaikan yang di foto -->
<form action="<?= base_url('registersop/tambah_aksi') ?>" method="POST">
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
			<label>sop No</label>
			<input type="text" name="sop_no" class="form-control">
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
		<div class="form-group">
			<label>Departement</label>
			<input type="text" name="departement" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Sop Date</label>
			<input type="Date" name="sop_date" class="form-control" required>  
		</div>
	</div>
	<div class="col-12">
		<div class="form-group">
			<label>Sop Title</label>
			<input type="text" name="sop_title" class="form-control" required>
		</div>
	</div>
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
	<div class="col-12">
		<div class="form-group">
			<label>Remarks</label>
			<textarea name="Remarks" class="form-control" required></textarea>
		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-6">
		<div class="form-group">
			<label for="formno">FORM NO</label>
			<select name="formno" id="formno" class="form-control" required>
				<?php foreach($forms as $form): ?>   
					<option value="<?= $form->formulir_no ?>" data-no="<?= $form->formulir_no ?>"><?= $form->formulir_no ?> - <?= $form->formulir_title ?></option>
				<?php  endforeach ?>
			</select>
		</div>
	</div>
	<div class="col-12 d-flex">
		<div class="col-10">
			<div class="form-group">
				<label for="formtitle">FORM Title</label>
				<input type="text" name="formtitle" id="formtitle" class="form-control" disabled>
			</div>
		</div>
		<div class="col-2 d-flex align-items-center">
			<button type="button" class="btn btn-primary">
				Add
			</button>
		</div>
	</div>
	<div class="col-12">
		<table class="table table-hover border">
			<thead>
				<tr>
					<th>No</th>
					<th>Form No</th>
					<th>Form Title</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td scope="row">123123</td>
					<td>123123123</td>
					<td>12312312</td>
				</tr>
				<tr>
					<td scope="row">123123213</td>
					<td>123123123</td>
					<td>1232131213</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
</form>

<<<<<<< HEAD
<script>
	// BISA pake ajax untuk auto update form title, atau pake javascript Vanilla, atau pake jquery
	const xhr = new XMLHttpRequest();

	const selectFormNo = document.querySelector('#formno');
	
	selectFormNo.addEventListener('change', () => {
		let value = selectFormNo.value;
		const option = selectFormNo.querySelector("[data-no='"+value+"']");
		const text = (option.textContent).slice(4, (option.textContent).length);
		console.log(text);

		const title = document.querySelector('#formtitle');
		title.value = text;
	});

	// $('#formno').on('change', () => {
		
	// });
</script>
=======
                           
>>>>>>> a786d8951aa8c46a6ac34c9d215ac5ed343035fb