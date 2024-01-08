<?php
	switch($_GET['donilai']){
	default:
?>
	<h4 class="alert_info">Nilai Siswa</h4>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Daftar Nilai Siswa</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
		<thead>
			<tr>
				<th class="header">No</th>
				<th class="header">Judul Tugas</th>
				<th class="header">Nama Siswa</th>
				<th class="header">Nilai</th>
				<th class="header">aksi</th>
			</tr>
		</thead>
		<tbody>
	<?php
		$sql = mysql_query("SELECT nilai.*, tugas.Nama_file, siswa.Nama FROM nilai,tugas,siswa WHERE tugas.ID_soal=nilai.ID_soal 
							AND siswa.No_induk=nilai.No_induk ORDER BY id_nilai ASC");
		$no =  1;
		while ($r=mysql_fetch_array($sql)){ ?>
		<tr><td><?php echo $no; ?></td>
			<td><?php echo $r['Nama_file']; ?></td>
			<td><?php echo $r['Nama']; ?></td>
			<td><?php echo $r['nilai']; ?></td>
			<td><a href="aksi.php?act=nilai&donilai=hapus&id=<?php echo $r['id_nilai']; ?>"><img src="images/icn_trash.png" /></a></td>
		</tr>
		<?php $no++; } ?>
		</tbody>
		</table>
		</div>
		</article>
	<?php break; }?>

		
			