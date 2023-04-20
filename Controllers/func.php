<?php
function conectar() {
   try {
       $conn = new PDO('mysql:host=localhost; charset=utf8mb4; dbname=dblojasaep', 'root', '');
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
       echo "banco esta com problema" . $e->getMessage();
       die();
   }
   return $conn;
}
function Autenticar($nometabela, $campo1, $campo2) {
   $conn = conectar();
   $stmt = $conn->prepare("SELECT * FROM $nometabela WHERE CPF=? AND senha=?");
   $stmt->bindParam(1, $campo1);
   $stmt->bindParam(2, $campo2);
   $stmt->execute();
   $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
   if ($usuario) {
      $id = $usuario['idlogin'];
      session_set_cookie_params(['httponly' => true]);
      session_start();
      $_SESSION['idlogin'] = $id;
      $_SESSION['cpf'] = $campo1;
      $_SESSION['senha'] = $campo2;
      
      header('location: ../index.php');
      echo "<script>alert('Logado com Sucesso')</script>";
      
   } else {
      unset($_SESSION['cpf']);
      unset($_SESSION['senha']);
      echo "<script>alert('Login incorreto tente novamente')</script>";
      header('location: ../index.php');
   }
}
function inserir($nometabela,$camposTabela,$valores){
   $conn = conectar();
   $lista = $conn->prepare("INSERT INTO $nometabela($camposTabela) VALUES ($valores)");
   $lista -> execute();
   if($lista->rowCount() > 0){
      return 'Cadastrado';
   }else{
      return 'Vazio';
   }
}
?>