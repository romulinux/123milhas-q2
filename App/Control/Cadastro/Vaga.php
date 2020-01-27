<?php

namespace App\Control\Cadastro;

use App\Banco\Vaga as VagaDAO;
use App\Model\Vaga as VagaModel;
use App\View\Cadastro\Vaga\Sucesso as VagaSucessoView;
use App\View\Cadastro\Vaga\Falha as VagaFalhaView;

class Vaga {

  public function __construct() {
  }

  public static function cadastrar () {
    $nome = $_POST['nome'];
    $identidade = $_POST['identidade'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $foto = $_POST['foto'];

    $cliente = new VagaModel($nome, $identidade, $telefone, $email, $foto);

    if (VagaDAO::salvar($cliente)) {
      return VagaSucessoView::imprimir($cliente);
    } else {
      return VagaFalhaView::imprimir($cliente);
    }
  }
}
