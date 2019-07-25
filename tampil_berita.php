<?php
//include file koneksi
require 'koneksi.php';

//buat query perintah untuk menampilkan semua data secara desc berdsrkan ID
$sql_get_berita = "SELECT * FROM tb_berita ORDER BY id DESC";
$query = $conn->query($sql_get_berita);

//Buat variabel penampung array sementara
$response_data = null;

while($data = $query->fetch_assoc()){
	//tambahkan data yg diseleksi ke dalam array
	$response_data[] = $data;
}

// Cek apakah datanya null???
if(is_null($response_data)){
	//jika ya buat status utk response jadi false
	$status = false;
}
else{
	$status = true;
}

// Kemudian set type header response ke Json
header('Content-Type:application/json');
// Masukkan data ke dalam array
$response = ['status' => $status, 'berita' => $response_data];

// Menampilkan dan mengconvert ke format Json
echo json_encode($response);