<?php
include "../include/connect.php";//sambungkan ke mysql

//mengambil data dari form
$kodeobat = $_POST['kodeobat'];
$nama_obat = $_POST['nama_obat'];
$jenis_obat = $_POST['jenis_obat'];
$stok = $_POST['stok'];

//query untuk mengupdate data tabel cleaning service
$update = mysql_query("UPDATE obat SET  nama_obat='$nama_obat', jenis_obat='$jenis_obat', stok='$stok' WHERE kode_obat='$kodeobat'");

if ($update) {
//echo "sukses update";
?><script>document.location.href="lihat_ob.php"</script><?php
}else{
echo "Gagal : ".mysql_error();
}
?>