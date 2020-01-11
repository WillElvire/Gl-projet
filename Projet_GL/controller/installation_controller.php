<?php 

//controller of installation


extract($_POST);
if(isset($nom) and isset($mdp)):

    installation($nom,$mdp);

else:

    "Connection Failed";

endif;