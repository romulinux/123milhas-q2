<?php

namespace App\Control;

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
}
