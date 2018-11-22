<?php include_once '../../inc/header.inc.php'; ?>
<main class='login'>
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
         <!--headder-->
         <section class="contact-inner py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
               <h3 class="title text-center  mb-lg-5 mb-md-4 mb-sm-4 mb-3">Nem tudo precisa ser pra sempre</h3>
               <div class=" contact-wls-detail">
                  <div class="contact-form">
                     <form action="#" method="post">
                        <div style="padding: 50px 0px 50px 0px;" class="row agile-wls-contact-mid mb-sm-3 mb-2">
                           <div  class="col-lg-4 col-md-4 form-group contact-forms">
                              <input type="password" class="form-control" placeholder="Senha Atual" name="oldPass" required="">
                           </div>
                           <div  class="col-lg-4 col-md-4 form-group contact-forms">
                              <input type="password" class="form-control" placeholder="Senha Nova" name="newPass" required="">
                           </div>
                             <div class="col-lg-4 col-md-4 form-group contact-forms">
                              <input type="password" class="form-control" placeholder="Repita Senha Nova" name="newPass2" required="">
                           </div>
                           </div>
                       
                        <button style="background-color: #969696;" type="button" class="btn sent-butnn btn-lg">Enviar nova senha para os anões</button>
                     </form>
                     <div class="row" style="border: 1px solid #ffffff; padding-top: 50px;">
      					<div class="col-md-12 col-lg-12 col-sm-12" style="padding-left: 10px">
               			<br>
           				<a href="editUser.php" style="cursor: pointer; font-weight: bold; color: black;"><i class="fas fa-arrow-left"></i> Voltar</a>
            			<p>&nbsp</p>
          
         				</div>
     				 </div>  
                  </div>
               </div>
            </div>
         </section>
         <?php include_once '../../inc/footer.inc.php'; ?>
