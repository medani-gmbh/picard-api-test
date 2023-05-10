<?php

namespace App\Command\Products;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'test:get-image',
    description: 'NYI',
    hidden: true
)]
class TestGetImageCommand extends Command
{
    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        return Command::SUCCESS;
    }
}
