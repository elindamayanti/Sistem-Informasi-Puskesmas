<?php
include "../include/connect.php";//sambungkan ke mysql

//mengambil data dari form inputan
$kode_poli = $_POST['kode_poli'];
$nama_poli = $_POST['nama_poli'];
$dokter = $_POST['dokter'];

$query1 = mysql_query("SELECT kode_dokter FROM dokter WHERE nama_dokter = '$dokter'");
$kode_dokter = mysql_fetch_array($query1);

$query2 = mysql_query("INSERT INTO poli_lab (kode_poli, kode_dokter, nama_poli) VALUES ('$kode_poli','$kode_dokter[kode_dokter]','$nama_poli')");

if ($query2){
//echo "Sukses Input data suster";
?><script>document.location.href="lihat_poli.php"</script><?php
}else{
echo "Gagal : ".mysql_error();
}
?>
