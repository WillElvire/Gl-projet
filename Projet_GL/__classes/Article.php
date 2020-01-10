<?php 




public class Article {


	     private $titre;
	     private $N_auteur;
	     private $identifateur;
	     private $P_auteur;
	     private $resume;


       
          public function __construct(){








          }



          public function getNom():string{

             return ($this->nom!="")? $this->nom :"Pas de nom ";

          }




          public function getPrenom():string{


          	return ($this->prenom!="")? $this->prenom :"Pas de prenom ";


          }



          public function getTitre():string{

            return ($this->titre!="")?str_secure($this->titre):"Pas de titre";

          }








}