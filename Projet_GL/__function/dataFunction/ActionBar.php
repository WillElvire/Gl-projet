<?php 

   /**
   *@param   $action c'est le nom  du lien 
   * @param $url nous permet de specifier une url a utilisé
   * @param $icon ce parametre permet de definir un icon si  vous en voulez un
   * @return string  l'expression doit etre un chaine de caracteres
   */

   function setActionBar($action,$url="home",$icon=null):string{


         $action=str_secure($action);

        

        $retour="     
              <li class=\"nav-item\">
                        <a class=\"nav-link \" href=$url>
                         <span data-feather=\"file-text\" class=\"glyphicon glyphicon-$icon\"></span>
                                 $action
                        </a>  
              </li>
        ";


        return $retour;





   }





  /**
   *@param   $expression c'est une expression  qu'on rentre pour faire de titre
   * cette fonction permet de faire de titre au niveau du dashboard
   * @return string  l'expression doit etre un chaine de caracteres
   */

   function setTitle($expression):string{
         
         $expression=str_secure($expression);

         $retour="

            <h6 class=\"sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted\">
                  <span>$expression</span>
            </h6>";


        return $retour;


   }