<?php

declare(strict_types=1);

use App\Core\ExceptionHandler;
use App\Core\Request;
use App\Core\Router;

require_once __DIR__ . '/../vendor/autoload.php';

ExceptionHandler::register();

$request = new Request();
$router = new Router();

require_once __DIR__ . '/../routes/api.php';


$router->dispatch(
  $request->method(),
  $request->uri()
);
