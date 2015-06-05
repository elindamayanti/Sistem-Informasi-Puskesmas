<?php
include "../include/connect.php"; //sambungkan ke database
//query untuk mengambil data ke mysql
$hasil=mysql_query("select * from pasien_audit where 1");

?>

<div align="Center"> <!-- tabel rata tengah -->
  <h2><u>Audit Data Pasien</u></h2>
  <div align="Left"> <!-- tabel rata samping -->
<!-- membuat tabel untuk menampilkan data -->
  <table width="750" border="1">
    <tr bgcolor="#6699CC"> <!-- <tr> = table rows -->
      <th width="60" scope="col">Waktu </th>
      <th width="48" scope="col">Aksi </th>
      <th width="48" scope="col">Kode Pasien </th> <!-- <th> = table header -->
      <th width="147" scope="col">Nama Pasien </th>
      <th width="102" scope="col">Tanggal Lahir </th>
      <th width="96" scope="col">Tempat Lahir </th>
      <th width="69" scope="col">Jenis Kelamin </th>
      <th width="105" scope="col">Alamat Pasien </th>
      <th width="30" scope="col">Usia</th>
      <th width="138" scope="col">Jenis Pasien</th>
      <th width="138" scope="col">Jenis Penyakit</th>
    </tr>
<?php //perulangan untuk menampilkan data dalam beberapa baris
$warna = "";
while ($baris = mysql_fetch_array($hasil)){
include "../include/warna_tabel.php";
//<tr> = table rows
echo "
<tr bgcolor=$warna>
<td>$baris[waktu]</td>
<td>$baris[aksi]</td>
<td>$baris[N_kode_pasien]</td>
<td>$baris[N_nama_pasien]</td>
<td>$baris[N_tanggal_lahir]</td>
<td>$baris[N_tempat_lahir]</td>
<td>$baris[N_jenis_kelamin]</td>
<td>$baris[N_alamat_pasien]</td>
<td>$baris[N_usia]</td>
<td>$baris[N_jenis_pasien]</td>
<td>$baris[N_penyakit_diderita]</td>
</tr>"?>
<?php
}
?>	
  </table>
</div>
