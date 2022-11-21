<?php
/**
* Beispiel fuer public, private und protected
*
*/

class TestClass
{
	public $strPub = "Ich bin public";
	protected $strProt = "Ich bin protected";
	private $strPriv = "Ich bin private";
	function showVars()
	{
		echo "Das sieht die Klasse TestClass:\n";
		echo "\$strPub: $this->strPub\n";
		echo "\$strProt: $this->strProt\n";
		echo "\$strPriv: $this->strPriv\n";
		echo "\n";
	}
}

class ExtClass extends TestClass
{
	function showVars()
	{
		parent::showVars();
		echo "Das sieht die Klasse ExtClass:\n";
		echo "\$strPub: $this->strPub\n";
		echo "\$strProt: $this->strProt\n";
		// Die folgende Zeile zeigt nichts an
		// echo "\$strPriv: $this->strPriv\n";
		echo "\n";
	}
}

$objTest = new TestClass();
$objExt = new ExtClass();
// Die Variablen innerhalb der Klasse ExtClass anzeigen
$objExt->showVars();
// Variablen ansehen
echo "Das sieht das Hauptprogramm:\n";
echo "\$objTest->strPub: $objTest->strPub\n";
// echo "\$objTest->strProt: $objTest->strProt\n";
// echo "\$objTest->strPriv: $objTest->strPriv\n";
echo "\n";
//* Aenderungsversuche
//* Eine public-Variable aendern
$objTest->strPub = "Ich bin public, vom Hauptprogramm geändert!";
//* Eine protected-Variable aendern --> FEHLER
// $objTest->strProt = "Ich bin protected. Das Hauptprogramm kann mich nicht ändern";
//* Eine private Variable aendern --> FEHLER
// $objTest->strPriv =  "Ich bin private. Das Hauptprogramm kann mich nicht ändern";
$objTest->showVars();
?>