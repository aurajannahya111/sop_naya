<form action="<?= base_url('registersop/update') ?>" method="POST">
	<div class="row">
		<div class="col-6">
			<div class="form-group">
				<label for="" >Company</label>
				<select name="company" class="form-control" >
					<option value="" disabled>--Pilih Company--</option>
					<option value="SBF" <?= $sop[0]->company == "SBF" ? 'selected' : '' ?> >SBF</option>
					<option value="CPR" <?= $sop[0]->company == "CPR" ? 'selected' : '' ?> >CPR</option>
				</select>
			</div>
			<div class="form-group">
				<label for="" >Unit</label>
				<select name="unit" class="form-control ">
					<option value="SBF">--Pilih Unit--</option>
					<option value="U1" <?= $sop[0]->unit == "U1" ? 'selected' : '' ?> >U1</option>
					<option value="U2" <?= $sop[0]->unit == "U2" ? 'selected' : '' ?> >U2</option>
					<option value="U3" <?= $sop[0]->unit == "U3" ? 'selected' : '' ?> >U3</option>
					<option value="U4" <?= $sop[0]->unit == "U4" ? 'selected' : '' ?> >U4</option>
					<option value="U5" <?= $sop[0]->unit == "U5" ? 'selected' : '' ?> >U5</option>
				</select>
			</div>
			<div class="form-group">
				<label>sop No</label>
				<input type="number" name="example" class="form-control" disabled value="<?= $sop[0]->sop_no ?>">
				<input type="hidden" name="sop_no" value="<?= $sop[0]->sop_no  ?>">
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				<label for="" >Status</label>
				<select name="status" class="form-control" >
					<option value="">--Pilih Status--</option>
					<option value="Draft" <?= $sop[0]->status == "Draft" ? 'selected' : '' ?> >Draft</option>
					<option value="Active" <?= $sop[0]->status == "Active" ? 'selected' : '' ?> >Active</option>
					<option value="Review" <?= $sop[0]->status == "Review" ? 'selected' : '' ?> >Review</option>
					<option value="Obsolete" <?= $sop[0]->status == "Obsolete" ? 'selected' : '' ?> >Obsolete</option>
					<option value="Pending" <?= $sop[0]->status == "Pending" ? 'selected' : '' ?> >Pending</option>
				</select>
			</div>
			<div class="form-group">
				<label>Departement</label>
				<input type="text" name="departement" class="form-control" value="<?= $sop[0]->departement ?>">
			</div>
			<div class="form-group">
				<label>Sop Date</label>
				<input type="Date" name="sop_date" class="form-control" value="<?= $sop[0]->sop_date ?>">  
			</div>
		</div>
		<div class="col-12">
			<div class="form-group">
				<label>Sop Title</label>
				<input type="text" name="sop_title" class="form-control"  value="<?= $sop[0]->sop_title ?>">
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				<label>Eff Date</label>
				<input type="Date" name="eff_date" class="form-control"  value="<?= $sop[0]->eff_date ?>">
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				<label>Expire Date</label>
				<input type="Date" name="exp_date" class="form-control"  value="<?= $sop[0]->exp_date ?>">
			</div>
		</div>
		<div class="col-12">
			<div class="form-group">
				<label>Remarks</label>
				<textarea name="Remarks" class="form-control"><?= $sop[0]->Remarks ?></textarea>
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
			<table class="table table-hover border align-middle">
				<thead>
					<tr>
						<th>No</th>
						<th>Form No</th>
						<th>Form Title</th>
						<th style="max-width: 40px;"></th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$i = 1;
					foreach($details as $detail): ?>
					<?= $detail->id ?>
						<tr>
							<td scope="row"><?= $i++ ?></td>
							<td><?= $detail->form_no ?></td>
							<td><?= $detail->form_title ?></td>
							<td style="max-width: 40px;">
								<!-- <a href="<?= site_url('registersop/editkeranjang'. $detail->id) ?>" class="btn btn-success">
									<i class="fas fa-edit"></i>
								</a> -->
								<a href="<?= site_url('registersop/delete_editKeranjang/'. $detail->id ."?sop=".$detail->sop_no) ?>" class="btn btn-danger">
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


<template id="numbersop" data-id="<?= $sop[0]->id ?>"></template>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script>
	// BISA pake ajax untuk auto update form title, atau pake javascript Vanilla, atau pake jquery

	const selectFormNo = document.querySelector('#formNo');
	var value =(selectFormNo.querySelector("[data-no='"+selectFormNo.value+"']")).textContent;
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
			window.location = "http://localhost/SOP_SOP/registersop/edit_addSopkeranjang?no="+no+"&title="+title.value+"&sop_no=<?= $sop[0]->sop_no ?>";
		});
	});
</script>