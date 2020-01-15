



<div class="row">

    

	<form   method="get"   action=""  class="form-group col-md-12">
    		      <br>
    		      <label>Identificateur</label>

    		      <input type="text" name="identificateur"  class="form-control">

                  <label>Nom & Prenom </label>

                  <input type="text" name="nom" class="form-control" >

                  <label>Titre</label>

                  <input type="text" name="titre"  class="form-control">

                  <label>Resume</label>

                  <textarea rows="5" id="resume" name="resume"   class="form-control"  >

                  </textarea>
                  <br>
                  <br>
                  <button class="btn btn-success" type="submit" id="button" name="submit">Enregister L'article</button>

	</form>
  
   <?php 


      

         $_SESSION['id']=$_GET['identificateur'];


     

    ?>




	
			 
</div>









</script>