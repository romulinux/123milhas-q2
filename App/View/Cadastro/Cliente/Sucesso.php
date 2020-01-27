<?php

namespace App\View\Cadastro\Cliente;

use App\Model\Cliente as ClienteModel;

class Sucesso {

  public function __construct() {
  }

  public static function imprimir (ClienteModel $cliente) {
    $html = '';
    $html .= '<nav>';
    $html .= '  <ul>';
    $html .= '    <li><a href="/">voltar</a></li>';
    $html .= '    <li><a href="/cadastro/veiculo">próximo</a></li>';
    $html .= '  </ul>';
    $html .= '</nav>';
    $html .= '<h1>cliente cadastrado com sucesso.</h1>';

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
    $html .= '    <tr>';
    $html .= '      <td>' . $cliente->get_nome() . '</td>';
    $html .= '      <td>' . $cliente->get_identidade() . '</td>';
    $html .= '      <td>' . $cliente->get_telefone() . '</td>';
    $html .= '      <td>' . $cliente->get_email() . '</td>';
    $html .= '      <td>' . $cliente->get_foto() . '</td>';
    $html .= '    </tr>';
    $html .= '  </tbody>';
    $html .= '</table>';

    return $html;
  }
}
