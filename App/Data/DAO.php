<?php

namespace App\Data;

class DAO {

  private $tabela;

  public function __construct($tabela) {
    $this->tabela = $tabela;
  }

  public static function salvar ($objeto) {
    /** salva os dados do @objeto na @this->tabela */
  }

  public static function obter ($codigo) {
    /** retorna os dados de um item na @this->tabela por @codigo como um objeto*/
  }

  public static function atualizar ($codigo, $dados) {
    /** atualizar os @dados de um item na @this->tabela por @codigo*/
  }

  public static function remover ($codigo) {
    /** remove um item na @this->tabela por @codigo*/
  }

  public static function listar ($filtros) {
    /** retorna os dados de itens numa @this->tabela com os @filtros aplicados como um array de objetos*/
  }
}
