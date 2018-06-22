<?php
/**
* Yaf自动补全类(基于3.0.5版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
abstract class Yaf_Response_Abstract
{
    /**     
    *
    */
    const DEFAULT_BODY    =    'content';

    /**
     * @var unknown $_header 
     * 
     * @access protected
     */
    protected $_header;

    /**
     * @var unknown $_body 
     * 
     * @access protected
     */
    protected $_body;

    /**
     * @var bool $_sendheader 
     * 
     * @access protected
     */
    protected $_sendheader    =    false;

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
    public function __destruct()
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
    public function __toString()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $body 
     * @param  mixed $name 
     * @return 
     */
    public function setBody($body, $name)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $body 
     * @param  mixed $name 
     * @return 
     */
    public function appendBody($body, $name)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $body 
     * @param  mixed $name 
     * @return 
     */
    public function prependBody($body, $name)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $name 
     * @return 
     */
    public function clearBody($name)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $name 
     * @return 
     */
    public function getBody($name)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function response()
    {
    
    }

}

