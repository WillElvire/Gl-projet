
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
         <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">DashBoard</a>
         <input class="form-control bg-dark w-100"  style="border-style: none;" type="text" placeholder="Search" aria-label="Search">
         <ul class="navbar-nav px-3">
              <li class="nav-item text-nowrap">
                   <a class="nav-link" href="#">Sign out</a>
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




      <div class="card-deck">
        <div class="card">
          <img src="https://static3.formation-isfac.com/images/formations-courtes/ressources-humaines.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Enregister Un Article</h5>
            <p class="card-text">Vous avez la possibilité de  creez un article en cliquant ici</p>
            <button class="btn btn-primary">Creez Article</button>
          </div>
        </div>
        <div class="card">
          <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Evaluez un Article</h5>
            <p class="card-text">Vous Pouvez Evalué un Article en cliquant ici</p>
            <button class="btn btn-primary">Evaluer Article</button>
            
          </div>
        </div>
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>

        <?php 

                include_once'includes/script.php';
                include_once'includes/script2.php';


         ?>
</html>
