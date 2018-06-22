<?php
/**
* Yaf自动补全类(基于3.0.5版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
namespace Yaf\Request;
final class Simple extends \Yaf\Request_Abstract
{
    /**     
    *
    */
    const SCHEME_HTTP    =    'http';

    /**     
    *
    */
    const SCHEME_HTTPS    =    'https';

    /**
     * @var unknown $module 
     * 
     * @access public
     */
    public $module;

    /**
     * @var unknown $controller 
     * 
     * @access public
     */
    public $controller;

    /**
     * @var unknown $action 
     * 
     * @access public
     */
    public $action;

    /**
     * @var unknown $method 
     * 
     * @access public
     */
    public $method;

    /**
     * @var unknown $params 
     * 
     * @access protected
     */
    protected $params;

    /**
     * @var unknown $language 
     * 
     * @access protected
     */
    protected $language;

    /**
     * @var unknown $_exception 
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
    private function __clone()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getQuery()
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
     * @return 
     */
    public function getPost()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getCookie()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getFiles()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function get()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function isXmlHttpRequest()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function isGet()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function isPost()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function isDelete()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function isPatch()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function isPut()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function isHead()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function isOptions()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
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
     * @return 
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
     * @return 
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
     * @return 
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
     * @return 
     */
    public function getParam($name, $default)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getParams()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getException()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getModuleName()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getControllerName()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getActionName()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $module 
     * @return 
     */
    public function setModuleName($module)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $controller 
     * @return 
     */
    public function setControllerName($controller)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $action 
     * @return 
     */
    public function setActionName($action)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getMethod()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getLanguage()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $uri 
     * @return 
     */
    public function setBaseUri($uri)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getBaseUri()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getRequestUri()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $uri 
     * @return 
     */
    public function setRequestUri($uri)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function isDispatched()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function setDispatched()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function isRouted()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $flag 
     * @return 
     */
    public function setRouted($flag)
    {
    
    }

}

