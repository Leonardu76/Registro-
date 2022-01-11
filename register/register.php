
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/log.css">
    <title>Cadastrar</title>
</head>
<body>
<div id="register" class="container">
<div class="col-md-5">
<h2 class="title-log">CADASTRAR</h2>  
        <form action="process_register.php" method="POST">
         <div class="form-group">
             <label for="email">Email</label>
             <input type="email" class="form-control" id="emailR" name="email" placeholder="Digite seu email"  required >
           </div>
           <div class="form-group">
             <label for="name">Nome</label>
             <input type="text" class="form-control" id="nameR" name="name" placeholder="Digite seu nome" required  >
           </div>
           <div class="form-group">
             <label for="password">Senha</label>
             <input type="password" class="form-control" id="passwordR" name="password" placeholder="Digite sua senha" required >
           </div>
           <div class="form-group">
             <label for="password2">Senha</label>
             <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirme sua senha" required  >
           </div>
          
             <input type="submit"  id= "card-btn2" class="col-sm-12" name ="cadastrar" required >      
         
         
            </form> 
            </div>
            
            </div>
           
          
</body>
</html>



