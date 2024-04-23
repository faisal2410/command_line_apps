<?php
$file="app.phar";

if(file_exists($file)){
    unlink($file);

}

$phar = new Phar($file);

$phar->startBuffering();

$stub=$phar->createDefaultStub("main.php");
$phar->buildFromDirectory(__DIR__."/app");
$shebang="#!/usr/bin/env php \n";
$phar->setStub($shebang.$stub);
$phar->stopBuffering();
// $phar->compress(PHAR::GZ);

echo "Done";

