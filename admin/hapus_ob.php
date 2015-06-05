<?php
include "../include/connect.php";//sambungkan ke mysql

$kodeobat = $_GET['kodeob'];

$hapus = mysql_query("DELETE FROM obat WHERE kode_obat = '$kodeobat'");

if ($hapus){
//echo "Sukses Hapus";
?><script>document.location.href="lihat_ob.php"</script><?php
}else{
echo "Gagal : ".mysql_error();
}
?>
