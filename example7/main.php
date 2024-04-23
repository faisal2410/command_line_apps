<?php

use CLIApps\Commands\TestCommand;
use CLIApps\Commands\TestCommandTwo;
use CLIApps\Commands\UserChoice;
use CLIApps\Commands\UserInput;
use Symfony\Component\Console\Application;

require_once __DIR__."/vendor/autoload.php";


$app=new Application();
$app->add(new TestCommand());
$app->add(new TestCommandTwo());
$app->add(new UserInput());
$app->add(new UserChoice());

$app->run();