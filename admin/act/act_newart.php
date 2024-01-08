		<article class="module width_full">
			<header><h3>Post New Course</h3></header>
	<form enctype="multipart/form-data" method="POST" action="aksi.php?act=materi&do=input">
	<div class="module_content">
		<fieldset>
			<label>Judul Materi</label>
			<input type="text" name="nama_artikel">
		</fieldset>
		<fieldset>
			<textarea rows="12" id="isi" name="isi"></textarea>
		<script type="text/javascript">
			//<![CDATA[
			CKEDITOR.replace( 'isi',
			{
			fullPage : true,
			extraPlugins : 'docprops'
			});
			//]]>
		</script>
		</fieldset>
		<fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
		<label>Category</label>
		<select name="cat" style="width:92%;">
				<?php 
			$query = mysql_query("SELECT * FROM category");
			while ($t = mysql_fetch_array($query)){ ?>
				<option value="<?php echo $t['id']; ?>"><?php echo $t['category']; ?></option>
		<?php } ?>
		</select>
		</fieldset>
<div class="clear"></div>
<footer>
	<div class="submit_link">
		<input type="submit" class="alt_btm" name="submit" value="Simpan" />
		<input type="button" value="Batal" onClick=self.history.back()>
	</div>
</footer>
	</form>
				
	</div>
</article>