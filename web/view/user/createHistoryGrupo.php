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
         <section class="contact-inner py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
               <h3 class="title text-center  mb-lg-5 mb-md-4 mb-sm-4 mb-3">Crie sua História de RPG</h3>
               <div class=" contact-wls-detail">
                  <div class="contact-form">

                     <form action="../../whatever/trataHistoryGrupo.php" method="post">
                        <div class="row agile-wls-contact-mid mb-sm-3 mb-2">
                           <div class="col-lg-12 col-md-12 form-group contact-forms">
                              <input type="text" name="historyG_name" class="form-control" placeholder="Nome do História" required="">
                           </div>
                           </div>

                        <button style="background-color: #969696;" type="submit" class="btn sent-butnn btn-lg">Escrever minha História!</button>
                     </form>
                  </div>
               </div>
            </div>
         </section>

         <script>
           

         </script>
                <?php include_once '../../inc/footer.inc.php'; ?>