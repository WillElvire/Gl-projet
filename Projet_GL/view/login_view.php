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
	 	<div class="container">
	 		 <div class="row">
	 		 	      <div class="formulaire">
	 		 	      <form method="post " class="col-md-12 form-group" >
                               <div class="component">
                                <br>
                                <font color="white"> <b>Connectez Vous</b></font>
                                <br>
                                <br>
                                <br>
                                <br>
                                            <label>Username</label>
	 		 	      	        <input type="text" class="form-control">
	 		 	      	        <label>Password</label>
	 		 	      	        <input type="password" name="" class="form-control">
	 		 	      	        <br>
	 		 	      	        
	 		 	      	        <button class="btn btn-success">Se connecter</button>

                  
                               </div>
	 		 	      	
	 		 	      </form>
	 		 </div>
	 	</div>
</body>
 		<?php 
 		      include_once 'view/includes/script.php';
 		?>
</html>