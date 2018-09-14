<?php
  $pdo = new PDO('mysql:local=localhost;dbname=modulo_08', 'root','');

  // $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id=?");

  // $sql->execute(array($_GET['categoria_id']));

  // $info =$sql-> fetchAll();

// echo '<pre>';
// print_r($info);
// echo '</pre>';  

  // echo 'Usando foreach:';
  // echo '<hr>';
  // foreach ($info as $key => $value) {
  //   echo 'Titulo: '.$value['titulo'];
  //   echo '<br />';
  //   echo 'Conteudo: '.$value['conteudo'];
  //   echo '<br />';
  //   echo '<br />';
  // };

  // echo '<br />';
  // echo 'Usando for:';
  // echo '<hr>';
  // for ($i = 0; $i < count($info); $i++){
  //   echo 'Titulo: '.$info[$i]['titulo'];
  //   echo '<br />';
  //   echo 'Conteudo: '.$info[$i]['conteudo'];
  //   echo '<br />';
  //   echo '<br />';
  // };

  $sql = $pdo -> prepare("SELECT `posts`.*, `categorias`.*, `posts`.`id` 
  AS `post_id` 
  FROM `posts` 
  INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id`");
    
  $sql -> execute();
  $info = $sql -> fetchAll(PDO::FETCH_ASSOC); 
  echo '<pre>';
  echo print_r($info);
  echo '</pre>';
?>