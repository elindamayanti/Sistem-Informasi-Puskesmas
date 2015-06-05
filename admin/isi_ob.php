<?php
include "../include/connect.php";//sambungkan ke mysql

//mengambil data dari form
$kodeobat = $_POST['kodeobat'];
$nama_obat = $_POST['nama_obat'];
$jenis_obat = $_POST['jenis_obat'];
$stok = $_POST['stok'];

//query untuk mengupdate data tabel cleaning service
$insert = mysql_query("INSERT INTO obat (kode_obat, nama_obat, jenis_obat, stok) VALUES('$kodeobat','$nama_obat','$jenis_obat','$stok')");

if ($insert) {
//echo "Sukses Input Data";
?><script>document.location.href="lihat_ob.php"</script><?php
}else{
echo "Gagal : ".mysql_error();
}
?>
