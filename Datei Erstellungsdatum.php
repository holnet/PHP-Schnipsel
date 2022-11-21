<?php    
function FileDate($file) {  
$date = filectime($file);  
$out = date('F j, Y,H:i:s', $date);  
return $out;  
}  
echo FileDate("Datei Erstellungsdatum.php");  
?>