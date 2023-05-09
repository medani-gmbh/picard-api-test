<?php

namespace App\Command\Products;

use App\Api;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'test:get-lineartech-products',
    description: 'Gets a list of all LineartechProducts',
)]
class TestGetLineartechProductsCommand extends Command
{

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $api = new Api();
        $productApi = $api->getProductApi();

        $response = $productApi->getLineartechProducts($api->getStocklistToken());

        $io->title("Get LineartechProducts");
        dump($response);

        return Command::SUCCESS;
    }
}
