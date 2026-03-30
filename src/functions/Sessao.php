<?php

class Sessao
{
  public static function logado()
  {
    if (!isset($_SESSION['usuario'])) {
      header('Location: ' . BASE_URL . 'login');
      exit();
    }
  }


  public static function somenteAdmin()
  {
    self::logado();

    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] !== ADMIN) {
      header('Locatoin: ' . BASE_URL . 'login');
      exit();
    }
  }


  public static function somenteFuncionario()
  {
    self::logado();

    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] !== FUNCIONARIO) {
      header('Locatoin: ' . BASE_URL . 'login');
      exit();
    }
  }
}
