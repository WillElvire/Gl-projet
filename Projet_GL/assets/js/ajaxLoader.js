$(function(){





           $("#List").click(function(event) {
               /* Act on the event */

                  $("#container").html('<center><img style="margin-top:100px;" src="assets/img/ajax-loader2.gif"  width="200px"></center>');

                  $.ajax({

                    type:"GET",
                    url:"list",
                    success:function(data){

                            $("#container").html(data);
                    },
                    error:function(){

                          $("#container").html('<div class="alert alert-danger"><b>Une Erreur est survenue</b></div>');
                    },

                  })
                    
            })



           $("#content").click(function(event) {
               /* Act on the event */

                  $("#container").html('<center><img style="margin-top:100px;" src="assets/img/ajax-loader2.gif"  width="200px"></center>');

                  $.ajax({

                    type:"GET",
                    url:"list",
                    success:function(data){

                            $("#container").html(data);
                    },
                    error:function(){

                          $("#container").html('<div class="alert alert-danger"><b>Une Erreur est survenue</b></div>');
                    },

                  })
                    
            })

            





          


           








})