<?php include_once '../../inc/header.inc.php'; ?>
<main class='login'>
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
    <!--//banner-->
    <!--Register Section-->
   <div class="register-section" id="register">
      <div class="register-grids">
         <div class="col-md-6 register-leftgrid">
            <h3>Toda lenda tem seu inicio</h3>
            <br>
            <form action="../../whatever/trataUser.php" method="POST">
               <input type="text" name="name" placeholder="Nome Completo" required="">
               <input type="email" name="email" placeholder="Email" required="">
               <input type="text" name="" placeholder="Apelido" required="">
               <input type="password" placeholder="Senha" required="">
               <input type="password" placeholder="Repita a Senha" required="">
               <input type="submit" value="Escrever a Minha!">
            </form>
         </div>
      </div>
   </div>
</main>
<?php include_once '../../inc/footer.inc.php'; ?>