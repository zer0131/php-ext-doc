<?php
/**
* Swoole自动补全类(基于2.2.0版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
/**
 * php.ini配置选项: 

 * 
 * swoole.aio_thread_num=2

 * 
 * swoole.display_errors=On

 * 
 * swoole.use_namespace=On

 * 
 * swoole.use_shortname=On

 * 
 * swoole.fast_serialize=Off

 * 
 * swoole.unixsock_buffer_size=8388608

*/
/**

*/
define('SWOOLE_BASE', 4);
/**

*/
define('SWOOLE_THREAD', 2);
/**

*/
define('SWOOLE_PROCESS', 3);
/**

*/
define('SWOOLE_IPC_UNSOCK', 1);
/**

*/
define('SWOOLE_IPC_MSGQUEUE', 2);
/**

*/
define('SWOOLE_IPC_PREEMPTIVE', 3);
/**

*/
define('SWOOLE_SOCK_TCP', 1);
/**

*/
define('SWOOLE_SOCK_TCP6', 3);
/**

*/
define('SWOOLE_SOCK_UDP', 2);
/**

*/
define('SWOOLE_SOCK_UDP6', 4);
/**

*/
define('SWOOLE_SOCK_UNIX_DGRAM', 5);
/**

*/
define('SWOOLE_SOCK_UNIX_STREAM', 6);
/**

*/
define('SWOOLE_TCP', 1);
/**

*/
define('SWOOLE_TCP6', 3);
/**

*/
define('SWOOLE_UDP', 2);
/**

*/
define('SWOOLE_UDP6', 4);
/**

*/
define('SWOOLE_UNIX_DGRAM', 5);
/**

*/
define('SWOOLE_UNIX_STREAM', 6);
/**

*/
define('SWOOLE_SOCK_SYNC', 0);
/**

*/
define('SWOOLE_SOCK_ASYNC', 1);
/**

*/
define('SWOOLE_SYNC', 2048);
/**

*/
define('SWOOLE_ASYNC', 1024);
/**

*/
define('SWOOLE_KEEP', 4096);
/**

*/
define('SWOOLE_EVENT_READ', 512);
/**

*/
define('SWOOLE_EVENT_WRITE', 1024);
/**

*/
define('SWOOLE_VERSION', '2.2.0');
/**

*/
define('SWOOLE_ERROR_MALLOC_FAIL', 501);
/**

*/
define('SWOOLE_ERROR_SYSTEM_CALL_FAIL', 502);
/**

*/
define('SWOOLE_ERROR_PHP_FATAL_ERROR', 503);
/**

*/
define('SWOOLE_ERROR_NAME_TOO_LONG', 504);
/**

*/
define('SWOOLE_ERROR_INVALID_PARAMS', 505);
/**

*/
define('SWOOLE_ERROR_FILE_NOT_EXIST', 700);
/**

*/
define('SWOOLE_ERROR_FILE_TOO_LARGE', 701);
/**

*/
define('SWOOLE_ERROR_FILE_EMPTY', 702);
/**

*/
define('SWOOLE_ERROR_DNSLOOKUP_DUPLICATE_REQUEST', 703);
/**

*/
define('SWOOLE_ERROR_DNSLOOKUP_RESOLVE_FAILED', 704);
/**

*/
define('SWOOLE_ERROR_SESSION_CLOSED_BY_SERVER', 1001);
/**

*/
define('SWOOLE_ERROR_SESSION_CLOSED_BY_CLIENT', 1002);
/**

*/
define('SWOOLE_ERROR_SESSION_CLOSING', 1003);
/**

*/
define('SWOOLE_ERROR_SESSION_CLOSED', 1004);
/**

*/
define('SWOOLE_ERROR_SESSION_NOT_EXIST', 1005);
/**

*/
define('SWOOLE_ERROR_SESSION_INVALID_ID', 1006);
/**

*/
define('SWOOLE_ERROR_SESSION_DISCARD_TIMEOUT_DATA', 1007);
/**

*/
define('SWOOLE_ERROR_OUTPUT_BUFFER_OVERFLOW', 1008);
/**

*/
define('SWOOLE_ERROR_SSL_NOT_READY', 1009);
/**

*/
define('SWOOLE_ERROR_SSL_CANNOT_USE_SENFILE', 1010);
/**

*/
define('SWOOLE_ERROR_SSL_EMPTY_PEER_CERTIFICATE', 1011);
/**

*/
define('SWOOLE_ERROR_SSL_VEFIRY_FAILED', 1012);
/**

*/
define('SWOOLE_ERROR_SSL_BAD_CLIENT', 1013);
/**

*/
define('SWOOLE_ERROR_SSL_BAD_PROTOCOL', 1014);
/**

*/
define('SWOOLE_ERROR_PACKAGE_LENGTH_TOO_LARGE', 1201);
/**

*/
define('SWOOLE_ERROR_DATA_LENGTH_TOO_LARGE', 1202);
/**

*/
define('SWOOLE_ERROR_TASK_PACKAGE_TOO_BIG', 2001);
/**

*/
define('SWOOLE_ERROR_TASK_DISPATCH_FAIL', 2002);
/**

*/
define('SWOOLE_ERROR_AIO_BAD_REQUEST', 4001);
/**

*/
define('SWOOLE_ERROR_CLIENT_NO_CONNECTION', 5001);
/**

*/
define('SWOOLE_ERROR_HTTP2_STREAM_ID_TOO_BIG', 3001);
/**

*/
define('SWOOLE_ERROR_HTTP2_STREAM_NO_HEADER', 3002);
/**

*/
define('SWOOLE_ERROR_SOCKS5_UNSUPPORT_VERSION', 7001);
/**

*/
define('SWOOLE_ERROR_SOCKS5_UNSUPPORT_METHOD', 7002);
/**

*/
define('SWOOLE_ERROR_SOCKS5_AUTH_FAILED', 7003);
/**

*/
define('SWOOLE_ERROR_SOCKS5_SERVER_ERROR', 7004);
/**

*/
define('SWOOLE_ERROR_HTTP_PROXY_HANDSHAKE_ERROR', 8001);
/**

*/
define('SWOOLE_ERROR_HTTP_INVALID_PROTOCOL', 8002);
/**

*/
define('SWOOLE_ERROR_WEBSOCKET_BAD_CLIENT', 8501);
/**

*/
define('SWOOLE_ERROR_WEBSOCKET_BAD_OPCODE', 8502);
/**

*/
define('SWOOLE_ERROR_WEBSOCKET_UNCONNECTED', 8503);
/**

*/
define('SWOOLE_ERROR_WEBSOCKET_HANDSHAKE_FAILED', 8504);
/**

*/
define('SWOOLE_ERROR_SERVER_MUST_CREATED_BEFORE_CLIENT', 9001);
/**

*/
define('SWOOLE_ERROR_SERVER_TOO_MANY_SOCKET', 9002);
/**

*/
define('SWOOLE_ERROR_SERVER_WORKER_TERMINATED', 9003);
/**

*/
define('SWOOLE_ERROR_SERVER_INVALID_LISTEN_PORT', 9004);
/**

*/
define('SWOOLE_ERROR_SERVER_TOO_MANY_LISTEN_PORT', 9005);
/**

*/
define('SWOOLE_ERROR_SERVER_PIPE_BUFFER_FULL', 9006);
/**

*/
define('SWOOLE_ERROR_SERVER_NO_IDLE_WORKER', 9007);
/**

*/
define('SWOOLE_ERROR_SERVER_ONLY_START_ONE', 9008);
/**

*/
define('SWOOLE_ERROR_SERVER_WORKER_EXIT_TIMEOUT', 9009);
/**

*/
define('SWOOLE_TRACE_SERVER', 2);
/**

*/
define('SWOOLE_TRACE_CLIENT', 4);
/**

*/
define('SWOOLE_TRACE_BUFFER', 8);
/**

*/
define('SWOOLE_TRACE_CONN', 16);
/**

*/
define('SWOOLE_TRACE_EVENT', 32);
/**

*/
define('SWOOLE_TRACE_WORKER', 64);
/**

*/
define('SWOOLE_TRACE_REACTOR', 256);
/**

*/
define('SWOOLE_TRACE_PHP', 512);
/**

*/
define('SWOOLE_TRACE_HTTP2', 1024);
/**

*/
define('SWOOLE_TRACE_EOF_PROTOCOL', 2048);
/**

*/
define('SWOOLE_TRACE_LENGTH_PROTOCOL', 4096);
/**

*/
define('SWOOLE_TRACE_CLOSE', 8192);
/**

*/
define('SWOOLE_TRACE_HTTP_CLIENT', 16384);
/**

*/
define('SWOOLE_TRACE_COROUTINE', 32768);
/**

*/
define('SWOOLE_TRACE_REDIS_CLIENT', 65536);
/**

*/
define('SWOOLE_TRACE_MYSQL_CLIENT', 131072);
/**

*/
define('SWOOLE_TRACE_AIO', 262144);
/**

*/
define('SWOOLE_TRACE_ALL', 4294967295);
/**

*/
define('SWOOLE_LOG_DEBUG', 0);
/**

*/
define('SWOOLE_LOG_TRACE', 1);
/**

*/
define('SWOOLE_LOG_INFO', 2);
/**

*/
define('SWOOLE_LOG_NOTICE', 3);
/**

*/
define('SWOOLE_LOG_WARNING', 4);
/**

*/
define('SWOOLE_LOG_ERROR', 5);
/**

*/
define('SWOOLE_IPC_NONE', 0);
/**

*/
define('SWOOLE_IPC_UNIXSOCK', 1);
/**

*/
define('SWOOLE_IPC_SOCKET', 3);
/**

*/
define('SWOOLE_AIO_BASE', 0);
/**

*/
define('SWOOLE_AIO_LINUX', 1);
/**

*/
define('SIGHUP', 1);
/**

*/
define('SIGINT', 2);
/**

*/
define('SIGQUIT', 3);
/**

*/
define('SIGILL', 4);
/**

*/
define('SIGTRAP', 5);
/**

*/
define('SIGABRT', 6);
/**

*/
define('SIGBUS', 7);
/**

*/
define('SIGFPE', 8);
/**

*/
define('SIGKILL', 9);
/**

*/
define('SIGUSR1', 10);
/**

*/
define('SIGSEGV', 11);
/**

*/
define('SIGUSR2', 12);
/**

*/
define('SIGPIPE', 13);
/**

*/
define('SIGALRM', 14);
/**

*/
define('SIGTERM', 15);
/**

*/
define('SIGSTKFLT', 16);
/**

*/
define('SIGCHLD', 17);
/**

*/
define('SIGCONT', 18);
/**

*/
define('SIGSTOP', 19);
/**

*/
define('SIGTSTP', 20);
/**

*/
define('SIGTTIN', 21);
/**

*/
define('SIGTTOU', 22);
/**

*/
define('SIGURG', 23);
/**

*/
define('SIGXCPU', 24);
/**

*/
define('SIGXFSZ', 25);
/**

*/
define('SIGVTALRM', 26);
/**

*/
define('SIGPROF', 27);
/**

*/
define('SIGWINCH', 28);
/**

*/
define('SIGIO', 29);
/**

*/
define('SIGPWR', 30);
/**

*/
define('SIGSYS', 31);
/**

*/
define('SIG_IGN', 1);
/**

*/
define('SWOOLE_FILELOCK', 2);
/**

*/
define('SWOOLE_MUTEX', 3);
/**

*/
define('SWOOLE_SEM', 4);
/**

*/
define('SWOOLE_RWLOCK', 1);
/**

*/
define('SWOOLE_SPINLOCK', 5);
/**

*/
define('WEBSOCKET_OPCODE_TEXT', 1);
/**

*/
define('WEBSOCKET_OPCODE_BINARY', 2);
/**

*/
define('WEBSOCKET_OPCODE_PING', 9);
/**

*/
define('WEBSOCKET_STATUS_CONNECTION', 1);
/**

*/
define('WEBSOCKET_STATUS_HANDSHAKE', 2);
/**

*/
define('WEBSOCKET_STATUS_FRAME', 3);
/**

*/
define('WEBSOCKET_STATUS_ACTIVE', 3);
/**

*/
define('SWOOLE_FAST_PACK', 1);
/**

*/
define('UNSERIALIZE_OBJECT_TO_ARRAY', 1);
/**

*/
define('UNSERIALIZE_OBJECT_TO_STDCLASS', 2);
/**
* 
*
* @example 
* 
* @return 
*/
function swoole_version()
{

}

/**
* 
*
* @example 
* 
* @return 
*/
function swoole_cpu_num()
{

}

/**
* 
*
* @example 
* 
* @return 
*/
function swoole_last_error()
{

}

/**
* 
*
* @example 
* 
* @param  $fd: 
* @param  $read_callback: 
* @param  $write_callback: 
* @param  $events: 
* @return 
*/
function swoole_event_add($fd, $read_callback, $write_callback, $events)
{

}

/**
* 
*
* @example 
* 
* @param  $fd: 
* @param  $read_callback: 
* @param  $write_callback: 
* @param  $events: 
* @return 
*/
function swoole_event_set($fd, $read_callback, $write_callback, $events)
{

}

/**
* 
*
* @example 
* 
* @param  $fd: 
* @return 
*/
function swoole_event_del($fd)
{

}

/**
* 
*
* @example 
* 
* @return 
*/
function swoole_event_exit()
{

}

/**
* 
*
* @example 
* 
* @return 
*/
function swoole_event_wait()
{

}

/**
* 
*
* @example 
* 
* @param  $fd: 
* @param  $data: 
* @return 
*/
function swoole_event_write($fd, $data)
{

}

/**
* 
*
* @example 
* 
* @param  $callback: 
* @return 
*/
function swoole_event_defer($callback)
{

}

/**
* 
*
* @example 
* 
* @param  $callback: 
* @param  $before: 
* @return 
*/
function swoole_event_cycle($callback, $before)
{

}

/**
* 
*
* @example 
* 
* @return 
*/
function swoole_event_dispatch()
{

}

/**
* 
*
* @example 
* 
* @param  $fd: 
* @param  $events: 
* @return 
*/
function swoole_event_isset($fd, $events)
{

}

/**
* 
*
* @example 
* 
* @param  $ms: 
* @param  $callback: 
* @param  $param: 
* @return 
*/
function swoole_timer_after($ms, $callback, $param)
{

}

/**
* 
*
* @example 
* 
* @param  $ms: 
* @param  $callback: 
* @return 
*/
function swoole_timer_tick($ms, $callback)
{

}

/**
* 
*
* @example 
* 
* @param  $timer_id: 
* @return 
*/
function swoole_timer_exists($timer_id)
{

}

/**
* 
*
* @example 
* 
* @param  $timer_id: 
* @return 
*/
function swoole_timer_clear($timer_id)
{

}

/**
* 
*
* @example 
* 
* @param array $settings: 
* @return 
*/
function swoole_async_set(Array $settings)
{

}

/**
* 
*
* @example 
* 
* @param  $filename: 
* @param  $callback: 
* @param  $chunk_size: 
* @param  $offset: 
* @return 
*/
function swoole_async_read($filename, $callback, $chunk_size, $offset)
{

}

/**
* 
*
* @example 
* 
* @param  $filename: 
* @param  $content: 
* @param  $offset: 
* @param  $callback: 
* @return 
*/
function swoole_async_write($filename, $content, $offset, $callback)
{

}

/**
* 
*
* @example 
* 
* @param  $filename: 
* @param  $callback: 
* @return 
*/
function swoole_async_readfile($filename, $callback)
{

}

/**
* 
*
* @example 
* 
* @param  $filename: 
* @param  $content: 
* @param  $callback: 
* @param  $flags: 
* @return 
*/
function swoole_async_writefile($filename, $content, $callback, $flags)
{

}

/**
* 
*
* @example 
* 
* @param  $hostname: 
* @param  $callback: 
* @return 
*/
function swoole_async_dns_lookup($hostname, $callback)
{

}

/**
* 
*
* @example 
* 
* @param  $domain_name: 
* @return 
*/
function swoole_async_dns_lookup_coro($domain_name)
{

}

/**
* 
*
* @example 
* 
* @param  $func: 
* @return 
*/
function swoole_coroutine_create($func)
{

}

/**
* 
*
* @example 
* 
* @param  $command: 
* @return 
*/
function swoole_coroutine_exec($command)
{

}

/**
* 
*
* @example 
* 
* @param  $func: 
* @return 
*/
function go($func)
{

}

/**
* 
*
* @example 
* 
* @param  $read_array: 
* @param  $write_array: 
* @param  $error_array: 
* @param  $timeout: 
* @return 
*/
function swoole_client_select($read_array, $write_array, $error_array, $timeout)
{

}

/**
* 
*
* @example 
* 
* @param  $read_array: 
* @param  $write_array: 
* @param  $error_array: 
* @param  $timeout: 
* @return 
*/
function swoole_select($read_array, $write_array, $error_array, $timeout)
{

}

/**
* 
*
* @example 
* 
* @param  $process_name: 
* @return 
*/
function swoole_set_process_name($process_name)
{

}

/**
* 
*
* @example 
* 
* @return 
*/
function swoole_get_local_ip()
{

}

/**
* 
*
* @example 
* 
* @return 
*/
function swoole_get_local_mac()
{

}

/**
* 
*
* @example 
* 
* @param  $errno: 
* @param  $error_type: 
* @return 
*/
function swoole_strerror($errno, $error_type)
{

}

/**
* 
*
* @example 
* 
* @return 
*/
function swoole_errno()
{

}

/**
* 
*
* @example 
* 
* @param  $data: 
* @param  $type: 
* @return 
*/
function swoole_hashcode($data, $type)
{

}

