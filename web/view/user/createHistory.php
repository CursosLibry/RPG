<?php session_start();
if(!isset($_SESSION["user_nick"]) || $_SESSION["user_nick"] == null || $_SESSION["user_nick"] == '' || $_SESSION["user_nick"] == " " || $_SESSION["user_nick"] == false){
    header("location: semPermissao.php");
}
 include_once '../../inc/header.inc.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "libry_rpg";
 ?>
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
                       
                        <?php
                           $conn = mysqli_connect($servername, $username, $password, $dbname);
                           if (!$conn) {
                              die("Connection failed: " . mysqli_connect_error());
                           }
                           $sql = "SELECT id, title, history FROM history";
                           $result = mysqli_query($conn, $sql);
                           if (mysqli_num_rows($result) > 0) {
                              while($row = mysqli_fetch_assoc($result)) { ?>
                               <div class="timeline__item" style="width: 200px; word-wrap: break-word;">
                                 <div class="timeline__content">
                                    <h4 class="pb-3"><?php echo $row["title"] ?></h4>
                                     <p><?php echo $row["history"] ?>
                                     </p>
                                    <div style="text-align: center;" class="addPlus"><button type="button">+</button></div>
                                    <div style="text-align: center;" class="addMinus" id="<?php echo $row["id"] ?>"><button type="button">-</button></div>
                                 </div>
                              </div>
                           <?php
                              }
                           } else {?>
                               <div class="timeline__item">
                                 <div class="timeline__content">
                                    <h4 class="pb-3">Este card é somente um exemplo</h4>
                                     <p>Neste card você pode ver como a sua historia vai ficar, gostou? Clique no mais e adicione quantas quiser!
                                     </p>
                                    <div style="text-align: center;" class="addPlus"><button type="button">+</button></div>
                                 </div>
                              </div>
                           <?php
                           }
                           mysqli_close($conn);
                        ?>
                        <div  style="display: none;">
                        <div class="timeline__item" style="display: none;">
                           <div class="timeline__content" style="display: none;">
                              <h6 class="pb-2">2010</h6>
                              <h4 class="pb-3" >Start Game</h4>
                              <p >14
                              </p>
                           </div>
                        </div>
                    </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
        
    	<!-- <div id="iframeBolado" class="iframe"><iframe frameborder="1"></iframe><div style="padding-top: 300px; text-align: center;"><button type="button" id="fechaIframe">X</button></div></div> -->
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
					// var popup = document.querySelector("iframe");
               // popup.src = pagina;
               window.location.href = pagina
					// $("#iframeBolado").fadeIn("slow", function(){
               //    $("#iframeBolado").show();
               
					// 	$( document.body ).css("opcaity", "0.1");
					// });
					
              });
              $(".addMinus").click(function(){
                 var id = $(this).attr("id");
               window.location.href = "../../whatever/trataHistory.php?id="+ id +"";
        		});
        		$("#fechaIframe").click(function(){
					$("#iframeBolado").fadeOut("slow", function(){
						$("#iframeBolado").hide();
					});
					
        		});
        	});

        </script>
