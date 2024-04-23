<?php
namespace CLIApps\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class WeatherCommand extends Command{
    protected function configure()
    {
        $this->setName("weather");
        $this->setDescription("Weather Information");
        
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io=new SymfonyStyle($input,$output);
        $choices=["Current Location","Dhaka","Rajshahi","Bogra","Others"];
        $city=$io->choice("Select an option",$choices,0);
        // $output->writeln($city);
        if($city=="Current Location"){
            // passthru("powershell Invoke-RestMethod wttr.in/{$location}{$extra}");
            $path="wttr.in";    
        }elseif($city!="Others"){
            $path="wttr.in/{$city}";
        }else{
            $city=$io->ask("Type location");
            $path = "wttr.in/{$city}";
        }

         passthru("powershell Invoke-RestMethod {$path}");
        return 1;
    }
}