<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Math Zone</title>

</head>
<?php  
	include "./Library/Koneksi.php";
	if(isset($_GET['q']) && $_GET['q']){  
	   
	    $q = $_GET['q'];  
	    $sql = "select * from user where Username like '%$q%' ";  
    $result = mysql_query($sql);  
	    if(mysql_num_rows($result) > 0){  
	        ?>  
        <?php  
    }else{  
	        echo 'Data not found!';  
	    }  
	}  
	$no=1;
	?>  
     <?php  
	            while($r = mysql_fetch_array($result)){?>  

<body>
<div style="margin:auto">
	<form class="rounded_3 shadow_3" action="" method="get">
		<fieldset class="rounded_3">
			<legend>Ganti Password</legend>
			<table>
			<tr><td>
			<div>
				<label for="username">Username</label></td><td> <input id="username" name="username" class="wide" type="text" required="required" value="<?php echo $r['Username'];?>"/>  <label>
				  <input type="submit" name="Submit" value="CEK" />
				  </label></td>
			</div></tr>
			<tr><td>
			<div>
				<label for="passbaru">Password</label> </td><td><input id="Password" name="passbaru" class="wide" type="text" value="<?php echo $r['Password'];?>"/></td>
			</div>
			</tr><tr><td>
				</td><td>
				<input class="center" type="button" value="Back" onClick=self.history.back()></td>
				</tr></table>
			</div>
		</fieldset>
	</form>
</div>
</body>
</html>
<?php
}
?>