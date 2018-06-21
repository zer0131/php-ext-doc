<?php
/**
 * @author: zhangenrui
 * @date: 2018/6/21
 * @desc: 生成器
 */

ini_set('display_errors', 1);

define('ROOT_PATH', __DIR__);
define('DATA_PATH', ROOT_PATH.'/data');
define('DICT_PATH', DATA_PATH.'/dict');
define('OUTPUT_PATH', DATA_PATH . '/output');

require_once 'src/Tool.php';
require_once 'src/Dict.php';
require_once 'src/Doc.php';


function main() {
    if (!file_exists(DATA_PATH)) {
        mkdir(DATA_PATH);
    }
    if (!file_exists(DICT_PATH)) {
        mkdir(DICT_PATH);
    }
    if (!file_exists(OUTPUT_PATH)) {
        mkdir(OUTPUT_PATH);
    }

    global $argv;
    $bin = isset($argv[0]) ? $argv[0] : '';
    $package = isset($argv[1]) ? $argv[1] : '';
    $cmd = isset($argv[2]) ? $argv[2] : '';

    if ($package == '') {
        exit("Input Extension Name\n");
    }

    switch ($cmd) {
        case 'create':
            \PHPExtDoc\Doc::create($package);//生成文档
            break;
        case 'dict':
            \PHPExtDoc\Dict::createDict($package);//生成字典
            break;
        default:
            echo "Usage: ".$bin." ".$package." create | dict \n";
    }
}

main();