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
     * @var $config
     *
     * @access protected
     */
    protected $config;

    /**
     * @var $dispatcher
     *
     * @access protected
     */
    protected $dispatcher;

    /**
     * @var $_app
     *
     * @access protected
     */
    protected static  $_app;

    /**
     * @var $_modules
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
     * @param  string $environ
     */
    public function __construct($config, string $environ = '')
    {

    }

    /**
     *
     *
     * @example
     * @return void
     */
    public function run()
    {

    }

    /**
     *
     *
     * @example
     * @param  callable $entry
     * @param  mixed $param
     * @return void
     */
    public function execute(callable $entry, $param)
    {

    }

    /**
     *
     *
     * @example
     * @return void
     */
    public static  function app()
    {

    }

    /**
     *
     *
     * @example
     * @return string
     */
    public function environ()
    {

    }

    /**
     *
     *
     * @example
     * @param  Bootstrap_Abstract $bootstrap
     * @return void
     */
    public function bootstrap(Bootstrap_Abstract $bootstrap = null)
    {

    }

    /**
     *
     *
     * @example
     * @return Config_Abstract
     */
    public function getConfig()
    {

    }

    /**
     *
     *
     * @example
     * @return array
     */
    public function getModules()
    {

    }

    /**
     *
     *
     * @example
     * @return Dispatcher
     */
    public function getDispatcher()
    {

    }

    /**
     *
     *
     * @example
     * @param  string $directory
     * @return Application
     */
    public function setAppDirectory($directory)
    {

    }

    /**
     *
     *
     * @example
     * @return Application
     */
    public function getAppDirectory()
    {

    }

    /**
     *
     *
     * @example
     * @return int
     */
    public function getLastErrorNo()
    {

    }

    /**
     *
     *
     * @example
     * @return string
     */
    public function getLastErrorMsg()
    {

    }

    /**
     *
     *
     * @example
     * @return Application
     */
    public function clearLastError()
    {

    }

    /**
     *
     *
     * @example
     */
    public function __destruct()
    {

    }

    /**
     *
     *
     * @example
     * @return void
     */
    private function __clone()
    {

    }

    /**
     *
     *
     * @example
     * @return void
     */
    private function __sleep()
    {

    }

    /**
     *
     *
     * @example
     * @return void
     */
    private function __wakeup()
    {

    }

}

