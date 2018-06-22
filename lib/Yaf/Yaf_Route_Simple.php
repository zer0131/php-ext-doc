<?php
/**
* Yaf自动补全类(基于3.0.5版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
final class Yaf_Route_Simple implements Yaf_Route_Interface
{
    /**
     * @var $controller
     * 
     * @access protected
     */
    protected $controller;

    /**
     * @var $module
     * 
     * @access protected
     */
    protected $module;

    /**
     * @var $action
     * 
     * @access protected
     */
    protected $action;

    /**
     * 
     *
     * @example 
     * @param  mixed $module_name 
     * @param  mixed $controller_name 
     * @param  mixed $action_name 
     */
    public function __construct($module_name, $controller_name, $action_name)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $request 
     * @return bool
     */
    public function route($request)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param array $info 
     * @param array $query 
     * @return string
     */
    public function assemble(Array $info, Array $query)
    {
    
    }

}

