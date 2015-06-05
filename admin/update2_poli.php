<?php
include "../include/connect.php";//sambung ke mysql

//mengambil data dari form inputan
$kodepoli = $_POST['kodepoli'];
$nama_poli = $_POST['nama_poli'];
$dokter = $_POST['dokter'];

//mengambil kode dokter untuk dimasukkan ke dalam tabel poli_lab
$query1 = mysql_query("SELECT kode_dokter FROM dokter WHERE nama_dokter = '$dokter'");
$kode_dokter = mysql_fetch_array($query1);

//query update data poli_lab
$update = mysql_query("UPDATE poli_lab SET kode_dokter = '$kode_dokter[kode_dokter]', nama_poli = '$nama_poli' WHERE kode_poli = $kodepoli");

if ($update){
//echo "Sukses update data";
?><script>document.location.href="lihat_poli.php"</script><?php
}else{
echo "Gagal : ".mysql_error();
}
?>
