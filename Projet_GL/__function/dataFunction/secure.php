<?php 




    function str_secure($expression){


            $expression=trim(htmlentities($expression));


            return ($expression!="")?$expression:'';


    }