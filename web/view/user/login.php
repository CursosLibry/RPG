<?php include_once '../../inc/header.inc.php'; ?>
<main class='contato'>
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
        <div class="clearfix"></div>
    </div>
    <!--//banner-->
    <!--Contact Section-->
   <div class="contact-section" id="contact">
      <div class="contact-grids">
         <div class="col-md-6 contact-leftgrid">
            <?php
            //Array que guarda os nomes de classes para aparecerem na frase da página, o echo logo abaixo puxa o nome do array com um número randomico e o número máximo é o número de elementos no array
               $classes=array("Bardo","Guerreiro","Ladino","Mago","Druida","Assassino","Clérigo","Bárbaro","Necromance","Caçador");
               $quantidadeDeClasses = count($classes)-1;
            ?>
            <h3>Pronto para ser um <?php echo $classes[rand(0, $quantidadeDeClasses)]; ?>?</h3>
            <br>
            <form action="#" method="post">
               <input type="text" placeholder="Apelido" required="">
               <input type="email" placeholder="Email" required="">
               <button type="button">Com certeza!</button>
            </form>
            <div style="padding: 50px 50px;" class="row agile-wls-contact-mid mb-sm-3 mb-2">
               <div>
                  Você ainda não existe? Mas isso é um problema <a href="register.php" style="color: black; font-weight: bold;">Clique aqui</a> agora mesmo para invocar-se!
               </div>
            </div>
         </div>
      </div>
   </div>
<?php include_once '../../inc/footer.inc.php'; ?>