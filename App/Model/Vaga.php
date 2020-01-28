<?php

namespace App\Model;

class Vaga {
  private $numero;
  private $tipo;
  private $horario; // armazena o horário alocado, ex.: de 01/01/2020 07h00 ate 01/01/2020 12h30

  public function __construct($numero, $tipo = Tipo::CARRO, $horario = []) {
    $this->numero = $numero;
    $this->tipo = $tipo;
    $this->horario = [];
    if (is_array($horario) && array_key_exists('numero', $horario) && array_key_exists('de', $horario) && array_key_exists('ate', $horario)) {
      $this->horario['numero'] = $horario['numero'];
      $this->horario['de'] = $horario['de'];
      $this->horario['ate'] = $horario['ate'];
    }
  }

  public function get_numero () {
    return $this->numero;
  }

  public function get_tipo () {
    return $this->tipo;
  }

  public function get_horario () {
    return $this->horario;
  }

  public function get_tempo () {
    return ($this->horario->get_ate() - $this->get_de()) / (60 * 60); //tempo em horas
  }

  public function set_numero ($numero) {
    $this->numero = $numero;
  }

  public function set_tipo ($tipo) {
    $this->tipo = $tipo;
  }

  public function set_horario ($horario) {
    $this->horario = $horario;
  }
}
