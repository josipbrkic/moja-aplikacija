<?php include_once 'konfiguracija.php'; 
if(!isset($_SESSION["kupac"])){
	header("location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once 'predlozak/head.php'; ?>
    
</head>

<body id="page-top">
	
	<?php include_once 'predlozak/izbornik_aplikacija.php'; ?>
	<div class="row visina">
		<p> </p>
		
	</div>	
		
     
    
	
	
	<?php include_once 'predlozak/footer.php'; ?> 

   	<?php include_once 'predlozak/skripte.php'; ?>
   	
</body>

</html>
