<?php 
  $pdo = new PDO ('mysql:host=localhost;dbname=modulo_08', 'root', '');
  $sql = $pdo->prepare("SELECT * FROM clientes");
  $sql-> execute();
?>