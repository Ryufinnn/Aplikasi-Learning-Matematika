<?php
	switch($_GET['doadmin']){
	default: ?>
	<h4 class="alert_info">Data User</h4>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Daftar User</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
		<thead>	
		<tr><th class="header">ID User</th><th class="header">Username</th><th class="header">Password</th><th class="header">Role</th><th class="header">Aksi</th></tr></thead>
		<tbody>
	<?php
		$sql = mysql_query("SELECT * FROM user ORDER BY No_ID DESC");
		while ($r=mysql_fetch_array($sql)){ ?>
		<tr><td><?php echo $r['No_ID']; ?></td>
			<td><?php echo $r['Username']; ?></td>
			<td><?php echo $r['Password']; ?></td>
			<td><?php echo $r['Level']; ?></td>
			<td><a href="?act=admin&doadmin=editadmin&id=<?php echo $r['No_ID']; ?>"><img src="images/icn_edit.png" /></a>
				<a href="aksi.php?act=admin&doadmin=hapus&id=<?php echo $r['No_ID']; ?>"><img src="images/icn_trash.png" /></a>
			</td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
	</div>
	</article><br class="clear" />
			<input class="button" type="button" value="Tambah" onClick=location.href="?act=admin&doadmin=addadmin">
	<?php break; ?>
	
 <?php case "addadmin": ?>
	<h4 class="alert_info">Tambah Data User</h4>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Entry Data User</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
	<form method="POST" action="aksi.php?act=admin&doadmin=input">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" size=25 maxlength=25></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" size=25 maxlength=25></td>
			</tr>
				<td>Role</td>
				<td>Role</td>
				<td><?php echo "<input type='radio' name='rlevel' value='admin'>Admin"; ?>
				<?php echo "<input type='radio' name='rlevel' value='siswa'>Siswa"; ?></td>
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
	
<?php case "editadmin":
	$edit = mysql_query("SELECT * FROM user WHERE No_ID='$_GET[id]'");
	$r = mysql_fetch_array($edit);
	?>
	<h4 class="alert_info">Update Data User</h4>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Entry Data User</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
	<form method="POST" action="aksi.php?act=admin&doadmin=update">
		<input type="hidden" name="id" value="<?php echo $r['No_ID']; ?>">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $r['Username']; ?>" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $r['Password']; ?>" /></td>
			</tr>
			<tr>
				<td>Role</td>
				<td><?php echo "<input type='radio' name='rlevel' value='admin'>Admin"; ?>
				<?php echo "<input type='radio' name='rlevel' value='siswa'>Siswa"; ?></td>
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