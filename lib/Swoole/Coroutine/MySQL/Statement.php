<?php
/**
* Swoole自动补全类(基于2.2.0版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
namespace Swoole\Coroutine\MySQL;
class Statement
{
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
     * @param  mixed $params 
     * @param  mixed $timeout 
     * @return 
     */
    public function execute($params, $timeout)
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

