<?php

namespace App\Control\Cadastro;

use App\Banco\Veiculo as VeiculoDAO;
use App\Model\Veiculo as VeiculoModel;
use App\View\Cadastro\Veiculo\Sucesso as VeiculoSucessoView;
use App\View\Cadastro\Veiculo\Falha as VeiculoFalhaView;

class Veiculo {

  public function __construct() {
  }

  public static function cadastrar () {
    $tipo = $_POST['tipo'];
    $placa = $_POST['placa'];
    $documento = $_POST['documento'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $cor = $_POST['cor'];

    $veiculo = new VeiculoModel($tipo, $placa, $documento, $marca, $modelo, $cor);

    if (VeiculoDAO::salvar($veiculo)) {
      return VeiculoSucessoView::imprimir($veiculo);
    } else {
      return VeiculoFalhaView::imprimir($veiculo);
    }
  }
}
