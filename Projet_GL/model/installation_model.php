<?php 

//model of installation


include_once '__classes/presidentCp.php';


if(isset($_POST["bouton"])):
            extract($_POST);
            $admin=new President();
            $admin->createPresident($nom,$username,$sexe,$mdp);
            echo "create";
            

endif;