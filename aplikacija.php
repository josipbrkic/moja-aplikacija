<?php include_once 'konfiguracija.php'; ?>
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
		
     
     <div class="row">
    			<?php 
				    	$izraz = $veza->query("select * from proizvod");
						$izraz->execute();
						$rezultati=$izraz->fetchAll(PDO::FETCH_OBJ);
						
						foreach ($rezultati as $red) :
							?>
							
							<div class="col-sm-6 col-md-4 col-lg-2">
								<div class="bs-callout">
									<h4 class="text-center"><?php echo $red->ime ?></h4>
									<?php echo '<img src="'.$red->slika .'"/ width="200" class="center-block img-responsive" >' ; ?>
									<p class="text-center"><?php echo $red->cijena ?> kn/komad</p>
									<a href="#" class="btn btn-default center-block"><span class="glyphicon glyphicon-shopping-cart"></span> Dodaj</a>
								</div>
							</div>
							
							<?php
							endforeach;
						?>
    			</div>
	
	
	<?php include_once 'predlozak/footer.php'; ?> 

   	<?php include_once 'predlozak/skripte.php'; ?>
   	
</body>

</html>
