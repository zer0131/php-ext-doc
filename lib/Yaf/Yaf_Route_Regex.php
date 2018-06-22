<?php
/**
* Yaf自动补全类(基于3.0.5版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
final class Yaf_Route_Regex implements Yaf_Route_Interface
{
    /**
     * @var $_route
     * 
     * @access protected
     */
    protected $_route;

    /**
     * @var $_default
     * 
     * @access protected
     */
    protected $_default;

    /**
     * @var $_maps
     * 
     * @access protected
     */
    protected $_maps;

    /**
     * @var $_verify
     * 
     * @access protected
     */
    protected $_verify;

    /**
     * @var $_reverse
     * 
     * @access protected
     */
    protected $_reverse;

    /**
     * 
     *
     * @example 
     * @param  mixed $match 
     * @param array $route 
     * @param array $map 
     * @param array $verify 
     * @param  mixed $reverse 
     */
    public function __construct($match, Array $route, Array $map, Array $verify, $reverse)
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
    public function assemble(array $info, array $query)
    {
    
    }

}

