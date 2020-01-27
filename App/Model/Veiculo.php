<?php

namespace App\Model;

class Tipo {
    const CARRO = 'carro';
    const MOTO = 'moto';
}

class Veiculo {
  private $tipo;
  private $placa;
  private $documento;
  private $marca;
  private $modelo;
  private $cor;

  public function __construct($tipo, $placa, $documento, $marca, $modelo, $cor) {
    $this->tipo = $tipo;
    $this->placa = $placa;
    $this->documento = $documento;
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->cor = $cor;
  }

  public function get_tipo () {
    return $this->tipo;
  }

  public function get_placa () {
    return $this->placa;
  }

  public function get_documento () {
    return $this->documento;
  }

  public function get_marca () {
    return $this->marca;
  }

  public function get_modelo () {
    return $this->modelo;
  }

  public function get_cor () {
    return $this->cor;
  }

  public function set_tipo ($tipo) {
    $this->tipo = $tipo;
  }

  public function set_placa ($placa) {
    $this->placa = $placa;
  }

  public function set_documento ($documento) {
    $this->documento = $documento;
  }

  public function set_marca ($marca) {
    $this->marca = $marca;
  }

  public function set_modelo ($modelo) {
    $this->modelo = $modelo;
  }

  public function set_cor ($cor) {
    $this->cor = $cor;
  }
}
