<?php

namespace App\Control;

use App\Model\Pagamento as Pagamento;
use App\View\Transacao\Sucesso as Sucesso;
use App\View\Transacao\Falha as Falha;
use App\View\Transacao\Erro as Erro;
use App\Model\Situacao as Situacao;

class Transacao {

  public function __construct() {
  }

  public static function executar (Pagamento $pagametno, $dados_pagamento) {
    /**
     * lógica a ser aplicada com o @pagamento e os @dados_pagamento passados
     */
    $pagamento = self::processar_pagamento($pagametno, $dados_pagamento);
    if ($pagamento->get_situacao === Situacao::PAGO) {
      return new SucessoView($pagamento);
    } else if ($pagamento->get_situacao === Situacao::RECUSADO) {
      return new FalhaView($pagamento);
    } else {
      return new ErroView($pagamento);
    }
  }

  public static function processar_pagamento (Pagamento $pagamento, $dados_pagamento) {
    return $pagamento;
  }
}
