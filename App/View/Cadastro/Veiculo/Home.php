<?php

namespace App\View\Cadastro\Veiculo;

use App\Model\Tipo as Tipo;

class Home {

  public function __construct() {
  }

  public static function imprimir () {
    $html = '';
    $html .= '<h1>cadastro de veiculo</h1>';

    $html .= '<form action="/cadastrar/veiculo" method="POST" border="1">';
    $html .= '  <fieldset>';
    $html .= '   <div class="row">';
    $html .= '     <label for="tipo">tipo</label>';
    $html .= '     <select name="tipo" id="tipo">';
    $html .= '       <option value="' . Tipo::CARRO . '">' . Tipo::CARRO . '</option>';
    $html .= '       <option value="' . Tipo::MOTO . '">' . Tipo::MOTO . '</option>';
    $html .= '     </select>';
    $html .= '   </div>';
    $html .= '   <div class="row">';
    $html .= '     <label for="placa">placa</label>';
    $html .= '     <input type="text" name="placa" id="placa" placeholder="digite o placa" value="PXD-6025">';
    $html .= '   </div>';
    $html .= '   <div class="row">';
    $html .= '     <label for="documento">documento</label>';
    $html .= '     <input type="text" name="documento" id="documento" placeholder="digite o documento" value="WY46E874HE8EDUER">';
    $html .= '   </div>';
    $html .= '   <div class="row">';
    $html .= '     <label for="marca">marca</label>';
    $html .= '     <input type="text" name="marca" id="marca" placeholder="digite o marca" value="Gol">';
    $html .= '   </div>';
    $html .= '   <div class="row">';
    $html .= '     <label for="modelo">modelo</label>';
    $html .= '     <input type="text" name="modelo" id="modelo" placeholder="digite o modelo" value="Volkswagen">';
    $html .= '   </div>';
    $html .= '   <div class="row">';
    $html .= '     <label for="cor">cor</label>';
    $html .= '     <input type="text" name="cor" id="cor" placeholder="digite o cor" value="Prata">';
    $html .= '   </div>';
    $html .= '   <div class="row">';
    $html .= '     <input type="submit" name="cadastrar_veiculo" id="cadastrar_veiculo" value="cadastrar">';
    $html .= '   </div>';
    $html .= '  </fieldset>';
    $html .= '</form>';

    return $html;
  }
}
