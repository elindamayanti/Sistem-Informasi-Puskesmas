<?php
include "../include/connect.php";//sambungkan ke mysql

//query untuk menampilkan kode pasien terakhir

//mengambil nilai kode pasien tertinggi dari tabel pasien
$hasil = mysql_query("SELECT MAX(kode_pasien) AS kode FROM pasien");

$hasil21 = mysql_query("SELECT nama_obat FROM obat");

$hasilkm = mysql_query("SELECT nama_ruangan FROM ruangan");

$maks = mysql_fetch_array($hasil); //memecah hasil ke dalam array

$kodepasien = $maks['kode']+1; //kode_pasien ditambah 1 agar kode_pasien baru terinput otomatis

//mengambil nilai max dari tabel rawat_inap untuk dimasukkan ke tabel pembayaran
$query= mysql_query("SELECT MAX(kode_inap) AS kode_inap FROM rawat_inap");
$inap= mysql_fetch_array($query);
$kode_inap_baru = $inap['kode_inap']+1;


?>

<div align="center">
  <h2><u>Input Data Pasien </u></h2><br />
  <table width="621" height="355" border="0">
    <form id="form1" name="postform" method="post" action="isi_pasien.php">
      <input name="kode_inap" type="hidden" value="$kode_inap_baru"/>
	  <tr>
        <td width="143">Kode Pasien </td>
        <td width="8">:</td>
        <td width="456">  <!--kode pasien terinput otomatis dari sistem -->
            <input name="kode_pasien" type="text" size="35" value="<?php echo $kodepasien ?>"/></td>
      </tr>
      <tr>
        <td>Tanggal Masuk </td>
        <td>:</td>
        <td><input name="tgl_masuk" type="text" size="35" /><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tgl_masuk);return false;" ><img name="popcal" align="absmiddle" style="border:none" src="./calender/calender.png" width="34" height="29" border="0" alt=""></a></td>
      </tr>
      <tr>
        <td>Nama Pasien </td>
        <td>:</td>
        <td><input name="nama_pasien" type="text"  size="35" /></td>
      </tr>
      <tr>
        <td>Tanggal Lahir </td>
        <td>:</td>
        <td><input name="tgl_lahir" type="text" size="35" /><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tgl_lahir);return false;" ><img name="popcal" align="absmiddle" style="border:none" src="./calender/calender.png" width="34" height="29" border="0" alt=""></a></td>
      </tr>
      <tr>
        <td>Tempat Lahir </td>
        <td>:</td>
        <td><input name="tempat_lahir" type="text" size="35" /></td>
      </tr>
      <tr>
        <td>Jenis Kelamin </td>
        <td>:</td>
        <td><select name="jenis_kelamin" >
            <option selected="selected" size="35" >-Pilih-</option>
            <option>Laki-laki</option>
            <option>Perempuan</option>
        </select></td>
      </tr>
      <tr>
        <td>Alamat Pasien </td>
        <td>:</td>
        <td><input name="alamat" type="text" size="35" /></td>
      </tr>
      <tr>
        <td>Usia</td>
        <td>:</td>
        <td><select name="usia" >
            <?php for($i=1;$i<=120;$i++){
	  echo "<option>$i</option>";
	  } ?>
          </select>        </td>
      </tr>
      <tr>
        <td>Jenis Pasien </td>
        <td>:</td>
        <td><select name="jenis_pasien" >
            <option selected="selected"  >-Pilih-</option>
            <option>Umum</option>
            <option>BPJS</option>
			<option>Lain-lain</option>
        </select></td>
      </tr>
	  <tr>
		<td>Obat</td>
		<td>:</td>
		<td><select name="obat">
		<option selected="selected" >-Pilih Obat-</option>
		<?php //masukkan nama obat ke dalam daftar
		while($ob = mysql_fetch_array($hasil21)){
		echo "<option>$ob[nama_obat]</option>";
		}
		?>
		</select>
		</td>
	  </tr>
	  <tr>
        <td>Penyakit yang diderita </td>
        <td>:</td>
        <td><input type="text" name="penyakit" size="35" /></td>
      </tr>
	  <tr>
          <td> <h4> Pasien Rawat Inap </h4> </td>
		</tr>
	  <tr>
        <td>Nama Kamar</td>
        <td>:</td>
        <td><select name="ruangan">
		<option selected="selected" >-Pilih Kamar-</option>
		<?php //masukkan nama kamar ke dalam daftar
		while($km = mysql_fetch_array($hasilkm)){
		echo "<option>$km[nama_ruangan]</option>";
		}
		?>
		</select>        </td>
      </tr>
	  <tr>
        <td>Jenis </td>
        <td>:</td>
        <td><select name="jenis_ruangan">
            <option selected="selected" >-Pilih-</option>
            <option>VIP</option>
            <option>VVIP</option>
            <option>Regular</option>
          </select>        </td>
      </tr>
      <tr>
        <td>No Ranjang</td>
        <td>:</td>
		<td><select name="ruangan">
             <option selected="selected"  >-Pilih-</option>
			 <?php for ($i=1;$i<=10;$i++)
			 {echo "<option>$i</option>";}
			 ?>
           </select>
         </td>
      </tr>
	  <tr>
        <td colspan="3"><div align="center">
		<br>
            <input name="Submit" type="submit" value="Input Data" style="width:80px; height:30px;" />
            <input type="reset" name="reset" value="Reset" style="width:80px; height:30px;" />
        </div></td>
      </tr>
    </form>
  </table>
  <!--  PopCalendar(tag name and id must match) Tags should not be enclosed in tags other than the html body tag. -->
<iframe width=174 height=189 name="gToday:normal:./calender/agenda.js" id="gToday:normal:./calender/agenda.js" src="./calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
</div>
