<?php
/**
* Yaf自动补全类(基于3.0.5版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
namespace Yaf\Exception;
class TypeError extends \Yaf\Exception implements \Throwable
{
    /**
     * @var $file
     *
     * @access protected
     */
    protected $file;

    /**
     * @var $line
     *
     * @access protected
     */
    protected $line;

    /**
     * @var $message
     *
     * @access protected
     */
    protected $message;

    /**
     * @var int $code
     *
     * @access protected
     */
    protected $code    =    0;

    /**
     * @var $previous
     *
     * @access protected
     */
    protected $previous;

    /**
     *
     *
     * @example
     */
    private final  function __clone()
    {

    }

    /**
     *
     *
     * @example
     * @param  mixed $message
     * @param  mixed $code
     * @param  mixed $previous
     */
    public function __construct($message, $code, $previous)
    {

    }

    /**
     *
     *
     * @example
     */
    public function __wakeup()
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

}

