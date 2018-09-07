<?php

namespace Framework\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class StopCommand extends Command
{
    protected function configure()
    {
        $this->setName('stop');
        $this->setDescription('Stop application');
        $this->setHelp("This command Stop the application");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("<comment> Successful stop running service ! </comment>");
    }
}