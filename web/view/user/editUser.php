<?php session_start();
if(!isset($_SESSION["user_nick"]) || $_SESSION["user_nick"] == null || $_SESSION["user_nick"] == '' || $_SESSION["user_nick"] == " " || $_SESSION["user_nick"] == false){
    header("location: semPermissao.php");
}
 include_once '../../inc/header.inc.php';
 require_once "../../config/autoload.php";


 function pesquisaUsuario($a){ //Function para procurar email e redirecionar ou cadastrar
  $conn = new mysqli("localhost", "root", "", "libry_rpg"); //Variavel de conexão com o banco
      //Checa se a conexão foi bem sucedida
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 

      $sql = "SELECT * FROM user WHERE nick='$a'"; //query que manda os dados para testar
      $result = mysqli_query($conn, $sql); //Variavel que guarda resultado do SELECT

      //Checa se o resultado retornou algum email
      if (mysqli_num_rows($result) > 0) {
          return mysqli_fetch_object($result);
      } else {
          return false;
      }
      
      $conn->close();
}
$a = $_SESSION['user_nick'];
$user = pesquisaUsuario($a);
 ?>
      <!-- banner -->
      <div class="inner_page-banner">
      </div>
      <!--//banner -->
         <!--headder-->
         <section class="contact-inner py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
               <h3 class="title text-center  mb-lg-5 mb-md-4 mb-sm-4 mb-3">Prove sua existência</h3>
               <div class=" contact-wls-detail">
                  <div class="contact-form">
                     <form action="../../whatever/trataUser.php" method="post">
                        <div class="row agile-wls-contact-mid mb-sm-3 mb-2">
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Nome Completo" name="user_name" required="">
                           </div>
                             <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="email" class="form-control" placeholder="Email" name="user_email_f" value="<?php echo $user->email; ?>" disabled>
                              <input type="email" class="form-control" placeholder="Email" name="user_email" value="<?php echo $user->email; ?>" style="display: none;">
                           </div>
                           </div>
                           <div style="padding-top: 50px;padding-bottom: 50px;" class="row agile-wls-contact-mid mb-sm-3 mb-2">
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Apelido" name="user_nick_reg" required="">
                           </div>
                           <div class="col-lg-1 col-md-1 form-group contact-forms">
                           	 	<span style="font-size: 14px; padding-left: 7px; color: #6d6d6d;"> Genêro: </span>
                           </div>
                            <div class="col-lg-5 col-md-5 form-group contact-forms">
                           	 <select name="user_gender" class="form-control" style="border: 2px solid #000;">
                           		<option value="naoDefinido">Não Definido</option>
                           		<option value="masculino">Masculino</option>
                           		<option value="feminino">Feminino</option>
                           		<option value="assexuado">Assexuado</option>
                           		<option value="hermafrodita">Hermafrodita</option>
                           		<option value="bissexual">Bissexual</option>
                           	</select>
                           </div>
                           	 	
                           
                        </div>
                        <div style="padding-bottom: 50px;" class="row agile-wls-contact-mid mb-sm-3 mb-2">
                           <div class="col-lg-6 col-md-6 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Nacionalidade" name="user_nationality" required="">
                           </div>
                           <div class="col-lg-1 col-md-1 form-group contact-forms">
                           	 	<span style="font-size: 14px; padding-left: 7px; color: #6d6d6d;"> Raça: </span>
                           </div>
                            <div class="col-lg-5 col-md-5 form-group contact-forms">
                           	 <select name="user_race" class="form-control" style="border: 2px solid #000;">
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
                           </div>
                           	 	
                           
                        </div>
                            <div style="padding-bottom: 50px;" class="row agile-wls-contact-mid mb-sm-3 mb-2">
                           <div class="col-lg-12 col-md-12 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Status" name="user_status" required="">
                           </div> 
                        </div>
                        <button style="background-color: #969696;" type="submit" class="btn sent-butnn btn-lg">Esta satisfeito?</button>
                     </form>
                      <div class="row" style="border: 1px solid #ffffff; padding-top: 50px;">
      					<div class="col-md-12 col-lg-12 col-sm-12 text-center">
               			<br>
           				Se deseja trocar de senha <a href="trocarSenha.php" style="cursor: pointer; font-weight: bold; color: black;">Clique aqui</a> para trocá-la.
            			<p>&nbsp</p>
                  <br>
           				<a href="user.php" style="cursor: pointer; font-weight: bold; color: black;"><i class="fas fa-arrow-left"></i> Voltar</a>
            			<p>&nbsp</p>
          
         				</div>
     				 </div>  
                  </div>
               </div>
            </div>
         </section>
                <?php include_once '../../inc/footer.inc.php'; ?>
