<?php
/**
* Yar自动补全类(基于2.0.3版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
/**
 * php.ini配置选项: 

 * 
 * yar.packager=msgpack

 * 
 * yar.transport=curl

 * 
 * yar.debug=Off

 * 
 * yar.expose_info=On

 * 
 * yar.connect_timeout=1000

 * 
 * yar.timeout=5000

 * 
 * yar.content_type=application/octet-stream

 * 
 * yar.allow_persistent=0

*/
/**

*/
define('YAR_VERSION', '2.0.3');
/**

*/
define('YAR_OPT_PACKAGER', 1);
/**

*/
define('YAR_OPT_PERSISTENT', 2);
/**

*/
define('YAR_OPT_TIMEOUT', 4);
/**

*/
define('YAR_OPT_CONNECT_TIMEOUT', 8);
/**

*/
define('YAR_CLIENT_PROTOCOL_HTTP', 1);
/**

*/
define('YAR_CLIENT_PROTOCOL_TCP', 2);
/**

*/
define('YAR_CLIENT_PROTOCOL_UNIX', 4);
/**

*/
define('YAR_PACKAGER_PHP', 'PHP');
/**

*/
define('YAR_PACKAGER_JSON', 'JSON');
/**

*/
define('YAR_PACKAGER_MSGPACK', 'MSGPACK');
/**

*/
define('YAR_ERR_OKEY', 0);
/**

*/
define('YAR_ERR_OUTPUT', 8);
/**

*/
define('YAR_ERR_TRANSPORT', 16);
/**

*/
define('YAR_ERR_REQUEST', 4);
/**

*/
define('YAR_ERR_PROTOCOL', 2);
/**

*/
define('YAR_ERR_PACKAGER', 1);
/**

*/
define('YAR_ERR_EXCEPTION', 64);
