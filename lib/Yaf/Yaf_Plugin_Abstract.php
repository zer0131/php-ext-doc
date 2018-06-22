<?php
/**
* Yaf自动补全类(基于3.0.5版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
abstract class Yaf_Plugin_Abstract
{
    /**
     * 
     *
     * @example 
     * @param Yaf_Request_Abstract $request 
     * @param Yaf_Response_Abstract $response 
     * @return 
     */
    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param Yaf_Request_Abstract $request 
     * @param Yaf_Response_Abstract $response 
     * @return 
     */
    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param Yaf_Request_Abstract $request 
     * @param Yaf_Response_Abstract $response 
     * @return 
     */
    public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param Yaf_Request_Abstract $request 
     * @param Yaf_Response_Abstract $response 
     * @return 
     */
    public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param Yaf_Request_Abstract $request 
     * @param Yaf_Response_Abstract $response 
     * @return 
     */
    public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param Yaf_Request_Abstract $request 
     * @param Yaf_Response_Abstract $response 
     * @return 
     */
    public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param Yaf_Request_Abstract $request 
     * @param Yaf_Response_Abstract $response 
     * @return 
     */
    public function preResponse(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
    
    }

}

