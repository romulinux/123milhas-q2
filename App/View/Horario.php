<?php

namespace App\View;

use App\Model\Horario as HorarioModel;

class Horario {

  public function __construct() {
  }

  public static function imprimir (array $horarios) {
    $html = '';

    $html .= '<table>';
    $html .= '  <thead>';
    $html .= '    <tr>';
    $html .= '      <th>#</th>';
    $html .= '      <th>de</th>';
    $html .= '      <th>até</th>';
    $html .= '    </tr>';
    $html .= '  </thead>';
    $html .= '  <tbody>';
    foreach ($horarios as $key => $horario) {
      if ($horario instanceof HorarioModel) {
        $html .= '    <tr>';
        $html .= '      <td>' . $horario->get_codigo() . '</td>';
        $html .= '      <td>' . self::formatar_horario($horario->get_de()) . '</td>';
        $html .= '      <td>' . self::formatar_horario($horario->get_ate()) . '</td>';
        $html .= '    </tr>';
      }
    }
    $html .= '  </tbody>';
    $html .= '</table>';

    return $html;
  }

  public static function formatar_horario ($horario) {
    $date = new \DateTime('@' . $horario);
    $data = $date->format('Y-m-d H:i');
    return $data;
  }
}
