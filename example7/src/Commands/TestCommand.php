<?php
namespace  CLIApps\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command{

    protected function configure()
    {
        $this->setName('tc');
        $this->setDescription("Test Command One");

    }

    protected function execute(InputInterface $input, OutputInterface $output):int
    {
        $output->writeln("Test Command One Output");
        return 1;
    }

}