<?php

use App\Actions\HealthActions;

$router->get('/api/health', new HealthActions);
