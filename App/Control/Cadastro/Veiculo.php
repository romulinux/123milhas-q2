<?php

namespace App\Control\Cadastro;

use App\Data\DAO as DAO;
use App\Model\Veiculo as VeiculoModel;
use App\View\Veiculo\Sucesso as SucessoView;
use App\View\Veiculo\Falha as FalhaView;

class Veiculo {

  public function __construct() {
  }

  public static function cadastrar ($dados) {
    $tipo = $dados['tipo'];
    $placa = $dados['placa'];
    $documento = $dados['documento'];
    $marca = $dados['marca'];
    $modelo = $dados['modelo'];
    $cor = $dados['cor'];

    $veiculo = new VeiculoModel($tipo, $placa, $documento, $marca, $modelo, $cor);

    $dao = new DAO('veiculos');
    if ($dao->salvar($veiculo)) {
      return new SucessoView($veiculo);
    } else {
      return new FalhaView($veiculo);
    }
  }
}
