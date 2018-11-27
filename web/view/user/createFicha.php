<?php session_start(); 
include_once '../../inc/header.inc.php';
require_once "../../config/autoload.php"; 
?>
      <!-- banner -->
      <div class="inner_page-banner">
      </div>
      <!--//banner -->
         <!--headder-->
         <section class="contact-inner py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
               <h3 class="title text-center  mb-lg-5 mb-md-4 mb-sm-4 mb-3">Molde sua Ficha de Personagem</h3>
               <div class=" contact-wls-detail">
                  <div class="contact-form">
                     <form action="../../whatever/trataFicha.php" method="post">
                        <div class="row agile-wls-contact-mid mb-sm-3 mb-2">
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Nome do Campo"  name="nome" id="input-name">
                           </div>
                             <div class="col-lg-6 col-md-6 form-group contact-forms">
                               <select name="tipo" class="form-control" style="border: 2px solid #000;">
                                 <option value="naoDefinido">Tipo de Campo</option>
                                 <option value="0">Normal (input)</option>
                                 <option value="1">Grande (textarea)</option>
                              </select>
                           </div>
                           </div>
                        
                        <button style="background-color: #969696;" type="submit" class="btn sent-butnn btn-lg">Adicionar Campo à Ficha</button>
                     </form>
                   
                  </div>
               </div>
            </div>
         </section>


    <hr>
    <h3 class="title text-center  mb-lg-5 mb-md-4 mb-sm-4 mb-3">Sua Ficha Personalizada</h3>
        <?php
        if($_GET){
            echo "<script>alert('Não Esqueça o nome do Campo!'); document.getElementById('input-name').focus();</script>";
        }
        
// require_once "../../model/Formulario.class.php";
// require_once "../../model/Text.class.php";
// require_once "../../model/Textarea.class.php";
        if(isset($_SESSION['form'])){
            $f = unserialize($_SESSION['form']);
            print $f->getHTML();
           // echo "<a href='../../whatever/destroiFicha.php'>Limpar tudo</a>";
            echo "<a href='../../whatever/salvarFicha.php'><button style='background-color: #969696;'  class='btn sent-butnn btn-lg'>Salvar Mudanças</button></a>";
           echo "<a href='../../whatever/destroiFicha.php'><button style='background-color: #969696;'  class='btn sent-butnn btn-lg'>Limpar Ficha</button></a>";
           echo "<script>document.getElementById('input-name').focus();</script>";
        }

?>
</div>
<?php include_once '../../inc/footer.inc.php'; ?>
