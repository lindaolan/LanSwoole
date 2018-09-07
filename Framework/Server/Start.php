<?php
namespace Framework\Server;

use Framework\Console\StartCommand;
use Framework\Console\StopCommand;
use Symfony\Component\Console\Application;

class Start
{
    public static function run()
    {
        $application = new Application();
        $application->add(new StartCommand());
        $application->add(new StopCommand());
        $application->run();
    }

}