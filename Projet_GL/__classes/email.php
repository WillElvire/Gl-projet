
<?php 

 	class email{
          
          private  $mail;
          private  $username;
          private  $password;
          // DECLARATION  DU CONSTRUCTEUR
          public function __construct(){

 	     }
          
          public function sendMail($username,$mail){
                    //gestion des eventuelles erreurs
               ini_set('display_errors', 1);
               error_reporting(E_ALL);
               //definition des composants d'un mail 

               $from="elvirekoua2000@gmail.com";
               $to=str_secure($mail);
               $subject="Reception de Votre Mot de Passe";
               $header="From :".$from;
               $message="
                           <b>Username: </b>  $username;
                           <b>Password : </b>  12548;
                        ";
              //$mailling envoi un mail a un mail passer en parametre
              $mailling = (mail($to, $subject, $message)) ? "envoyer": "Probleme d'envoi" ;
            }


           //Tostring renvoi notre username et notre password et cas de verification de contenu

            public function Tostring(){
                    return $this->mail."\n".$this->username."\n".$this->password;
            }



 	}
