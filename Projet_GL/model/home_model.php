<?php

//model of home
//
 


                                      if(isset($_POST['bouton'])):

                                           
                                            extract($_POST);

                                            if(!empty($pass)):
                                                  
                                                  if(strlen($pass)>6):

                                                          sleep(2);

                                                           global $db;

                                                           $requette=$db->prepare("UPDATE President set mdp= ?");
                                                           $requette->execute(array(str_secure($pass)));
                                                           
                                                           modify($pass);
                                                           echo "<div class='alert alert-info'>Votre  Nouveau Mot de Passe est $pass </div>";
                                                    else:


                                                           echo "<div class='alert alert-danger'>$pass est tros court pour etre votre mot de passe </div>";



                                                    endif;


                                            else:

                                                 echo "erreur";


                                            endif;


                                      else:



                                      endif;




                                 
                               ?>

