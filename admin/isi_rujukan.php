<?php
include "../include/connect.php";//sambungkan ke mysql

//mengambil data dari form
$koderujukan = $_POST['kode_rujukan'];
$nama_rs = $_POST['nama_rs'];
$alamat_rs = $_POST['alamat_rs'];
$kode_pasien = $_POST['kode_pasien'];

//query untuk mengupdate data tabel rujukan
$insert = mysql_query("call insert_rujukan('$koderujukan','$nama_rs','$alamat_rs', '$kode_pasien')");

if ($insert) {
//echo "Sukses Input Data";
?><script>document.location.href="lihat_rujukan.php"</script><?php
}else{
echo "Gagal : ".mysql_error();
}
?>
