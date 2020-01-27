<?php

namespace App\Banco;

class DAO {

  public function __construct() {
  }

  public static function salvar ($dados, $caminho) {
    return file_put_contents(__DIR__ . '/../Data/' . $caminho . '.json', json_encode($dados)) > 0;
  }

  public static function obter ($caminho) {
    $dados = file_get_contents(__DIR__ . '/../Data/' . $caminho . '.json');
    $array = json_decode($dados, true);

    return $array;
  }

  public static function listar ($caminho) {
    $itens = [];
    $path = __DIR__ . '/../Data/' . $caminho;
    $files = scandir($path);
    foreach ($files as $key => $file) {
      $dados = file_get_contents($path . '/' . $file);
      $array = json_decode($dados, true);
      if (is_array($array) && count($array) > 0) {
        $itens[] = $array;
      }
    }

    return $itens;
  }
}
