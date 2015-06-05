<?php
include "../include/connect.php";//sambungkan ke mysql

$kodepoli = $_GET['kdpoli'];

//mengambil nama-nama dokter dari tabel dokter
$query = mysql_query("SELECT nama_dokter FROM dokter");

//mengambil data dari tabel poli
$hasil = mysql_query("SELECT * FROM poli_lab WHERE kode_poli = '$kodepoli'");
$poli = mysql_fetch_array($hasil);

//mengambil nama dokter awal
$querylagi = mysql_query("SELECT nama_dokter FROM dokter WHERE kode_dokter = '$poli[kode_dokter]'");
$dokter_awal = mysql_fetch_array($querylagi);
?>

<h2 align="center"><u>Update Data Poli Lab</u></h2>
<table width="296" border="0" align="center">
<form name="postform" action="update2_poli.php" method="post" >
<input type="hidden" name="kodepoli" value=<?php echo $kodepoli ?> />
  <tr>
    <td width="102">Kode Poli Lab </td>
    <td width="9">:</td>
    <td width="138"><input type="text" name="kdpoli" value="<?php echo $kodepoli ?>" disabled="disabled" size="8"/></td>
  </tr>
  <tr>
    <td>Nama Poli Lab </td>
    <td>:</td>
    <td><input type="text" name="nama_poli" value="<?php echo $poli['nama_poli']?>"/></td>
  </tr>
    <tr>
    <td>Dokter</td>
    <td>:</td>
    <td><select name="dokter">
      <option selected="selected"><?php echo $dokter_awal['nama_dokter']?></option>
	  <?php //masukkan nama dokter ke dalam daftar
	  while($dokter = mysql_fetch_array($query)){
	  echo "<option>$dokter[nama_dokter]</option>";
	  }
	  ?>
    </select>
    </td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
	<br>
      <input type="submit" name="Submit" value="Input Data" style="width:100px; height:30px;" />
      <input type="reset" name="Reset" value="Reset" style="width:100px; height:30px;" />
    </div></td>
  </tr>
 </form>
</table>
