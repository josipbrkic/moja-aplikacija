ovo je ispis imena proizvoda sa slikom i cijenom

<div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                	<?php 			
							$izraz = $veza->query("select * from proizvod");
							$izraz->execute();
							$rezultati=$izraz->fetchAll(PDO::FETCH_OBJ);
							
								foreach ($rezultati as $red) {
									echo $red->ime . "<br />";
									echo '<img class="img-responsive" src="'.$red->slika .'"/>' ;										
									echo $red->cijena . "<br />";
								}
    				?>
               
             </div>     
                
               	
         </div>       	
     </div>