<?php

namespace App\Control\Cadastro;

use App\Banco\Cliente as ClienteDAO;
use App\Model\Cliente as ClienteModel;
use App\View\Cadastro\Cliente\Sucesso as ClienteSucessoView;
use App\View\Cadastro\Cliente\Falha as ClienteFalhaView;

class Cliente {

  public function __construct() {
  }

  public static function cadastrar () {
    $nome = $_POST['nome'];
    $identidade = $_POST['identidade'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $foto = $_POST['foto'];

    $cliente = new ClienteModel($nome, $identidade, $telefone, $email, $foto);

    if (ClienteDAO::salvar($cliente)) {
      return ClienteSucessoView::imprimir($cliente);
    } else {
      return ClienteFalhaView::imprimir($cliente);
    }
  }
}
