<?php session_start();
if(isset($_SESSION["user_nick"])){
    header("location: user.php");
}
 include_once '../../inc/header.inc.php'; ?>
      <!-- banner -->
      <div class="inner_page-banner">
      </div>
      <!--//banner -->
         <!--headder-->
         <section class="contact-inner py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
               <?php
               //Array que guarda os nomes de classes para aparecerem na frase da página, o echo logo abaixo puxa o nome do array com um número randomico e o número máximo é o número de elementos no array
                $classes=array("Bardo","Guerreiro","Ladino","Mago","Druida","Assassino","Clérigo","Bárbaro","Necromance","Caçador");
                $quantidadeDeClasses = count($classes)-1;
               ?>
               <h3 class="title text-center  mb-lg-5 mb-md-4 mb-sm-4 mb-3">Pronto para ser um <?php echo $classes[rand(0, $quantidadeDeClasses)]; ?>?</h3>
               <div class=" contact-wls-detail">
                  <div class="contact-form">
                     <form action="../../whatever/trataUser.php" method="post">
                        <div style="padding: 50px 0px 50px 0px;" class="row agile-wls-contact-mid mb-sm-3 mb-2">
                           <div  class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Apelido" name="user_nick" id="user_nick" required="">
                           </div>
                             <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="password" class="form-control" placeholder="Senha" name="user_pass" id="user_pass" required="">
                           </div>
                           </div>
                           
                        <button style="background-color: #969696;" type="submit" class="btn sent-butnn btn-lg">Com certeza!</button>
                     </form>
                     <div style="padding: 50px 50px;" class="row agile-wls-contact-mid mb-sm-3 mb-2">
                           <div>
                              Você ainda não existe? Mas isso é um problema <a href="register.php" style="color: black; font-weight: bold;">Clique aqui</a> agora mesmo para invocar-se!
                           </div>
                        </div>
                  </div>
               </div>
            </div>
         </section>
                <?php include_once '../../inc/footer.inc.php'; ?>