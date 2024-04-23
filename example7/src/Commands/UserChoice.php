<?php
namespace CLIApps\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;

class UserChoice extends Command{
    protected function configure()
    {
        $this->setName('uc');
        $this->setDescription("User Choice Test");
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $helper=$this->getHelper("question");
        $cq=new ChoiceQuestion("What is your favorite color/s?", ["r" => "red", "g" => "green", "b" => "blue"]);
        $cq->setMultiselect(true);
        $colors=$helper->ask($input,$output,$cq);
        $output->writeln(print_r($colors,true));
        return 1;
    }
}