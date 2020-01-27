<?php

namespace App\View\Pagina;

class NaoEncontrada {

  public function __construct() {
  }

  public static function imprimir ($url) {
    $html = '';

    $html .= '<h1>página não encontrada.</h1>';
    $html .= '<p>url ' . $url . ' não encontrada.</p>';

    return $html;
  }
}
