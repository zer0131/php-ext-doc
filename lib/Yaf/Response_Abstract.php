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
abstract class Response_Abstract
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
    protected $_sendheader    =    false;

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

    /**
     *
     *
     * @example
     */
    public function response()
    {

    }

}

