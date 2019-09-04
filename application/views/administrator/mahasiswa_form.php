<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    	<i class="fas fa-fw fa-university"></i>
    	<b>Form Input Mahasiswa</b>
  	</div>

  	<?=form_open_multipart('administrator/mahasiswa/tambah_mahasiswa_aksi')?>

  	<div class="form-group">
  		<label>NIM</label>
  		<input type="text" name="nim" class="form-control" placeholder="NIM">
  		<?=form_error('nim','<div class="text-danger small ml-3">','</div>')?>
  	</div>

  	<div class="form-group">
  		<label>Nama Mahasiswa</label>
  		<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Mahasiswa">
  		<?=form_error('nama_lengkap','<div class="text-danger small ml-3">','</div>')?>
  	</div>

  	<div class="form-group">
  		<label>Alamat</label>
  		<input type="text" name="alamat" class="form-control" placeholder="Alamat">
  		<?=form_error('alamat','<div class="text-danger small ml-3">','</div>')?>
  	</div>

  	<div class="form-group">
  		<label>Email</label>
  		<input type="text" name="email" class="form-control" placeholder="Email">
  		<?=form_error('email','<div class="text-danger small ml-3">','</div>')?>
  	</div>

  	<div class="form-group">
  		<label>Telepon</label>
  		<input type="text" name="telepon" class="form-control" placeholder="Telepon">
  		<?=form_error('telepon','<div class="text-danger small ml-3">','</div>')?>
  	</div>

  	<div class="form-group">
  		<label>Tempat Lahir</label>
  		<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
  		<?=form_error('tempat_lahir','<div class="text-danger small ml-3">','</div>')?>
  	</div>

  	<div class="form-group">
  		<label>Tanggal Lahir</label>
  		<input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
  		<?=form_error('tanggal_lahir','<div class="text-danger small ml-3">','</div>')?>
  	</div>

  	<div class="form-group">
  		<label>Jenis Kelamin</label>
  		<select name="jenis_kelamin" class="form-control">
  			<option value="">--PILIH--</option>
  			<option>Laki-laki</option>
  			<option>Perempuan</option>
  		</select>
  		<?=form_error('jenis_kelamin','<div class="text-danger small ml-3">','</div>')?>
  	</div>

  	<div class="form-group">
  		<label>Nama Prodi</label>
  		<select name="nama_prodi" class="form-control">
  			<option value="">--PILIH--</option>
  			<?php foreach ($prodi as $prd) : ?>
	  			<option value="<?=$prd->nama_prodi?>"><?=$prd->nama_prodi?></option>
	  		<?php endforeach; ?>
  		</select>
  		<?=form_error('nama_prodi','<div class="text-danger small ml-3">','</div>')?>
  	</div>

  	<div class="form-group">
  		<label>Foto</label><br>
  		<input type="file" name="photo">
  	</div>

  	<button type="submit" class="btn btn-primary mb-5 mt-3">Simpan</button>

  	<?php form_close() ?>
</div>