<?php

namespace App\Control;

use App\Cadastro\Cliente as CadastroCliente;
use App\Cadastro\Veiculo as CadastroVeiculo;
use App\Cadastro\Vaga as CadastroVaga;

class Cadastro {

  public function __construct() {
  }

  public static function cadastrar_cliente ($nome, $identidade, $telefone, $email, $foto) {
    $dados = [];
    $dados['nome'] = $nome;
    $dados['identidade'] = $identidade;
    $dados['telefone'] = $telefone;
    $dados['email'] = $email;
    $dados['foto'] = $foto;
    return CadastroCliente::cadastrar($dados);
  }

  public static function cadastrar_veiculo ($tipo, $placa, $documento, $marca, $modelo, $cor) {
    $dados = [];
    $dados['tipo'] = $tipo;
    $dados['placa'] = $placa;
    $dados['documento'] = $documento;
    $dados['marca'] = $marca;
    $dados['modelo'] = $modelo;
    $dados['cor'] = $cor;
    return CadastroVeiculo::cadastrar($dados);
  }

  public static function cadastrar_vaga ($numero, $tipo, $horarios) {
    $dados = [];
    $dados['numero'] = $numero;
    $dados['tipo'] = $tipo;
    $dados['horarios'] = $horarios;
    return CadastroVaga::cadastrar($dados);
  }
}
