<?php

namespace App\Control\Cadastro;

use App\Data\DAO as DAO;
use App\Model\Cliente as ClienteModel;
use App\View\Cliente\Sucesso as SucessoView;
use App\View\Cliente\Falha as FalhaView;

class Cliente {

  public function __construct() {
  }

  public static function cadastrar ($dados) {
    $nome = $dados['nome'];
    $identidade = $dados['identidade'];
    $telefone = $dados['telefone'];
    $email = $dados['email'];
    $foto = $dados['foto'];

    $cliente = new ClienteModel($nome, $identidade, $telefone, $email, $foto);

    $dao = new DAO('clientes');
    if ($dao->salvar($cliente)) {
      return new SucessoView($cliente);
    } else {
      return new FalhaView($cliente);
    }
  }
}
