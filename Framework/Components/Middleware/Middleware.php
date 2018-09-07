<?php

namespace Framework\Components\Middleware;


abstract class Middleware implements IMiddleware
{
    abstract public function before_handle();

    abstract public function after_handle($path);

    public function interrupt()
    {
        throw new \Exception('interrupt');
    }
}