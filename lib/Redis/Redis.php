<?php
/**
* Redis自动补全类(基于3.1.4版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
/**
 * php.ini配置选项: 

 * 
 * redis.arrays.names=

 * 
 * redis.arrays.hosts=

 * 
 * redis.arrays.previous=

 * 
 * redis.arrays.functions=

 * 
 * redis.arrays.index=

 * 
 * redis.arrays.autorehash=

 * 
 * redis.clusters.seeds=

 * 
 * redis.clusters.timeout=

 * 
 * redis.clusters.read_timeout=

*/
class Redis
{
    /**     
    *
    */
    const REDIS_NOT_FOUND    =    0;

    /**     
    *
    */
    const REDIS_STRING    =    1;

    /**     
    *
    */
    const REDIS_SET    =    2;

    /**     
    *
    */
    const REDIS_LIST    =    3;

    /**     
    *
    */
    const REDIS_ZSET    =    4;

    /**     
    *
    */
    const REDIS_HASH    =    5;

    /**     
    *
    */
    const PIPELINE    =    2;

    /**     
    *
    */
    const ATOMIC    =    0;

    /**     
    *
    */
    const MULTI    =    1;

    /**     
    *
    */
    const OPT_SERIALIZER    =    1;

    /**     
    *
    */
    const OPT_PREFIX    =    2;

    /**     
    *
    */
    const OPT_READ_TIMEOUT    =    3;

    /**     
    *
    */
    const SERIALIZER_NONE    =    0;

    /**     
    *
    */
    const SERIALIZER_PHP    =    1;

    /**     
    *
    */
    const OPT_SCAN    =    4;

    /**     
    *
    */
    const SCAN_RETRY    =    1;

    /**     
    *
    */
    const SCAN_NORETRY    =    0;

    /**     
    *
    */
    const AFTER    =    'after';

    /**     
    *
    */
    const BEFORE    =    'before';

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
    public function connect()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pconnect()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function close()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function ping()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function echo()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function get()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function set()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function setex()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function psetex()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function setnx()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getSet()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function randomKey()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function renameKey()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function renameNx()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getMultiple()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function exists()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function delete()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function incr()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function incrBy()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function incrByFloat()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function decr()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function decrBy()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function type()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function append()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getRange()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function setRange()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getBit()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function setBit()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function strlen()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getKeys()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sort()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sortAsc()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sortAscAlpha()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sortDesc()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sortDescAlpha()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lPush()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rPush()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lPushx()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rPushx()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lPop()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rPop()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function blPop()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function brPop()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lSize()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lRemove()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function listTrim()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lGet()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lGetRange()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lSet()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lInsert()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sAdd()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sAddArray()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sSize()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sRemove()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sMove()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sPop()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sRandMember()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sContains()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sMembers()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sInter()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sInterStore()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sUnion()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sUnionStore()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sDiff()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sDiffStore()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function setTimeout()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function save()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function bgSave()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lastSave()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function flushDB()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function flushAll()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function dbSize()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function auth()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function ttl()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pttl()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function persist()
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
    public function select()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function move()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function bgrewriteaof()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function slaveof()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function object()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function bitop()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function bitcount()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function bitpos()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function mset()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function msetnx()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rpoplpush()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function brpoplpush()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zAdd()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zDelete()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRange()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRevRange()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRangeByScore()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRevRangeByScore()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRangeByLex()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRevRangeByLex()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zLexCount()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRemRangeByLex()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zCount()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zDeleteRangeByScore()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zDeleteRangeByRank()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zCard()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zScore()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRank()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRevRank()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zInter()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zUnion()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zIncrBy()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function expireAt()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pexpire()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pexpireAt()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hGet()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hSet()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hSetNx()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hDel()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hLen()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hKeys()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hVals()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hGetAll()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hExists()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hIncrBy()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hIncrByFloat()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hMset()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hMget()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hStrLen()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function multi()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function discard()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function exec()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pipeline()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function watch()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function unwatch()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function publish()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function subscribe()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function psubscribe()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function unsubscribe()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function punsubscribe()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function time()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function role()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function eval()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function evalsha()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function script()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function debug()
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

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function restore()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function migrate()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getLastError()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function clearLastError()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function _prefix()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function _serialize()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function _unserialize()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function client()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function command()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $i_iterator 
     * @param  mixed $str_pattern 
     * @param  mixed $i_count 
     * @return 
     */
    public function scan($i_iterator, $str_pattern, $i_count)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $str_key 
     * @param  mixed $i_iterator 
     * @param  mixed $str_pattern 
     * @param  mixed $i_count 
     * @return 
     */
    public function hscan($str_key, $i_iterator, $str_pattern, $i_count)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $str_key 
     * @param  mixed $i_iterator 
     * @param  mixed $str_pattern 
     * @param  mixed $i_count 
     * @return 
     */
    public function zscan($str_key, $i_iterator, $str_pattern, $i_count)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $str_key 
     * @param  mixed $i_iterator 
     * @param  mixed $str_pattern 
     * @param  mixed $i_count 
     * @return 
     */
    public function sscan($str_key, $i_iterator, $str_pattern, $i_count)
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pfadd()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pfcount()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pfmerge()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getOption()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function setOption()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function config()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function slowlog()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rawcommand()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function geoadd()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function geohash()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function geopos()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function geodist()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function georadius()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function georadiusbymember()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getHost()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getPort()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getDBNum()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getTimeout()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getReadTimeout()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getPersistentID()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getAuth()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function isConnected()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getMode()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function wait()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pubsub()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function open()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function popen()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lLen()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sGetMembers()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function mget()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function expire()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zunionstore()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zinterstore()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRemove()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRem()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRemoveRangeByScore()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRemRangeByScore()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRemRangeByRank()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zSize()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function substr()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rename()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function del()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function keys()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lrem()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function ltrim()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lindex()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lrange()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function scard()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function srem()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sismember()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zReverseRange()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sendEcho()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function evaluate()
    {
    
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function evaluateSha()
    {
    
    }

}

