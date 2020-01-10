<?php 

   //cette fonction verifie l'existance d'un fichier

   function installation():string{


        		$fichier=dirname(__DIR__).DIRECTORY_SEPARATOR."installation";
        	

        		if(file_exists($fichier)):


                 	  file_get_contents($fichier);

        		else:


        	   		  file_put_contents($fichier,"ok");


        		endif;


        			 return $fichier;




   }