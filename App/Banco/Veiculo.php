<?php

namespace App\Banco;

use App\Model\Veiculo as VeiculoModel;

class Veiculo {

  public function __construct() {
  }

  public static function salvar (VeiculoModel $veiculo) {
    $documento = $veiculo->get_documento();

    $dados = [
      'tipo' => $veiculo->get_tipo(),
      'placa' => $veiculo->get_placa(),
      'documento' => $veiculo->get_documento(),
      'marca' => $veiculo->get_marca(),
      'modelo' => $veiculo->get_modelo(),
      'cor' => $veiculo->get_cor()
    ];

    return DAO::salvar($dados, 'veiculos/' . $documento);
  }

  public static function obter ($documento) {
    $array = DAO::obter('veiculos/' . $documento);

    if (count($array) === 0) {
      return false;
    }

    $tipo = $array['tipo'];
    $placa = $array['placa'];
    $documento = $array['documento'];
    $marca = $array['marca'];
    $modelo = $array['modelo'];
    $cor = $array['cor'];

    return new VeiculoModel($tipo, $placa, $documento, $marca, $modelo, $cor);
  }
}
