<?php 

//La classe Article permet de gerer les differents Articles
 class Article{


	     private $titre;
	     private $auteur;
	     private $identificateur;
	     private $resume;

//declaration du constructeur
       
          public function __construct($identificateur,$titre,$auteur,$resume){
                 
                global $db;
                $this->identificateur=$identificateur;
                $this->titre=$titre;
                $this->auteur=$auteur;
                $this->resume=$resume;
                //insertion en Base de donnée
                $request=$db->prepare("INSERT INTO Article(id,Autheur,titre,resum) values (?,?,?,?)");
                $request->execute(array($this->identificateur,$this->auteur,$this->titre,$this->resume));

          }

//cette methode permet de creez un resume d'article

          public function createResume(){


                //On commence par cree un fichier qui a le nom de l'auteur
                //on verifi l'existance si elxiste on  le rempli dans le cas contraire on le cree et on le rempli
               
               $fichier="Articles".DIRECTORY_SEPARATOR.str_secure($this->auteur).".pdf";

               $content="

                
                            ";

               if(file_exists($fichier)):


                   file_put_contents($fichier,$content);


               else:

                    file_put_contents($fichier,$content);


               endif;


               //on return le fichier afin de connaitre le chemin de ce fichier
                    

                    return $fichier;
 

          }

          //setters et getters
          public function getTitre():string{

            return ($this->titre!="")?str_secure($this->titre):"Pas de titre";

          }








}