<?php

namespace App\Model;

class Vaga {
  private $codigo;
  private $tipo;
  private $horarios;

  public function __construct($codigo, $tipo, $horarios = []) {
    $this->codigo = $codigo;
    $this->tipo = $tipo;
    $this->horarios = [];
    foreach ($horarios as $key => $value) {
      $codigo = $value['codigo'];
      $de = $value['de'];
      $ate = $value['ate'];
      $this->horarios[] = new Horario($codigo, $de, $ate);
    }
  }

  public function get_codigo () {
    return $this->codigo;
  }

  public function get_tipo () {
    return $this->tipo;
  }

  public function get_horarios () {
    return $this->horarios;
  }

  public function set_codigo ($codigo) {
    $this->codigo = $codigo;
  }

  public function set_tipo ($tipo) {
    $this->tipo = $tipo;
  }

  public function set_horario ($i, $horario) {
    $this->horarios[$i] = $horario;
  }

  public function set_horarios ($horarios) {
    $this->horarios = $horarios;
  }
}
