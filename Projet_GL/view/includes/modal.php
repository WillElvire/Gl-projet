<!-- Modal -->
    <?php 

              if(isset($_POST['confirm'])):

                  header("location:deconnection");

              endif;

              ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                   <b> Souhaitez vous  vraiment vous deconnecté ? </b>
                   <br>
                   Nb: Toutes vos sessions disparaitrons
          </div>
          <div class="modal-footer">
            <form method="post" action="">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                  <button  class="btn btn-primary" name="confirm">Oui</button>
            </form>
               


          </div>
        </div>
      </div>
    </div>


   