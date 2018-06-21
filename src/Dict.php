<?php
/**
 * @author: zhangenrui
 * @date: 2018/6/21
 * @desc: 生成字典
 */

namespace PHPExtDoc;

class Dict {

    public static function createDict($ext) {
        if (!extension_loaded($ext)) {
            exit($ext . "not found\n");
        }
        $data = Tool::export($ext);
        $tmp = $data;
        unset($tmp['classes']);
        self::_createDict(strtolower($ext), strtolower($ext), $tmp);
        foreach ($data['classes'] as $k => $v) {
            $fileName = strtolower(str_replace("\\", "_", $k));
            if (strtolower($fileName) == strtolower($ext)) {
                self::_createDict($ext, $fileName, array_merge($tmp, $v));
            } else {
                self::_createDict($ext, $fileName, $v);
            }
        }
    }

    public static function updateDict($ext, $data) {
        $tmp = $data;
        unset($tmp['classes']);
        self::_createDict($ext, $ext, $tmp);
        if (!isset($data['classes'])) {
            return;
        }
        foreach ($data['classes'] as $k => $v) {
            $fileName = strtolower(str_replace("\\", "_", $k));
            if (strtolower($fileName) == strtolower($ext)) {
                self::_createDict($ext, $fileName, array_merge($tmp, $v));
            } else {
                self::_createDict($ext, $fileName, $v);
            }
        }
    }

    private static function _createDict($ext, $fileName, $data) {
        $basePath = DICT_PATH . '/' . strtolower($ext);
        if (!file_exists($basePath)) {
            mkdir($basePath);
        }
        $fileFullName = $basePath . '/' . $fileName . '.json';
        return Tool::writeFile($fileFullName, $data);
    }
}