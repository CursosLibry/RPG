<?php include_once '../../inc/header.inc.php';
// include_once '../../whatever/funcoesGrupo.php';

if($_GET){
   if($_GET['id']){
      // $groupObj = listOne($_GET['id']);
      // var_dump($groupObj);
   }
}
?>
<main class='group'>
   <!-- BANNER -->
   <div class="slides text-center">
      <div class="slide slide--current one-img ">
         <div class='container'>
               <div class="slider-up">
                  <h4>Libry</h4>
               </div>
         </div>
      </div>
      <div class="clearfix"></div>
   </div>
   <!-- END BANNER -->
   <section class='equipe'>
      <div class="services-section" id="service">
         <div class="centralize col-md-9">
            <!-- HISTORIA -->
            <div class="col-md-4 service-leftgrid">
               <div class="service1">
                  <div class="right-grid1">
                     <img src="../../images/img1.png">
                  </div>
                  <div class="right-grid2">
                     <br>
                     <h4>Escrever história</h4>
                     <p>
                        Tudo tem seu início com uma boa história, você pode optar por seguir 
                        nosso padrão ou criar a sua do zero sem nenhuma limitação.
                     </p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
               <div class="service2">
                  <div class="right-grid1">
                     <img src="../../images/img1.png">
                  </div>
                  <div class="right-grid2">
                     <br>
                     <h4>Suas histórias</h4>
                     <p>
                        Na natureza nada se perde, nem as suas histórias meu amigo. Aqui você pode ver sua histórias, 
                        seja elas ruins ou excepcionais, como nós gostamos de você é possível editar as ruins e até mesmo
                        apagar as horríveis.
                     </p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
            </div>
            <!-- END HISTORIA -->
            <!-- FICHA -->
            <div class="col-md-4 service-leftgrid">
               <div class="service1">
                  <div class="right-grid1">
                     <img src="../../images/img3.png">
                  </div>
                  <div class="right-grid2">
                     <h4>Moldar ficha</h4>
                     <p>
                        Nessa seção você pode criar as fichas que os jogadores irão preencher para iniciar o jogo, você
                        pode optar por seguir nosso padrão ou criar a sua do zero sem nenhuma limitação.
                     </p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
               <div class="service2">
                  <div class="right-grid1">
                     <img src="../../images/img3.png">
                  </div>
                  <div class="right-grid2">
                     <br>
                     <h4>Escrever história</h4>
                     <p>
                        Tudo tem seu início com uma boa história, você pode optar por seguir 
                        nosso padrão ou criar a sua do zero sem nenhuma limitação.</p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
            </div>
            <!-- END FICHA -->
            <!-- HABILIDADE -->
            <div class="col-md-4 service-rightgrid">
               <div class="service1">
                  <div class="right-grid1">
                     <img src="../../images/img2.png">
                  </div>
                  <div class="right-grid2">
                     <h4>Árvore de habilidades</h4>
                     <p>
                        Uma boa árvore de habildiade é o coração da história, saber dar poder sem estragar a narrativa 
                        é crucial para um bom RPG, você pode optar por seguir nosso padrão ou criar a sua do zero sem 
                        nenhuma limitação.
                     </p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
               <div class="service2">
                  <div class="right-grid1">
                     <img src="../../images/img2.png">
                  </div>
                  <div class="right-grid2">
                     <br>
                     <h4>Suas árvores</h4>
                     <p>
                        Só faltava você perder aquela árvore de habilidade gigante com 50 tipos de magias e passivas 
                        diferentes, pelo amor. Aqui você pode tratar elas com carinho, ou amaldiçoá-las para o Nether.
                     </p>
                  </div>
                  <div class="clearfix"> </div>
               </div>
            </div>
            <!-- END HABILIDADE -->
            <div class="clearfix"> </div>
         </div>
      </div>
      <!--END EQUIPE-->
   </section>
   <section class="return">
      <div class="col-md-12 centralize">
         <p>
            Deseja voltar para sua área principal? 
            <a href="user.php">Clique aqui</a>
            para escolher novamente.</p>
      </div>
   </section>
</main>
<?php include_once '../../inc/footer.inc.php'; ?>
<script src="../../js/funcoesIndexUser.js"></script>