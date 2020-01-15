<?php 


/*
* cette classe permet de redefinir les points d'access
 */

class Redirect{

		private $page;


	    public function __construct(){


	    	  if(isset($_GET['page']) and !empty($_GET['page'])):


	    	  	        $this->page=trim(strtolower(htmlentities($_GET['page'])));



	    	  else:    

                        $getVerification=verify();
                                                
                        if($getVerification==true):

	    	  	        $this->page="home";

                        else:
                                $this->page="installation";

                        endif;

	    	  endif;






	    }


	    public function getRedirection(){



	    		$touteLesPages=scandir("controller");

	    		if(in_array($this->page."_controller.php", $touteLesPages)):



	    			require_once "controller".DIRECTORY_SEPARATOR.$this->page."_controller.php";
	    			require_once "view".DIRECTORY_SEPARATOR.$this->page."_view.php";
                                require_once "model".DIRECTORY_SEPARATOR.$this->page."_model.php";



	    		else:

                                require_once "view".DIRECTORY_SEPARATOR."404Error.php";


	    		endif;







	    }








}