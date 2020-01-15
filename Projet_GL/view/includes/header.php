<!---  lA SIDEBAR ET SES ELEMENTS -->
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">




        <ul class="nav flex-column">

          <li class="nav-item">
               
               <br>
               <br>
          
            
               <?= setActionBar("Dashboard")?>
          </li>
        </ul>

                <?=setTitle("Article");?>
            <ul class="nav flex-column mb-2">
         
                <!-- Button trigger modal -->
                    <li>
                              <a class="nav-link"  href="#" data-toggle="modal" data-target="#exampleModalScrollable">
                                    
                                    Ajouter un Article

                              </a>
                  </li>




                  <?=setActionBar("Evaluer un Article","#","Eval")?>

                  <?=setActionBar("Lister les articles","#","List")?>
          
          </ul>
                <?=setTitle("Parametre")?>

                
                 <ul class="nav flex-column mb-2">
                 
                        <!-- Button trigger modal -->
                      <li>
                          <a   href="" data-toggle="modal" data-target="#exampleModal" style="margin-left: 12px;text-decoration: none;font-weight: bold;">
                                  Deconnection 
                           </a>
                        </li>

                    <?php include_once 'modal.php'; ?>

                </ul>

          

          





      </div>
    </nav>

    <style type="text/css">
      
     ul li .nav-link{
         
         transition: border-left 0.5s;
         font-family: sans-serif;
         font-weight: bold;

     }
     ul li .nav-link:hover{

      border-left: 4px solid dodgerblue;

     }

    </style>