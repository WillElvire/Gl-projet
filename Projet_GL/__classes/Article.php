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
                //on effectue une instanciation des differents attributs de la classe
                $this->identificateur=$identificateur;
                $this->titre=$titre;
                $this->auteur=$auteur;
                $this->resume=$resume;
                //cette requette permet de voir si ya un doublon au niveau de l'identifiant
                //on verifi si il ya un article qui existe avec ce identifiant
                //si c'est le cas on affiche un message d'erreur
             
                $query=$db->prepare("SELECT * from Article where id= ?");
                $query->execute(array($this->identificateur));
                $data=$query->rowCount();
                //si aucun article n'a cet id on fait une insertion en base de donnee
                if($data==0):
                        //insertion en Base de donnée
                        $request=$db->prepare("INSERT INTO Article(id,Autheur,titre,resum) values (?,?,?,?)");
                        $request->execute(array($this->identificateur,$this->auteur,$this->titre,$this->resume));
                 else: 
                        //dans le cas ou un article a cet id on affiche un message d'erreur
                       echo "<div class='alert alert-danger'>Cet Idenfiant correspond deja à un article veuillez en saisir un nouveau</div>";
                endif;

          }
          //cette methode permet de creez un resume d'article
          public function createResume(){
              //On commence par cree un fichier qui a le nom de l'auteur
              //on verifi l'existance si elxiste on  le rempli dans le cas contraire on le cree et on le rempli
               $fichier="Articles".DIRECTORY_SEPARATOR.str_secure($this->auteur).".pdf";
               $content="";

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
