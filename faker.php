<?php
require_once 'vendor/autoload.php';
require_once 'env.php';

use App\Model\Tipo as Tipo;
use App\Model\Vaga as Vaga;
use App\Model\Horario as Horario;
use App\Control\Cadastro as Cadastro;

class Faker {

  public static function vagas ($quantidade = 4) {
    $uma_hora = 60 * 60 * 1;
    for ($i=0; $i < $quantidade; $i++) { 
      $codigo_vaga = 'Z-0' . $i;
      $tipo = Tipo::CARRO;
      $horarios = [];
      for ($j=0; $j < random_int(1, 4); $j++) {
        $codigo_horario = 'H-' . str_pad($i, 4, "0", STR_PAD_LEFT);
        $de = time() + $j * $uma_hora;
        $ate = $de + $uma_hora;
        $horarios[] = [
          'codigo' => $codigo_horario,
          'de' => $de,
          'ate' => $ate
        ];
      }
      Cadastro::cadastrar_vaga($codigo_vaga, $tipo, $horarios);
    }
  }
}

$quantidade = $argc[1] ?? 4;
Faker::vagas($quantidade);

