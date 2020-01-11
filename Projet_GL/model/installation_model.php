<?php 

//model of installation


include_once '__classes/presidentCp.php';


if(isset($_POST["bouton"])):

            $admin=new President($nom,$prenom,$sexe,$mdp,$mail);
            $responce=$admin->Tostring();
            echo $responce[0];


endif;