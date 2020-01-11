<!DOCTYPE html>


<html lang="en">

    <head>
            <?php include_once 'includes/head.php'?>

            <meta charset="UTF-8">
            
            <?php include_once'includes/partials/getTitle.php'; ?>
            <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    </head> 

    <body>
         
         <div class="container-fluid">
                 

                 <div class="row">


                        



                   
                   

                             

                    <div class="formulaire col-md-6">


                                       
                        <form class="form-group " method="post" action="" enctype="multipart/data-form">

                                <div class="component">
                                        <br>
                                        <br>
                                        <font color="white"> <b>CREEZ UN COMPTE ADMINISTRATEUR</b></font>
                                        <br>
                                        <br>
                                        <label>Entrez votre nom</label>
                                        <input type="text" name="nom" class="form-control" required="true">
                                        <label>Entrez votre prenom</label>
                                        <input type="text" name="prenom" class="form-control" required="true">

                                        <label>Sexe:</label>
                                        <select class="form-control" name="sexe" required="true">
                                                        
                                                        <option value="Masculin">Masculin</option>

                                                        <option value="Feminin">Feminin</option>

                                        </select>
                                        <label>Mot de passe</label>
                                        <input type="password" name="mdp" class="form-control" required="true">

                                        <label>Votre Adresse Mail</label>
                                        <input type="mail" name="mail" class="form-control" required="true">

                                        <br>
                                        <button class="btn btn-success" name="bouton">S'enregister </button>


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


         

         </div>


    </body>
        
         <?php include_once 'includes/script.php'?>
</html>