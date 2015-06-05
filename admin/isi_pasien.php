<?php
include "../include/connect.php";//sambungkan ke mysql

//mengambil nilai dari form
$kode_pasien = $_POST['kode_pasien'];
$tgl_masuk = $_POST['tgl_masuk'];
$nama_pasien = ucwords($_POST['nama_pasien']);//fungsi ucwords untuk membuat huruf pertama pada tiap kata menjadi kapital
$tgl_lahir = $_POST['tgl_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = ucwords($_POST['alamat']);
$usia = $_POST['usia'];
$jenis_pasien = $_POST['jenis_pasien'];
$ruangan = $_POST['ruangan'];
$jenis_ruangan = $_POST['jenis_ruangan'];
$penyakit = ucwords($_POST['penyakit']);
$kode_inap = $_POST['kode_inap'];

$sakit=strtolower($penyakit);//fungsi strtolower untuk membuat semua huruf menjadi huruf kecil
switch($sakit){ //penyelekasian kondisi
case "Kontrol Gigi" : $kode_dokter = "10001";break;
case "melahirkan" : $kode_dokter = "10004";break;
case "Bedah Luka" : $kode_dokter = "10005";break;
case "Radang" : $kode_dokter = "10002";break;
case "Katarak" : $kode_dokter = "10007";break;
case "Imunisasi" : $kode_dokter = "10006";break;
case "Cek Up" : $kode_dokter = "10003";break;
case "Urat" : $kode_dokter = "10008";break;
default : $kode_dokter="10010";
}

//mengambil kode_masuk terbesar dari tabel tgl masuk
$kode_masuk_maks = mysql_query("SELECT MAX(kode_masuk) AS maks FROM tgl_masuk");
$kode_maks = mysql_fetch_array($kode_masuk_maks);//memecah hasil kedalam array
$kode_masuk = $kode_maks['maks']+1;//kode masuk maks ditambah 1 agar menjadi kode masuk baru

//query untuk memasukkan data ke dalam tabel pasien
$hasil = mysql_query("call insert_pasien('$kode_pasien', '$nama_pasien', '$tgl_lahir', '$tempat_lahir', '$jenis_kelamin', '$alamat', '$usia', '$jenis_pasien', '$penyakit')");

//query untuk memasukkan data ke dalam tabel tgl_masuk
$hasil2 = mysql_query("INSERT INTO tgl_masuk VALUES('$kode_masuk','$kode_pasien','$kode_dokter','$ruangan','$tgl_masuk')");

//query untuk memasukkan data ke dalam tabel rawat_inap
$hasil4 = mysql_query("INSERT INTO rawat_inap VALUES('$kode_inap','$kode_pasien','$kode_dokter','$ruangan')");
/*
//jika semua query berhasil
if ($hasil && $hasil2 && $hasil3 && $hasil4){
//echo "Sukses";
?><script>document.location.href="lihat_pasien.php"</script><?php
}
else{
echo "gagal 1:  ".mysql_error();//tapi jika gagal maka tampilkan kesalahan query
} */
?>
