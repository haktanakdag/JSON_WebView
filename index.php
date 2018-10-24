<html>
<title>VO1D RPT SYS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.w3-sidenav a,.w3-sidenav h4{padding:12px;}
.w3-navbar a{padding-top:12px !important;padding-bottom:12px !important;}
</style>
<body>
<ul class="w3-navbar w3-theme w3-top w3-left-align w3-large" style="z-index:4;">
<li class="w3-opennav w3-right w3-hide-large">
<a class="w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</li>
<!--<li><a href="tryit.asp-filename=tryw3css_templates_webpage&stacked=h.html#" class="w3-theme-l1">Logo</a></li>-->
<h1>V01D Report SYS</h1>
<h3>Dinamik Raporlama Sistemi</h3>
</ul>
<nav class="w3-sidenav w3-collapse w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;">
<a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="close menu">
<i class="fa fa-remove"></i>
</a>
<h4><b>Raporlar</b></h4>
<?php

$klasor ="../yedek/";
if(is_dir($klasor)==true){
$dizin = @opendir($klasor);
while($isim = readdir($dizin)){
if(!($isim=='.' OR $isim=='..')){
	$sadeceisim = explode(".",$isim);
	echo "<a href=index.php?rapor=".$isim.">".$sadeceisim[1]."</a>";
}
}
}
 ?>
</nav>
<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu"></div>
<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->
<div class="w3-main" style="margin-left:250px; margin-top:90px; overflow-y:auto;">
<?php
include "rapor.php";
?>
</div>
<script>
// Script to open and close the sidenav
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    document.getElementsByClassName("w3-overlay")[0].style.display = "block";
}
 
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    document.getElementsByClassName("w3-overlay")[0].style.display = "none";
}
</script>
</body>
</html>