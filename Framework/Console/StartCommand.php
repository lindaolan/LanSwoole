<?php

namespace Framework\Console;

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
        $output->writeln("<comment> HelloWorld, " . $this->msg . "</comment>");
        $http = new \swoole_http_server("0.0.0.0", 9501);

        $http->set([
            'worker_num' => 4, //工作进程数
            'daemonize' => true, //是否后台运行
        ]);

        $http->on("start", function ($server) {
            echo "Swoole http server is started! have fun...\n";
        });

        $http->on("request", function ($request, $response) {
            $path = $request->server['path_info'];
            $response->header("Content-Type", "text/plain");
            $response->end("$path Hello World\n");
        });

        $http->start();
    }
}