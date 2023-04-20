<?php
include_once 'func.php';
if(isset($_POST['nome']) || isset($_POST['cpf']) || isset($_POST['email']) || isset($_POST['senha'])){
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];
   $cpf = $_POST['cpf'];
   if(empty($nome) || empty($email) || empty($senha) || empty($cpf)){
      echo "<h1 class='error'>preencha todos os campos</h1>";
   }
   
   inserir('login','nome,email,senha,cpf',"'$nome','$email','$senha','$cpf'");
   header("Location: ./index.php");
}

?>