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
     * @var unknown $_router 
     * 
     * @access protected
     */
    protected $_router;

    /**
     * @var unknown $_view 
     * 
     * @access protected
     */
    protected $_view;

    /**
     * @var unknown $_request 
     * 
     * @access protected
     */
    protected $_request;

    /**
     * @var unknown $_plugins 
     * 
     * @access protected
     */
    protected $_plugins;

    /**
     * @var unknown $_instance 
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
     * @var unknown $_default_module 
     * 
     * @access protected
     */
    protected $_default_module;

    /**
     * @var unknown $_default_controller 
     * 
     * @access protected
     */
    protected $_default_controller;

    /**
     * @var unknown $_default_action 
     * 
     * @access protected
     */
    protected $_default_action;

    /**
     * 
     *
     * @example 
     * @return 
     */
    private function __construct()
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

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function enableView()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
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
     * @return 
     */
    public function initView($templates_dir, Array $options)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $view 
     * @return 
     */
    public function setView($view)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $request 
     * @return 
     */
    public function setRequest($request)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getApplication()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getRouter()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getRequest()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $callback 
     * @param  mixed $error_types 
     * @return 
     */
    public function setErrorHandler($callback, $error_types)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $module 
     * @return 
     */
    public function setDefaultModule($module)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $controller 
     * @return 
     */
    public function setDefaultController($controller)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $action 
     * @return 
     */
    public function setDefaultAction($action)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $flag 
     * @return 
     */
    public function returnResponse($flag)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $flag 
     * @return 
     */
    public function autoRender($flag)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $flag 
     * @return 
     */
    public function flushInstantly($flag)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function getInstance()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $request 
     * @return 
     */
    public function dispatch($request)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $flag 
     * @return 
     */
    public function throwException($flag)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $flag 
     * @return 
     */
    public function catchException($flag)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $plugin 
     * @return 
     */
    public function registerPlugin($plugin)
    {
    
    }

}

