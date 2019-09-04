<div class="container-fluid">

	<div class="alert alert-success" role="alert">
    	<i class="fas fa-fw fa-university"></i>
    	<b>Form Input Jurusan</b>
  	</div>

	<form method="POST" action="<?=base_url('administrator/jurusan/input_aksi')?>">
		<div class="form-group">
			<label>Kode Jurusan</label>
			<input type="text" name="kode_jurusan" placeholder="Masukan Kode Jurusan" class="form-control">
			<?=form_error('kode_jurusan','<div class="text-danger small ml-3">')?>
		</div>
		<div class="form-group">
			<label>Nama Jurusan</label>
			<input type="text" name="nama_jurusan" placeholder="Masukan Nama Jurusan" class="form-control">
			<?=form_error('nama_jurusan','<div class="text-danger small ml-3">')?>
		</div>

        <button type="sumit" class="btn btn-primary">
        	<b>Simpan</b>
        </button>

	</form>
</div>