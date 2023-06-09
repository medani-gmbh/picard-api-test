<?php

namespace App\Command\Products;

use App\Api;
use App\Api\ProductsRequestBodyBuilder;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'product:get-one',
    description: 'Gets a single product (with prices, quantity, image, attributes)',
)]
class ProductGetSingleProductCommand extends Command
{

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $api = new Api();
        $productApi = $api->getProductApi();

        $builder = new ProductsRequestBodyBuilder();
        $productsRequestBody = $builder
            ->setLimit(1)
            ->setOffset(1000)
            ->withPrices()
            ->withQuantity()
            ->withImage()
            ->withAttributes()
            ->build();



        $response = $productApi->getProducts($api->getStocklistToken(), $productsRequestBody);
        $io->title("Get Single Product");
        dump($response);

        return Command::SUCCESS;
    }
}
