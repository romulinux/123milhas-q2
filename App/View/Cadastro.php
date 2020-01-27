<?php

namespace App\View;

class Cadastro {

  public function __construct() {
  }

  public static function imprimir_tela_cadastro_cliente () {
    $html = '';

    $html .= '<form action="/cadastrar/cliente" method="POST" border="1">';
    $html .= '  <fieldset>';
    $html .= '   <div class="row">';
    $html .= '     <label for="nome">nome</label>';
    $html .= '     <input type="text" name="nome" id="nome" placeholder="digite o nome" value="Romulo Neves Martins">';
    $html .= '   </div>';
    $html .= '   <div class="row">';
    $html .= '     <label for="identidade">identidade</label>';
    $html .= '     <input type="text" name="identidade" id="identidade" placeholder="digite a identidade" value="mg-14.931.557">';
    $html .= '   </div>';
    $html .= '   <div class="row">';
    $html .= '     <label for="telefone">telefone</label>';
    $html .= '     <input type="text" name="telefone" id="telefone" placeholder="digite o telefone" value="31 9 9356 0624">';
    $html .= '   </div>';
    $html .= '   <div class="row">';
    $html .= '     <label for="email">email</label>';
    $html .= '     <input type="text" name="email" id="email" placeholder="digite o email" value="mneves.romulo@gmail.com">';
    $html .= '   </div>';
    $html .= '   <div class="row">';
    $html .= '     <label for="foto">foto</label>';
    $html .= '     <input type="text" name="foto" id="foto" placeholder="digite o foto" value="//fotos/profile.png">';
    $html .= '   </div>';
    $html .= '   <div class="row">';
    $html .= '     <input type="submit" name="cadastrar_cliente" id="cadastrar_cliente" value="cadastrar">';
    $html .= '   </div>';
    $html .= '  </fieldset>';
    $html .= '</form>';

    return $html;
  }
}
