
<?php 
//konek ke datanse
include 'koneksi.php';
//oreder buat nampilin data
$sql = mysql_query ('SELECT * from isi_berita') or die (mysql_error());
//var array
$response = array ();
//cek data pembeli ada atau tidak
if (mysql_num_rows($sql) > 0) {
	//bikin variable array di dalam array respon
	$response['jurnal']= array();
	//loop data pembeli
	while ($row = mysql_fetch_array($sql)) {
		//bikin var arrya yang untuk menampung data pembeli sementara sebelum di masukan ke data array response  dana jadi data json
		$data= array();
		//memasukan value pembeli kedalam array data
		$data['id_konten']=$row['id_konten'];
		$data['judul_konten']=$row['judul_konten'];
		$data['isi_konten']=$row['isi_konten'];
		$data['gambar_konten']=$row['gambar_konten'];
		//akhir dari masukin data
		//masukin array data pembeli sementara kedalam arrya respon
		array_push($response['jurnal'],$data);
	}
	//nampilin hasil req dari andro if 1 berhasil
	$response['result']=1;
	$response['msg']="semua data berita";
	//jadiin array response jadi json
	echo json_encode($response);
}else{
	$response['result']=0;
$response['msg']="tidak ada data guru";
echo json_encode($response);
}



 ?>