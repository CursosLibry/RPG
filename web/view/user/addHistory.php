<?php include_once '../../inc/header.inc.php'; ?>
         <!--headder-->
         <section class="contact-inner py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
             
               <h3 class="title text-center  mb-lg-5 mb-md-4 mb-sm-4 mb-3"> Crie sua história</h3>
               <div class=" contact-wls-detail">
                  <div class="contact-form">
                     <form action="../../whatever/trataHistory.php" method="post">
                        <div style="padding: 50px 0px 50px 0px;" class="row agile-wls-contact-mid mb-sm-3 mb-2">
                           <div  class="col-lg-12 col-md-12 form-group contact-forms">
                              <input type="text" class="form-control" name="history_title" placeholder="Titulo" required="">
                           </div>
                             <div class="col-lg-12 col-md-12 form-group contact-forms">
                           <div class="col-lg-1 col-md-1 form-group contact-forms">
                           	 	<span style="font-size: 14px; color: #6d6d6d;">História: </span>
                           </div> 
                           <textarea maxlength="500" name="history_text"></textarea>
                           </div>
                           </div>
                           
                        <button style="background-color: #969696;" type="submit" class="btn sent-butnn btn-lg">Pode deixar!</button>
                     </form>
                  </div>
               </div>
            </div>
         </section>
                <?php include_once '../../inc/footer.inc.php'; ?>