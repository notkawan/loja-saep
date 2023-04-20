<?php


include_once 'func.php';
if(isset($_POST['cpf']) || isset($_POST['senha'])){
   $cpf = $_POST['cpf'];
   $senha = $_POST['senha'];

   if( empty($cpf) || empty($senha)){
      echo "<h1 class='error'>preencha todos os campos</h1>";
   }
   Autenticar('login',$cpf,$senha);

}
?>