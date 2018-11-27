<?php session_start();
if(!isset($_SESSION["user_nick"]) || $_SESSION["user_nick"] == null || $_SESSION["user_nick"] == '' || $_SESSION["user_nick"] == " " || $_SESSION["user_nick"] == false){
    header("location: semPermissao.php");
}
 include_once '../../inc/header.inc.php';?>
      <!-- banner -->
      <div class="inner_page-banner">
      </div>
      <!--//banner -->
         <!--headder-->
         <section class="latest-design py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container-fluid py-lg-5 py-md-5 py-sm-4 py-4">
               <h3 class="title text-center clr mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our History</h3>
               <div class="timeline">
                  <div class="timeline__wrap">
                     <div class="timeline__items">
                        <div class="timeline__item">
                           <div class="timeline__content">
                              <h6 class="pb-2">2010</h6>
                              <h4 class="pb-3">Start Game</h4>
                              <p>1
                              </p>
                              <div style="text-align: center;" class="addPlus"><button type="button">+</button></div>
                           </div>
                        </div>
                  		 <div class="timeline__item">
                           <div class="timeline__content">
                              <h6 class="pb-2">2010</h6>
                              <h4 class="pb-3">Start Game</h4>
                              <p>2
                              </p>
                           </div>
                        </div> <div class="timeline__item">
                           <div class="timeline__content">
                              <h6 class="pb-2">2010</h6>
                              <h4 class="pb-3">Start Game</h4>
                              <p>3
                              </p>
                           </div>
                        </div> <div class="timeline__item">
                           <div class="timeline__content">
                              <h6 class="pb-2">2010</h6>
                              <h4 class="pb-3">Start Game</h4>
                              <p>4
                              </p>
                           </div>
                        </div> <div class="timeline__item">
                           <div class="timeline__content">
                              <h6 class="pb-2">2010</h6>
                              <h4 class="pb-3">Start Game</h4>
                              <p>5
                              </p>
                           </div>
                        </div> <div class="timeline__item">
                           <div class="timeline__content">
                              <h6 class="pb-2">2010</h6>
                              <h4 class="pb-3">Start Game</h4>
                              <p>6
                              </p>
                           </div>
                        </div> <div class="timeline__item">
                           <div class="timeline__content">
                              <h6 class="pb-2">2010</h6>
                              <h4 class="pb-3">Start Game</h4>
                              <p>7
                              </p>
                           </div>
                        </div> <div class="timeline__item">
                           <div class="timeline__content">
                              <h6 class="pb-2">2010</h6>
                              <h4 class="pb-3">Start Game</h4>
                              <p>8
                              </p>
                           </div>
                        </div>
                        <div class="timeline__item">
                           <div class="timeline__content">
                              <h6 class="pb-2">2010</h6>
                              <h4 class="pb-3">Start Game</h4>
                              <p>9
                              </p>
                           </div>
                        </div>
                        <div class="timeline__item">
                           <div class="timeline__content">
                              <h6 class="pb-2">2010</h6>
                              <h4 class="pb-3">Start Game</h4>
                              <p>10
                              </p>
                           </div>
                        </div>
                        <div class="timeline__item">
                           <div class="timeline__content">
                              <h6 class="pb-2">2010</h6>
                              <h4 class="pb-3">Start Game</h4>
                              <p>11
                              </p>
                           </div>
                        </div>
                        <div class="timeline__item">
                           <div class="timeline__content">
                              <h6 class="pb-2">2010</h6>
                              <h4 class="pb-3">Start Game</h4>
                              <p>12
                              </p>
                           </div>
                        </div>
                        <div class="timeline__item">
                           <div class="timeline__content">
                              <h6 class="pb-2">2010</h6>
                              <h4 class="pb-3">Start Game</h4>
                              <p>13
                              </p>
                           </div>
                        </div>
                        <div  style="display: none;">
                        <div class="timeline__item">
                           <div class="timeline__content">
                              <h6 class="pb-2">2010</h6>
                              <h4 class="pb-3">Start Game</h4>
                              <p>14
                              </p>
                           </div>
                        </div>
                    </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
        
    	<div id="iframeBolado" class="iframe"><iframe frameborder="1"></iframe><button type="button" id="fechaIframe">X</button></div>
         <?php include_once '../../inc/footer.inc.php'; ?>
        <style>
        iframe{
		   -webkit-transform: translate(-50%,-50%);
		   -moz-transform: translate(-50%,-50%);
		   transform: translate(-50%, -50%);
		   top: 50%;
		   left: 50%;
		   position: fixed;
		   z-index: 99;
		   width: 800px;
		   height: 500px;
		}
		.iframe button {
		  position: absolute;
		  right: 200px;
		  top: 80px;
		  color: red;
		  z-index: 99999;
		}
    	</style>
        <script>
        	
        	$( document ).ready(function(){
        		$("#iframeBolado").hide();
        		$(".addPlus").click(function(){
	        		var pagina = "addHistory.php";
					var popup = document.querySelector("iframe");
					popup.src = pagina;
					$("#iframeBolado").fadeIn("slow", function(){
						$("#iframeBolado").show();
						$( document.body ).css("opcaity", "0.1");
					});
					
        		});
        		$("#fechaIframe").click(function(){
					$("#iframeBolado").fadeOut("slow", function(){
						$("#iframeBolado").hide();
					});
					
        		});
        	});

        </script>
