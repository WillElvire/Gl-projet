<?php 

   //cette fonction verifie l'existance d'un fichier

   function installation($nom,$mdp):array{


        		$fichier=dirname(__DIR__).DIRECTORY_SEPARATOR."username";
                $fichier2=dirname(__DIR__).DIRECTORY_SEPARATOR."password";

                $nom=str_secure($nom);
                $mdp=str_secure($mdp);
        	

        		if(file_exists($fichier) and file_exists($fichier2)):

                        
                      file_put_contents($fichier,$nom);
                      file_put_contents($fichier2, $mdp);
                 	  

        		else:


        	   		  file_put_contents($fichier,$nom);
                      file_put_contents($fichier2, $mdp);



        		endif;


        			 return [$fichier,$fichier2];





   }