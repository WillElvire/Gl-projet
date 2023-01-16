
<?php 


//cette classe permet d'evaluer des Articles

class Evaluation{

	private $identifiant;
	private $Evaluateur;
	private $commentaire;
	private $message;
	private $evaluation;
	
	public function __construct($identifiant,$evaluation,$Evaluateur,$commentaire,$message){

               $this->Evaluateur=$Evaluateur;
               $this->commentaire=$commentaire;
               $this->message=$message;
	       $this->identifiant=$identifiant;
	       $this->evaluation=$evaluation;

                if(!empty($identifiant) and !empty($evaluation) and !empty($Evaluateur) and !empty($commentaire) and !empty($message)) :
		
                else:
                      echo "</br><div class='alert alert-danger'>Une des Variables est manquante</div>";
                endif;	    
	}



     //cette Methode permet d'evaluer un Article

      public function Evaluer(){
          global $db;	  
	  //on verifie s'il existe un article qui a cette identifiant
          try
	  {
		 $request=$db->prepare("SELECT id from Article where id=?");
		 $request->execute(array($this->identifiant));
		 $nombre=$request->rowCount();

          }catch(Exception $e)
	  {
             die("Erreur".$e->getMessage());
          }

           if($nombre==1):
	      //si c'est le cas on evalue l'article
              sleep(4); 
	      $verification=$db->prepare("SELECT *from Evaluation  where identifiant = ? ");
	      $verification->execute(array($this->identifiant));
	      $compteur=$verification->rowCount();
              //l'article est evaluer moin de 3 fois
              if($compteur<3):
		    try
		    {
		       $eval=$db->prepare("INSERT INTO Evaluation(identifiant,evaluation,evaluateur,commentaire,message) VALUES (?,?,?,?,?)");                     
		       $eval->execute(array($this->identifiant,$this->evaluation,$this->Evaluateur,$this->commentaire,$this->message));     
		    }
	            catch(Exception $e)
		    {
                      die("Une erreur est survenue");
                     }
              else:
                    echo "</br><br/><div class='alert alert-danger'>Impossible d'evalué cet Article  car le quota de 3 evaluations est Atteint</div>";
              endif;
          else:
	    //dans le cas contraire on sort un message d'erreur
            echo "</br><br/><div class='alert alert-danger'>Impossible d'evalué cet Article l'identifiant fourni n'existe pas </div>";
	 endif;

   }


}
