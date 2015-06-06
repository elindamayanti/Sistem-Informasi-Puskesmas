<?php
include "../include/connect.php";//sambungkan ke mysql

//query untuk mengambil data dari tabel obat
$query = mysql_query("SELECT MAX(kode_obat) AS kode_obat FROM obat");
$ob = mysql_fetch_array($query);
$kode_ob = $ob['kode_obat']+1;//ditambah 1 agar jadi kode_obat baru
?>
<h2 align="center"><u>Input Data Obat </u></h2>
<table width="316" border="0" align="center">
<form name="postform" method="post" action="isi_ob.php">
  <tr>
    <td width="101">Kode Obat </td>
    <td width="13">:</td>
    <td width="188">
      <input type="text" name="kode_obat" size="10" value="<?php echo $kode_ob?>" disabled="disabled"/>
    </td>
  </tr>
  <tr>
    <td>Nama Obat</td>
    <td>:</td>
    <td><input type="text" name="nama_obat" size="20" /></td>
  </tr>
  <tr>
    <td>Jenis Obat</td>
    <td>:</td>
    <td><input type="text" name="jenis_obat" size="25" /></td>
  </tr>
  <tr>
    <td>Stok</td>
    <td>:</td>
    <td><input type="text" name="stok" size="12" /></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><br>
      <input type="submit" name="Submit" value="Input Data" style="width:80px; height:30px;"/>
	  <input type="reset" name="Reset" value="Reset" style="width:80px; height:30px;" />
    </div></td>
  </tr>
</form>
</table>
