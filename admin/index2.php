<?php
if(!isset($_SESSION)) {
     session_start();
}
if(isset($_SESSION['username'])){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="logo.ico" type="image/x-icon" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sistem Informasi Puskesmas</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_0501182410_0) return;
                            window.mm_menu_0501182410_0 = new Menu("root",200,23,"",17,"#FFFFFF","#000000","#3333CC","#66CCFF","left","middle",3,0,1000,-5,7,true,true,true,0,false,true);
  mm_menu_0501182410_0.addMenuItem("Input&nbsp;Data&nbsp;Pasien","location='?page=input_pasien'");
  mm_menu_0501182410_0.addMenuItem("Input&nbsp;Data&nbsp;Dokter","location='?page=input_dokter'");
  mm_menu_0501182410_0.addMenuItem("Input&nbsp;Data&nbsp;Poli&nbsp;Lab","location='?page=input_poli'");
  mm_menu_0501182410_0.addMenuItem("Input&nbsp;Jadwal&nbsp;Jaga","location='?page=input_jadwal'");
  mm_menu_0501182410_0.addMenuItem("Input&nbsp;Data&nbsp;Obat","location='?page=input_ob'");
   mm_menu_0501182410_0.addMenuItem("Input&nbsp;Data&nbsp;Rujukan","location='?page=input_rujukan'");
   mm_menu_0501182410_0.hideOnMouseOut=true;
   mm_menu_0501182410_0.bgColor='#66CCFF';
   mm_menu_0501182410_0.menuBorder=1;
   mm_menu_0501182410_0.menuLiteBgColor='#66CCFF';
   mm_menu_0501182410_0.menuBorderBgColor='#66CCFF';
  window.mm_menu_0501191215_0 = new Menu("root",200,23,"",17,"#FFFFFF","#000000","#3333CC","#66CCFF","left","middle",3,0,1000,-5,7,true,true,true,0,false,true);
  mm_menu_0501191215_0.addMenuItem("Lihat&nbsp;Data&nbsp;Pasien","location='?page=lihat_pasien'");
  mm_menu_0501191215_0.addMenuItem("Lihat&nbsp;Data&nbsp;Dokter","location='?page=lihat_dokter'");
  mm_menu_0501191215_0.addMenuItem("Lihat&nbsp;Data&nbsp;Poli&nbsp;Lab","location='?page=lihat_poli'");
  mm_menu_0501191215_0.addMenuItem("Lihat&nbsp;Jadwal&nbsp;Jaga","location='?page=lihat_jadwal'");
  mm_menu_0501191215_0.addMenuItem("Lihat&nbsp;Data&nbsp;Obat","location='?page=lihat_ob'");
  mm_menu_0501191215_0.addMenuItem("Lihat&nbsp;Data&nbsp;Rujukan","location='?page=lihat_rujukan'");
   mm_menu_0501191215_0.hideOnMouseOut=true;
   mm_menu_0501191215_0.bgColor='#66CCFF';
   mm_menu_0501191215_0.menuBorder=1;
   mm_menu_0501191215_0.menuLiteBgColor='#66CCFF';
   mm_menu_0501191215_0.menuBorderBgColor='#66CCFF';
  window.mm_menu_0501212441_0 = new Menu("root",200,23,"",17,"#FFFFFF","#000000","#3333CC","#66CCFF","left","middle",3,0,1000,-5,7,true,true,true,0,false,true);
  mm_menu_0501212441_0.addMenuItem("Profil&nbsp;Receptionist","location='?page=profil_recept'");
  mm_menu_0501212441_0.addMenuItem("Edit&nbsp;Profil","location='?page=edit_recept'");
  mm_menu_0501212441_0.addMenuItem("Ganti&nbsp;Password","location='?page=ganti_pass'");
   mm_menu_0501212441_0.hideOnMouseOut=true;
   mm_menu_0501212441_0.bgColor='#66CCFF';
   mm_menu_0501212441_0.menuBorder=1;
   mm_menu_0501212441_0.menuLiteBgColor='#66CCFF';
   mm_menu_0501212441_0.menuBorderBgColor='#66CCFF';

mm_menu_0501212441_0.writeMenus();
} // mmLoadMenus()
//-->
</script>
<script language="JavaScript" src="mm_menu.js"></script>
</head>
<body>
<script language="JavaScript1.2">mmLoadMenus();</script>
<div id="main_bg">
  <div id="main">
    <!-- header begins -->
    <div id="header">
      <div id="logo">
      </div>
      <div id="buttons">
       <div><a href="/puskesmasfix" class="but"  title="">HOME</a>
       <div><a href="#" name="link5" title="" class="but" id="link1" onmouseover="MM_showMenu(window.mm_menu_0501182410_0,0,40,null,'link5')" onmouseout="MM_startTimeout();">INPUT DATA</a></div>
       <div><a href="#" name="link7" title=""  class="but" id="link2" onmouseover="MM_showMenu(window.mm_menu_0501191215_0,0,40,null,'link7')" onmouseout="MM_startTimeout();">LIHAT DATA</a></div>
       <div><a href="?page=profil_recept" name="link3" title=""  class="but" id="link4" onmouseover="MM_showMenu(window.mm_menu_0501212441_0,0,40,null,'link3')" onmouseout="MM_startTimeout();">AKUN</a></div>
       <div><a href="?page=audit_lihat_pasien"  class="but" title="">AUDIT</a></div>
		<div><a href="../login/logout.php" onclick="return confirm('Anda Yakin Logout dari Sistem?')" class="but" title="">LOGOUT</a></div>
     </div>
    </div>
    <!-- header ends -->
	  <!-- content begins -->
    <div  class="right-content">
        <div class="box" style="width:750px;">
        <?php
  		include "content.php";
		?>
        </div>
      <div style="clear: both"></div>
    </div>
    <!-- content ends -->
    <!-- footer begins -->
    <div id="footer">
      <p>Copyright &copy; 2015  Kelompok Puskesmas</p>
      <p>Design by Kelompok Puskesmas</p>
    </div>
    <!-- footer ends -->
  </div>
</div>
</body>
</html>
<?php 
}else{
?>
<script>document.location.href="../login/"</script>
<?php 
}
?>
