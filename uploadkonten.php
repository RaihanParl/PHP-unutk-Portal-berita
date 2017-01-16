<!DOCTYPE html>
<?php 
	include 'koneksi.php';
	include 'proses.php';
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upload konten</title>
	<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
<form action="proses.php" method="post" enctype="multipart/form-data">
	<table class="table" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td width="100">Judul konten</td>
		<td><input type="text" name="judul" /></td>
	</tr>
	<tr>
	<tr><tr>

	<tr>
		<td width="100">File</td>
		<td><input type="file" name="gambar" /></td>
	</tr>
	<tr>
		<td width="100" valign="top">Isi konten</td>
		<td><textarea name="isi" cols="30" rows="3"></textarea></td>
		<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'isi' );
            </script>
	</tr>
<tr></tr>
	<tr>
		<td></td>
		<td><input type="submit" name="simpan" value="Simpan" /></td>
	</tr>
</table>
	
</form>
	  
</body>
</html>