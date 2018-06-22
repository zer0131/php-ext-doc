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
final class Dispatcher
{
    /**
     * @var $_router
     *
     * @access protected
     */
    protected $_router;

    /**
     * @var $_view
     *
     * @access protected
     */
    protected $_view;

    /**
     * @var $_request
     *
     * @access protected
     */
    protected $_request;

    /**
     * @var $_plugins
     *
     * @access protected
     */
    protected $_plugins;

    /**
     * @var $_instance
     *
     * @access protected
     */
    protected static  $_instance;

    /**
     * @var bool $_auto_render
     *
     * @access protected
     */
    protected $_auto_render    =    true;

    /**
     * @var bool $_return_response
     *
     * @access protected
     */
    protected $_return_response    =    false;

    /**
     * @var bool $_instantly_flush
     *
     * @access protected
     */
    protected $_instantly_flush    =    false;

    /**
     * @var $_default_module
     *
     * @access protected
     */
    protected $_default_module;

    /**
     * @var $_default_controller
     *
     * @access protected
     */
    protected $_default_controller;

    /**
     * @var $_default_action
     *
     * @access protected
     */
    protected $_default_action;

    /**
     *
     *
     * @example
     */
    private function __construct()
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

    /**
     *
     *
     * @example
     * @return Dispatcher
     */
    public function enableView()
    {

    }

    /**
     *
     *
     * @example
     * @return bool
     */
    public function disableView()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $templates_dir
     * @param array $options
     * @return View_Interface
     */
    public function initView($templates_dir, Array $options)
    {

    }

    /**
     *
     *
     * @example
     * @param  View_Interface $view
     * @return Dispatcher
     */
    public function setView(View_Interface $view)
    {

    }

    /**
     *
     *
     * @example
     * @param  Request_Abstract $request
     * @return Dispatcher
     */
    public function setRequest(Request_Abstract $request)
    {

    }

    /**
     *
     *
     * @example
     * @return Application
     */
    public function getApplication()
    {

    }

    /**
     *
     *
     * @example
     * @return Router
     */
    public function getRouter()
    {

    }

    /**
     *
     *
     * @example
     * @return Request_Abstract
     */
    public function getRequest()
    {

    }

    /**
     *
     *
     * @example
     * @param  callable $callback
     * @param  int $error_types
     * @return Dispatcher
     */
    public function setErrorHandler($callback, $error_types)
    {

    }

    /**
     *
     *
     * @example
     * @param  string $module
     * @return Dispatcher
     */
    public function setDefaultModule($module)
    {

    }

    /**
     *
     *
     * @example
     * @param  string $controller
     * @return Dispatcher
     */
    public function setDefaultController($controller)
    {

    }

    /**
     *
     *
     * @example
     * @param  string $action
     * @return Dispatcher
     */
    public function setDefaultAction($action)
    {

    }

    /**
     *
     *
     * @example
     * @param  bool $flag
     * @return Dispatcher
     */
    public function returnResponse($flag)
    {

    }

    /**
     *
     *
     * @example
     * @param  bool $flag
     * @return Dispatcher
     */
    public function autoRender($flag)
    {

    }

    /**
     *
     *
     * @example
     * @param  bool $flag
     * @return Dispatcher
     */
    public function flushInstantly($flag)
    {

    }

    /**
     *
     *
     * @example
     * @return Dispatcher
     */
    public static  function getInstance()
    {

    }

    /**
     *
     *
     * @example
     * @param  Response_Abstract $request
     * @return Response_Abstract
     */
    public function dispatch($request)
    {

    }

    /**
     *
     *
     * @example
     * @param  bool $flag
     * @return Dispatcher
     */
    public function throwException($flag)
    {

    }

    /**
     *
     *
     * @example
     * @param  bool $flag
     * @return Dispatcher
     */
    public function catchException($flag)
    {

    }

    /**
     *
     *
     * @example
     * @param  Plugin_Abstract $plugin
     * @return Dispatcher
     */
    public function registerPlugin($plugin)
    {

    }

}

