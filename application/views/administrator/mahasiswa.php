<div class="container-fluid">

	<div class="alert alert-success" role="alert">
    	<i class="fas fa-fw fa-university"></i>
    	<b>Mahasiswa</b>
  	</div>

  	<?=$this->session->flashdata('pesan')?>
  	<?=anchor('administrator/mahasiswa/tambah_mahasiswa','<button class="btn btn-sm btn-primary mb-3">
	  		<i class="fas fa-plus fa-sm"></i><b> Tambah Mahasiswa</b>
	  	</button>')?>

	<table class="table table-bordered table-hover table-dark">
		<tr>
			<th width="20px">NO</th>
			<th>NAMA LENGKAP</th>
			<th>ALAMAT</th>
			<th>EMAIL</th>
			<th colspan="3">AKSI</th>
		</tr>
		<?php
			$no=1;
			foreach ($mahasiswa as $mhs) :
		?>
		<tr>
			<td><?=$no++?></td>
			<td><?=$mhs->nama_lengkap?></td>
			<td><?=$mhs->alamat?></td>
			<td><?=$mhs->email?></td>
			<td width="20px"><?=anchor('administrator/mahasiswa/detail/'.$mhs->id,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>')?></td>
			<td width="20px"><?=anchor('administrator/mahasiswa/update/'.$mhs->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
  			<td width="20px"><?=anchor('administrator/mahasiswa/delete/'.$mhs->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>