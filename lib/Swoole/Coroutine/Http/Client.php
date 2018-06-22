<?php
/**
* Swoole自动补全类(基于2.2.0版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
namespace Swoole\Coroutine\Http;
class Client
{
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
     * @var int $statusCode 
     * 
     * @access public
     */
    public $statusCode    =    0;

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
     * @var unknown $requestMethod 
     * 
     * @access public
     */
    public $requestMethod;

    /**
     * @var unknown $requestHeaders 
     * 
     * @access public
     */
    public $requestHeaders;

    /**
     * @var unknown $requestBody 
     * 
     * @access public
     */
    public $requestBody;

    /**
     * @var unknown $uploadFiles 
     * 
     * @access public
     */
    public $uploadFiles;

    /**
     * @var unknown $headers 
     * 
     * @access public
     */
    public $headers;

    /**
     * @var unknown $cookies 
     * 
     * @access public
     */
    public $cookies;

    /**
     * @var unknown $body 
     * 
     * @access public
     */
    public $body;

    /**
     * 
     *
     * @example 
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $ssl 
     * @return 
     */
    public function __construct($host, $port, $ssl)
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
     * @param  mixed $method 
     * @return 
     */
    public function setMethod($method)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param array $headers 
     * @return 
     */
    public function setHeaders(Array $headers)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param array $cookies 
     * @return 
     */
    public function setCookies(Array $cookies)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @return 
     */
    public function setData($data)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @return 
     */
    public function execute($path)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @return 
     */
    public function get($path)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @param  mixed $data 
     * @return 
     */
    public function post($path, $data)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @param  mixed $file 
     * @param  mixed $offset 
     * @return 
     */
    public function download($path, $file, $offset)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @return 
     */
    public function upgrade($path)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @param  mixed $name 
     * @param  mixed $type 
     * @param  mixed $filename 
     * @param  mixed $offset 
     * @param  mixed $length 
     * @return 
     */
    public function addFile($path, $name, $type, $filename, $offset, $length)
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
    public function close()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $defer 
     * @return 
     */
    public function setDefer($defer)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getDefer()
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
     * @param  mixed $opcode 
     * @param  mixed $finish 
     * @return 
     */
    public function push($data, $opcode, $finish)
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

