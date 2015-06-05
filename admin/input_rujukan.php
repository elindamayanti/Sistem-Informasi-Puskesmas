<?php
include "../include/connect.php";//sambungkan ke mysql

//query untuk mengambil data dari tabel rujukan
$query = mysql_query("SELECT MAX(kode_rujukan) AS koderujukan FROM rujukan");
$rj = mysql_fetch_array($query);
$kode_rujukan = $rj['koderujukan']+1;//ditambah 1 agar jadi kode_rujukan baru
?>
<h2 align="center"><u>Input Data Rujukan </u></h2>
<table width="316" border="0" align="center">
<form name="postform" method="post" action="isi_rujukan.php">
  <tr>
    <td width="101">Kode Rujukan </td>
    <td width="13">:</td>
    <td width="188">
      <input type="text" name="kode_rujukan" size="10" value="<?php echo $kode_rujukan?>"/>

    </td>
  </tr>
  <tr>
    <td>Nama Rumah Sakit</td>
    <td>:</td>
    <td><input type="text" name="nama_rs" size="20" /></td>
  </tr>
  <tr>
    <td>Alamat Rumah Sakit</td>
    <td>:</td>
    <td><input type="text" name="alamat_rs" size="25" /></td>
  </tr>
  <tr>
    <td>Kode Pasien</td>
    <td>:</td>
    <td><input type="text" name="kode_pasien" size="25" /></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
	<br>
      <input type="submit" name="Submit" value="Input Data" style="width:80px; height:30px;" />
	  <input type="reset" name="Reset" value="Reset" style="width:80px; height:30px;" />
    </div></td>
  </tr>
</form>
</table>
