<?php
	switch($_GET['dodownload']){
	default:
?>
	<h4 class="alert_info">File Download</h4>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Daftar File</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
		<thead>
			<tr>
				<th class="header">No</th>
				<th class="header">ID</th>
				<th class="header">Tanggal Upload</th>
				<th class="header">Nama File</th>
				<th class="header">Sumber</th>
				<th class="header">Type File</th>
				<th class="header">Ukuran File</th>
				<th class="header">aksi</th>
			</tr>
		</thead>
		<tbody>
	<?php
		$sql = mysql_query("SELECT * FROM download ORDER BY ID DESC");
		$no =  1;
		while ($r=mysql_fetch_array($sql)){ ?>
		<tr><td><?php echo $no; ?></td>
			<td><?php echo $r['ID']; ?></td>
			<td><?php echo $r['Tanggal']; ?></td>
			<td><?php echo $r['Nama_file']; ?></td>
			<td><?php echo $r['Sumber']; ?></td>
			<td><?php echo $r['Type_file']; ?></td>
			<td><?php echo $r['Ukuran_file']; ?></td>
			<td><a href="aksi.php?act=download&dodownload=hapus&id=<?php echo $r['ID']; ?>"><img src="images/icn_trash.png" /></a></td>
		</tr>
		<?php $no++; } ?>
		</tbody>
		</table>
		</div>
		</article>
	<?php break; }?>

		
			