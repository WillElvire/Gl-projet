<?php 

   if(isset($_POST['Evaluer'])):
        extract($_POST);
        bool verification = !empty($identifiant) and !empty($evaluateur) and !empty($evalutation) and !empty($commentaire) and !empty($message);
        if(verification):

                  $identifiant=str_secure($identifiant);
                  $evaluateur=str_secure($evaluateur);
                  $evalutation=str_secure($evalutation);
                  $commentaire=str_secure($commentaire);
                  $message=str_secure($message);
                  $Eval=new Evaluation($identifiant,$evalutation,$evaluateur,$commentaire,$message);
                  $Eval->Evaluer();
        else:
           var_dump($_POST);
      endif;
endif;

?>

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



                <li>
                                  <!-- Button trigger modal -->
                      <a class="nav-link" data-toggle="modal" href="" data-target="#staticBackdrop">
                          Evaluer un Article
                      </a>

                </li>

<!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Evaluer  un Article</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">


                      <form method="post" class="form-group col-md-12">

                           <div class='alert alert-info'>Vous Avez Droit à 3 Evaluations  Par Article</div>

                            <label>Entrez l'identifiant de L'Article</label>
                            <input type=text name="identifiant" class="form-control border-success" required="">
                            <label>Le nom de L'evaluateur</label>
                            <input type=text name="evaluateur" class="form-control border-success" required="">
                            <label>Numero d'Evaluation</label>
                            <select class="form-control border-success" name="evalutation" required="">

                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              
                                

                            </select>
                            <label>Entrez le commentaire</label>
                            <input type=text name="commentaire" class="form-control border-success" required="">
                            <label>Entrez un Message Pour le President</label>
                            <textarea name="message"  rows="7" class="form-control border-success" required="">


                            </textarea>
                       </div>
                        <div class="modal-footer">


                                  <button class="btn btn-success col-md-12" name="Evaluer">Evaluer</button>


                            </form>
                        </div>
                  </div>
                </div>
              </div>




                  

                  <?=setActionBar("Lister les articles","#","List")?>
          
          </ul>
                <?=setTitle("Parametre")?>

                
                 <ul class="nav flex-column mb-2">
                 
                        <!-- Button trigger modal -->
                      <li>
                          <a   href="login"  style="margin-left: 12px;text-decoration: none;font-weight: bold;">
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
