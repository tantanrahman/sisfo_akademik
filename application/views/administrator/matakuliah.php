<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
    	<i class="fas fa-fw fa-university"></i>
    	<b>Mata Kuliah</b>
  	</div>

  	<?=$this->session->flashdata('pesan')?>
  	<?=anchor('administrator/matakuliah/tambah_matakuliah','<button class="btn btn-sm btn-primary mb-3">
	  		<i class="fas fa-plus fa-sm"></i><b> Tambah Matakuliah</b>
	  	</button>')?>

	<table class="table table-hover table-bordered table-dark">
		<tr>
			<th>NO</th>
			<th>KODE MATAKULIAH</th>
			<th>NAMA MATAKULIAH</th>
			<th>PROGRAM STUDI</th>
			<th colspan="3">AKSI</th>
		</tr>
		<?php 
			$no=1;
			foreach ($matakuliah as $mk) :
		?>
		<tr>
			<td><?=$no++?></td>
			<td><?=$mk->kode_matakuliah?></td>
			<td><?=$mk->nama_matakuliah?></td>
			<td><?=$mk->nama_prodi?></td>
			<td width="20px"><?=anchor('administrator/matakuliah/detail/'.$mk->kode_matakuliah,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>')?></td>
			<td width="20px"><?=anchor('administrator/matakuliah/update/'.$mk->kode_matakuliah,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
  			<td width="20px"><?=anchor('administrator/matakuliah/delete/'.$mk->kode_matakuliah,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>
		</tr>
		<?php endforeach; ?>
	</table>

</div>