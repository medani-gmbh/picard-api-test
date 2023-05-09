<?php

namespace App\Command\Products;

use App\Api;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'test:get-lineartech-quantities',
    description: 'Gets a list of all LineartechQuantities',
)]
class TestGetLineartechQuantitiesCommand extends Command
{

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $api = new Api();
        $productApi = $api->getProductApi();

        $response = $productApi->getLineartechQuantities($api->getStocklistToken());

        $io->title("Get LineartechQuantities");
        dump($response);

        return Command::SUCCESS;
    }
}
