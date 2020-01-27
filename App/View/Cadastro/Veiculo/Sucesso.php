<?php

namespace App\View\Cadastro\Veiculo;

use App\Model\Veiculo as VeiculoModel;

class Sucesso {

  public function __construct() {
  }

  public static function imprimir (VeiculoModel $veiculo) {
    $html = '';
    $html .= '<nav>';
    $html .= '  <ul>';
    $html .= '    <li><a href="/">voltar</a></li>';
    $html .= '    <li><a href="/escolher/vaga">próximo</a></li>';
    $html .= '  </ul>';
    $html .= '</nav>';
    $html .= '<h1>veiculo cadastrado com sucesso.</h1>';

    $html .= '<table border="1">';
    $html .= '  <thead>';
    $html .= '    <tr>';
    $html .= '      <th>tipo</th>';
    $html .= '      <th>placa</th>';
    $html .= '      <th>documento</th>';
    $html .= '      <th>marca</th>';
    $html .= '      <th>modelo</th>';
    $html .= '      <th>cor</th>';
    $html .= '    </tr>';
    $html .= '  </thead>';
    $html .= '  <tbody>';
    $html .= '    <tr>';
    $html .= '      <td>' . $veiculo->get_tipo() . '</td>';
    $html .= '      <td>' . $veiculo->get_placa() . '</td>';
    $html .= '      <td>' . $veiculo->get_documento() . '</td>';
    $html .= '      <td>' . $veiculo->get_marca() . '</td>';
    $html .= '      <td>' . $veiculo->get_modelo() . '</td>';
    $html .= '      <td>' . $veiculo->get_cor() . '</td>';
    $html .= '    </tr>';
    $html .= '  </tbody>';
    $html .= '</table>';

    return $html;
  }
}
