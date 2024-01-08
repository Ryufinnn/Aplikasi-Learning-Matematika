<?php
	switch($_GET['docatsoal']){
	default: ?>
	<h4 class="alert_info">Daftar Kategori Soal</h4>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Daftar Kategori</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
		<thead>	
		<tr><th class="header">No</th><th class="header">Nama Kategori</th><th class="header">Aksi</th></tr></thead>
		<tbody>
	<?php
		$sql = mysql_query("SELECT *FROM kategori_soal ORDER BY ID_kategori DESC");
		$no = 1;
		while ($r=mysql_fetch_array($sql)){ ?>
		<tr><td><?php echo $no; ?></td>
			<td><?php echo $r['Nama_kategori']; ?></td>
			<td><a href="?action=catsoal&docatsoal=editkategori&id=<?php echo $r['ID_kategori']; ?>"><img src="images/icn_edit.png" /></a>
				<a href="aksi.php?action=catsoal&docatsoal=hapus&id=<?php echo $r['ID_kategori']; ?>"><img src="images/icn_trash.png" /></a>
			</td>
		</tr>
		<?php $no++; } ?>
		</tbody>
	</table>
	</div>
	</article><br class="clear" />
			<input class="button" type="button" value="Tambah Kategori" onClick=location.href="?action=catsoal&docatsoal=addkategori">
	<?php break; ?>
	
 <?php case "addkategori": ?>
	<h4 class="alert_info">Tambah Kategori Soal</h4>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Daftar Kategori Soal</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
	<form method="POST" action="aksi.php?action=catsoal&docatsoal=input">
			<tr>
				<td>Nama Kategori</td>
				<td><input type="text" name="nama_kategori"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="submit" value="Simpan" />
					<input type="button" value="Batal" onClick=self.history.back() />
				</td>
			</tr>
		</table>
	</form>
	</div>
	</article>
	<?php break; ?>
	
<?php case "editkategori":
	$edit = mysql_query("SELECT * FROM kategori_soal WHERE ID_kategori='$_GET[id]'");
	$r = mysql_fetch_array($edit);
	?>
	<h4 class="alert_info">Tambah Kategori Soal</h4>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Daftar Kategori Soal</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
	<form method="POST" action="aksi.php?act=catsoal&docatsoal=update">
		<input type="hidden" name="id" value="<?php echo $r['ID_kategori']; ?>">
			<tr>
				<td>Edit Kategori</td>
				<td><input type="text" name="nama_kategori" value="<?php echo $r['Nama_kategori']; ?>" /></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="Update" />
					<input type="button" value="Batal" onClick=self.history.back() />
				</td>
			</tr>
		</table>
	</form>
	</div>
	</article>
<?php break; } ?>