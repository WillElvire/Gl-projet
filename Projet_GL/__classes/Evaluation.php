
<?php 


//cette classe permet d'evaluer des Articles

		class Evaluation{

		private $identifiant;
		private $evaluation;

		public function __construct($identifiant,$evaluation){

		       $this->identifiant=$identifiant;
		       $this->evaluation=$evaluation;
		    
		}



//cette Methode permet d'evaluer un Article

		public function Evaluer(){



		 global $db;
		  //on verifie s'il existe un article qui a cette identifiant
		 $request=$db->prepare("SELECT id from Article");
		 $request->execute(array($this->identifiant));
		 $nombre=$request->rowCount();

		 if($nombre==1):

		    //si c'est le cas on evalue l'article 
		 	 $eval=$db->prepare("INSERT INTO Evaluation(identifiant,evaluation) VALUES(?,?)");
		 	 $eval->execute(array($this->identifiant,$tihs->evaluation));


		 else:
		 	//dans le cas contraire on sort un message d'erreur




		 endif;









		}


}