<?php

$e = $_POST["email"];
$l = $_POST["lozinka"];

if(!isset($e) || !isset($l)  ){
	header("location: index.php");
} 

if(strlen($e)==0 || strlen($l)==0){
	header("location: autorizacija.php");
}

//da li email odgovara formi email-a

include_once 'konfiguracija.php';

$izraz = $veza->prepare("select * from kupac where 
email = :email and lozinka=md5(:lozinka);");

$izraz->execute($_POST);
$kupac=$izraz->fetch(PDO::FETCH_OBJ);

if($kupac!=null){
	//zeznut hakera
	$kupac->lozinka="8b3519adbb02f8f3f77596215ea24070";
	
	
	
	$izraz->execute(array("sifra"=>$kupac->sifra));
	//d($operater);
	$_SESSION[$sid . "kupac"] = $kupac;
	header("location: NadzornaPloca.php");
}else{
	header("location: autorizacija.php?email=" . $e . "&g=" . Greske::$NEISPRAVAN_LOGIN);
}


