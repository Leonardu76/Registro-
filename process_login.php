<?php
require_once ("connection.php");
require_once ("index.php");
if(isset($_SESSION['id'])){
    header("Location: logged/logged.php");
    die();
  }



$email = addslashes($_POST['email']);
$password = addslashes($_POST['password']);

    $query = "SELECT * FROM  login_user  WHERE email = :e AND senha = :p";
        
    $stmt  = $conn->prepare($query);
    
    $stmt->bindParam(":e", $email);
    
    $stmt->bindParam(":p", ($password));
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $dado = $stmt->fetch();
        $_SESSION['id'] = $dado['id'];
        $_SESSION['nome'] = $dado['nome'];

        if(isset($_SESSION['id'])){
            header("Location: logged/logged.php");
        } else {
            header("Location: login.php");

    }    
 } else{ 
        ?><h2 class='cadErr'>Email ou senha incorreta!</h2>
    <?php


    }
    $conn = null;

    include_once ("logged/footer.php");
  
