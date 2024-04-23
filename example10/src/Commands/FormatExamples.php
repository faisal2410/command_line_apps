<?php
namespace CLIApps\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\TableSeparator;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class FormatExamples extends Command{
    protected function configure(){
        $this->setName("fx");
        $this->setDescription("Formatting Examples");
    }
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io=new SymfonyStyle($input,$output);
        $io->title("Different types of messages");
        $io->info("This is an information");
        $io->warning("This is an Warning");
        $io->success("This is a success notice");
        $io->error("Error Error!!!");
        

        $io->title("Utility Methods");

        $io->text("Lorem ipsum dolor sit amet");
        $io->note("Lorem ipsum dolor sit amet");
        $io->caution("Lorem ipsum dolor sit amet");

        $io->listing([
            "Element #1 Lorem ipsum sit amet",
            "Element #1 Lorem ipsum sit amet",
            "Element #1 Lorem ipsum sit amet",
        ]);

        $io->table(
            ["Header1","Header2"],
            [
                ["Cell 1-1", "Cell 1-2"],
                ["Cell 2-1", "Cell 2-2"],
                ["Cell 3-1", "Cell 3-2"],
            ]
        );
        $io->horizontalTable(
            ["Header1","Header2"],
            [
                ["Cell 1-1", "Cell 1-2"],
                ["Cell 2-1", "Cell 2-2"],
                ["Cell 3-1", "Cell 3-2"],
            ]

            );
        $io->definitionList(
            "This is a title",
            ["foo1"=>"bar1"],
            ["foo2"=>"bar2"],
            ["foo3"=>"bar3"],
            new TableSeparator(),
            "This is another title",
            ["foo4"=>"bar4"]

        );

        return 1;
    }
}