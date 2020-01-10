<title>


        <?php   

            if(isset($_GET['page']) and !empty($_GET['page'])):

                $page=trim(ucfirst($_GET['page']));
                echo $page;

            else:

                echo "home";

            endif;


        ?>



</title>
