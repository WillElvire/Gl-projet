<?php
    /*
      cette fonction permet de verifier l'existance du fichier installation 
     */
    function verify(){

        /*
            le chemin d'acces du fichier
         */
    	$file=dirname(__DIR__).DIRECTORY_SEPARATOR."username";
        $file2=dirname(__DIR__).DIRECTORY_SEPARATOR."password";

        /*
         * cette condition verifie si les fichiers password et username sont crees
         * si c'est le cas on verifie leurs contenu
         * si le contenue est vide vous rester sur la page d'installation dans le cas contraitre vous avez access au dashboard admin
         
         *le contenu des fichier sera ainsi enregistre dans la base de donnee afin de faire des eventuelles comparaisons si il ya une modification des fichier
         */
        
 



    	if (file_exists($file) and file_exists($file2)):


            $content=(string)file_get_contents($file);
            $content1=(string)file_get_contents($file2);

            

            if(empty($content) and empty($content1)):


                 return false;

            else:
                 return true;

            endif;




        endif;





    }