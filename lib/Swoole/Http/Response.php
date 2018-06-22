<?php
/**
* Swoole自动补全类(基于2.2.0版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
namespace Swoole\Http;
class Response
{
    /**
     * @var int $fd 
     * 
     * @access public
     */
    public $fd    =    0;

    /**
     * @var unknown $header 
     * 
     * @access public
     */
    public $header;

    /**
     * @var unknown $cookie 
     * 
     * @access public
     */
    public $cookie;

    /**
     * @var unknown $trailer 
     * 
     * @access public
     */
    public $trailer;

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function initHeader()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $name 
     * @param  mixed $value 
     * @param  mixed $expires 
     * @param  mixed $path 
     * @param  mixed $domain 
     * @param  mixed $secure 
     * @param  mixed $httponly 
     * @return 
     */
    public function cookie($name, $value, $expires, $path, $domain, $secure, $httponly)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $name 
     * @param  mixed $value 
     * @param  mixed $expires 
     * @param  mixed $path 
     * @param  mixed $domain 
     * @param  mixed $secure 
     * @param  mixed $httponly 
     * @return 
     */
    public function rawcookie($name, $value, $expires, $path, $domain, $secure, $httponly)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $http_code 
     * @return 
     */
    public function status($http_code)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $compress_level 
     * @return 
     */
    public function gzip($compress_level)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $key 
     * @param  mixed $value 
     * @param  mixed $ucwords 
     * @return 
     */
    public function header($key, $value, $ucwords)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $content 
     * @return 
     */
    public function write($content)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $content 
     * @return 
     */
    public function end($content)
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
     * @param  mixed $location 
     * @param  mixed $http_code 
     * @return 
     */
    public function redirect($location, $http_code)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function detach()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $fd 
     * @return 
     */
    public static  function create($fd)
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
     * @return 
     */
    public function __destruct()
    {
    
    }

}

