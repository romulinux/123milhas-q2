<?php

namespace App\Model;

class Horario {
  private $codigo;
  private $de; // timestamp que representa o inicio da locação da vaga
  private $ate; // timestamp que representa o fim da locação da vaga

  public function __construct($codigo, $de, $ate) {
    $this->codigo = $codigo;
    $this->de = $de;
    $this->ate = $ate;
  }

  public function get_codigo () {
    return $this->codigo;
  }

  public function get_de () {
    return $this->de;
  }

  public function get_ate () {
    return $this->ate;
  }

  public function set_codigo ($codigo) {
    $this->codigo = $codigo;
  }

  public function set_de ($de) {
    $this->de = $de;
  }

  public function set_ate ($ate) {
    $this->ate = $ate;
  }
}
