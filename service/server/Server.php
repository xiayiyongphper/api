<?php
/**
 * Created by Jason.
 * Author: Jason Y. Wang
 * Date: 2016/3/25
 * Time: 11:47
 */

namespace service\server;

use service\message\Message;

class Server extends Application
{

    public $host;
    public $port;
    public $serverName;
    public static $fd;
    /**
     * swoole_server配置
     * @var array
     */
    public $serverConfig = array();

    public function onConnect($server, $fd)
    {
        echo "Client:Connect. client id: " . $fd.PHP_EOL;
    }

    public function onReceive(\swoole_server $server, $fd, $from_id, $data)
    {
        echo 'onReceive: '.$data.PHP_EOL;
        $request = $this->getRequest()->setRawBody($data)->setFd($fd)->setServer($server);
        $server->task($request);
    }

    public function onClose($server, $fd)
    {
        echo "Client: Close.".PHP_EOL;
    }

    public function onTask(\swoole_server $server, $task_id, $from_id, $taskData)
    {
        /** @var \ProtocolBuffers\Message $data */
        /** @var \service\message\common\Header $header */
        /** @var \service\server\Request $taskData */
        list($header, $data) = $this->handleRequest($taskData);
        $server->send($taskData->getFd(), Message::pack($header, $data));
        $server->finish('-CALL');
    }

    public function onFinish(\swoole_server $server, $task_id, $data)
    {
        echo "onTask Task#$task_id finished, data_len=" . strlen($data).PHP_EOL;
    }

    public function onStart(\swoole_server $server)
    {
        swoole_set_process_name('RPC '.$this->serverName.' Server:Master-' . $server->master_pid);
    }

    public function onWorkerStart(\swoole_server $server, $worker_id)
    {
        if ($server->taskworker) {
            swoole_set_process_name('RPC '.$this->serverName.':Task Worker-' . $worker_id);
        } else {
            swoole_set_process_name('RPC '.$this->serverName.':Worker-' . $worker_id);
        }
    }

    public function onWorkerStop(\swoole_server $server, $worker_id)
    {
        echo "onWorkerStop Worker stop:{$worker_id}";
    }

    /**
     * Function: getRequest
     * Author: Jason Y. Wang
     *
     * @return \yii\console\Request|\yii\web\Request|\service\server\Request
     */
    public function getRequest()
    {
        return parent::getRequest();
    }

    public function run()
    {
//        register_shutdown_function([$this, 'registerShutdownFunction']);
        $server = new \swoole_server($this->host, $this->port);
//        $server->addlistener($this->_localHost, $this->_localPort, SWOOLE_SOCK_TCP);
//        $this->_reportProcess = new \swoole_process([$this,'onReportProcess']);
//        $server->addProcess($this->_reportProcess);
        $server->set($this->serverConfig);
        $server->on('connect', [$this, 'onConnect']);
        $server->on('receive', [$this, 'onReceive']);
        $server->on('close', [$this, 'onClose']);
        $server->on('task', [$this, 'onTask']);
        $server->on('finish', [$this, 'onFinish']);
        $server->on('start', [$this, 'onStart']);
        $server->on('workerstart', [$this, 'onWorkerStart']);
        $server->on('workerstop', [$this, 'onWorkerStop']);
//        $server->on('shutdown', [$this, 'onShutdown']);
//        $server->on('timer', [$this, 'onTimer']);
//        $server->on('packet', [$this, 'onPacket']);
//        $server->on('PipeMessage', [$this, 'onPipeMessage']);
//        $server->on('workererror', [$this, 'onWorkerError']);
//        $server->on('ManagerStart', [$this, 'onManagerStart']);
//        $server->on('ManagerStop', [$this, 'onManagerStop']);
        $server->start();
    }

}