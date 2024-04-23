<?php
namespace CLIApps\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CovidCommand extends Command{
    protected function configure()
    {
        $this->setName('covid');
        $this->setDescription("Covid Information");
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        $io=new SymfonyStyle($input, $output);
        $country=$io->ask("Country","Bangladesh");
        $url= "https://disease.sh/v3/covid-19/countries/{$country}?strict=true";
        $data=json_decode(file_get_contents($url),true);
        
        $output->writeln("Total Death: {$data["deaths"]}");
        $output->writeln("Todays Death: {$data["todayDeaths"]}");
        $output->writeln("Total Recovered: {$data["recovered"]}");
        $output->writeln("Todays Recovered: {$data["todayRecovered"]}");
        $output->writeln("Total Infected: {$data["cases"]}");


        return 1;
    }
}
