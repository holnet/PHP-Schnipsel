<?PHP
$datum = date("d.m.Y");
xdebug_break();
$zeit = date("G:i:s");
echo "Heute ist der $datum. Es ist $zeit Uhr.";
//phpinfo();
?>