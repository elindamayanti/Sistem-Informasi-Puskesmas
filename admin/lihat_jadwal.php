<?php
include "../include/connect.php";//sambungkan ke mysql

//mengambil seluruh data dari tabel jadwal jaga
$query = mysql_query("SELECT * FROM jadwal_jaga ORDER BY kode_jaga");

?>
<div align="Center"> <!-- tabel rata tengah -->
<h2><u>Data Jadwal Piket Jaga </u></h2>
 <div align="Left"> <!-- tabel rata samping -->
<table width="710" border="1">
  <tr bgcolor="#6699CC">
    <th width="70" scope="col">Kode Jaga </th>
    <th width="110" scope="col">Waktu Siaga </th>
    <th width="160" scope="col">Dokter Jaga </th>
    <th width="130" scope="col">Pada Poli Lab </th>
    <th width="110" scope="col">Receptionist</th>
    <th width="57" scope="col" colspan="2">Opsi</th>
  </tr>

<?php
$warna = '';
while ($jadwal = mysql_fetch_array($query)){
include "../include/warna_tabel.php";
echo "<tr bgcolor=$warna>
<td>$jadwal[kode_jaga]</td>
<td>$jadwal[waktu_jaga]</td>";
$dok = mysql_query("SELECT nama_dokter FROM dokter WHERE kode_dokter = '$jadwal[kode_dokter]'");
$dokter = mysql_fetch_array($dok);
echo "<td>$dokter[nama_dokter]</td>";
$po = mysql_query("SELECT nama_poli FROM poli_lab WHERE kode_poli = '$jadwal[kode_poli]'");
$poli = mysql_fetch_array($po);
echo "<td>$poli[nama_poli]</td>";
$rec = mysql_query("SELECT nama_receptionist FROM receptionist WHERE kode_receptionist = '$jadwal[kode_receptionist]'");
$recept = mysql_fetch_array($rec);
echo "<td>$recept[nama_receptionist]</td>
<td><a href=update_jadwal.php?kode=$jadwal[kode_jaga]><img src=../icon/update.png border=0 /></a></td>"; ?>
<td><a href="hapus_jadwal.php?kode=<?php echo $jadwal['kode_jaga'] ?>" onClick="return confirm('Apakah Anda Yakin Hapus Data?')"><img src=../icon/hapus.png border=0/></a></td>
</tr>
<?php
}
?>  
 
 
</table>
