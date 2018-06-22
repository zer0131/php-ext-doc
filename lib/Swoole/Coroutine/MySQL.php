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
class MySQL
{
    /**
     * @var string $serverInfo 
     * 
     * @access private
     */
    private $serverInfo    =    '';

    /**
     * @var int $sock 
     * 
     * @access public
     */
    public $sock    =    0;

    /**
     * @var bool $connected 
     * 
     * @access public
     */
    public $connected    =    false;

    /**
     * @var string $connect_error 
     * 
     * @access public
     */
    public $connect_error    =    '';

    /**
     * @var int $connect_errno 
     * 
     * @access public
     */
    public $connect_errno    =    0;

    /**
     * @var int $affected_rows 
     * 
     * @access public
     */
    public $affected_rows    =    0;

    /**
     * @var int $insert_id 
     * 
     * @access public
     */
    public $insert_id    =    0;

    /**
     * @var string $error 
     * 
     * @access public
     */
    public $error    =    '';

    /**
     * @var int $errno 
     * 
     * @access public
     */
    public $errno    =    0;

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __construct()
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
     * @param array $server_config 
     * @return 
     */
    public function connect(Array $server_config)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $sql 
     * @param  mixed $timeout 
     * @return 
     */
    public function query($sql, $timeout)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function recv()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function begin()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function commit()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rollback()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $query 
     * @return 
     */
    public function prepare($query)
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

