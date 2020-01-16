<?php



global $db;
$note=[];
$req=$db->query("SELECT *from Evaluation ");
$req->fetchAll();
$allEval=$req->rowCount();

if($allEval>0):


                $request=$db->query("SELECT Article.*,evaluation.* from Article  inner join Evaluation on Article.id=Evaluation.identifiant");
                $data=$request->fetchAll();



                foreach ($data as $valeur) {

                                    $note[]=$valeur['evaluation'];
                    
                     echo "<tr>
                                  
                                    
                                    <td>".$valeur['titre']."
                                        
                                    </td>
                                    <td>".$valeur['Autheur']."</td>
                                    <td>".$valeur['evaluateur']."</td>
                                    <td>
                                        ".$valeur['evaluation']."
                                    </td>

                                    <td>

                                            Accepte Unanimement
         
                                    </td>
                                 
                                </tr>
                               
                               
                              </tbody>

                               </div>

                ";
                }


                echo "</table>";

                var_dump($note);

else:

     echo "<div class='alert alert-danger'>Aucune Evaluation n'a ete faite </div>";


endif;

