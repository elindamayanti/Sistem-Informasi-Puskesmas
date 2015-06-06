<?php
include "../include/connect.php"; //sambung ke database

//mengambil data dari tabel poli
$sql = mysql_query("SELECT * FROM poli_lab ORDER BY kode_poli");
if (!$sql) { // add this check.
    die('Invalid query: ' . mysql_error());
}

?>
 <div align="Center"> <!-- tabel rata samping -->
 <h2><u>Data Poli Lab </u></h2>
  <div align="Left"> <!-- tabel rata samping -->
<table width="700" height="27" border="1" >
  <tr bgcolor="#6699CC">
    <th width="115" scope="col">Kode Poli Lab </th>
    <th width="140" scope="col">Nama Poli Lab</th>
    <th width="180" scope="col">Nama Dokter </th>
    <th width="50" scope="col" colspan="2">Opsi</th>
  </tr>
  
 <?php
 $warna='';
while ($poli = mysql_fetch_array($sql)){
 include "../include/warna_tabel.php";
 echo "<tr bgcolor=$warna>
 <td>$poli[kode_poli]</td>
 <td>$poli[nama_poli]</td>";
 //mengambil nama dokter
$sql2 = mysql_query("SELECT nama_dokter FROM dokter WHERE kode_dokter = $poli[kode_dokter]");
$dokter = mysql_fetch_array($sql2);//pecah hasil query ke dalam array
echo "<td>$dokter[nama_dokter]</td>
<td><a href=update_poli.php?kdpoli=$poli[kode_poli]><img src=../icon/update.png border=0 /></a></td>";?>
<td><a href=hapus_poli.php?kdpoli=<?php echo $poli['kode_poli'] ?> onClick="return confirm('Apakah Anda Yakin Hapus Data?')"><img src=../icon/hapus.png border=0 /></a></td>
</tr>
<?php
 }
 ?>
</table>
