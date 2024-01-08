<?php
	switch($_GET['doquestion']){
	default:
?>
	
	<h4 class="alert_info">File Tugas</h4>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Daftar Tugas</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
		<thead>
			<tr>
				<th class="header">No</th>
				<th class="header">Tanggal Upload</th>
				<th class="header">Nama Tugas</th>
				<th class="header">Kategori</th>
				<th class="header">Type File</th>
				<th class="header">Ukuran File</th>
				<th class="header">aksi</th>
			</tr>
		</thead>
		<tbody>
	<?php
		$sql = mysql_query("SELECT kategori_soal.ID_kategori, kategori_soal.Nama_kategori, tugas.* FROM tugas, kategori_soal WHERE kategori_soal.ID_kategori=tugas.ID_kategori ORDER BY ID_soal DESC");
		$no =  1;
		while ($r=mysql_fetch_array($sql)){ ?>
		<tr><td><?php echo $no; ?></td>
			<td><?php echo $r['Tanggal']; ?></td>
			<td><?php echo $r['Nama_file']; ?></td>
			<td><?php echo $r['Nama_kategori']; ?></td>
			<td><?php echo $r['Type_file']; ?></td>
			<td><?php echo $r['Ukuran_file']; ?></td>
			<td><a href="aksi.php?act=tugas&doquestion=hapus&id=<?php echo $r['ID_soal']; ?>"><img src="images/icn_trash.png" /></a></td>
		</tr>
		<?php $no++; } ?>
		</tbody>
		</table>
		</div>
		</article>
	<?php break; }?>