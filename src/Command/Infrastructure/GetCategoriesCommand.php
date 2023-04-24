<?php

namespace App\Command\Infrastructure;

use App\Api;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'test:get-categories',
    description: 'Gets a list of all Categories',
)]
class GetCategoriesCommand extends Command
{
    protected function configure(): void
    {
        // $this
        //     ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
        //     ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        // ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $api = new Api();
        $infrastructuralApi = $api->getInfrastructuralApi();

        $response = $infrastructuralApi->getProductCategories($api->getStocklistToken());

        $io->title("Get Categories");
        $io->writeln($response);

        return Command::SUCCESS;
    }
}
