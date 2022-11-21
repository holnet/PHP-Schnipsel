<?php

$Datum = date(G);

if($Datum >= 0)
{
$Gruss = "Guten Morgen!";
}

if($Datum >= 12)
{
$Gruss = "Guten Tag!";
}

if($Datum >= 18)
{
$Gruss = "Guten Abend!";
}

echo $Gruss;

?>