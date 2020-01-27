<?php

namespace App\View\Escolha\Vaga;

use App\Model\Tipo as Tipo;
use App\Control\Pesquisa as Pesquisa;

class Home {

  public function __construct() {
  }

  public static function imprimir () {
    $html = '';
    $html .= '<h1>escolha a vaga</h1>';

    $html .= '<form action="/pesquisar/vaga" method="POST" border="1">';
    $html .= '  <fieldset>';
    $html .= '   <div class="row">';
    $html .= '     <label for="tipo">tipo</label>';
    $html .= '     <select name="tipo" id="tipo">';
    $html .= '       <option value="0">selecione</option>';
    $html .= '       <option value="' . Tipo::CARRO . '">' . Tipo::CARRO . '</option>';
    $html .= '       <option value="' . Tipo::MOTO . '">' . Tipo::MOTO . '</option>';
    $html .= '     </select>';
    $html .= '   </div>';
    $html .= '   <div class="row">';
    $html .= '     <input type="submit" name="pesquisar_vaga" id="pesquisar_vaga" value="escolher">';
    $html .= '   </div>';
    $html .= '  </fieldset>';
    $html .= '</form>';

    $vagas = Pesquisa::pesquisar_vagas();

    $html .= Vaga::imprimir($vagas);

    return $html;
  }
}
