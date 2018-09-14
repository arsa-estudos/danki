<?php
  abstract class teste {
    public function func1() {
      echo 'chamando funcao 1';
    }

    abstract function func2();

  }

  class Principal extends teste {
    public static function outroMetodoEstatico() {
      
    }

  }

  $principal = new Principal;





?>