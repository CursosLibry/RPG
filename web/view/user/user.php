<?php session_start();
if(!isset($_SESSION["user_nick"]) || $_SESSION["user_nick"] == null || $_SESSION["user_nick"] == '' || $_SESSION["user_nick"] == " " || $_SESSION["user_nick"] == false){
    header("location: semPermissao.php");
}
 include_once '../../inc/header.inc.php'; ?>
      <!-- banner -->
      <div class="inner_page-banner">
      </div>
      <!--//banner -->
      <!--Seção de escolha de Mestre/Jogador-->
      <div id="secaoMestreJogadorEscolha">
      <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Você seria?</h3>
            <div class="row">
               <div class="col-lg-6 about-txt-left">
                  <img src="../../images/ab1.png" alt="" class="img-fluid">
               </div>
               <div class="col-lg-6 about-txt-right">
                  <div class="jst-wthree-text">
                     <h2> Um grandioso Mestre</h2>
                  </div>
                  <div class="info-sub-w3">
                     <p>Então você foi o escolhido para mestrar a história, fique preparado para criar ambientes ricos em detalhes, inimigos mais inteligentes do que trolls, uma narrativa cativante que faça até o mais entendiado se sentir um verdadeiro Bárbaro.  
                     </p>
                     <p class="pt-2">Se essa é a escolha, por unânimidade de todos integrantes em um sistema democrático de votos(Ou não...)<br> <spam id="mostraMenuParaMestre" style="cursor: pointer; font-weight: bold;">Clique aqui</spam> para iniciar a sua narrativa.</p>
                  </div>
                  <div class="abut-fst-img pt-3">
                     <img src="../../images/ab2.jpg" alt=" " class="img-fluid">
                     <div class="abut-secound-img">
                        <img src="../../images/ab3.jpg" alt=" " class="img-fluid">
                     </div>
                  </div>
               </div>
            </div>
            <br><br><br>
            <div class="row">
               <div class="col-lg-6 about-txt-left">
                  <div class="jst-wthree-text">
                     <h2> Ou um lendário Jogador</h2>
                  </div>
                  <div class="info-sub-w3">
                     <p>Se prepare para traçar sua jornada em diversos universos, em épocas diferentes, com os mais variados oponentes e vilões, ou se prepare para aguentar aquele amigo que sempre tira 1 no d20 e estraga a estratégia d otime inteiro em uma única ação.</p>
                     <p class="pt-2">Se você ainda tem vontade de processeguir <spam id="mostraMenuParaJogador" style="cursor: pointer; font-weight: bold;">Clique aqui</spam> e comece sua jornada.</p>
                  </div>
                  <div class="abut-fst-img pt-3">
                     <img src="../../images/ab2.jpg" alt=" " class="img-fluid">
                     <div class="abut-secound-img">
                        <img src="../../mages/ab3.jpg" alt=" " class="img-fluid">
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 about-txt-right">
                  <img src="../../images/ab1.png" alt="" class="img-fluid">
               </div>
               
            </div>
         </div>
      </section>
      </div>



      <!-- Seção de Opções para o Mestre -->
      <div id="secaoMestre">
      <section class="feature-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center clr mb-lg-5 mb-md-4 mb-sm-4 mb-3">Crie sua narrativa</h3>

            <div class="row text-center mt-lg-4 mt-md-3 mt-3">

                <div class="row text-center mt-lg-4 mt-md-3 mt-3">
                  <div class="col-md-4 service-icon-agile">
                  <div class="feature-inner">
                     <h5>Grupos de RPG</h5>
                  </div>
                  <div class="address-left text-center">
                     <a href="createGroup.php"><span class="fas fa-cubes"></span></a>
                  </div>
                  <div class="address-right">
                     <p class="pt-2">Aqui você pode acessar os grupos de RPG que você faz parte. Se você não tem nenhum grupo é um ótimo lugar para começar então. Os grupos de RPG são os espaços em que estarão os grupos(obviamente) com suas respectivas histórias previamente criadas e também suas fichas, uma vez que todos engressarem no grupo o mestre pode fechá-lo e começar o jogo.
                     </p>

                  </div>
               </div>
               <div class="col-md-4 service-icon-agile">
                  <div class="feature-inner ">
                     <h5>Histórico de Grupos</h5>
                  </div>
                  <div class="address-left text-center">
                     <span class="fab fa-asymmetrik"></span>
                  </div>
                  <div class="address-right">
                     <p class="pt-2">Uma vez dentro nunca mais fora, ou pelo menos até você clicar em sair. Aqui você pode ver os que você engressou e ainda não chutou o ba... quer dizer, que ainda não saiu.
                     </p>
                  </div>
               </div>
               <div class="col-md-4 service-icon-agile">
                  <div class="feature-inner">
                     <h5><a href="../../view/user/editUser.php" style="color:black;">Editar perfil</a></h5>
                  </div>
                  <div class="address-left text-center">
                    <a href="editUser.php""> <span class="fas fa-cubes"></span></a>
                  </div>
                  <div class="address-right">
                     <p class="pt-2">Bom, você existe né? Então nessa seção você pode editar seus dados pessoias, sua imagem de perfil e adicionar aquela frase, em seu status, que amedronta até o mais corajoso cavalheiro.
                     </p>

                  </div>
               </div>
            </div>
            </div>
         </div>
         <div class="row" style="border: 1px solid #ffffff;">
      <div class="col-md-12 col-lg-12 col-sm-12 text-center">
               <br>
            Mudou de ideia? Nunca fui chegado com que Mestra mesmo <spam id="mostraSessãoInicialMestre" style="cursor: pointer; font-weight: bold;">Clique aqui</spam> para escolher novamente.
            <p>&nbsp</p>
          
         </div>
      </div>  
      </section>
   
     
      </div>



    <!-- Seção de Opções para o Jogador -->
      <div id="secaoJogador">
      <section class="feature-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center clr mb-lg-5 mb-md-4 mb-sm-4 mb-3">Trace sua jornada</h3>
            <div class="row text-center">
               <div class="col-md-4 service-icon-agile">
                  <div class="feature-inner ">
                     <h5>Grupos de RPG</h5>
                  </div>
                  <div class="address-left text-center">
                     <span class="fab fa-asymmetrik"></span>
                  </div>
                  <div class="address-right">
                     <p class="pt-2">Aqui você pode acessar os grupos de RPG que você faz parte. Se você não tem nenhum grupo é um ótimo lugar para começar então. Os grupos de RPG são os espaços em que estarão os grupos(obviamente) com suas respectivas histórias previamente criadas e também suas fichas, uma vez que todos engressarem no grupo o mestre pode fechá-lo e começar o jogo.
                     </p>
                  </div>
               </div>
               <div class="col-md-4 service-icon-agile">
                  <div class="feature-inner ">
                     <h5>Histórico de Grupos</h5>
                  </div>
                  <div class="address-left text-center">
                     <span class="fab fa-asymmetrik"></span>
                  </div>
                  <div class="address-right">
                     <p class="pt-2">Uma vez dentro nunca mais fora, ou pelo menos até você clicar em sair. Aqui você pode ver os que você engressou e ainda não chutou o ba... quer dizer, que ainda não saiu.
                     </p>
                  </div>
               </div>
               <div class="col-md-4 service-icon-agile">
                  <div class="feature-inner">
                     <h5><a href="editUser.php" style="color:black;">Editar perfil</a></h5>
                  </div>
                  <div class="address-left text-center">
                     <a href="../../view/user/editUser.php"><span class="fab fa-android"></span></a>
                  </div>
                  <div class="address-right">
                     <p class="pt-2">Bom, você existe né? Então nessa seção você pode editar seus dados pessoias, sua imagem de perfil e adicionar aquela frase, em seu status, que amedronta até o mais corajoso cavalheiro.
                     </p>
                  </div>
               </div>
              
            </div>
           </div>
         <div class="row"  style="border: 1px solid #ffffff">
         
         <div class="col-md-12 col-lg-12 col-sm-12 text-center">
               <br>
            Mudou de ideia? Eu sempre gostei mais de quem Mestra mesmo <spam id="mostraSessãoInicialJogador" style="cursor: pointer; font-weight: bold;">Clique aqui</spam> para escolher novamente.
            <p>&nbsp</p>
          
         </div>
         
      </div>  
      </section>
   
      
      </div>
      <div id="secaoFooter">
         <?php include_once '../../inc/footer.inc.php'; ?>
      </div>
      <script src="../../js/funcoesIndexUser.js"></script>