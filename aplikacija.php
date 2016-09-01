<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once 'predlozak/head.php'; ?>
    
</head>

<body id="page-top">
	
	<?php include_once 'predlozak/izbornik_aplikacija.php'; ?>
		
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                	<?php 
    						$veza = new PDO('mysql:host=localhost;dbname=mojaBaza', 
											'edunova',
											'edunova');
							 $izraz = $veza->query("select * from proizvod");
								$izraz->execute();
								$rezultati=$izraz->fetchAll(PDO::FETCH_OBJ);
								
								
								foreach ($rezultati as $red) {
									echo $red->ime . "<br />";
								}
	
	
    			?>
               
             </div>     
             <div class="col-lg-4 col-sm-6">
                	<p>ččččćghipčpčć'0
                		
                		lttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		
                		tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt</p>
               
             </div>     
             <div class="col-lg-4 col-sm-6">
                	<p>lttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		
                		tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt
                		ttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt</p>
               
             </div>     	
         </div>       	
     </div>
	
	
	<?php include_once 'predlozak/footer.php'; ?> 

   	<?php include_once 'predlozak/skripte.php'; ?>
   	
</body>

</html>
