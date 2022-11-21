<p><?php
// Text der in Spalten ausgegeben werden soll
// kann auch aus einer anderen Datenquelle uebernommen werden
$text = implode(" ", file("Begrüssung.php"));
$spalten = 2; // Anzahl Spalten bestimmen

$length = strlen($text);
$length = ceil($length/$spalten);
$words = explode(" ",$text);
$c = count($words);
$l = 0;
for($i=1;$i<=$spalten;$i++) {
$new_string = "";
echo "";
for($g=$l;$g<=$c;$g++) {
if(strlen($new_string) <= $length || $i == $spalten)
$new_string.=$words[$g]." ";
else {
$l = $g;
break;
}
}
echo $new_string;
echo "";
}
?></p>