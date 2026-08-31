<?php

namespace App\Core;

use Throwable;

class ExceptionHandler
{
  public static function register(): void
  {
    set_exception_handler(
      function (Throwable $exception): void {
        self::handle($exception);
      }
    );
  }


  private static function handle(Throwable $exception): void
  {
    $statusCode = 500;

    if ($exception instanceof \InvalidArgumentException) {
      $statusCode = 400;
    }

    Response::json([
      'success' => false,
      'message' => $exception->getMessage()
    ], $statusCode);
  }
}
