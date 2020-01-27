<?php
require_once 'vendor/autoload.php';
require_once 'env.php';

define('DS', DIRECTORY_SEPARATOR);
define('__ROOT__', __DIR__ . DS);

use App\Core\Router as Router;

use App\View\Cliente as ClienteView;
use App\View\Veiculo as VeiculoView;
use App\View\Vaga as VagaView;
use App\View\Home as HomeView;
use App\View\Cadastro\Cliente\Home as CadastroClienteHomeView;
use App\View\Cadastro\Veiculo\Home as CadastroVeiculoHomeView;
use App\View\Escolha\Vaga\Home as EscolhaVagaHomeView;
use App\View\Pagina\NaoEncontrada as PaginaNaoEncontradaView;
use App\View\Pagina\Erro as PaginaErroView;
use App\View\Cadastro as CadastroView;

use App\Control\Cadastro as Cadastro;
use App\Control\Cadastro\Cliente as CadastroClienteControl;
use App\Control\Cadastro\Veiculo as CadastroVeiculoControl;
use App\Control\Pesquisa as Pesquisa;

?>

<?php
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
$action = $request_uri[0] !== '' ? substr($request_uri[0], 1) : '/';
$query_string = $request_uri[1] ?? '';

Router::route(['', '/', '/home'], function () {
  echo HomeView::imprimir();
});

Router::route(['/cadastro/cliente'], function () {
  echo CadastroClienteHomeView::imprimir();
});

Router::route(['/cadastro/veiculo'], function () {
  echo CadastroVeiculoHomeView::imprimir();
});

Router::route(['/escolher/vaga'], function () {
  echo EscolhaVagaHomeView::imprimir();
});

Router::route('/cadastrar/cliente', function () {
  echo CadastroClienteControl::cadastrar();
});

Router::route('/cadastrar/veiculo', function () {
  echo CadastroVeiculoControl::cadastrar();
});

Router::route('/403', function () use ($action) {
  echo PaginaNaoEncontradaView::imprimir($action);
});

if (!in_array($action, Router::get_routes())) {
  $action = '/403';
}

try {
  Router::dispatch($action);
} catch (\Throwable $th) {

  if (defined('__DEBUG__') && __DEBUG__ === true) {
    $action = '/erro';
    Router::route('/erro', function () use ($th) {
      echo PaginaErroView::imprimir($th->getMessage(), $th->getTraceAsString());
    });
    Router::dispatch($action);
  }
}
