<?php 
     

     $myresult=verify();
     if($myresult==true){

 
 ?>
<!doctype html>
<html lang="en">
  <head>


    <!--- inclusion du head  !-->
    <?php  include_once 'includes/head.php'?>;
    <!--- inclusion du titre  !-->
    <?php include_once('includes/partials/getTitle.php');  ?>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

   
   
  </head>
  <body>
      <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
         <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Espace Administrateur</a>
         <input class="form-control bg-dark w-100"  style="border-style: none;" type="text" placeholder="Search" aria-label="Search">
         <ul class="navbar-nav px-3">
              <li class="nav-item text-nowrap">
                   <a class="nav-link" href="#">Recherche</a>
              </li>
          </ul>

      </nav>

    <?php include_once("includes/header.php");?>

    <main role="main" class="col-md-9">
      <br>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

        <h1 class="h2">
               <?php $responce=read("username");echo $responce;?>
        </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          
         
          <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Article
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                    <a class="dropdown-item" href="#">

                        Creez un  Article  

                     </a>
                    
                    <a class="dropdown-item" href="#">Evaluer Article</a>
                    
                    
                </div>
          </div>

        </div>


      </div>


      <main class="container" id="container">
              

              <?php include_once 'includes/content.php' ?>

          
        </main>
    </main>
  </div>
</div>

        <?php 

                include_once'includes/script.php';
                include_once'includes/script2.php';


         ?>



 
  <script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="assets/js/ajaxLoader.js"></script>
  
</html>

<?php 

}else{

header("location:installation");


}



 ?>