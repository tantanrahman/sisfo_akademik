<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
    	<i class="fas fa-fw fa-university"></i>
    	<b>Form Update Program Studi</b>
  	</div>

  	<?php foreach($prodi as $prd): ?>

  		<form method="POST" action="<?=base_url('administrator/prodi/update_aksi')?>">
  			<div class="form-group">
  				<label>Kode Prodi</label>
  				<input type="hidden" name="id_prodi" value="<?=$prd->id_prodi?>">
  				<input type="text" name="kode_prodi" class="form-control" value="<?=$prd->kode_prodi?>">
  			</div>
        <div class="form-group">
          <label>Nama Prodi</label>
          <input type="text" name="nama_prodi" class="form-control" value="<?=$prd->nama_prodi?>">
        </div>
  			<div class="form-group">
  				<label>Nama Jurusan</label>
  				<select name="nama_jurusan" class="form-control">
            <option value="<?=$prd->nama_jurusan?>"><?=$prd->nama_jurusan?></option>
            <?php foreach ($jurusan as $jrs) : ?>
               <option value="<?=$jrs->nama_jurusan?>"><?=$jrs->nama_jurusan?></option>
            <?php endforeach; ?>
          </select>
  			</div>
  			<button type="submit" class="btn btn-primary"><b>Simpan</b></button>
  		</form>

  	<?php endforeach; ?>

</div>