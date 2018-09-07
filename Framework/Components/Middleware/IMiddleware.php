<?php

namespace Framework\Components\Middleware;

interface IMiddleware
{
    function setContext(&$context);

    function before_handle();

    function after_handle($path);
}