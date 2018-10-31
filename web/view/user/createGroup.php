         <?php include_once '../../inc/header.inc.php'; ?>
      <!-- banner -->
      <div class="inner_page-banner">
      </div>
      <!--//banner -->
         <!--headder-->
         <section class="contact-inner py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
               <h3 class="title text-center  mb-lg-5 mb-md-4 mb-sm-4 mb-3">Crie seu Grupo de RPG</h3>
               <div class=" contact-wls-detail">
                  <div class="contact-form">

                     <form action="/rpg/web/whatever/trataGrupo.php" method="post">
                        <div class="row agile-wls-contact-mid mb-sm-3 mb-2">
                           <div class="col-lg-12 col-md-12 form-group contact-forms">
                              <input type="text" name="name" class="form-control" placeholder="Nome do Grupo" required="">
                           </div>
                           </div>
                           <div style="padding: 50px 50px;" class="row agile-wls-contact-mid mb-sm-3 mb-2">
                           <div class="col-lg-4 col-md-4 form-group contact-forms">
                              Grupo Privado?
                             <div class="switchButton">
                                   <input type="checkbox" class="switch" id="private" name="private"/>
                                   <label for="private" class=""></label>
                                 </div>
                           </div>
                                               <div id="senha-grupo">
                              <div class="row agile-wls-contact-mid mb-sm-3 mb-2">
                                 <div class="col-lg-6 col-md-6 form-group contact-forms">
                                    <input type="password" class="form-control" placeholder="Senha" name="password">
                                 </div>
                                 <div class="col-lg-6 col-md-6 form-group contact-forms">
                                    <input type="password" class="form-control" placeholder="Repita a Senha" name="password2">
                                 </div>
                              </div>
                            </div>
                        </div>

                        <button style="background-color: #969696;" type="submit" class="btn sent-butnn btn-lg">Criar meu Grupo!</button>
                     </form>
                  </div>
               </div>
            </div>
         </section>

         <script>
            $("#senha-grupo").css("display", "none");
            $("#private").click(function(){
               var visivel  = $("#senha-grupo").is(':visible');
               if (visivel){$("#senha-grupo").css("display", "none");}else{$("#senha-grupo").css("display", "block");} 
            });

         </script>
                <?php include_once '../../inc/footer.inc.php'; ?>