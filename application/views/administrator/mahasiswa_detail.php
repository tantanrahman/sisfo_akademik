<div class="container-fluid">
	<div class="alert alert-success" role="alert">
    	<i class="fas fa-eye"></i>
    	<b>Detail Mahasiswa</b>
  	</div>

  	<table class="table table-bordered table-hover table-dark">
  		<?php foreach ($detail as $dt) : ?>

  		<img class="mb-3" src="<?=base_url('assets/uploads/').$dt->photo?>" style="width: 20%">

  		<tr>
  			<td>NIM</td>
  			<td><?=$dt->nim?></td>
  		</tr>
  		<tr>
  			<td>Nama Lengkap</td>
  			<td><?=$dt->nama_lengkap?></td>
  		</tr>
  		<tr>
  			<td>Alamat</td>
  			<td><?=$dt->alamat?></td>
  		</tr>
  		<tr>
  			<td>Email</td>
  			<td><?=$dt->email?></td>
  		</tr>
  		<tr>
  			<td>Telepon</td>
  			<td><?=$dt->telepon?></td>
  		</tr>
  		<tr>
  			<td>Tempat Lahir</td>
  			<td><?=$dt->tempat_lahir?></td>
  		</tr>
  		<tr>
  			<td>Tanggal Lahir</td>
  			<td><?=$dt->tanggal_lahir?></td>
  		</tr>
  		<tr>
  			<td>Jenis Kelamin</td>
  			<td><?=$dt->jenis_kelamin?></td>
  		</tr>
  		<tr>
  			<td>Nama Prodi</td>
  			<td><?=$dt->nama_prodi?></td>
  		</tr>
  		<?php endforeach; ?>
  	</table>

  	<?=anchor('administrator/mahasiswa','<div class="btn btn-sm btn-primary"><b>Kembali</b></div>')?><br><br><br><br>
</div>