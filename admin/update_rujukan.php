<?php
include "../include/connect.php";//sambungkan ke mysql

$koderujukan = $_GET['koderj'];//mengambil nilai kode dari address bar

$query7 = mysql_query("SELECT nama_pasien FROM pasien");

//query untuk mengambil data dari tabel rujukan
$query = mysql_query("SELECT * FROM rujukan WHERE kode_rujukan = '$koderujukan'");
$rj = mysql_fetch_array($query);

$query71 = mysql_query("SELECT nama_pasien FROM pasien WHERE kode_pasien = '$rj[kode_pasien]'");
$kdpasien = mysql_fetch_array($query71);

?>
<h2 align="center"><u>Update Data Rujukan </u></h2>
<table width="400" border="0" align="center">
<form name="postform" method="post" action="update2_rujukan.php">
<input type="hidden" name="koderujukan" value="<?php echo $koderujukan?>"/>
  <tr>
    <td width="101">Kode Rujukan </td>
    <td width="13">:</td>
    <td width="188">
      <input type="text" name="kode_rujukan" size="10" value="<?php echo $koderujukan ?>" disabled="disabled"/>

    </td>
  </tr>
  <tr>
    <td>Nama Rumah Sakit</td>
    <td>:</td>
    <td><input type="text" name="nama_rs" size="30" value="<?php echo $rj['nama_rs']?>"/></td>
  </tr>
  <tr>
    <td>Alamat Rumah Sakit</td>
    <td>:</td>
    <td><input type="text" name="alamat_rs" size="35" value="<?php echo $rj['alamat_rs']?>"/></td>
  </tr>
  <tr>
    <td>Kode Pasien</td>
    <td>:</td>
    <td><select name="kode_pasien">
      <option><?php echo $kdpasien['nama_pasien']?></option>
	  <?php while ($kdpasien = mysql_fetch_array($query7)){
	  echo "<option>$kdpasien[nama_pasien]</option>";
	  }?>
    </select>
    </td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
	<br>
      <input type="submit" name="Submit" value="Update Data" style="width:100px; height:30px;" />
    </div></td>
  </tr>
</form>
</table>
