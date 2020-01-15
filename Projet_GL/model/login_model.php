<?php 
  

 global $error;

if(isset($_POST["confirm"])):


    global $db;
    $request=$db->prepare("SELECT username,mdp from President Where username=? and mdp= ? ");
    $request->execute(array($username,$mdp));
    $data=$request->rowCount();

    if($data==1):


        header("location:home");


    else:

          $error="Vous n'avez Pas de Compte ";


    endif;


endif;






   