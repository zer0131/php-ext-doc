<?php
/**
* Yaf自动补全类(基于3.0.5版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
namespace Yaf\Response;
class Http extends \Yaf\Response_Abstract
{
    /**
     *
     */
    const DEFAULT_BODY    =    'content';

    /**
     * @var $_header
     *
     * @access protected
     */
    protected $_header;

    /**
     * @var $_body
     *
     * @access protected
     */
    protected $_body;

    /**
     * @var bool $_sendheader
     *
     * @access protected
     */
    protected $_sendheader    =    true;

    /**
     * @var int $_response_code
     *
     * @access protected
     */
    protected $_response_code    =    0;

    /**
     *
     *
     * @example
     * @param  mixed $name
     * @param  mixed $value
     * @param  mixed $rep
     * @param  mixed $response_code
     * @return
     */
    public function setHeader($name, $value, $rep, $response_code)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $headers
     * @return
     */
    public function setAllHeaders($headers)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $name
     * @return
     */
    public function getHeader($name)
    {

    }

    /**
     *
     *
     * @example
     * @return
     */
    public function clearHeaders()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $url
     * @return
     */
    public function setRedirect($url)
    {

    }

    /**
     *
     *
     * @example
     */
    public function response()
    {

    }

    /**
     *
     *
     * @example
     */
    public function __construct()
    {

    }

    /**
     *
     *
     * @example
     */
    public function __destruct()
    {

    }

    /**
     *
     *
     * @example
     */
    private function __clone()
    {

    }

    /**
     *
     *
     * @example
     * @return string
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
     * @return bool
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
     * @return bool
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
     * @return bool
     */
    public function prependBody($body, $name)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $name
     * @return bool
     */
    public function clearBody($name)
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $name
     * @return mixed
     */
    public function getBody($name)
    {

    }

}

