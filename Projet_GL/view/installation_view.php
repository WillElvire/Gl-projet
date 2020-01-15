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


                                       
                        <form class="form-group  " method="post" action="" enctype="multipart/data-form">

                                <div class="component">
                                        <br>
                                        <br>
                                        <font color="white"> <b>CREEZ UN COMPTE ADMINISTRATEUR</b></font>
                                        <br>
                                        <br>
                                        <label>Votre Username</label>
                                        <input type="text" name="username" class="form-control" required="true">
                                        <label>Votre Adresse Mail</label>
                                        <input type="mail" name="mail" class="form-control" required="true">

                                        <br>
                                         <div class="alert alert-info">
                                                 Vous recevrez Un Mail Avec Votre Mot de Passe Par default
                                        </div>
                                        <button class="btn btn-success col-md-4" name="bouton">Recevoir le Mail</button>
                                        <br>
                                        <br>
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