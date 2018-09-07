<?php

class SwooleHttpServer
{
    private $server;

    public function start()
    {

        $http = new \swoole_http_server("0.0.0.0", 9501);

        $http->set([
            'worker_num' => 4, //工作进程数
            'daemonize' => true, //是否后台运行
        ]);

        $this->server->on('Start', [$this, 'onSwooleStart']);
        $this->server->on('WorkerStart', [$this, 'onSwooleWorkerStart']);
        $this->server->on('WorkerStop', [$this, 'onSwooleWorkerStop']);
        $this->server->on('Task', [$this, 'onSwooleTask']);
        $this->server->on('Finish', [$this, 'onSwooleFinish']);
        $this->server->on('PipeMessage', [$this, 'onSwoolePipeMessage']);
        $this->server->on('WorkerError', [$this, 'onSwooleWorkerError']);
        $this->server->on('ManagerStart', [$this, 'onSwooleManagerStart']);
        $this->server->on('ManagerStop', [$this, 'onSwooleManagerStop']);
        $this->server->on('request', [$this, 'onSwooleRequest']);
        $this->server->on('open', [$this, 'onSwooleWSOpen']);
        $this->server->on('message', [$this, 'onSwooleWSMessage']);
        $this->server->on('close', [$this, 'onSwooleWSClose']);
        $this->server->on('Shutdown', [$this, 'onSwooleShutdown']);
        $this->server->start();
    }


    public function onSwooleRequest($request, $response)
    {
        $path = $request->server['path_info'];
        $response->header("Content-Type", "text/plain");
        $response->end("$path Hello World\n");
    }

}