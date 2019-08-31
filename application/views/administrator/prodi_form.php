<div class="container-fluid">

	<div class="alert alert-success" role="alert">
    	<i class="fas fa-fw fa-university"></i>
    	<b>Form Input Program Studi</b>
  	</div>

	<form method="POST" action="<?=base_url('administrator/prodi/tambah_prodi_aksi')?>">
		<div class="form-group">
			<label>Kode Prodi</label>
			<input type="text" name="kode_prodi" placeholder="Masukan Kode Prodi" class="form-control">
			<?=form_error('kode_prodi','<div class="text-danger small ml-3">')?>
		</div>
		<div class="form-group">
			<label>Nama Prodi</label>
			<input type="text" name="nama_prodi" placeholder="Masukan Nama Prodi" class="form-control">
			<?=form_error('nama_prodi','<div class="text-danger small ml-3">')?>
		</div>
		<div class="form-group">
			<label>Nama Jurusan</label>
			<select name="nama_jurusan" class="form-control">
				<option value="">--PILIH JURUSAN--</option>
				<?php foreach ($jurusan as $jrs) :?>
				<option value="<?=$jrs->nama_jurusan?>"><?=$jrs->nama_jurusan?></option>
				<?php endforeach;?>
			</select>
		</div>

        <button type="sumit" class="btn btn-primary">
        	<b>Simpan</b>
        </button>

	</form>
</div>