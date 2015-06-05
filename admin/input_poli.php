<?php
include "../include/connect.php";//sambung ke mysql

//mengambil nama-nama dokter dari tabel dokter
$hasil = mysql_query("SELECT nama_dokter FROM dokter");

//menambil nilai maks dari tabel suster
$query = mysql_query("SELECT MAX(kode_poli) AS kode_poli FROM poli_lab");
$kodepoli = mysql_fetch_array($query);
$kode_poli = $kodepoli['kode_poli']+1;
?>

<h2 align="center"><u>Input Data Poli Lab</u></h2>
<table width="296" border="0" align="center">
<form name="postform" action="isi_poli.php" method="post" >
<input type="hidden" name="kode_poli" value=<?php echo $kode_poli ?> />
  <tr>
    <td width="102">Kode Poli Lab </td>
    <td width="9">:</td>
    <td width="138"><input type="text" name="kodepoli" value="<?php echo $kode_poli ?>" disabled="disabled" size="8"/></td>
  </tr>
  <tr>
    <td>Nama Poli Lab </td>
    <td>:</td>
    <td><input type="text" name="nama_poli" /></td>
  </tr>
    <tr>
    <td>Dokter</td>
    <td>:</td>
    <td><select name="dokter">
      <option selected="selected">-Pilih Dokter-</option>
	  <?php //masukkan nama dokter ke dalam daftar
	  while($dokter = mysql_fetch_array($hasil)){
	  echo "<option>$dokter[nama_dokter]</option>";
	  }
	  ?>
    </select>
    </td>
  </tr>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
	<br>
      <input type="submit" name="Submit" value="Input Data" style="width:80px; height:30px;"/>
      <input type="reset" name="Reset" value="Reset" style="width:80px; height:30px;" />
    </div></td>
  </tr>
 </form>
</table>
