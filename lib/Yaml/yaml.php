<?php
/**
* Yaml自动补全类(基于2.0.2版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
/**
 * php.ini配置选项: 

 * 
 * yaml.decode_binary=0

 * 
 * yaml.decode_timestamp=0

 * 
 * yaml.decode_php=0

 * 
 * yaml.output_canonical=0

 * 
 * yaml.output_indent=2

 * 
 * yaml.output_width=80

*/
/**

*/
define('YAML_ANY_SCALAR_STYLE', 0);
/**

*/
define('YAML_PLAIN_SCALAR_STYLE', 1);
/**

*/
define('YAML_SINGLE_QUOTED_SCALAR_STYLE', 2);
/**

*/
define('YAML_DOUBLE_QUOTED_SCALAR_STYLE', 3);
/**

*/
define('YAML_LITERAL_SCALAR_STYLE', 4);
/**

*/
define('YAML_FOLDED_SCALAR_STYLE', 5);
/**

*/
define('YAML_NULL_TAG', 'tag:yaml.org,2002:null');
/**

*/
define('YAML_BOOL_TAG', 'tag:yaml.org,2002:bool');
/**

*/
define('YAML_STR_TAG', 'tag:yaml.org,2002:str');
/**

*/
define('YAML_INT_TAG', 'tag:yaml.org,2002:int');
/**

*/
define('YAML_FLOAT_TAG', 'tag:yaml.org,2002:float');
/**

*/
define('YAML_TIMESTAMP_TAG', 'tag:yaml.org,2002:timestamp');
/**

*/
define('YAML_SEQ_TAG', 'tag:yaml.org,2002:seq');
/**

*/
define('YAML_MAP_TAG', 'tag:yaml.org,2002:map');
/**

*/
define('YAML_PHP_TAG', '!php/object');
/**

*/
define('YAML_MERGE_TAG', 'tag:yaml.org,2002:merge');
/**

*/
define('YAML_BINARY_TAG', 'tag:yaml.org,2002:binary');
/**

*/
define('YAML_ANY_ENCODING', 0);
/**

*/
define('YAML_UTF8_ENCODING', 1);
/**

*/
define('YAML_UTF16LE_ENCODING', 2);
/**

*/
define('YAML_UTF16BE_ENCODING', 3);
/**

*/
define('YAML_ANY_BREAK', 0);
/**

*/
define('YAML_CR_BREAK', 1);
/**

*/
define('YAML_LN_BREAK', 2);
/**

*/
define('YAML_CRLN_BREAK', 3);
/**
* 
*
* @example 
* 
* @param  $input: 
* @param  $pos: 
* @param  $ndocs: 
* @param array $callbacks: 
* @return 
*/
function yaml_parse($input, $pos, $ndocs, Array $callbacks)
{

}

/**
* 
*
* @example 
* 
* @param  $filename: 
* @param  $pos: 
* @param  $ndocs: 
* @param array $callbacks: 
* @return 
*/
function yaml_parse_file($filename, $pos, $ndocs, Array $callbacks)
{

}

/**
* 
*
* @example 
* 
* @param  $url: 
* @param  $pos: 
* @param  $ndocs: 
* @param array $callbacks: 
* @return 
*/
function yaml_parse_url($url, $pos, $ndocs, Array $callbacks)
{

}

/**
* 
*
* @example 
* 
* @param  $data: 
* @param  $encoding: 
* @param  $linebreak: 
* @param array $callbacks: 
* @return 
*/
function yaml_emit($data, $encoding, $linebreak, Array $callbacks)
{

}

/**
* 
*
* @example 
* 
* @param  $filename: 
* @param  $data: 
* @param  $encoding: 
* @param  $linebreak: 
* @param array $callbacks: 
* @return 
*/
function yaml_emit_file($filename, $data, $encoding, $linebreak, Array $callbacks)
{

}

