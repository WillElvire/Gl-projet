<?php 


/*
* cette classe permet de redefinir les points d'access
 */

class Redirect{
	
	    private $page;
	
	    public function __construct(){
                   
		  global $db;
		  //on fait cette petite requette en Base de donnee pour savoir si ya un president qui existe
		  $request=$db->query("SELECT * from President");
		  $request->fetchAll();
		  $compteur=$request->rowCount();
                  //verification de l'url pour la redirection
	    	  if(isset($_GET['page']) and !empty($_GET['page'])):
	    	      $this->page=trim(strtolower(htmlentities($_GET['page'])));
	    	  else:    
                        $getVerification=verify();
                        //on verifie si les document sont creez et que un president est crée                   
                        if($getVerification==true and $compteur>0):
                                //si c'est le cas on nous envoi sur le home
	    	  	        $this->page="home";
                        else:
                                //dans le cas contraire on  nous envoi sur la page de creation de President
                                $this->page="installation";
                        endif;

	    	  endif;

	    }

           //on verifie le redirection
	    public function getRedirection(){
                        //on verifie si le dossier controller est vide
	    		$touteLesPages = scandir("controller");
                        //si non on cherche le fichier controller de l'url demandé
	    		if(in_array($this->page."_controller.php", $touteLesPages)):
                              //si ce fichier existe on inclus tous les autres fichiers
	    			require_once "controller".DIRECTORY_SEPARATOR.$this->page."_controller.php";
	    			require_once "view".DIRECTORY_SEPARATOR.$this->page."_view.php";
                                require_once "model".DIRECTORY_SEPARATOR.$this->page."_model.php";
	    		else:
                               //dans le cas contraire on retourne une erreur 404
                                require_once "view".DIRECTORY_SEPARATOR."404Error.php";
	    		endif;

	    }
}
