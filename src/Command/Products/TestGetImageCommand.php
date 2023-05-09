<?php

namespace App\Command\Products;

use App\Api;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'test:get-image',
    description: 'Add a short description for your command',
)]
class TestGetImageCommand extends Command
{
    protected function configure(): void
    {
        $this
            ->addOption('filename', 'f', InputOption::VALUE_REQUIRED, 'filename to get', 'abziehhuelse.jpg')            
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title("Test getImage");

        $api = new Api();
        $productApi = $api->getProductApi();

        $response = $productApi->getImage($input->getOption('filename'));
        $output->writeln($response);

        return Command::SUCCESS;
    }
}
