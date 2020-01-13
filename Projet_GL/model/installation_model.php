<?php 

//model of installation


include_once '__classes/presidentCp.php';


if(isset($_POST["bouton"])):

            $admin=new President($nom,$prenom,$sexe,$mdp,$mail);
            $admin->createPesident();
            

endif;