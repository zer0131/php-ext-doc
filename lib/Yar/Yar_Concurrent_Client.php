<?php
/**
* Yar自动补全类(基于2.0.3版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
class Yar_Concurrent_Client
{
    /**
     * @var unknown $_callstack 
     * 
     * @access protected
     */
    protected static  $_callstack;

    /**
     * @var unknown $_callback 
     * 
     * @access protected
     */
    protected static  $_callback;

    /**
     * @var unknown $_error_callback 
     * 
     * @access protected
     */
    protected static  $_error_callback;

    /**
     * @var bool $_start 
     * 
     * @access protected
     */
    protected static  $_start    =    false;

    /**
     * 
     *
     * @example 
     * @param  mixed $uri 
     * @param  mixed $method 
     * @param  mixed $parameters 
     * @param  mixed $callback 
     * @return 
     */
    public static  function call($uri, $method, $parameters, $callback)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $callback 
     * @param  mixed $error_callback 
     * @return 
     */
    public static  function loop($callback, $error_callback)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function reset()
    {
    
    }

}

