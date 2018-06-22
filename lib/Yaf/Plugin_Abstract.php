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
abstract class Plugin_Abstract
{
    /**
     *
     *
     * @example
     * @param \Yaf\Request_Abstract $request
     * @param \Yaf\Response_Abstract $response
     */
    public function routerStartup(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {

    }

    /**
     *
     *
     * @example
     * @param \Yaf\Request_Abstract $request
     * @param \Yaf\Response_Abstract $response
     */
    public function routerShutdown(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {

    }

    /**
     *
     *
     * @example
     * @param \Yaf\Request_Abstract $request
     * @param \Yaf\Response_Abstract $response
     */
    public function dispatchLoopStartup(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {

    }

    /**
     *
     *
     * @example
     * @param \Yaf\Request_Abstract $request
     * @param \Yaf\Response_Abstract $response
     */
    public function dispatchLoopShutdown(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {

    }

    /**
     *
     *
     * @example
     * @param \Yaf\Request_Abstract $request
     * @param \Yaf\Response_Abstract $response
     */
    public function preDispatch(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {

    }

    /**
     *
     *
     * @example
     * @param \Yaf\Request_Abstract $request
     * @param \Yaf\Response_Abstract $response
     */
    public function postDispatch(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {

    }

    /**
     *
     *
     * @example
     * @param \Yaf\Request_Abstract $request
     * @param \Yaf\Response_Abstract $response
     */
    public function preResponse(\Yaf\Request_Abstract $request, \Yaf\Response_Abstract $response)
    {

    }

}

