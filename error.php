<?php
/*
* Eine Beispielklasse fuer die Fehlerbehandlung
*/
class Calculation
{
	// Diese Funktion teilt $x durch $y
	function divide($x,$y)
	{
		// Pruefen, ob $y gleich 0, falls ja -> Fehlermeldung erzeugen
		if($y == 0)
		throw new Exception("Divisionsfehler (\$y = $y)");
		// Ergebnis zurueckgeben
		return $x/$y;
	}
}

// Hauptprogramm
$objCalc = new Calculation();
try
{
	// Absichtlich einen Fehler erzeugen
	$intResult = $objCalc->divide(99,2);
	// Diese Meldung erscheint nur, wenn kein Fehler auftritt
	echo 'Das Ergebnis: '.$intResult.'
	';
}
// Die Fehlermeldung auffangen
catch (Exception $e)
{
	// Methode zum Ausgeben der Meldung
	echo $e->getMessage();
}
?>