<?php
/**
* Swoole自动补全类(基于2.2.0版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
namespace Swoole;
class Client
{
    /**     
    *
    */
    const MSG_OOB    =    1;

    /**     
    *
    */
    const MSG_PEEK    =    2;

    /**     
    *
    */
    const MSG_DONTWAIT    =    64;

    /**     
    *
    */
    const MSG_WAITALL    =    256;

    /**     
    *
    */
    const SHUT_RDWR    =    2;

    /**     
    *
    */
    const SHUT_RD    =    0;

    /**     
    *
    */
    const SHUT_WR    =    1;

    /**
     * @var int $errCode 
     * 
     * @access public
     */
    public $errCode    =    0;

    /**
     * @var int $sock 
     * 
     * @access public
     */
    public $sock    =    0;

    /**
     * @var bool $reuse 
     * 
     * @access public
     */
    public $reuse    =    false;

    /**
     * @var int $reuseCount 
     * 
     * @access public
     */
    public $reuseCount    =    0;

    /**
     * @var int $type 
     * 
     * @access public
     */
    public $type    =    0;

    /**
     * @var unknown $id 
     * 
     * @access public
     */
    public $id;

    /**
     * @var unknown $setting 
     * 
     * @access public
     */
    public $setting;

    /**
     * @var unknown $onConnect 
     * 
     * @access public
     */
    public $onConnect;

    /**
     * @var unknown $onError 
     * 
     * @access public
     */
    public $onError;

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
     * 
     *
     * @example 
     * @param  mixed $type 
     * @param  mixed $async 
     * @return 
     */
    public function __construct($type, $async)
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
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $timeout 
     * @param  mixed $sock_flag 
     * @return 
     */
    public function connect($host, $port, $timeout, $sock_flag)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $size 
     * @param  mixed $flag 
     * @return 
     */
    public function recv($size, $flag)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @param  mixed $flag 
     * @return 
     */
    public function send($data, $flag)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $dst_socket 
     * @return 
     */
    public function pipe($dst_socket)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $filename 
     * @param  mixed $offset 
     * @param  mixed $length 
     * @return 
     */
    public function sendfile($filename, $offset, $length)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $ip 
     * @param  mixed $port 
     * @param  mixed $data 
     * @return 
     */
    public function sendto($ip, $port, $data)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sleep()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function wakeup()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pause()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function resume()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $how 
     * @return 
     */
    public function shutdown($how)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function isConnected()
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
    public function getpeername()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $force 
     * @return 
     */
    public function close($force)
    {
    
    }

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

}

