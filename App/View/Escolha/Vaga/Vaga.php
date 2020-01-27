<?php

namespace App\View\Escolha\Vaga;

use App\Model\Vaga as VagaModel;
use App\View\Horario as Horario;

class Vaga {

  public function __construct() {
  }

  public static function imprimir (array $vagas) {
    $html = '';

    $html .= '<div class="container__escolha__vagas">';
    foreach ($vagas as $key => $vaga) {
      if ($vaga instanceof VagaModel) {
        $html .= '  <div class="item__card--vaga">';
        $html .= '    <div class="item__row--vaga">';
        $html .= '      <div>codigo</div>';
        $html .= '      <div>' . $vaga->get_codigo() . '</div>';
        $html .= '    </div>';
        $html .= '    <div class="item__row--vaga">';
        $html .= '      <div>tipo</div>';
        $html .= '      <div>' . $vaga->get_tipo() . '</div>';
        $html .= '    </div>';
        $html .= '    <div class="item__row--vaga">';
        $html .= '      <div>horarios</div>';
        $html .= '      <div>' . Horario::imprimir($vaga->get_horarios()) . '</div>';
        $html .= '    </div>';
        $html .= '  </div>';
      }
    }
    $html .= '</div>';

    return $html;
  }
}
