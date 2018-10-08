<?php
  $pdo = new PDO('mysql:local=localhost;dbname=modulo_08', 'root','');
  $sql = $pdo -> prepare("SELECT `posts`.*, `categorias`.*, 
  `posts`.`id` AS `post_id` 
  FROM `posts` INNER JOIN `categorias` 
  ON `posts`.`categoria_id` = `categorias`.`id`");
  $sql -> execute();
  $info = $sql -> fetchAll(PDO::FETCH_ASSOC); 
  
  echo '<pre>';
  echo print_r($info);
  echo '</pre>';
  
?>