<?php

namespace App\Banco;

use App\Model\Cliente as ClienteModel;

class Cliente {

  public function __construct() {
  }

  public static function salvar (ClienteModel $cliente) {
    $identidade = $cliente->get_identidade();

    $dados = [
      'nome' => $cliente->get_nome(),
      'identidade' => $cliente->get_identidade(),
      'telefone' => $cliente->get_telefone(),
      'email' => $cliente->get_email(),
      'foto' => $cliente->get_foto()
    ];

    return DAO::salvar($dados, 'clientes/' . $identidade);
  }

  public static function obter ($identidade) {
    $array = DAO::obter('clientes/' . $identidade);

    if (count($array) === 0) {
      return false;
    }

    $nome = $array['nome'];
    $identidade = $array['identidade'];
    $telefone = $array['telefone'];
    $email = $array['email'];
    $foto = $array['foto'];

    return new ClienteModel($nome, $identidade, $telefone, $email, $foto);
  }
}
