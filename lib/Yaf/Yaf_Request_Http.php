<?php
/**
* Yaf自动补全类(基于3.0.5版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
class Yaf_Request_Http extends Yaf_Request_Abstract
{
    /**
     * @var $module
     * 
     * @access public
     */
    public $module;

    /**
     * @var $controller
     * 
     * @access public
     */
    public $controller;

    /**
     * @var $action
     * 
     * @access public
     */
    public $action;

    /**
     * @var $method
     * 
     * @access public
     */
    public $method;

    /**
     * @var $params
     * 
     * @access protected
     */
    protected $params;

    /**
     * @var $language
     * 
     * @access protected
     */
    protected $language;

    /**
     * @var $_exception
     * 
     * @access protected
     */
    protected $_exception;

    /**
     * @var string $_base_uri 
     * 
     * @access protected
     */
    protected $_base_uri    =    '';

    /**
     * @var string $uri 
     * 
     * @access protected
     */
    protected $uri    =    '';

    /**
     * @var bool $dispatched 
     * 
     * @access protected
     */
    protected $dispatched    =    false;

    /**
     * @var bool $routed 
     * 
     * @access protected
     */
    protected $routed    =    false;

    /**
     * 
     *
     * @example 
     * @return mixed
     */
    public function getQuery()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function getRequest()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return mixed
     */
    public function getPost()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return mixed
     */
    public function getCookie()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function getFiles()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return mixed
     */
    public function get()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return bool
     */
    public function isXmlHttpRequest()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function __construct()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    private function __clone()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function isGet()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function isPost()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function isDelete()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function isPatch()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function isPut()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function isHead()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function isOptions()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function isCli()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $name 
     * @param  mixed $default 
     */
    public function getServer($name, $default)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $name 
     * @param  mixed $default 
     */
    public function getEnv($name, $default)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $name 
     * @param  mixed $value 
     */
    public function setParam($name, $value)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $name 
     * @param  mixed $default 
     */
    public function getParam($name, $default)
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function getParams()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function getException()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function getModuleName()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function getControllerName()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function getActionName()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $module 
     */
    public function setModuleName($module)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $controller 
     */
    public function setControllerName($controller)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $action 
     */
    public function setActionName($action)
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function getMethod()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function getLanguage()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $uri 
     */
    public function setBaseUri($uri)
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function getBaseUri()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function getRequestUri()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $uri 
     */
    public function setRequestUri($uri)
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function isDispatched()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function setDispatched()
    {
    
    }

    /**
     * 
     *
     * @example 
     */
    public function isRouted()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $flag 
     */
    public function setRouted($flag)
    {
    
    }

}

