<?php
/**
* Swoole自动补全类(基于2.2.0版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
namespace Swoole;
class Lock
{
    /**     
    *
    */
    const FILELOCK    =    2;

    /**     
    *
    */
    const MUTEX    =    3;

    /**     
    *
    */
    const SEM    =    4;

    /**     
    *
    */
    const RWLOCK    =    1;

    /**     
    *
    */
    const SPINLOCK    =    5;

    /**
     * @var int $errCode 
     * 
     * @access public
     */
    public $errCode    =    0;

    /**
     * 
     *
     * @example 
     * @param  mixed $type 
     * @param  mixed $filename 
     * @return 
     */
    public function __construct($type, $filename)
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
    public function lock()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $timeout 
     * @return 
     */
    public function lockwait($timeout)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function trylock()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lock_read()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function trylock_read()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function unlock()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function destroy()
    {
    
    }

}

