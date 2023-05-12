<?php

namespace App\Command\Infrastructure;

use App\Api;
use App\Api\DefaultFilterRequestBodyBuilder;
use RtgConnector\RtgConnectBundle\Model\DefaultFilterRequestBody;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'test:get-categories-as-layers',
    description: 'Gets a list of all Categories',
)]
class GetCategoriesAsLayersCommand extends Command
{

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $api = new Api();
        $infrastructuralApi = $api->getInfrastructuralApi();

        $builder = new DefaultFilterRequestBodyBuilder();
        $request = $builder->makeFullUpdate()->build();

        $response = $infrastructuralApi->getProductCategories($api->getStocklistToken(), $request);


        $io->title("Get Categories As Layers");

        $layers = [];
        
        $categories = $response->getData();

        foreach ($categories as $category) {
            $layers[$category->getLayer()][$category->getId()] = $category;
        }
        
        dump($layers);

        return Command::SUCCESS;
    }
}
