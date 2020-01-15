<?php 


 class Article{


	     private $titre;
	     private $auteur;
	     private $identificateur;
	     private $resume;


       
          public function __construct($identificateur,$titre,$auteur,$resume){


                $this->identificateur=$identificateur;
                $this->titre=$titre;
                $this->auteur=$auteur;
                $this->resume=$resume;





          }



          public function createResume(){



               

               
               $fichier="Articles".DIRECTORY_SEPARATOR.str_secure($this->auteur).".pdf";

               $content="

                
                            ";

               if(file_exists($fichier)):


                   file_put_contents($fichier,$content);


               else:

                    file_put_contents($fichier,$content);


               endif;
                    

                    return $fichier;





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