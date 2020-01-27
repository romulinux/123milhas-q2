<?php

namespace App\Util;

class BreadCrumb {

  public function __construct() {
  }

  public static function imprimir (array $itens) {
    $ultimo = array_pop($itens);
    $url = '/';

    $html = '';
    $html = '<nav>';
    $html .= '  <ul>';

    foreach ($items as $i => $item) {
      $url .= $item;
      $html .= '    <li><a href="' . $url . '">' . $item . '</a></li>';
    }

    $html .= '    <li><span>' . $ultimo . '</span></li>';
    $html .= '  </ul>';
    $html .= '</nav>';

    return $html;
  }
}
