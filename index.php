<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/config/configuracao.php';

session_start();

// Captura a URL (se não existir, vai para login)
$url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
$url = $url ? explode('/', $url) : [];

// Define a rota (default = login)
$rota = $url ? implode('/', $url) : 'login';
$rotasPublicas = ['login', 'logar'];

/* verifcando se esta logado, tentar liberar o acesso privado */
if (!isset($_SESSION['usuario']) && !in_array($rota, $rotasPublicas)) {
  header('Location: ' . BASE_URL . 'login');
  exit();
}

// Pastas que serão buscadas automaticamente
$pastas = [
  'auth',
  'functions',
  'pages',
  'admin'
];

$arquivoEncontrado = false;

foreach ($pastas as $pasta) {

  $caminho = __DIR__ . "/src/{$pasta}/{$rota}.php";

  if (is_file($caminho)) {

    // Usa layout apenas para páginas (exceto login)
    $usarLayout = ($pasta === 'pages' && $rota !== 'login');

    if ($usarLayout) {
      $view = $caminho;
      require_once __DIR__ . '/src/includes/layout.php';
    } else {
      require_once $caminho;
    }

    $arquivoEncontrado = true;
    break;
  }
}

// Se não encontrar rota, carrega 404
if (!$arquivoEncontrado) {
  require_once __DIR__ . '/src/pages/404.php';
}
