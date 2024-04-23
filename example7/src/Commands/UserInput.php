<?php
namespace  CLIApps\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class UserInput extends Command{

    protected function configure()
    {
        $this->setName('uinput');
        $this->setDescription("User Input Test");
        // $this->setHidden(true);

    }

    protected function execute(InputInterface $input, OutputInterface $output):int
    {
       $io=new SymfonyStyle($input,$output);

    //    $name=$io->ask("Full Name: ");
    //    $output->writeln("Your Name is {$name}");

    //    $confirmation=$io->confirm("Do you want to do it?");
    //    $output->writeln($confirmation);

    $color=$io->choice("What is your favorite color?",["r"=>"red","g"=> "green","b"=>"blue"]);
    $output->writeln($color);

    // $pwd=$io->askHidden("password?");
    // $output->writeln($pwd);

        return 1;
    }

}