<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">




        <ul class="nav flex-column">

          <li class="nav-item">
            <a class="nav-link active" href="#">
              <br>
              <br>
              <span data-feather="home"></span>
                       Dashboard <span class="sr-only">(current)</span>
            </a>
          
          
            
               <?= setActionBar("profile")?>
        </ul>

                <?=setTitle("Article");?>
        <ul class="nav flex-column mb-2">
         
                <?=setActionBar("Soumettre un article","home")?>

                <?=setActionBar("Evaluer un Article")?>

                <?=setActionBar("Recherchez un article")?>
          
        </ul>
                <?=setTitle("Parametre")?>

                
         <ul class="nav flex-column mb-2">
         
                <?=setActionBar("Deconnection","home")?>

                <?=setActionBar("Evaluer l'application")?>
          

        </ul>

          

          





      </div>
    </nav>