<?php include_once '../../inc/header.inc.php'; ?>

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
<main class='editUser'>
    <!--Login Section-->
   <div class="contact-section" style="height: 800px;" id="contact">
      <div class="contact-grids">
         <div class="col-md-6 contact-leftgrid">
            <h3>Prove sua existência</h3>
            <form action="#" method="post">
               <input type="text" placeholder="Nome Completo" required="">
               <input type="email" placeholder="Email" required="">
               <input type="text" placeholder="Apelido" required="">
               <span style="font-size: 14px; padding-left: 7px; color: #6d6d6d;"> Genêro: </span><br>
               <select name="genero" style="border: 2px solid #000;">
                  <option value="naoDefinido">Não Definido</option>
                  <option value="masculino">Masculino</option>
                  <option value="feminino">Feminino</option>
                  <option value="assexuado">Assexuado</option>
                  <option value="hermafrodita">Hermafrodita</option>
                  <option value="bissexual">Bissexual</option>
               </select>
               <input type="text" placeholder="Nacionalidade" required="">
               <span style="font-size: 14px; padding-left: 7px; color: #6d6d6d;"> Raça: </span><br>
               <select name="genero" style="width: 100%; height: 50px; background: #545454;">
                  <option value="humano">Humano</option>
                  <option value="anao">Anão</option>
                  <option value="reptil">Reptil</option>
                  <option value="elfo">Elfo</option>
                  <option value="troll">Mutante</option>
                  <option value="gnoll">Gnoll</option>
                  <option value="vampiro">Vampiro</option>
                  <option value="gigante">Gigante</option>
                  <option value="semiDeus">Semi-Deus</option>
                  <option value="mutante">Mutante</option>
                  <option value="programador">Programador</option>
               </select>
               <br><br>
               <input type="text" placeholder="Status" required="">
               <input style="background-color: #969696;" type="submit" value="Esta satisfeito?">
            </form>
         </div>
      </div>
   </div>
</main>
Se deseja trocar de senha <a href="trocarSenha.php" style="cursor: pointer; font-weight: bold; color: black;">Clique aqui</a> para trocá-la.
<p>&nbsp</p>
<?php include_once '../../inc/footer.inc.php'; ?>
