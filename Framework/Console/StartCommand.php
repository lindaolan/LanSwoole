<?php

namespace Framework\Console;

use Application\SwooleHttpServer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class StartCommand extends Command
{
    protected function configure()
    {
        $this->setName('start');
        $this->setDescription('Start application');
        $this->setHelp("This command start the application");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("<comment> Server start running, have fun ... </comment>");
        $server = new SwooleHttpServer();
        $server->start();
    }
}