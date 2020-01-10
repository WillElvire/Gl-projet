
<?php 



     /**
      * cette classe permet de gerer l'envoi des emails 
      */
 	class email{



            private  $mail;
 			private  $nom;
 			private  $username;
 			private  $password;



                        // DECLARATION  DU CONSTRUCTEUR





 			    public function __construct($mail){







 			    }




                        //DECLARATION DES SETTERS ET DES GETTERS 



 			public function getNom():string{



                return $this->nom;




 			}


 			public function getUsername():string{


                return $this->username;



 				
 			}
            public function getPassword():string{


                return $this->password;



                
            }




                /*
            
                         -------------   DECLARATION DES METHODES -----------

                */



            public function sendMail($mail){




                    $mail=str_secure($this->mail);

                    $message="

                           <b>Username: </b>  $this->name;
                           <b>$Password : </b>  $this->password;

                            ";




                    return ($mail!="")?mail($mail, "Vos Identifiant", $message):" Ce mail n'est pas  disponible";



            }


            public function Tostring(){

        

                    return $this->mail."\n".$this->username."\n".$this->password;



            }


            public function GeneratePassword($password){


                
                $password=random_int(1, 10000000000);
                    



            }













 

 	}