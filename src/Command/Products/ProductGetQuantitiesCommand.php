<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'product:get-quantities',
    description: 'gets a list of quantities',
    hidden: true
)]
class ProductGetQuantitiesCommand extends Command
{

    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        return Command::SUCCESS;
    }
}
