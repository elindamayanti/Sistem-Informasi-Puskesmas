<?php
include "../include/connect.php";//sambung ke mysql

$query = mysql_query("SELECT * FROM rujukan");
?>
<div align="Center"> <!-- tabel rata tengah -->
<h2><u>Data Rujukan </u></h2>
 <div align="Left"> <!-- tabel rata samping -->
<table width="700" border="1" >
  <tr bgcolor="#6699CC">
    <th width="70" scope="col">Kode Rujukan </th>
    <th width="210" scope="col">Nama Rumah Sakit </th>
    <th width="240" scope="col">Alamat Rumah Sakit</th>
	 <th width="70" scope="col">Kode Pasien </th>
    <th width="58" scope="col" colspan="2">Opsi</th>
  </tr>
<?php 
$warna = '';
while ($rj = mysql_fetch_array($query)){
include "../include/warna_tabel.php";
echo "<tr bgcolor=$warna>
<td>$rj[kode_rujukan]</td>
<td>$rj[nama_rs]</td>
<td>$rj[alamat_rs]</td>
<td>$rj[kode_pasien]</td>
<td><a href=update_rujukan.php?koderj=$rj[kode_rujukan]><img src=../icon/update.png border=0></a></td>";?>
<td><a href=hapus_rujukan.php?koderj=<?php echo $rj['kode_rujukan']?>" onClick="return confirm('Apakah Anda Yakin Hapus Data?')"><img src=../icon/hapus.png border=0></a></td>
</tr>
<?php
}
?>  
  
</table>
