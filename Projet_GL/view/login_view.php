<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php
	      include_once 'view/includes/partials/getTitle.php';
	      include_once 'view/includes/head.php';
	 ?>
	 <link rel="stylesheet" type="text/css" href="assets/css/style.css">
       	
</head>
    <body>
    	 	<div class="container-fluid">
    	 		    <div class="row">
    	 		 	      <div class="formulaire col-md-6">
    	 		 	      <form method="post" action="" class="col-md-12 form-group" >
                                <div class="component">
                                    <br>
                                    <font color="white"> <b>Connectez Vous</b></font>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                                <label>Username</label>
    	 		 	      	        <input type="text" class="form-control" name="username">
    	 		 	      	        <label>Password</label>
    	 		 	      	        <input type="password" name="mdp" class="form-control">
    	 		 	      	        <br>
    	 		 	      	        
    	 		 	      	        <button class="btn btn-success" name="confirm">Se connecter</button>

                                            <br>

                                            <br>
                                            <div class="alert alert-primary">


                                                 Nb:Si vous n'avez Pas recu votre password Automatique entrez <span class="badge badge-info">Root</span>
                                                  


                                            </div>

                      
                                </div>
    	 		 	      	
    	 		 	      </form>
    	 		     </div>

                    <div class="Message col-md-5">

                                        <?php 

                                            if(isset($error)){

                                                if($error!=""){                     
                                        ?>

                                             <br>
                                            <div class="alert alert-danger">
                                                    <?=
                                                         $error;
                                                    ?>
                                            </div>
                                                  <?php
                                                        }

                                                        }
                                                    ?>


                                   </div>
    	 	</div>
    </body>
 		<?php 
 		      include_once 'view/includes/script.php';
 		?>
</html>