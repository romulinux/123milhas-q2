<?php

namespace App\Model;

class Pagamento {
  private $valor;
  private $forma;
  private $numero_parcelas;
  private $quantidade_parcelas;
  private $situacao;

  public function __construct($valor, $forma = Forma::DINHEIRO, $numero_parcelas = 1, $quantidade_parcelas = 1, $situacao = Situacao::AGUARDANDO) {
    $this->valor = $valor;
    $this->forma = $forma;
    $this->numero_parcelas = $numero_parcelas;
    $this->quantidade_parcelas = $quantidade_parcelas;
    $this->situacao = $situacao;
  }

  public function get_valor () {
    return $this->valor;
  }

  public function get_forma () {
    return $this->forma;
  }

  public function get_numero_parcelas () {
    return $this->numero_parcelas;
  }

  public function get_quantidade_parcelas () {
    return $this->quantidade_parcelas;
  }

  public function get_situacao () {
    return $this->situacao;
  }

  public function set_valor ($valor) {
    $this->valor = $valor;
  }

  public function set_forma ($forma) {
    $this->forma = $forma;
  }

  public function set_numero_parcelas ($numero_parcelas) {
    $this->numero_parcelas = $numero_parcelas;
  }

  public function set_quantidade_parcelas ($quantidade_parcelas) {
    $this->quantidade_parcelas = $quantidade_parcelas;
  }

  public function set_situacao ($situacao) {
    $this->situacao = $situacao;
  }
}
