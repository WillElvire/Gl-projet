<?php 

//controller of installation
//Page de traitement du formulaire d'inscription on verifie les differents champs

$error="";
extract($_POST);

 if(isset($_POST['bouton'])):


            if(  isset($username) and isset($mail)):


                   
                   $username=str_secure($username);
                   
                   $mail=str_secure($mail);

                   

                            if(empty($username)):



                            else:

                                if(strlen($username)>=255):

                                        $error=" Votre username ne doit  pas etre si grand 🚏";
                                else:

                                       

                                        if(empty($mail)):


                                                $error="votre mail semble etre vide 🚏";

                                        else:

                                                 if(filter_var($mail,FILTER_VALIDATE_EMAIL)):

                                                                 installation($username,"Root");
                                                                 $email=new email();
                                                                 $error=

                                                                    "Email envoyé 📧 <br>
                                                                    consulté votre boite Mail <br>

                                                                 ";
                                                                 sleep(3);

                                                                 header("location:login");

                                                else:

                                                        $eror="Le mail n'est pas valide ⛔";

                                                endif;


                                        endif;

                                endif;

                            endif;

                                  

                            

            else:

                    


            endif;


        

 endif;




