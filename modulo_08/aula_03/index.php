<?php 
  $pdo = new PDO('mysql:host=localhost;dbname=modulo_08', 'root', '');

  $id = 1;

  $sql = $pdo-> prepare("UPDATE `clientes` SET sobrenome='Xulapa' WHERE id=?");

  if($sql->execute(array($id))){
    echo 'UPDATE  : Cliente atualizado com sucesso.';
  }
?>
