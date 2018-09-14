<?php
  date_default_timezone_set('America/Sao_Paulo');
  $pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

  if (isset($_POST['acao'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];

    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?)");

    $sql->execute(array($nome, $sobrenome));
    echo 'INSERT: Cliente inserido com sucesso.';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastro de Cliente</title>
</head>
<body>
  <form method="post">
    <input type="text" name="nome" />
    <input type="text" name="sobrenome" />
    <input type="submit" name="acao" value="Enviar" />
  </form>
</body>
</html>