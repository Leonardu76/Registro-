<?php
require_once ("../connection.php");

require_once ("register.php");

// -----------Verificando se estão preenchidos-----------------
if (isset($_POST['email']) && !empty($_POST['email'])
 && isset($_POST['name']) && !empty($_POST['name'])
 && isset($_POST['password']) && !empty($_POST['password'])
 && isset($_POST['password2']) && !empty($_POST['password2'])){

$email = addslashes($_POST['email']);
$name = addslashes($_POST['name']);
$password = addslashes($_POST['password']);
$password2 = addslashes($_POST['password2']);


} else {

     ?><h2 class='cadErr'>Preencha todos os campos!</h2>
    <?php

} 
// -----------Verificando se há o email no banco-----------------

$bdEmail = $conn->prepare("SELECT * FROM login_user WHERE email = :e");
$bdEmail->bindValue(":e", $email);
$bdEmail->execute();
if($bdEmail->rowCount() > 0)
{
    ?><div class="container"><h2 class='cadErr'>Email já está cadastrado no sistema!</h2></div>
    <?php
} else if($password != $password2 ){
    ?><div class="container"><h2 class='cadErr'>Senhas não conferem!</h2></div>
    <?php

   
} else {
    $query = "INSERT INTO login_user (nome, email, senha) VALUES (:n, :e, :s)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":n", $name);
    $stmt->bindParam(":e", $email);
    $stmt->bindParam(":s", $password);

    try{
    $stmt->execute();
    if(true){
        ?><div class="container"><h2 class='cadSucess'>Cadastro realizado! Por favor faça o login. <a href="../index.php">Clique aqui.</a></h2></div>
        <?php
    }
        } catch(PDOException $e){
            //erro de conexão
            $error = $e->getMessage();
            echo "Erro:  $error";   
}
}
   


$conn = null;













   
