<?php

namespace App\Core;

class Request
{
  public function method(): string
  {
    return $_SERVER['REQUEST_METHOD'] ?? 'GET';
  }


  public function uri(): string
  {
    return $_SERVER['REQUEST_URI'] ?? '/';
  }


  public function json(): array
  {
    $content = file_get_contents('php://input');

    if ($content === false || trim($content) === '') {
      return [];
    }

    $data = json_decode($content, true);

    if (!is_array($data)) {
      throw new \InvalidArgumentException('O corpo da requisição deve ser um JSON válido');
    }

    return $data;
  }
}
