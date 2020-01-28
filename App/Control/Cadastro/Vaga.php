<?php

namespace App\Control\Cadastro;

use App\Data\DAO as DAO;
use App\Model\Vaga as VagaModel;
use App\View\Vaga\Sucesso as SucessoView;
use App\View\Vaga\Falha as FalhaView;

class Vaga {

  public function __construct() {
  }

  public static function cadastrar ($dados) {
    $codigo = $dados['codigo'];
    $tipo = $dados['tipo'];
    $horario = $dados['horario'];

    $vaga = new VagaModel($codigo, $tipo, $horario);

    $dao = new DAO('vagas');
    if ($dao->salvar($vaga)) {
      return new SucessoView($vaga);
    } else {
      return new FalhaView($vaga);
    }
  }
}
