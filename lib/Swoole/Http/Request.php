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
class Request
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
     * @var unknown $server 
     * 
     * @access public
     */
    public $server;

    /**
     * @var unknown $request 
     * 
     * @access public
     */
    public $request;

    /**
     * @var unknown $cookie 
     * 
     * @access public
     */
    public $cookie;

    /**
     * @var unknown $get 
     * 
     * @access public
     */
    public $get;

    /**
     * @var unknown $files 
     * 
     * @access public
     */
    public $files;

    /**
     * @var unknown $post 
     * 
     * @access public
     */
    public $post;

    /**
     * @var unknown $tmpfiles 
     * 
     * @access public
     */
    public $tmpfiles;

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rawcontent()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getData()
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

