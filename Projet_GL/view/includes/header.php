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
         
                <?=setActionBar("Ajouter un article","#","Ajout")?>

                <?=setActionBar("Evaluer un Article","#","Eval")?>

                <?=setActionBar("Lister les articles","#","List")?>
          
        </ul>
                <?=setTitle("Parametre")?>

                
         <ul class="nav flex-column mb-2">
         
                <!-- Button trigger modal -->
              <li>
                  <a   href="" data-toggle="modal" data-target="#exampleModal" style="margin-left: 12px;">
                          Deconnection
                   </a>
                </li>

            <?php include_once 'modal.php'; ?>

        </ul>

          

          





      </div>
    </nav>