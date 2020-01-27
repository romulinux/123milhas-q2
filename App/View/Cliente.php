<?php

namespace App\View;

use App\Model\Cliente as ClienteModel;

class Cliente {

  public function __construct() {
  }

  public static function imprimir_tabela (array $clientes) {
    $html = '';

    $html .= '<table border="1">';
    $html .= '  <thead>';
    $html .= '    <tr>';
    $html .= '      <th>nome</th>';
    $html .= '      <th>identidade</th>';
    $html .= '      <th>telefone</th>';
    $html .= '      <th>email</th>';
    $html .= '      <th>foto</th>';
    $html .= '    </tr>';
    $html .= '  </thead>';
    $html .= '  <tbody>';
    foreach ($clientes as $key => $cliente) {
      if ($cliente instanceof ClienteModel) {
        $html .= '    <tr>';
        $html .= '      <td>' . $cliente->get_nome() . '</td>';
        $html .= '      <td>' . $cliente->get_identidade() . '</td>';
        $html .= '      <td>' . $cliente->get_telefone() . '</td>';
        $html .= '      <td>' . $cliente->get_email() . '</td>';
        $html .= '      <td>' . $cliente->get_foto() . '</td>';
        $html .= '    </tr>';
      }
    }
    $html .= '  </tbody>';
    $html .= '</table>';

    return $html;
  }
}
