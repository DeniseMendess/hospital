<?php

namespace App\Actions;

use App\Core\Response;

class HealthActions
{
  public function __invoke(): void
  {
    Response::json([
      'success' => true,
      'message' => 'API do hospital Reviver funcionando.'
    ]);
  }
}
