<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll mojBoja" href="index.php">Naslovnica</a>
                
            </div>
             
            
           

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right mojaBoja">
       				<li>
       					<?php if(isset($_SESSION["kupac"])): ?>
	    						<a class="button" href="<?php echo $putanjaAPP; ?>odjava.php">Odjavi 
	    							<?php echo $_SESSION["kupac"]->ime . " " . $_SESSION["kupac"]->prezime; ?>
	    						</a>
	    				<?php else: ?>
	    						
	    			
       				</li>
	    			
                  	<li>
                        <a class="page-scroll" href="autorizacija.php">Prijava</a>
                    </li>
                    		<?php endif; ?>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
<!-- navbar-fixed-top - sredi da font bude ok i ostalo - to ide u nav-->