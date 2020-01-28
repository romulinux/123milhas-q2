<?php

namespace App\Control;

use App\Data\DAO as DAO;

class Pesquisa {

  public function __construct() {
  }

  public static function pesquisar_cliente ($identidade_cliente) {
    $dao = new DAO('clientes');
    return $dao->obter($identidade_cliente);
  }

  public static function pesquisar_veiculo ($documento_veiculo) {
    $dao = new DAO('veiculos');
    return $dao->obter($documento_veiculo);
  }

  public static function pesquisar_vagas_livres ($tipo_vaga, $data_de, $data_ate) {
    $dao = new DAO('vagas');
    $filtros = [
      'tipo' => $tipo_vaga,
      'de' => $data_de,
      'ate' => $data_ate
    ];
    return $dao->listar($filtros);
  }

  public static function pesquisar_vaga ($numero_vaga) {
    $dao = new DAO('vagas');
    return $dao->obter($numero_vaga);
  }

  public static function pesquisar_vaga_por_veiculo ($documento_veiculo) {
    $dao = new DAO('vaga_veiculo');
    $filtros = [
      'documento' => $documento_veiculo
    ];
    return $dao->listar($filtros);
  }
}
