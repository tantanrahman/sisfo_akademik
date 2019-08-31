<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
    	<i class="fa fa-eye"></i>
    	<b>Detail Mata Kuliah</b>
  	</div>

  	<table class="table table-bordered table-hover table-dark">

  		<?php foreach ($detail as $dt) : ?>
 		<tr>
 			<th>Kode Mata Kuliah</th>
 			<td><?=$dt->kode_matakuliah?></td>
 		</tr>
 		<tr>
 			<th>Nama Mata Kuliah</th>
 			<td><?=$dt->nama_matakuliah?></td>
 		</tr>
 		<tr>
 			<th>SKS</th>
 			<td><?=$dt->sks?></td>
 		</tr>
 		<tr>
 			<th>Semester</th>
 			<td><?=$dt->semester?></td>
 		</tr>
 		<tr>
 			<th>Nama Program Studi</th>
 			<td><?=$dt->nama_prodi?></td>
 		</tr>
 		<?php endforeach; ?>
  	</table>

  	<?=anchor('administrator/matakuliah','<div class="btn btn-primary btn-sm"><b>Kembali</b></div>')?>

</div>