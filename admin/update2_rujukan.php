<?php
include "../include/connect.php";//sambungkan ke mysql

//mengambil data dari form
$koderujukan = $_POST['koderujukan'];
$nama_rs = $_POST['nama_rs'];
$alamat_rs = $_POST['alamat_rs'];
$kode_pasien = $_POST['kode_pasien'];

$kdpasien = mysql_query("SELECT kode_pasien FROM pasien WHERE nama_pasien = '$kode_pasien'");

$kode_pasien = mysql_fetch_array($kdpasien);

//query untuk mengupdate data tabel rujukan
$update = mysql_query("UPDATE rujukan SET  nama_rs = '$nama_rs', alamat_rs = '$alamat_rs', kode_pasien = '$kode_pasien[kode_pasien]' WHERE kode_rujukan = '$koderujukan'");

if ($update) {
//echo "sukses update";
?><script>document.location.href="lihat_rujukan.php"</script><?php
}else{
echo "Gagal : ".mysql_error();
}
?>
