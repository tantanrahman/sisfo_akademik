<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
    	<i class="fas fa-edit"></i>
    	<b>Form Edit Mata Kuliah</b>
  	</div>

  	<?php foreach ($matakuliah as $mk) : ?>

  		<form method="POST" action="<?=base_url('administrator/matakuliah/update_aksi')?>">
  			<div class="form-group">
  				<label>Nama Mata Kuliah</label>
  				<input type="hidden" name="kode_matakuliah" class="form-control" value="<?=$mk->kode_matakuliah?>">
  				<input type="text" name="nama_matakuliah" class="form-control" value="<?=$mk->nama_matakuliah?>">
  			</div>
  			<div class="form-group">
  				<label>SKS</label>
  				<select name="sks" class="form-control">
  					<option><?=$mk->sks?></option>
  					<option>1</option>
  					<option>2</option>
  					<option>3</option>
  					<option>4</option>
  					<option>5</option>
  					<option>6</option>
  				</select>
  			</div>
  			<div class="form-group">
  				<label>Semester</label>
  				<select name="sks" class="form-control">
  					<option><?=$mk->semester?></option>
  					<option>1</option>
  					<option>2</option>
  					<option>3</option>
  					<option>4</option>
  					<option>5</option>
  					<option>6</option>
  					<option>7</option>
  					<option>8</option>
  				</select>
  			</div>
  			<div class="form-group">
  				<label>Program Studi</label>
  				<select name="nama_prodi" class="form-control">
  					<option>--PILIH--</option>
  					<?php foreach ($prodi as $prd) : ?>
  						<option value="<?=$prd->nama_prodi?>"><?=$prd->nama_prodi?></option>
  					<?php endforeach; ?>
  				</select>
  			</div>

  			<button type="submit" class="btn btn-sm btn-primary"><b>Simpan</b></button>
  		</form>

  	<?php endforeach; ?>

</div>