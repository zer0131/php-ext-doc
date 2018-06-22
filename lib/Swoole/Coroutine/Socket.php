<?php
/**
* Swoole自动补全类(基于2.2.0版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
namespace Swoole\Coroutine;
final class Socket
{
    /**
     * @var int $errCode 
     * 
     * @access public
     */
    public $errCode    =    0;

    /**
     * 
     *
     * @example 
     * @param  mixed $domain 
     * @param  mixed $type 
     * @param  mixed $protocol 
     * @return 
     */
    public function __construct($domain, $type, $protocol)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $address 
     * @param  mixed $port 
     * @return 
     */
    public function bind($address, $port)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $backlog 
     * @return 
     */
    public function listen($backlog)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $timeout 
     * @return 
     */
    public function accept($timeout)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $timeout 
     * @return 
     */
    public function connect($host, $port, $timeout)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $timeout 
     * @return 
     */
    public function recv($timeout)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @param  mixed $timeout 
     * @return 
     */
    public function send($data, $timeout)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $peername 
     * @param  mixed $timeout 
     * @return 
     */
    public function recvfrom($peername, $timeout)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $addr 
     * @param  mixed $port 
     * @param  mixed $data 
     * @return 
     */
    public function sendto($addr, $port, $data)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getpeername()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getsockname()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function close()
    {
    
    }

}

