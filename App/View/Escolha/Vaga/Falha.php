<?php

namespace App\View\Escolha\Vaga;

use App\Model\Vaga as VagaModel;

class Falha {

  public function __construct() {
  }

  public static function imprimir (VagaModel $vaga) {
    $html = '<h1>falha ao escolher vaga.</h1>';

    $html .= '<table border="1">';
    $html .= '  <thead>';
    $html .= '    <tr>';
    $html .= '      <th>codigo</th>';
    $html .= '      <th>tipo</th>';
    $html .= '    </tr>';
    $html .= '  </thead>';
    $html .= '  <tbody>';
    $html .= '    <tr>';
    $html .= '      <td>' . $vaga->get_codigo() . '</td>';
    $html .= '      <td>' . $vaga->get_tipo() . '</td>';
    $html .= '    </tr>';
    $html .= '  </tbody>';
    $html .= '</table>';

    return $html;
  }
}
