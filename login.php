<?php 
session_start();
error_reporting(0);
include "./Library/Koneksi.php";

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Math Zone </title>
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="Style/normalize.css" type="text/css" />
<link rel="stylesheet" href="Style/permata-ui-kit.css" type="text/css" />
<link rel="stylesheet" href="Style/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
<div style="margin:auto; padding:50px 0 30px; text-align:center">
	<h1>BELAJAR MATEMATIKA</h1>
	<p></p>
</div>
<div style="margin:auto">
	<form class="rounded_3 shadow_3" action="auth.php" method="post" style="width:400px; margin:auto;">
		<fieldset class="rounded_3">
			<legend>Login</legend>
			
			<?php 
			$error = $_GET['error'];
			if ($error == 1) {
			?>
			<div class="error">Username dan Password belum diisi.</div>
			<?php } else if ($error == 2) {?>
			<div class="error">Username belum diisi.</div>
			<?php } else if ($error == 3) {?>
			<div class="error">Password belum diisi.</div>
			<?php } else if ($error == 4) {?>
			<div class="error">Username dan Password tidak terdaftar.</div>
			<?php } ?>
			
			<div>
				<label for="username">Username</label> <input id="Username" name="Username" class="wide" type="text" required="required" />
			</div>
			<div>
				<label for="password">Password</label> <input id="Password" name="Password" class="wide" type="password" required="required" />
			</div>
			
				<input class="center" type="submit" name="submit" value="Login" />
				<input class="center" type="button" value="Batal" onClick=self.history.back()>
			</div>
		</fieldset>
	</form>
</div>
<tr>
              <td><div align="center"><a href="ganti.php">Lupa Password</a></div></td>
            </tr>
</body>
</html>