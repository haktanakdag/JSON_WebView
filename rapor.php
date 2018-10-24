<?php
$raporadi = $_GET['rapor'];
$json_data = file_get_contents("http://www.haktanakdag.com/yedek/".$raporadi);
$data = json_decode($json_data, 1);
$sadeceisim = explode(".",$raporadi);
echo "<h2>$sadeceisim[1]</h2>";
echo "<table class='table table-striped'>";
$theadeklendi=false;
foreach($data as $object) {
	if($theadeklendi==false){
	echo "<thead>";
	echo "<tr>";
	}
	
	foreach($object as $key => $value) {
		if(@in_array($key,$yazildi)==false){
		echo "<th>";
		echo $key;
		echo "</th>";
		$yazildi[] =$key;
		}
	}
	
	if($theadeklendi==false){
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	}
	$theadeklendi = true;

	echo "<tr>";
	
	foreach($object as $key => $value) {
		echo "<td>";
		echo $value;
		echo "</td>";
	}
	echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>