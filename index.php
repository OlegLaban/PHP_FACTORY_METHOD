<?php

require 'vendor/autoload.php';

use App\Application;

$app = new Application();

$os = $argv[1] ?? 'Windows';

$app->main($os);