<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $form = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

  $dados = [
    'email' => trim($form['email'] ?? ''),
    'senha' => trim($form['senha'] ?? ''),
    'email_erro' => '',
    'senha_erro' => '',
    'login_erro' => ''
  ];

  if (empty($dados['email'])) {
    $dados['email_erro'] = 'Preencha o email';
  }

  if (empty($dados['senha'])) {
    $dados['senha_erro'] = 'Preencha a senha';
  }

  if (empty($dados['email_erro']) && empty($dados['senha_erro'])) {

    if ($dados['email'] === 'denise@gmail.com' && $dados['senha'] === '123') {

      $_SESSION['usuario'] = $dados['email'];

      header('Location: ' . BASE_URL . 'admin/dashboard');
      exit;
    } else {
      $dados['login_erro'] = 'Email ou senha inválidos';
    }
  }

  // salva erros
  $_SESSION['login_erro'] = $dados;

  header('Location: ' . BASE_URL . 'login');
  exit;
}
