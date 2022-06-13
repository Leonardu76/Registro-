<?php
session_start();
if(!isset($_SESSION['id'])){
    header("Location: ../index.php");
    session_destroy();
} 
if(isset($_GET['sair'])){
 header("Location: ../index.php");
    session_destroy();
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<div class="container"  id="nav-itens">
    <div class="row">
        
  <a class="col-sm-2" id="home-link" href="">Inicio</a>
  <form action="" method="GET">
  <button  class="col-sm-12" name="sair" id="sair">Sair</button>

</form>
</div>
</div>

<h1 class="title-log">Bem vindo(a) <?=$_SESSION['nome']?>!!</h1>


<section id="blank"></section>

</header>
    <?php
  require_once ("footer.php");
?>
</body>


</html>

