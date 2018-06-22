<?php
/**
* Yac自动补全类(基于2.0.2版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
/**
 * php.ini配置选项: 

 * 
 * yac.enable=1

 * 
 * yac.debug=0

 * 
 * yac.keys_memory_size=4M

 * 
 * yac.values_memory_size=64M

 * 
 * yac.compress_threshold=-1

 * 
 * yac.enable_cli=1

*/
/**

*/
define('YAC_VERSION', '2.0.2');
/**

*/
define('YAC_MAX_KEY_LEN', 48);
/**

*/
define('YAC_MAX_VALUE_RAW_LEN', 67108863);
/**

*/
define('YAC_MAX_RAW_COMPRESSED_LEN', 1048576);
/**

*/
define('YAC_SERIALIZER', 'PHP');
class Yac
{
    /**
     * @var string $_prefix 
     * 
     * @access protected
     */
    protected $_prefix    =    '';

    /**
     * 
     *
     * @example 
     * @param  mixed $prefix 
     * @return 
     */
    public function __construct($prefix)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $keys 
     * @param  mixed $value 
     * @param  mixed $ttl 
     * @return 
     */
    public function add($keys, $value, $ttl)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $keys 
     * @param  mixed $value 
     * @param  mixed $ttl 
     * @return 
     */
    public function set($keys, $value, $ttl)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $key 
     * @param  mixed $value 
     * @return 
     */
    public function __set($key, $value)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $keys 
     * @return 
     */
    public function get($keys)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $key 
     * @return 
     */
    public function __get($key)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $keys 
     * @param  mixed $ttl 
     * @return 
     */
    public function delete($keys, $ttl)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function flush()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function info()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function dump()
    {
    
    }

}

