<?php
/**
* Yaf自动补全类(基于3.0.5版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
namespace Yaf;
final class Application
{
    /**
     * @var unknown $config 
     * 
     * @access protected
     */
    protected $config;

    /**
     * @var unknown $dispatcher 
     * 
     * @access protected
     */
    protected $dispatcher;

    /**
     * @var unknown $_app 
     * 
     * @access protected
     */
    protected static  $_app;

    /**
     * @var unknown $_modules 
     * 
     * @access protected
     */
    protected $_modules;

    /**
     * @var bool $_running 
     * 
     * @access protected
     */
    protected $_running    =    false;

    /**
     * @var string $_environ 
     * 
     * @access protected
     */
    protected $_environ    =    'product';

    /**
     * @var int $_err_no 
     * 
     * @access protected
     */
    protected $_err_no    =    0;

    /**
     * @var string $_err_msg 
     * 
     * @access protected
     */
    protected $_err_msg    =    '';

    /**
     * 
     *
     * @example 
     * @param  mixed $config 
     * @param  mixed $environ 
     * @return 
     */
    public function __construct($config, $environ)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function run()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $entry 
     * @param  mixed $... 
     * @return 
     */
    public function execute($entry, $...)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function app()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function environ()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $bootstrap 
     * @return 
     */
    public function bootstrap($bootstrap)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getConfig()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getModules()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getDispatcher()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $directory 
     * @return 
     */
    public function setAppDirectory($directory)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getAppDirectory()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getLastErrorNo()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getLastErrorMsg()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function clearLastError()
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
    private function __clone()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    private function __sleep()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    private function __wakeup()
    {
    
    }

}

