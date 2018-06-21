<?php
/**
 * @author: zhangenrui
 * @date: 2018/6/21
 * @desc: 生成器
 */

define('ROOT_PATH', __DIR__);
define('DATA_PATH', ROOT_PATH.'/data');
define('DICT_PATH', DATA_PATH.'/dict');

function help($bin, $package) {
    echo "Usage: ".$bin." ".$package." create | dict \n";
}

function create($package) {
    //
}

function dict($package) {
    //
}

function main() {
    if (!file_exists(DATA_PATH)) {
        mkdir(DATA_PATH);
    }
    if (!file_exists(DICT_PATH)) {
        mkdir(DICT_PATH);
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
            create($package);
            break;
        case 'dict':
            dict($package);
            break;
        default:
            help($bin, $package);
    }
}

main();