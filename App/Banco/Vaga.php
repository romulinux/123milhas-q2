<?php

namespace App\Banco;

use App\Model\Vaga as VagaModel;
use App\Model\Horario as Horario;
use App\Model\Tipo as Tipo;

class Vaga {

  public function __construct() {
  }

  public static function salvar (VagaModel $vaga) {
    $codigo = $vaga->get_codigo();

    $horarios = [];
    foreach ($vaga->get_horarios() as $key => $horario) {
      if ($horario instanceof Horario) {
        $horarios[] = [
          'codigo' => $horario->get_codigo(),
          'de' => $horario->get_de(),
          'ate' => $horario->get_ate()
        ];
      }
    }

    $dados = [
      'codigo' => $vaga->get_codigo(),
      'tipo' => $vaga->get_tipo(),
      'horarios' => $horarios
    ];

    return DAO::salvar($dados, 'vagas/' . $codigo);
  }

  public static function obter ($codigo) {
    $array = DAO::obter('vagas/' . $codigo);

    if (count($array) === 0) {
      return false;
    }

    $codigo = $array['codigo'];
    $tipo = $array['tipo'];
    $horarios = $array['horarios'];

    return new VagaModel($codigo, $tipo, $horarios);
  }

  public static function listar (Tipo $tipo_vaga = null, $de = null, $ate = null) {
    $array = DAO::listar('vagas/');

    if (count($array) === 0) {
      return [];
    }

    $vagas = [];

    foreach ($array as $key => $value) {
      $codigo = $value['codigo'];
      $tipo = $value['tipo'];
      $horarios = $value['horarios'];
      $vaga = new VagaModel($codigo, $tipo, $horarios);
      if ($tipo_vaga === null || $tipo_vaga === $tipo) {
        if ($de === null && $ate === null) {

          $vagas[] = $vaga;
        }
      }
    }

    return $vagas;
  }
}
