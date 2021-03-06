<?php
/**
* Swoole自动补全类(基于2.2.0版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
namespace Swoole\MySQL;
class Exception extends \Exception implements \Throwable
{
    /**
     * @var string $message 
     * 
     * @access protected
     */
    protected $message    =    '';

    /**
     * @var int $code 
     * 
     * @access protected
     */
    protected $code    =    0;

    /**
     * @var unknown $file 
     * 
     * @access protected
     */
    protected $file;

    /**
     * @var unknown $line 
     * 
     * @access protected
     */
    protected $line;

    /**
     * 
     *
     * @example 
     * @return 
     */
    private final  function __clone()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $message 
     * @param  mixed $code 
     * @param  mixed $previous 
     * @return 
     */
    public function __construct($message, $code, $previous)
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
    public final  function getMessage()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public final  function getCode()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public final  function getFile()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public final  function getLine()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public final  function getTrace()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public final  function getPrevious()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public final  function getTraceAsString()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __toString()
    {
    
    }

}

