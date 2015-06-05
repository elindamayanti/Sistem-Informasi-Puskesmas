<?php
include "../include/connect.php";//sambungkan ke mysql

//mengambil nilai kode dari address bar
$kodepoli = $_GET['kdpoli'];

//Query untuk menghapus data poli_lab
$query = mysql_query("DELETE FROM poli_lab WHERE kode_poli = '$kodepoli'");

if ($query){
?>
<script>document.location.href="lihat_poli.php"</script>
<?php
}else{
echo "gagal : ".mysql_error();
}
?>
