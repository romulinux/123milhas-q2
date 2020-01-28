<?php

namespace App\View;

abstract class View {

  protected $objeto;

  public function __construct($objeto = null) {
    $this->objeto = $objeto;
  }

  abstract protected function imprimir ();

  public function get_objeto () {
    return $this->objeto;
  }

  public function set_objeto ($objeto) {
    $this->objeto = $objeto;
  }
}
