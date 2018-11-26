<?php include_once '../../inc/header.inc.php'; ?>
<main class='edit_password'>
   <!-- banner -->
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
   <!--//banner -->
   <!--EDIT PASSWORD Section-->
   <section class="trocar_senha">
      <div class="contact-section" id="contact">
         <div class="contact-grids">
            <div class="col-md-6 contact-leftgrid">
               <h3>Nem tudo precisa ser pra sempre</h3>
                  <form action="#" method="post">
                     <input type="password" placeholder="Senha Atual" name="oldPass" required="">
                     <input type="password" placeholder="Senha Nova" name="newPass" required="">
                     <input type="password" placeholder="Repita Senha Nova" name="newPass2" required="">
                     <input type="button" value="Enviar nova senha para os anões">
                  </form>
                  
         
            </div>
         </div>  
      </div>
   </section>
   <!-- EDIT PASSWORD -->
   <section class="return">
      <div class="col-md-12 centralize">
         <p>
            <a href="editUser.php" style="cursor: pointer; font-weight: bold; color: black;">
            <i class="fas fa-arrow-left"></i> Voltar</a>
         </p>
      </div>
   </section>
</main>
<?php include_once '../../inc/footer.inc.php'; ?>
