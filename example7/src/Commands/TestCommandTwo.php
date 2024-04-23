<?php
namespace  CLIApps\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommandTwo extends Command{

    protected function configure()
    {
        $this->setName('tc2');
        $this->setDescription("Test Command Two");
        $this->setHidden(true);

    }

    protected function execute(InputInterface $input, OutputInterface $output):int
    {
        $output->writeln("Test Command Two Output");
        return 1;
    }

}