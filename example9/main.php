<?php

use CLIApps\Commands\CovidCommand;
use Symfony\Component\Console\Application;

require_once __DIR__."/vendor/autoload.php";


$app=new Application();
$app->add(new CovidCommand());



$app->run();