<?php
/**
* Yaf自动补全类(基于3.0.5版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
abstract class Yaf_Config_Abstract
{
    /**
     * @var unknown $_config 
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
     * @return 
     */
    public abstract  function get();

    /**
     * 
     *
     * @example 
     * @return 
     */
    public abstract  function set();

    /**
     * 
     *
     * @example 
     * @return 
     */
    public abstract  function readonly();

    /**
     * 
     *
     * @example 
     * @return 
     */
    public abstract  function toArray();

}

