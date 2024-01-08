<?php
include_once 'Library/tanggal.php'
?>
<link rel="stylesheet" href="kalender/calendar.css" type="text/css">
<script type="text/javascript" src="kalender/calendar.js"></script>
<script type="text/javascript" src="kalender/calendar2.js"></script>
		<article class="module width_full">
			<header><h3>Add New User</h3></header>
	<form enctype="multipart/form-data" method="POST" action="aksi.php?act=siswa&dosiswa=input">
	<div>
		<div style="float:left;">
			<table class="detail-siswa" >
					<tr><td>No Induk Siswa</td><td><input type="text" name="txtnosiswa" size=25 maxlength=25></td></tr>
					<tr><td>Nama Siswa</td><td><input type="text" name="txtnama" size=25 maxlength=25></td></tr>
					<tr>
					  <td><div class="tabtxt">Jenis Kelamin</div></td>
					  <td><select name="jk" id="jk">
						<option value="L">L</option>
						<option value="P">P</option>
					  </select>
						&nbsp;
					  <label for="jk"></label></td>
					</tr>
					<tr>
					  <td>Tempat/Tanggal Lahir</td>
					  <td><label for="tmp_lahir"></label>
						<input type="text" name="tmp_lahir" id="tmp_lahir" />
						/
						<input name="tgl" style="width:80px" type="textfield" id="tgl" class="tfield" readonly="readonly" />
						<a href="JavaScript:;" onclick="return showCalendar('tgl', 'dd-mm-y');"><img border="0" src="../Image/ico_calendar.gif" align="top" /></a></td>
					</tr>
					<tr><td>Kelas</td><td><input type="text" name="txtkls" size=25 maxlength=25></td></tr>
				<tr></tr>
				<tr>
				<td></td>
				<td>
				<input type="submit" name="save" value="SIMPAN">
				<input type="reset" name="cancel" value="BATAL" onClick=self.history.back()>
				</td>
				</tr>
				<br>
				<br>
				
			</table>
			</form>
		</div>
		<div style="clear:both;"></div>
	</div>
<br>
<br>
