<?php

namespace App\Model;

class Cliente {
  private $nome;
  private $identidade;
  private $telefone;
  private $email;
  private $foto; // caminho ou url da foto do cliente, usada para quando o cliente for retirar o carro ser feita uma comparação, para evitar que outra pessoa retire o veículo
  private $saldo;

  public function __construct($nome, $identidade, $telefone, $email, $foto, $saldo = 0) {
    $this->nome = $nome;
    $this->identidade = $identidade;
    $this->telefone = $telefone;
    $this->email = $email;
    $this->foto = $foto;
    $this->saldo = $saldo;
  }

  public function get_nome () {
    return $this->nome;
  }

  public function get_identidade () {
    return $this->identidade;
  }

  public function get_telefone () {
    return $this->telefone;
  }

  public function get_email () {
    return $this->email;
  }

  public function get_foto () {
    return $this->foto;
  }

  public function get_saldo () {
    return $this->saldo;
  }

  public function set_nome ($nome) {
    $this->nome = $nome;
  }

  public function set_identidade ($identidade) {
    $this->identidade = $identidade;
  }

  public function set_telefone ($telefone) {
    $this->telefone = $telefone;
  }

  public function set_email ($email) {
    $this->email = $email;
  }

  public function set_foto ($foto) {
    $this->foto = $foto;
  }

  public function set_saldo ($saldo) {
    $this->saldo = $saldo;
  }
}
