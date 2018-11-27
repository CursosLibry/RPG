<?php include_once '../../inc/header.inc.php';
// include_once '../../whatever/funcoesGrupo.php';

if($_GET){
   if($_GET['id']){
      // $groupObj = listOne($_GET['id']);
      // var_dump($groupObj);
   }
}
?>
      <!-- banner -->
      <div class="inner_page-banner">
      </div>
      <!--//banner -->
      <!-- Seção de Opções para o Mestre -->
      <div>
      <section class="feature-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center clr mb-lg-5 mb-md-4 mb-sm-4 mb-3">Crie sua Ficha Personalizada</h3>

            <div class="row text-center">
               <div class="col-md-6 service-icon-agile">
                  <div class="feature-inner ">
                     <h5>Usar Modelo Pronto</h5>
                  </div>
                  <div class="address-left text-center">
                     <span class="fab fa-asymmetrik"></span>
                  </div>
                  <div class="address-right">
                     <p class="pt-2">Você prefere não se estressar demais? Tudo bem, estamos aqui para isso mesmo! Escolha um de nossos modelos de ficha para usar em sua campanha!
                     </p>
                  </div>
               </div>
               <div class="col-md-6 service-icon-agile">
                  <div class="feature-inner">
                     <a href="createFicha.php"><h5>Moldar Minha Própria Ficha</h5></a>
                  </div>
                  <div class="address-left text-center">
                      <a href="createFicha.php"><span class="fab fa-android"></span></a>
                  </div>
                  <div class="address-right">
                     <p class="pt-2">Então você gosta de tudo do seu jeito? Tudo bem, crie uma ficha sua personalizada para sua campanha SEM RESTRIÇÕES!
                     </p>
                  </div>
               </div>

              
            </div>
         </div>
         <div class="row" style="border: 1px solid #ffffff;">
      <div class="col-md-12 col-lg-12 col-sm-12 text-center">
               <br>
            Deseja voltar para sua área principal? <a href="user.php"><spam style="cursor: pointer; font-weight: bold;">Clique aqui</spam></a>para escolher novamente.
            <p>&nbsp</p>
          
         </div>
      </div>  
      </section>
   
     
      </div>



    
   
      
      </div>
      <div id="secaoFooter">
         <?php include_once '../../inc/footer.inc.php'; ?>
      </div>
      <script src="../../js/funcoesIndexUser.js"></script>