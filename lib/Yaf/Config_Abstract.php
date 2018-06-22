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
abstract class Config_Abstract
{
    /**
     * @var $_config
     *
     * @access protected
     */
    protected $_config;

    /**
     * @var bool $_readonly
     *
     * @access protected
     */
    protected $_readonly    =    true;

    /**
     *
     *
     * @example
     * @param string $name
     * @param mixed $value
     * @return mixed
     */
    public abstract  function get($name , $value);

    /**
     *
     *
     * @example
     * @return \Yaf\Config_Abstract
     */
    public abstract  function set();

    /**
     *
     *
     * @example
     * @return bool
     */
    public abstract  function readonly();

    /**
     *
     *
     * @example
     * @return array
     */
    public abstract  function toArray();

}

