s<?php 
	include 'koneksi.php';
	$eror		= false;
	$folder		= 'gambarkonten/';
	//type file yang bisa diupload
$file_type	= array('jpg','jpeg','png','PNG','gif','bmp','doc','docx','xls','xlsx','sql');
	//tukuran maximum file yang dapat diupload
	$max_size	= 1000000; // 1MB
	if(isset($_POST['simpan'])){
	$isi = $_POST['isi'];
	$judul = $_POST['judul'];

	//Mulai memorises data
	$file_name	= $_FILES['gambar']['name'];
	$file_size	= $_FILES['gambar']['size'];
	//cari extensi file dengan menggunakan fungsi explode
	$explode	= explode('.',$file_name);
$extensi	= $explode[count($explode)-1];

		//check apakah type file sudah sesuai
		if(!in_array($extensi,$file_type)){
			$eror   = true;
			$pesan .= '-hanya bisa mamsukan gambar dengan ekstensi jpg,jpeg,png,PNG <br />';
		}
		if($file_size > $max_size){
			$eror   = true;
			$pesan .= '- Ukuran file melebihi batas maximum<br />';
		}
		//check ukuran file apakah sudah sesuai

		if($eror == true){
			echo '<div id="eror">'.$pesan.'</div>';
		}
		else{
			//mulai memproses upload file
			if(move_uploaded_file($_FILES['gambar']['tmp_name'], $folder.$file_name)){
				//catat nama file ke database
				$catat = mysql_query('INSERT INTO isi_berita(gambar_konten,isi_konten,judul_konten)
				 values ("'.$file_name.'","'.$isi.'","'.$judul.'")');
				echo '<p>Data berhasil disimpan</p>';
				echo '<p><a href="upber.php">Kembali</a></p>';
			} else{
				echo '<p>Data gagal disimpan</p>';
				echo '<p><a href="form_upload.php">Kembali</a></p>';
			}
		}
	}
 ?>