<?php

namespace App\Command\Products;

use App\Api;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'test:get-products',
    description: 'Gets a list of all products',
)]
class TestGetProductsCommand extends Command
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
        $productApi = $api->getProductApi();

        $response = $productApi->getProducts($api->getStocklistToken());

        $io->title("Get Products");
        $io->writeln($response);

        return Command::SUCCESS;
    }
    
}