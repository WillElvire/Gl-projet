<?php 

//controller of installation
//Page de traitement du formulaire d'inscription on verifie les differents champs

$error="";
extract($_POST);

 if(isset($_POST['bouton'])):


            if(isset($nom) and isset($username) and isset($sexe) and isset($mdp) and isset($mail)):


                   $nom=str_secure($nom);
                   $username=str_secure($username);
                   $sexe=str_secure($sexe);
                   $mdp=str_secure($mdp);
                   $mail=str_secure($mail);

                   if(empty($nom)):


                            $error="Veuillez Renseigné votre nom";


                   else:

                        if(strlen($nom)>=255):


                            $error=" Votre nom ne doit  pas etre si grand";


                        else:


                            if(empty($username)):



                            else:

                                if(strlen($username)>=255):

                                        $error=" Votre username ne doit  pas etre si grand";
                                else:


                                        if(empty($mdp)):


                                        else:

                                            if($mdp>255):


                                                $error=" votre mot de passe doit contenir moin de 255 carateres";



                                            else:


                                                    installation($username,$mdp);

                                                    if(empty($mail)):

                                                        $error="votre mail semble etre vide";

                                                    else:

                                                        if(filter_var($mail,FILTER_VALIDATE_EMAIL)):


                                                            //header("location:home");

                                                        else:

                                                            $eror="Le mail n'est pas valide";

                                                        endif;


                                                    endif;

                                                    endif;

                                                endif;

                                       endif;


                                   endif;


                            endif;


                   endif;


                            

            else:

                    


            endif;


        

 endif;




