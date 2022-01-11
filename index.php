<?php
session_start();
if(isset($_SESSION['id'])){
  header("Location: logged/logged.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="css/log.css">
  <title>Login</title>
</head>
<body>
<div id="login" class="container">
  <div class="col-md-12">
      <div class="col-md-5">
        <h2 class="title-log">ENTRAR</h2> 
        <form action="process_login.php" method="POST">
        <div class="form-group">
             <label for="email">Email</label>
             <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email"  >
             </div>

           <div class="form-group">
             <label for="password">Senha</label>
             <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha"  >
             </div>
             <input type="submit" id= "card-btn" class="col-sm-12">
            </form> 
            <p class="form-group">Ainda não tem cadastro?<a class="a-log" href="register/register.php"> Registrar-se</a></p> 
            </div>
            </div>
      </div>

   
    
</html>
<?php
  include_once ("logged/footer.php");
?>

    