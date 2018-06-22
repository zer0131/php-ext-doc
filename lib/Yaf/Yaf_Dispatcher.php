<?php
/**
* Yaf自动补全类(基于3.0.5版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
final class Yaf_Dispatcher
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
     * @return Yaf_Dispatcher
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
     * @return Yaf_View_Interface
     */
    public function initView($templates_dir, Array $options)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  Yaf_View_Interface $view
     * @return Yaf_Dispatcher
     */
    public function setView(Yaf_View_Interface $view)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  Yaf_Request_Abstract $request
     * @return Yaf_Dispatcher
     */
    public function setRequest(Yaf_Request_Abstract $request)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return Yaf_Application
     */
    public function getApplication()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return Yaf_Router
     */
    public function getRouter()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return Yaf_Request_Abstract
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
     * @return Yaf_Dispatcher
     */
    public function setErrorHandler($callback, $error_types)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  string $module
     * @return Yaf_Dispatcher
     */
    public function setDefaultModule($module)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  string $controller
     * @return Yaf_Dispatcher
     */
    public function setDefaultController($controller)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  string $action
     * @return Yaf_Dispatcher
     */
    public function setDefaultAction($action)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  bool $flag
     * @return Yaf_Dispatcher
     */
    public function returnResponse($flag)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  bool $flag
     * @return Yaf_Dispatcher
     */
    public function autoRender($flag)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  bool $flag
     * @return Yaf_Dispatcher
     */
    public function flushInstantly($flag)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return Yaf_Dispatcher
     */
    public static  function getInstance()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  Yaf_Response_Abstract $request
     * @return Yaf_Response_Abstract
     */
    public function dispatch($request)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  bool $flag
     * @return Yaf_Dispatcher
     */
    public function throwException($flag)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  bool $flag
     * @return Yaf_Dispatcher
     */
    public function catchException($flag)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  Yaf_Plugin_Abstract $plugin
     * @return Yaf_Dispatcher
     */
    public function registerPlugin($plugin)
    {
    
    }

}

