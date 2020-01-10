<?php
    /*
      cette fonction permet de verifier l'existance du fichier installation 
     */
    function verify(){

        /*
            le chemin d'acces du fichier
         */
    	$file=dirname(__DIR__).DIRECTORY_SEPARATOR."installation";

        /*
         * une condition ternaire 
         */

    	return (file_exists($file))?"true":"false";





    }