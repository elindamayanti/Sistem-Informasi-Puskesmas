<?php
include "../include/connect.php";//sambung ke mysql

$query = mysql_query("SELECT kode_obat, nama_obat, jenis_obat, stok, hospital.lusin(stok) AS in_lusin FROM obat");

?>
<div align="Center"> <!-- tabel rata tengah -->
<h2><u>Data Obat </u></h2>
 <div align="Left"> <!-- tabel rata samping -->
<table width="700" border="2">
  <tr bgcolor="#6699CC">
    <th width="70" scope="col">Kode Obat </th>
    <th width="135" scope="col">Nama Obat </th>
    <th width="120" scope="col">Jenis Obat</th>
    <th width="120" scope="col">Stok </th>
    <th width="120" scope="col">Dalam Lusin </th>
    <th width="58" scope="col" colspan="2">Opsi</th>
  </tr>
<?php 
$warna = '';
while ($ob = mysql_fetch_array($query)){
include "../include/warna_tabel.php";
echo "<tr bgcolor=$warna>
<td>$ob[kode_obat]</td>
<td>$ob[nama_obat]</td>
<td>$ob[jenis_obat]</td>
<td>$ob[stok]</td>
<td>$ob[in_lusin]</td>
<td><a href=update_ob.php?kodeob=$ob[kode_obat]><img src=../icon/update.png border=0></a></td>";?>
<td><a href=hapus_ob.php?kodeob=<?php echo $ob['kode_obat']?>" onClick="return confirm('Apakah Anda Yakin Hapus Data?')"><img src=../icon/hapus.png border=0></a></td>
</tr>
<?php
}
?>  
  
</table>
