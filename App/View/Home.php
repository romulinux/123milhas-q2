<?php

namespace App\View;

class Home {

  public function __construct() {
  }

  public static function imprimir () {
    $html = '';

    $html .= '<nav>';
    $html .= '  <a href="/cadastro/cliente">cadastrar cliente</a>';
    $html .= '  <a href="/cadastro/veiculo">cadastrar veiculo</a>';
    $html .= '  <a href="/cadastro/vaga">cadastrar vaga</a>';
    $html .= '</nav>';

    return $html;
  }
}
