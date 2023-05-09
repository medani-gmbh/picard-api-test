<?php

namespace App\Command\Products;

use App\Api;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'test:get-quantities',
    description: 'Gets a list of all quantities',
)]
class TestGetQuantitiesCommand extends Command
{


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $api = new Api();
        $productApi = $api->getProductApi();

        $response = $productApi->getQuantities($api->getStocklistToken());

        $io->title("Get Quantities");
        dump($response);

        return Command::SUCCESS;
    }
}
