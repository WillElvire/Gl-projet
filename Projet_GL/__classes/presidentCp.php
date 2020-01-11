<?php 


//Creation de la Classe President de cp
//cette classe permet de creez un nouveau compte administrateur
 class President{



//declaration des differents attributs
          private $nom;
          private $prenom;
          private $sexe;
          private $email;
          private $password;

//Le constructeur 
/**
 *@param  $nom initialise le nom
 * @param   $prenom initialise le prenom
 * @param $sexe initialise le sexe
 *@param   $email initialise le mail
 *@param  $password initialise de mot de passe
 * @author Koua Wilfried
 */ 


           public  function __construct($nom,$prenom,$sexe,$email,$password){

                    $this->nom=$nom;
                    $this->prenom=$prenom;
                    $this->sexe=$sexe;
                    $this->email=$email;
                    $this->password=$password;

	
           }

        //La methode Tostring() permet de voire le contenu des attributs declaré
           public function Tostring():array{

                return [$this->nom,
                            $this->prenom,
                                    $this->sexe,
                                            $this->email,
                                                    $this->password];
           }

        //declaration des accesseurs et des mutateurs
        //les accesseurs sont des methodes qui permettent de recuperer les valeurs de differents attributs
        
        
        public function getNom():string{


               return $this->nom;

        } 


        public function getPrenom():string{

             return $this->prenom;

        }



        public function getEmail():string{

             return $this->email;
        } 


        public function getPassword():string{

            return $this->password;
        }


        public function getSexe():string{

            return $this->sexe;
        }











 }