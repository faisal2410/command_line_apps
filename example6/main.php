<?php

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\SingleCommandApplication;

require __DIR__."/vendor/autoload.php";

$sca =new SingleCommandApplication();

$sca->setName('sca');

// $sca->addArgument('name',InputArgument::OPTIONAL,'Name','There');
$sca->addArgument('fname',InputArgument::REQUIRED,'First Name');
$sca->addArgument('lname',InputArgument::OPTIONAL,'Last Name',"");

$sca->addOption('format','f',InputOption::VALUE_OPTIONAL,'Output Format','l');
$sca->setCode(function(InputInterface $input, OutputInterface $output){
$result="Hello {$input->getArgument('fname')} {$input->getArgument('lname')}";
$format=$input->getOption('format');
if('u'==$format){
    $result=strtoupper($result);
}
    $output->writeln($result);

});

$sca->run();
