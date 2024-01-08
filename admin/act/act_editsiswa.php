<link rel="stylesheet" href="kalender/calendar.css" type="text/css">
<script type="text/javascript" src="kalender/calendar.js"></script>
<script type="text/javascript" src="kalender/calendar2.js"></script>
<?php
	switch($_GET['dosiswa']){
	default:
?>

	<h4 class="alert_info">User</h4>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Daftar Siswa</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
		<thead>
			<tr><th class="header">No Induk Siswa</th><th class="header">Nama Siswa</th><th class="header">Jenis Kelamin</th><th class="header">Tempat Lahir</th><th class="header">Tanggal Lahir</th><th class="header">Kelas</th><th class="header">aksi</th></thead>
			<tbody>
	<?php
		$sql = mysql_query("SELECT * FROM siswa ORDER BY No_induk");
		while ($r=mysql_fetch_array($sql)){ ?>
		<tr><td><?php echo $r['No_induk']; ?></td>
			<td><?php echo $r['Nama']; ?></td>
			<td><?php echo $r['Jekel']; ?></td>
			<td><?php echo $r['Tempat']; ?></td>
			<td><?php echo $r['Tgl']; ?></td>
			<td><?php echo $r['Kelas']; ?></td>
			<td><a href="?act=siswa&dosiswa=editsiswa&id=<?php echo $r['No_induk']; ?>"><img src="images/icn_edit.png" /></a>
				<a href="aksi.php?act=siswa&dosiswa=hapus&id=<?php echo $r['No_induk']; ?>"><img src="images/icn_trash.png" /></a>
			</td></tr>
			<?php } ?>
		</tbody>
		</table>
		</div>
		</article>
	<?php break; ?>

<?php 	case "editsiswa": 
		$edit = mysql_query("SELECT * FROM siswa WHERE No_induk='$_GET[id]'");
		$d = mysql_fetch_array($edit);
		?>
		<article class="module width_full">
			<header><h3>Update Siswa</h3></header>
	<form method="POST" enctype="multipart/form-data" action="aksi.php?act=siswa&dosiswa=update">
		<div class="module_content">
			<fieldset>
				<label>No_induk</label>
				<input onfocus=this.value="" type="text" name="id" value="<?php echo $d['No_induk']; ?>">
			</fieldset>
			<fieldset>
				<label>Nama Siswa</label>
				<input type="text" name="nama" value="<?php echo $d['Nama']; ?>">
			</fieldset>
			<fieldset>
				<td><div class="tabtxt">Jenis Kelamin</div></td>
				 <td><select name="jk" id="jk">
				<option value="L">L</option>
				<option value="P">P</option>
				</select>
					&nbsp;
				<label for="jk"></label></td>
			</fieldset>
			<fieldset>
				<td>Tempat/Tanggal Lahir</td>
				<td><label for="tmp_lahir"></label>
				<input type="text" name="tmp_lahir" id="tmp_lahir" />
					/
				<input name="tgl" style="width:80px" type="textfield" id="tgl" class="tfield" readonly="readonly" />
				<a href="JavaScript:;" onclick="return showCalendar('tgl', 'dd-mm-y');"><img border="0" src="../Image/ico_calendar.gif" align="top" /></a></td>
			</fieldset>
			<fieldset>
				<label>Kelas</label>
				<input type="text" name="kls" value="<?php echo $d['Kelas']; ?>">
			</fieldset>
			
<div class="clear"></div>
<footer>
	<div class="submit_link">
		<input type="submit" class="alt_btm" name="submit" value="Simpan" />
		<input type="button" value="Batal" onClick=self.history.back() />
	</div>
</footer>
	</form>
				
	</div>
</article>
	<?php break; } ?>
	
			