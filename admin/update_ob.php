<?php
include "../include/connect.php";//sambungkan ke mysql

$kodeobat = $_GET['kodeob'];//mengambil nilai kode dari address bar


//query untuk mengambil data dari tabel cleaning service
$query = mysql_query("SELECT * FROM obat WHERE kode_obat = '$kodeobat'");
$ob = mysql_fetch_array($query);
?>
<h2 align="center"><u>Update Data Obat </u></h2>
<table width="316" border="0" align="center">
<form name="postform" method="post" action="update2_ob.php">
<input type="hidden" name="kodeobat" value="<?php echo $kodeobat?>"/>
  <tr>
    <td width="101">Kode Obat </td>
    <td width="13">:</td>
    <td width="188">
      <input type="text" name="kode_obat" size="10" value="<?php echo $kodeobat ?>" disabled="disabled"/>
    </td>
  </tr>
  <tr>
    <td>Nama Obat</td>
    <td>:</td>
    <td><input type="text" name="nama_obat" size="20" value="<?php echo $ob['nama_obat']?>"/></td>
  </tr>
  <tr>
    <td>Jenis Obat</td>
    <td>:</td>
    <td><input type="text" name="jenis_obat" size="25" value="<?php echo $ob['jenis_obat']?>"/></td>
  </tr>
  <tr>
    <td>Stok</td>
    <td>:</td>
    <td><input type="text" name="stok" size="12" value="<?php echo $ob['stok']?>"/></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
	<br>
      <input type="submit" name="Submit" value="Update Data" style="width:100px; height:30px;" />
    </div></td>
  </tr>
</form>
</table>
