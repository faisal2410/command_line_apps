<?php

use CLIApps\Commands\WeatherCommand;
use Symfony\Component\Console\Application;

require_once __DIR__."/vendor/autoload.php";

$app=new Application();
$app->add(new WeatherCommand());



$app->run();
