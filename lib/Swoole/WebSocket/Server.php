<?php
/**
* Swoole自动补全类(基于2.2.0版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
namespace Swoole\WebSocket;
class Server extends \Swoole\Http\Server
{
    /**
     * @var unknown $onConnect 
     * 
     * @access public
     */
    public $onConnect;

    /**
     * @var unknown $onReceive 
     * 
     * @access public
     */
    public $onReceive;

    /**
     * @var unknown $onClose 
     * 
     * @access public
     */
    public $onClose;

    /**
     * @var unknown $onPacket 
     * 
     * @access public
     */
    public $onPacket;

    /**
     * @var unknown $onBufferFull 
     * 
     * @access public
     */
    public $onBufferFull;

    /**
     * @var unknown $onBufferEmpty 
     * 
     * @access public
     */
    public $onBufferEmpty;

    /**
     * @var unknown $onStart 
     * 
     * @access public
     */
    public $onStart;

    /**
     * @var unknown $onShutdown 
     * 
     * @access public
     */
    public $onShutdown;

    /**
     * @var unknown $onWorkerStart 
     * 
     * @access public
     */
    public $onWorkerStart;

    /**
     * @var unknown $onWorkerStop 
     * 
     * @access public
     */
    public $onWorkerStop;

    /**
     * @var unknown $onWorkerExit 
     * 
     * @access public
     */
    public $onWorkerExit;

    /**
     * @var unknown $onWorkerError 
     * 
     * @access public
     */
    public $onWorkerError;

    /**
     * @var unknown $onTask 
     * 
     * @access public
     */
    public $onTask;

    /**
     * @var unknown $onFinish 
     * 
     * @access public
     */
    public $onFinish;

    /**
     * @var unknown $onManagerStart 
     * 
     * @access public
     */
    public $onManagerStart;

    /**
     * @var unknown $onManagerStop 
     * 
     * @access public
     */
    public $onManagerStop;

    /**
     * @var unknown $onPipeMessage 
     * 
     * @access public
     */
    public $onPipeMessage;

    /**
     * @var unknown $connections 
     * 
     * @access public
     */
    public $connections;

    /**
     * @var unknown $host 
     * 
     * @access public
     */
    public $host;

    /**
     * @var int $port 
     * 
     * @access public
     */
    public $port    =    0;

    /**
     * @var int $type 
     * 
     * @access public
     */
    public $type    =    0;

    /**
     * @var int $mode 
     * 
     * @access public
     */
    public $mode    =    0;

    /**
     * @var unknown $ports 
     * 
     * @access public
     */
    public $ports;

    /**
     * @var int $master_pid 
     * 
     * @access public
     */
    public $master_pid    =    0;

    /**
     * @var int $manager_pid 
     * 
     * @access public
     */
    public $manager_pid    =    0;

    /**
     * @var int $worker_id 
     * 
     * @access public
     */
    public $worker_id    =    -1;

    /**
     * @var bool $taskworker 
     * 
     * @access public
     */
    public $taskworker    =    false;

    /**
     * @var int $worker_pid 
     * 
     * @access public
     */
    public $worker_pid    =    0;

    /**
     * @var unknown $onRequest 
     * 
     * @access public
     */
    public $onRequest;

    /**
     * @var unknown $onHandshake 
     * 
     * @access public
     */
    public $onHandshake;

    /**
     * @var unknown $setting 
     * 
     * @access public
     */
    public $setting;

    /**
     * 
     *
     * @example 
     * @param  mixed $event_name 
     * @param  mixed $callback 
     * @return 
     */
    public function on($event_name, $callback)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @param  mixed $data 
     * @param  mixed $opcode 
     * @param  mixed $finish 
     * @return 
     */
    public function push($fd, $data, $opcode, $finish)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @return 
     */
    public function exist($fd)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @return 
     */
    public function isEstablished($fd)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @param  mixed $opcode 
     * @param  mixed $finish 
     * @param  mixed $mask 
     * @return 
     */
    public static  function pack($data, $opcode, $finish, $mask)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @return 
     */
    public static  function unpack($data)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function start()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __sleep()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __wakeup()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $mode 
     * @param  mixed $sock_type 
     * @return 
     */
    public function __construct($host, $port, $mode, $sock_type)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __destruct()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $sock_type 
     * @return 
     */
    public function listen($host, $port, $sock_type)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $sock_type 
     * @return 
     */
    public function addlistener($host, $port, $sock_type)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param array $settings 
     * @return 
     */
    public function set(Array $settings)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @param  mixed $send_data 
     * @param  mixed $reactor_id 
     * @return 
     */
    public function send($fd, $send_data, $reactor_id)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $ip 
     * @param  mixed $port 
     * @param  mixed $send_data 
     * @param  mixed $server_socket 
     * @return 
     */
    public function sendto($ip, $port, $send_data, $server_socket)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $conn_fd 
     * @param  mixed $send_data 
     * @return 
     */
    public function sendwait($conn_fd, $send_data)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @param  mixed $is_protected 
     * @return 
     */
    public function protect($fd, $is_protected)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $conn_fd 
     * @param  mixed $filename 
     * @param  mixed $offset 
     * @param  mixed $length 
     * @return 
     */
    public function sendfile($conn_fd, $filename, $offset, $length)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @param  mixed $reset 
     * @return 
     */
    public function close($fd, $reset)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @return 
     */
    public function confirm($fd)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @return 
     */
    public function pause($fd)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @return 
     */
    public function resume($fd)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @param  mixed $worker_id 
     * @param  mixed $finish_callback 
     * @return 
     */
    public function task($data, $worker_id, $finish_callback)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @param  mixed $timeout 
     * @param  mixed $worker_id 
     * @return 
     */
    public function taskwait($data, $timeout, $worker_id)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param array $tasks 
     * @param  mixed $timeout 
     * @return 
     */
    public function taskWaitMulti(Array $tasks, $timeout)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param array $tasks 
     * @param  mixed $timeout 
     * @return 
     */
    public function taskCo(Array $tasks, $timeout)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @return 
     */
    public function finish($data)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function reload()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function shutdown()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $worker_id 
     * @return 
     */
    public function stop($worker_id)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getLastError()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $reactor_id 
     * @return 
     */
    public function heartbeat($reactor_id)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @param  mixed $reactor_id 
     * @return 
     */
    public function connection_info($fd, $reactor_id)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $start_fd 
     * @param  mixed $find_count 
     * @return 
     */
    public function connection_list($start_fd, $find_count)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @param  mixed $reactor_id 
     * @return 
     */
    public function getClientInfo($fd, $reactor_id)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $start_fd 
     * @param  mixed $find_count 
     * @return 
     */
    public function getClientList($start_fd, $find_count)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $ms 
     * @param  mixed $callback 
     * @param  mixed $param 
     * @return 
     */
    public function after($ms, $callback, $param)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $ms 
     * @param  mixed $callback 
     * @return 
     */
    public function tick($ms, $callback)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $timer_id 
     * @return 
     */
    public function clearTimer($timer_id)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $callback 
     * @return 
     */
    public function defer($callback)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $message 
     * @param  mixed $dst_worker_id 
     * @return 
     */
    public function sendMessage($message, $dst_worker_id)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param swoole_process $process 
     * @return 
     */
    public function addProcess(swoole_process $process)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function stats()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @param  mixed $uid 
     * @return 
     */
    public function bind($fd, $uid)
    {
    
    }

}

