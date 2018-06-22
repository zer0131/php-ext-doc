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
abstract class Action_Abstract extends \Yaf\Controller_Abstract
{
    /**
     * @var $actions
     *
     * @access public
     */
    public $actions;

    /**
     * @var $_module
     *
     * @access protected
     */
    protected $_module;

    /**
     * @var $_name
     *
     * @access protected
     */
    protected $_name;

    /**
     * @var $_request
     *
     * @access protected
     */
    protected $_request;

    /**
     * @var $_response
     *
     * @access protected
     */
    protected $_response;

    /**
     * @var $_invoke_args
     *
     * @access protected
     */
    protected $_invoke_args;

    /**
     * @var $_view
     *
     * @access protected
     */
    protected $_view;

    /**
     * @var $_controller
     *
     * @access protected
     */
    protected $_controller;

    /**
     *
     *
     * @example
     * @return mixed
     */
    public abstract  function execute();

    /**
     *
     *
     * @example
     * @return \Yaf\Controller_Abstract
     */
    public function getController()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $tpl
     * @param array $parameters
     * @return string
     */
    protected function render($tpl, array $parameters)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $tpl
     * @param array $parameters
     * @return bool
     */
    protected function display($tpl, Array $parameters)
    {

    }

    /**
     *
     *
     * @example
     * @return \Yaf\Request_Abstract
     */
    public function getRequest()
    {

    }

    /**
     *
     *
     * @example
     * @return \Yaf\Response_Abstract
     */
    public function getResponse()
    {

    }

    /**
     *
     *
     * @example
     * @return string
     */
    public function getModuleName()
    {

    }

    /**
     *
     *
     * @example
     * @return \Yaf\View_Interface
     */
    public function getView()
    {

    }

    /**
     *
     *
     * @example
     * @param array $options
     * @return void
     */
    public function initView(array $options)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $view_directory
     * @return void
     */
    public function setViewpath($view_directory)
    {

    }

    /**
     *
     *
     * @example
     * @return void
     */
    public function getViewpath()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $module
     * @param  mixed $controller
     * @param  mixed $action
     * @param array $parameters
     * @return void
     */
    public function forward($module, $controller, $action, array $parameters)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $url
     * @return void
     */
    public function redirect($url)
    {

    }

    /**
     *
     *
     * @example
     * @return void
     */
    public function getInvokeArgs()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $name
     * @return void
     */
    public function getInvokeArg($name)
    {

    }

    /**
     *
     *
     * @example
     */
    public final  function __construct()
    {

    }

    /**
     *
     *
     * @example
     * @return void
     */
    private final  function __clone()
    {

    }

}

