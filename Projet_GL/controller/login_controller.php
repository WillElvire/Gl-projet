<?php 

 

   $error=null;

   if(isset($_POST['confirm'])):


      extract($_POST);

     if(!empty($username) and !empty($mdp)):


          if(isset($username) and isset($mdp)):



             if(strlen($username)>=255):


                  $error="Votre Username est Tros grand";


             else:

                if(strlen($mdp)>=255):


                    $error="Mot de passe Tros Grand";



                else:


                    if(read("username")==$username):

                         if(read("password")==$mdp):

                             header("location:home");

                         else:

                             $error="password invalide";
                            
                        endif;


                    else:  
                             $error="Username invalide";


                    endif;


                endif;




            endif;




         endif;



    else:

         $error="Veuillez remplir tous les champs";


    endif;

 


   



   endif;