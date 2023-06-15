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
    name: 'product:get-specific-products',
    description: 'Gets some specific products (with prices, quantity, image, attributes)',
)]
class ProductGetSpecificProductCommand extends Command
{

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        
        $api = new Api();
        $productApi = $api->getProductApi();

        $productIds = [
            10250273,
            10240521,
            10238553,
            10238549,
            10231415
        ];

        $builder = new ProductsRequestBodyBuilder();
        $productsRequestBody = $builder
            ->setLimit(count($productIds))
            // ->setOffset(1000)
            ->withPrices()
            ->withQuantity()
            ->withImage()
            ->withAttributes()
            ->withProductIds($productIds)
            ->makeFullUpdate()
            ->build();



        $response = $productApi->getProducts($api->getStocklistToken(), $productsRequestBody);
        $io->title("Get Specific Products");
        dump($response);

        return Command::SUCCESS;
    }
}
