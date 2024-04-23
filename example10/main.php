<?php

use CLIApps\Commands\FormatExamples;
use Symfony\Component\Console\Application;

require_once __DIR__."/vendor/autoload.php";


$app=new Application();
$app->add(new FormatExamples());


$app->run();