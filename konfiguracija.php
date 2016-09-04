<?php
session_start();
$putanjaAPP="/aplikacija/";
$slike="img/voce/";



$mysql_host = "localhost";
$mysql_database = "mojaBaza";
$mysql_user = "edunova";
$mysql_password = "edunova";


$veza = new PDO('mysql:host=localhost;dbname=mojaBaza', 
											'edunova',
											'edunova');
											$veza = new PDO(
	"mysql:dbname=" . 	$mysql_database . //1. parametar PDO
	";host=" . 			$mysql_host 	. //1. parametar PDO
	";charset=utf8"		/*1. parametar PDO */	,
	$mysql_user				, //2. parametar PDO 
	$mysql_password			, //3. parametar PDO
	array(					//4. parametar PDO
	
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"//4. parametar PDO
		)//4. parametar PDO
	);

//ovo se koristi kod logina, uvedes ako se krivo upise neka get g=1(moze biti bilo koja vrijednost) ide u autorizaciju pa u konfiguraciju class Greske
class Greske{
	public static $NEISPRAVAN_LOGIN=1;
}