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
     * @var bool $connected 
     * 
     * @access public
     */
    public $connected    =    false;

    /**
     * 
     *
     * @example 
     * @param  mixed $type 
     * @return 
     */
    public function __construct($type)
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
     * @param  mixed $length 
     * @return 
     */
    public function peek($length)
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
     * @return 
     */
    public function close()
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

}

