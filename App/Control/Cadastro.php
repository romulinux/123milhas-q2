<?php

namespace App\Control;

use App\Banco\Cliente as ClienteDAO;
use App\Model\Cliente as Cliente;
use App\Banco\Veiculo as VeiculoDAO;
use App\Model\Veiculo as Veiculo;
use App\Banco\Vaga as VagaDAO;
use App\Model\Vaga as Vaga;

class Cadastro {

  public function __construct() {
  }

  public static function cadastrar_cliente ($nome, $identidade, $telefone, $email, $foto) {
    $cliente = new Cliente($nome, $identidade, $telefone, $email, $foto);
    return ClienteDAO::salvar($cliente);
  }

  public static function cadastrar_veiculo ($tipo, $placa, $documento, $marca, $modelo, $cor) {
    $veiculo = new Veiculo($tipo, $placa, $documento, $marca, $modelo, $cor);
    return VeiculoDAO::salvar($veiculo);
  }

  public static function cadastrar_vaga ($codigo, $tipo, $horarios) {
    $vaga = new Vaga($codigo, $tipo, $horarios);
    return VagaDAO::salvar($vaga);
  }
}
