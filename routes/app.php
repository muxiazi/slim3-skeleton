<?php

use App\Controllers\AppController;

$app->get('/', AppController::class.':index');
