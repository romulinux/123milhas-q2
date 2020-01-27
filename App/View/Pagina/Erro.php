<?php

namespace App\View\Pagina;

class Erro {

  public function __construct() {
  }

  public static function imprimir ($message, $stack) {
    $html = '';

    $html .= '<h1>Ocorreu um erro:</h1>';
    $html .= '<p>' . $message . '</p>';
    $html .= '<p>' . $stack . '</p>';

    return $html;
  }
}
