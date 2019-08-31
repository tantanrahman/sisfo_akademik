<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
    	<i class="fas fa-fw fa-university"></i>
    	<b>Form Update Jurusan</b>
  	</div>

  	<?php foreach($jurusan as $jrs): ?>

  		<form method="POST" action="<?=base_url('administrator/jurusan/update_aksi')?>">
  			<div class="form-group">
  				<label>Kode Jurusan</label>
  				<input type="hidden" name="id_jurusan" value="<?=$jrs->id_jurusan?>">
  				<input type="text" name="kode_jurusan" class="form-control" value="<?=$jrs->kode_jurusan?>">
  			</div>
  			<div class="form-group">
  				<label>Nama Jurusan</label>
  				<input type="text" name="nama_jurusan" class="form-control" value="<?=$jrs->nama_jurusan?>">
  			</div>
  			<button type="submit" class="btn btn-primary"><b>Simpan</b></button>
  		</form>

  	<?php endforeach; ?>

</div>