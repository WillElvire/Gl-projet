<!DOCTYPE html>


<html lang="en">

    <head>
            <?php include_once 'includes/head.php'?>

            <meta charset="UTF-8">
            
            <?php include_once'includes/partials/getTitle.php'; ?>
            <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    </head> 

    <body>
         
         <div class="container-fluid">
                 

                 <div class="row">


                        



                        

                             

                               <div>
                                       
                                        <form class="form-group" method="post" action="" enctype="multipart/data-form">


                                                <label>Entrez votre nom</label>
                                                <input type="text" name="" class="form-control">
                                                <label>Entrez votre prenom</label>
                                                <input type="text" name="" class="form-control">

                                                <label>Photo (*faculatitif)</label>
                                                <div class="box__input">
                                                <input class="box__file" type="file" name="files[]" id="file" data-multiple-caption="{count} files selected" multiple />
                                                <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
                                                 <button class="box__button" type="submit">Upload</button>
                                                </div>
                                                <div class="box__uploading">Uploading&hellip;</div>
                                                <div class="box__success">Done!</div>
                                                <div class="box__error">Error! <span></span>.</div>

                                                



                                        </form>


                               </div>


                


                               

                                
                                


                        
                         

                 </div>



                        
         

         </div>


    </body>

         <?php include_once 'includes/script.php'?>
</html>