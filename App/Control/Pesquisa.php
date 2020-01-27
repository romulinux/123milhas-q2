<?php

namespace App\Control;

use App\Banco\Cliente as ClienteDAO;
use App\Banco\Veiculo as VeiculoDAO;
use App\Banco\Vaga as VagaDAO;
use App\Model\Tipo as Tipo;

class Pesquisa {

  public function __construct() {
  }

  public static function pesquisar_cliente ($identidade) {
    return ClienteDAO::obter($identidade);
  }

  public static function pesquisar_veiculo ($documento) {
    return VeiculoDAO::obter($documento);
  }

  public static function pesquisar_vaga ($codigo) {
    return VagaDAO::obter($codigo);
  }

  public static function pesquisar_vagas (Tipo $tipo = null, $de = null, $ate = null) {
    return VagaDAO::listar($tipo, $de, $ate);
  }
}
