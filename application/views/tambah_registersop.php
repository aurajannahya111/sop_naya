<!-- menyesuaikan yang di foto -->
<form action="<?= base_url('registersop/tambah_aksi') ?>" method="POST">
	<div class="row">
		<div class="col-6">
			<div class="form-group">
				<label for="" >Company</label>
				<select name="company" class="form-control" >
					<option value="SBF">--Pilih Company--</option>
					<option value="SBF">SBF</option>
					<option value="CPR">CPR</option>
				</select>
			</div>
			<div class="form-group">
				<label for="" >Unit</label>
				<select name="unit" class="form-control ">
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
				<input type="number" name="example" class="form-control" disabled value="<?= $number_sop ?>">
				<input type="hidden" name="sop_no" value="<?= $number_sop ?>">
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				<label for="" >Status</label>
				<select name="status" class="form-control" >
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
				<input type="text" name="departement" class="form-control" >
			</div>
			<div class="form-group">
				<label>Sop Date</label>
				<input type="Date" name="sop_date" class="form-control" >  
			</div>
		</div>
		<div class="col-12">
			<div class="form-group">
				<label>Sop Title</label>
				<input type="text" name="sop_title" class="form-control" >
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				<label>Eff Date</label>
				<input type="Date" name="eff_date" class="form-control" >
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				<label>Expire Date</label>
				<input type="Date" name="exp_date" class="form-control" >
			</div>
		</div>
		<div class="col-12">
			<div class="form-group">
				<label>Remarks</label>
				<textarea name="Remarks" class="form-control" ></textarea>
			</div>
		</div>
	</div>
	<hr>
	<div class="row" id="formAddKeranjang">
		<div class="col-6">
			<div class="form-group">
				<label for="formNo">FORM NO</label>
				<select name="formNo" id="formNo" class="form-control" >
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
				<button id="buttonKeranjang" type="button" class="btn btn-primary">
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
						<th style="max-width: 30px;"></th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$i = 1;
					foreach($keranjangs as $keranjang): ?>   
						<tr>
							<td scope="row"><?= $i++ ?></td>
							<td><?= $keranjang->form_no ?></td>
							<td><?= $keranjang->form_title ?></td>
							<td style="max-width: 30px;">
								<a href="<?= site_url('registersop/editkeranjang') ?>" class="btn btn-success">
									<i class="fas fa-edit"></i>
								</a>
								<a href="<?= site_url('registersop/deleteKeranjang/' . $keranjang->id) ?>" class="btn btn-danger">
									<i class="fa fa-trash" aria-hidden="true"></i>
								</a>
							</td>
						</tr>
					<?php  endforeach ?>
				</tbody>
			</table>
		</div>
	</div>

	<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>	
</form>

<template id="">

</template>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script>
	// BISA pake ajax untuk auto update form title, atau pake javascript Vanilla, atau pake jquery

	const selectFormNo = document.querySelector('#formNo');
	var value =(selectFormNo.querySelector("[data-no='"+selectFormNo.value+"']")).textContent;
	console.log(value);
	document.querySelector('#formtitle').value = value.slice(4, value.length);
	selectFormNo.addEventListener('change', () => {
		let value = selectFormNo.value;
		const option = selectFormNo.querySelector("[data-no='"+value+"']");
		const text = (option.textContent).slice(4, (option.textContent).length);
		const title = document.querySelector('#formtitle');
		title.value = text;
	});

	$(document).ready(function() {
		$(document).on('click', '#buttonKeranjang', function(e) {
			const no = selectFormNo.value;
			console.log(no);
			const title = document.querySelector('#formtitle');
			console.log(title.value);
			window.location = "addSopkeranjang?no="+no+"&title="+title.value;
		});
		// $(document).on('submit', '#form-keranjang', function(e) {
		// 	$.ajax({
		// 		url : 'addSopKeranjang?no=nomerberapa&title=titleapa',
		// 		method: 'POST',
		// 		data: $(this).serialize(),
		// 		beforeSend: function () {
		// 			//function here ...
		// 			$('button').prop('disabled', true);
		// 		},
		// 		success: function(data) {
		// 			$('button').prop('disabled', false);
		// 			console.log(data);
		// 			$('#title').val("");
		// 			$('#message').val("");

		// 			$('#response').text(data.message);
		// 		},
		// 		error: function (jqXHR, textStatus, errorThrown) {
					
		// 			$('button').prop('disabled', false);
		// 			console.log('Message: ' + textStatus + ' , HTTP: ' + errorThrown );
		// 		},
		// 	})

		// 	return false;
		// });
	});
</script>