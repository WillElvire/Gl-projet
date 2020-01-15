<?php 




    function str_secure($expression){


            $expression=trim(htmlentities($expression));


            return ($expression!="")?$expression:'';


    }


    function AlertDebug(){


      return "<script type=\"text/javascript\">

                   alert('debug');
            ";
    }