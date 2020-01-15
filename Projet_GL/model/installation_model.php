<?php 

//model of installation


include_once '__classes/presidentCp.php';


if(isset($_POST["bouton"])):
            extract($_POST);
            $admin=new President();
            $admin->createPresident($username,$mail);
            echo "create";
            

endif;