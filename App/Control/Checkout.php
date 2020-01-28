<?php

namespace App\Control;

use App\Data\DAO as DAO;
use App\Model\Pagamento as Pagamento;

class Checkout {

  static $taxa_por_hora = 5.00;

  public function __construct() {
  }

  public static function efetuar_pagamento ($documento_veiculo, $forma, $dados_pagamento) {
    $vaga = Pesquisa::pesquisar_vaga_por_veiculo($documento_veiculo);
    $valor = $vaga->get_tempo() * self::$taxa_por_hora;
    $numero_parcelas = $dados_pagamento['numero_parcelas'];
    $quantidade_parcelas = $dados_pagamento['quantidade_parcelas'];
    $pagamento = new Pagamento($valor, $forma, $numero_parcelas, $quantidade_parcelas);

    $transacao = Transacao($pagamento, $dados_pagamento);
    return $transacao->executar();
  }
}
