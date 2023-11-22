<?php

session_start();

use App\Servise\App;

require_once __DIR__ . "/vendor/autoload.php";

App::start();

require_once __DIR__ . "/roater/routes.php";

