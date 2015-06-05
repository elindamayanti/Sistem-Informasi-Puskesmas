<?php
include "../include/connect.php";//sambung ke mysql

//mengambil data dari form inputan
$kode_jaga = $_POST['kode_jaga'];
$dokter = $_POST['dokter'];
$poli = $_POST['poli_lab'];
$recept = $_POST['receptionist'];
$waktujaga = ucwords($_POST['waktujaga']);

//mengambil kode dokter untuk dimasukkan ke dalam tabel jadwal_jaga
$kddokter = mysql_query("SELECT kode_dokter FROM dokter WHERE nama_dokter = '$dokter'");
$kdpoli = mysql_query("SELECT kode_poli FROM poli_lab WHERE nama_poli = '$poli'");
$kdrecept = mysql_query("SELECT kode_receptionist FROM receptionist WHERE nama_receptionist = '$recept'");

//memecah hasil kedalam array 
$kode_dokter = mysql_fetch_array($kddokter);
$kode_poli = mysql_fetch_array($kdpoli);
$kode_recept = mysql_fetch_array($kdrecept);

//query untuk update data jadwal jaga
$query = mysql_query("UPDATE jadwal_jaga SET kode_dokter = '$kode_dokter[kode_dokter]', kode_poli = '$kode_poli[kode_poli]', kode_receptionist = '$kode_recept[kode_receptionist]', waktu_jaga = '$waktujaga' WHERE kode_jaga = '$kode_jaga'");

if ($query){
//echo "Sukses Update tabel jadwal jaga";
?><script>document.location.href="lihat_jadwal.php"</script><?php
}else{
echo "Gagal : ".mysql_error();
}
?>
