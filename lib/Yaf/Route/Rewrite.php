<?php
/**
* Yaf自动补全类(基于3.0.5版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
namespace Yaf\Route;
final class Rewrite implements \Yaf\Route_Interface
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
     * @var $_verify
     *
     * @access protected
     */
    protected $_verify;

    /**
     *
     *
     * @example
     * @param  mixed $match
     * @param array $route
     * @param array $verify
     */
    public function __construct($match, Array $route, Array $verify)
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

