<?php
/**
 * @author: zhangenrui
 * @date: 2018/6/22
 * @desc: 扩展文档生成
 */

namespace PHPExtDoc;

class Doc {

    private static $_dicts = [];
    private static $_exports = [];
    private static $_alias = [];
    private static $_config = [];

    public static function create($ext, $compareWithDict = false) {
        if (!extension_loaded($ext)) {
            exit($ext . "not found\n");
        }

        if ($compareWithDict) {
            $data = self::compare($ext);
        } else {
            $data = Tool::export($ext);
        }

        self::_createDoc($ext, $data);
    }

    public static function compare($extName) {
        $dict = self::getDict($extName);
        $exportData = self::getExports($extName);
        if (isset($dict[$extName]['comment']) && ($dict[$extName]['comment'] != '')) {
            $exportData['comment'] = $dict[$extName]['comment'];
        }
        foreach ($exportData['constants'] as $k => $v) {
            if (isset($dict[$extName]['constants'][$k])) {
                $exportData['constants'][$k] = $dict[$extName]['constants'][$k];
            }
        }
        foreach ($exportData['ini'] as $k => $v) {
            if (isset($dict[$extName]['ini'][$k])) {
                $exportData['ini'][$k]['comment'] = $dict[$extName]['ini'][$k]['comment'];
                $exportData['ini'][$k]['options'] = $dict[$extName]['ini'][$k]['options'];
            }
        }

        foreach ($exportData['functions'] as $k => $v) {
            if (isset($dict[$extName]['functions'][$k])) {
                $exportData['functions'][$k] = $dict[$extName]['functions'][$k];
            }
        }

        foreach ($exportData['classes'] as $k => $v) {
            $fileName = strtolower(str_replace("\\", '_', $k));
            if (isset($dict[$fileName]['comment']) && ($dict[$fileName]['comment'] != '')) {
                $exportData['classes'][$k]['comment'] = $dict[$fileName]['comment'];
            }
            foreach ($v['consts'] as $key => $val) {
                if (isset($dict[$fileName]['consts'][$key]['comment']) && ($dict[$fileName]['consts'][$key]['comment'] != '')) {
                    $exportData['classes'][$k]['consts'][$key]['comment'] = $dict[$fileName]['consts'][$key]['comment'];
                    $exportData['classes'][$k]['consts'][$key]['type'] = rtrim($dict[$fileName]['consts'][$key]['type'], ':');
                }
            }

            if (empty($v['properties']) && isset($dict[$fileName]['properties'])) {
                $exportData['classes'][$k]['properties'] = $dict[$fileName]['properties'];
            }
            foreach ($v['properties'] as $key => $val) {
                if (isset($dict[$fileName]['properties'][$key]['comment']) && ($dict[$fileName]['properties'][$key]['comment'] != '')) {
                    $exportData['classes'][$k]['properties'][$key]['comment'] = $dict[$fileName]['properties'][$key]['comment'];
                }
                if (isset($dict[$fileName]['properties'][$key]['type']) && ($dict[$fileName]['properties'][$key]['type'] != '')) {
                    $exportData['classes'][$k]['properties'][$key]['type'] = rtrim($dict[$fileName]['properties'][$key]['type'], ':');
                }
            }
            foreach ($v['methods'] as $key => $val) {
                if (isset($dict[$fileName]['methods'])) {
                    $exportData['classes'][$k]['methods'] = $dict[$fileName]['methods'];
                }
            }
        }

        Dict::updateDict($extName, $exportData);
        return $exportData;
    }

    public static function getDict($extName) {
        $extName = strtolower($extName);
        if (empty(self::$_dicts) || !isset(self::$_dicts[$extName])) {
            $files = scandir(DICT_PATH . '/' . $extName);
            $arr = [];
            foreach ($files as $file) {
                if ($file == '.' || $file == '..') {
                    continue;
                }
                $content = file_get_contents(DICT_PATH . '/' . $extName . DS . $file);
                if (!$content) {
                    echo "the file " . $file . "not found\n";
                }
                $tmp = json_decode($content, true);
                if (!$tmp) {
                    echo "the file " . $file . " is not a legal json file\n";
                }
                if ($file == 'config.json') {
                    if (isset($tmp['alias'])) {
                        self::$_alias = $tmp['alias'];
                    }
                    self::$_config = $tmp;
                } else {
                    $arr[str_replace('.json', '', $file)] = $tmp;
                }

            }
            self::$_dicts[$extName] = $arr;
        }
        return self::$_dicts[$extName];
    }

    public static function getExports($extName) {
        $extName = strtolower($extName);
        if (empty(self::$_exports) || !isset(self::$_exports[$extName])) {
            self::$_exports[$extName] = Tool::export($extName);
        }
        return self::$_exports[$extName];
    }

    public static function getFunctionParamType($mv) {
        $type = '';
        if (self::checkVersion() && isset($mv) && ($mv != '')  && (!in_array($mv, ['mixed', 'unknown', 'void']))) {
            $splitArr = explode('|', $mv);
            if (count($splitArr) > 1) {
                if (trim($splitArr[0]) != 'bool' && trim($splitArr[0]) != 'boolean') {
                    $type = trim($splitArr[0]);
                } else {
                    $type = trim($splitArr[1]);
                }

            } else {
                $type = $mv;
            }
        }
        $type = self::transformDataType($type);
        return $type;
    }

    public static function checkVersion() {
        if(PHP_MAJOR_VERSION > 6) {
            return true;
        }
        return false;
    }

    public static function transformDataType($type) {
        if ($type == 'long') {
            return 'int';
        } elseif ($type == 'function') {
            return 'Callable';
        } elseif ($type == 'boolean') {
            return 'bool';
        }
        $type = rtrim($type, ':');
        return $type;
    }

    public static function toString($value, $type = null) {
        if (is_array($value)) {
            $str = "[";
            $keys = array_keys($value);
            foreach ($keys as $key) {
                $str .= $key.'=>'.$value[$key];
            }
            $str .= "]";
        } else {
            if (is_numeric($value)) {
                $str = $value;
            } elseif(is_null($value)) {
                $str = null;
            }  else {
                if ($type) {
                    switch ($type) {
                        case 'int':
                            $str = (int) $value;
                            break;
                        case 'float':
                            $str = (float) $value;
                            break;
                        case 'bool':
                            if ($value == 'true' || $value == true){
                                $str = 'true';
                            } elseif ($value == 'false' || $value == false) {
                                $str = 'false';
                            } else {
                                $str = $value == '' ? 'false' : 'true';
                            }
                            break;
                        default:
                            $str = "'".$value."'";
                            break;
                    }
                } else {
                    if ($value == '') {
                        $str = "''";
                    } else {
                        $str = $value;
                    }
                }
            }
        }
        return $str;
    }

    public static function getReturnType($value) {
        $valueArr = explode('|', $value);
        $map = [];
        if (count($valueArr) == 2 && ($valueArr[0] == 'bool' || $value[0] == 'boolean')) {
            $valueArr[0] = $valueArr[1];
            $valueArr[1] = null;
        }
        $map['type'] = $valueArr[0];
        $map['value'] = $valueArr;
        if(strtolower($valueArr[0]) == 'throwable') {
            $map['type'] = 'exception';
        }elseif(!in_array(strtolower($valueArr[0]), ['int', 'string', 'float', 'callable', 'array', 'bool', 'null'])) {

            if (class_exists($valueArr[0])) {
                $class = new \ReflectionClass($valueArr[0]);
                if ($class->hasMethod('__construct')) {
                    $m = $class->getMethod('__construct');
                    if ($m->isPublic()) {
                        if ($class->isInterface() || $class->hasMethod('__construct')) {
                            $map['type'] = 'interface';
                        } else {
                            $map['type'] = 'object';
                        }
                    } else {
                        $map['type'] = 'interface';
                    }

                } else {
                    $map['type'] = 'interface';
                }

            }

        }
        $map['type'] = self::transformDataType($map['type']);
        return $map;
    }

    public static function inArray($ele, $arr) {
        foreach ($arr as $value) {
            if (strtolower($ele) == strtolower($value)) {
                return true;
            }
        }
        return false;
    }

    public static function toCamel($className) {
        $classNameArr = explode('_', $className);
        $newName = '';
        foreach ($classNameArr as $tmp) {
            $newName .= ucfirst($tmp) . '\\';
        }
        return $newName;
    }

    private static function _createDoc($ext, $data) {
        $common = $content = "<?php\n/**\n* " . ucfirst($ext) . "自动补全类(基于" . $data['version'] . "版本)\n* @author ryan(http://www.zhangenrui.com)\n* @modified " . date("Y/m/d") . "\n*/\n";

        $data['comment'] = str_replace("\n", "\n*", "\n" . $data['comment']);
        $content .= "\n/**" . $data['comment'] . "\n*/\n";
        if (!empty($data['ini'])) {
            $content .= "/**\n * php.ini配置选项: \n\n";
            foreach ($data['ini'] as $k => $v) {
                $content .= " * " . $v['comment'];
                if (isset($v['options']) && !empty($v['options'])) {
                    $content .= '[备选值：';
                    foreach ($v['options'] as $ok => $ov) {
                        $content .= $ov['value'] . '(' . $ov['comment'] . ');';
                    }
                    $content .= ']';
                }
                $content .= "\n";
                $content .= " * " . $k . '=' . $v['value'] . "\n\n";
            }
            $content .= "*/\n";
        }
        foreach ($data['constants'] as $k => $v) {
            if (!is_numeric($v['value'])) {
                $v['value'] = "'" . $v["value"] . "'";
            }
            $content .= "/**\n" . $v['comment'] . "\n*/\n";
            $content .= "define('" . $k . "', " . $v['value'] . ");\n";
        }
        foreach ($data['functions'] as $m => $mv) {
            $mv['comment'] = str_replace("\n", "\n*", "\n" . $mv['comment']);
            $content .= "/**\n* " . $mv['comment'] . "\n";
            $mv['example'] = str_replace("\n", "\n* ", "\n" . $mv['example']);
            $content .= "* @example " . $mv['example'] . "\n";

            $params = '';
            if (isset($mv['parameters'])) {
                foreach ($mv['parameters'] as $param => $paramValue) {
                    $content .= "* @param ";
                    if ($paramValue['type'] == 'array') {
                        $params .= 'Array $' . $param;
                        $content .= 'array $' . $param;
                    } else if ($paramValue['type'] == 'callable') {
                        $params .= 'Callable $' . $param;
                        $content .= 'callable $' . $param;
                    } else {
                        if ($paramValue['type'] == 'unknown') {
                            $content .= 'mixed $' . $param;
                        } else {
                            if (is_array($paramValue['type'])) {
                                $paramValue['type'] = trim(implode('|', $paramValue['type']), '|');
                            }
                            $content .= $paramValue['type'] . ' $' . $param;
                        }
                        $paramType = self::getFunctionParamType($paramValue['type']);
                        if ($paramType != "") {
                            $params .= $paramType . " ";
                        }
                        $params .= '$' . $param;
                    }
                    if (isset($paramValue['value'])) {
                        if ($paramValue['value'] == '') {
                            $params .= " = ''";
                        } else {
                            $params .= " = " . self::toString($paramValue['value']);
                        }

                    }
                    if (isset($paramValue['comment'])) {
                        $content .= ':' . $paramValue['comment'] . " ";
                    }
                    if (isset($paramValue['options']) && !empty($paramValue['options'])) {
                        $content .= '[备选值：';
                        foreach ($paramValue['options'] as $ok => $ov) {
                            $content .= self::toString($ov['value']) . '(' . $ov['comment'] . ');';
                        }
                        $content .= ']';
                    }
                    $params .= ', ';
                    $content .= "\n";
                }
                $params = trim($params);
                $params = trim($params, ',');

            }
            $content .= "* @return " . $mv['return'] . "\n*/\n";

            $content .= "function " . $m . "(";
            $content .= $params;
            $content .= ")";
            if (self::checkVersion() && isset($mv['return']) && ($mv['return'] != '') && (!in_array($mv['return'], ['mixed', 'unknown', 'void']))) {
                $map = self::getReturnType($mv['return']);
                if ($map['type'] == 'object') {
                    if (!isset($mv['body'])) {
                        $mv['body'] = 'return new ' . $map['value'][0] . '();';
                    }
                } elseif ($map['type'] == 'exception') {
                    $mv['body'] = 'return new Exception();';
                } else {
                    if (count($map['value']) > 1) {
                        $content .= ": ?" . trim($map['value'][0]);
                    } else {
                        $content .= ": " . $mv['return'];
                    }
                }
            }
            $content .= "\n{\n";
            if (isset($mv['body']) && $mv['body'] != '') {
                $content .= "    " . $mv['body'];
            }
            $content .= "\n}\n\n";
        }

        //将函数与常量定义放到一个文件
        $classes = array_keys($data['classes']);
        $extContent = $content;
        $res = true;
        //创建目录
        Tool::createDir(OUTPUT_PATH, ucfirst($ext));
        $baseDir = OUTPUT_PATH . '/' . ucfirst($ext) . '/';
        $useNameSpace = false;
        if (!self::inArray($ext, $classes)) {
            if (!empty($data['classes'])) {
                $tmp = $data['classes'];
                $tmp = array_pop($tmp);
                if ($tmp['namespace'] != '') {
                    $useNameSpace = true;
                    $res = Tool::writeFile($baseDir . $ext . '.namespace.php', $content);
                } else {
                    $res = Tool::writeFile($baseDir . $ext . '.php', $content);
                }
            } else {
                $res = Tool::writeFile($baseDir . $ext . '.php', $content);
            }
        }

        $aliasClasses = [];
        if (isset(self::$_alias['classes'])) {
            $aliasClasses = array_flip(Tool::getAliasName(self::$_alias['classes']));
        }
        if (isset($data['classes']) && !empty($data['classes'])) {
            foreach ($data['classes'] as $class => $value) {
                $sourceClassName = $class;
                $isAlias = isset($aliasClasses[$sourceClassName]) ? true : false;
                if (strtolower($sourceClassName) != strtolower($ext)) {
                    $content = $common;
                    $value['comment'] = str_replace("\n", "\n*", "\n" . $value['comment']);
                    $content .= "\n/**" . $value['comment'] . "\n*/\n";
                } else {
                    $content = $extContent;
                }

                $arr = explode("\\", $sourceClassName);
                $namespace = '';
                $aliasNamespace = '';
                $count = count($arr);
                if ($count >= 2) {
                    $class = $arr[$count - 1];
                    array_pop($arr);
                    $namespace = trim(implode("\\", $arr), "\\");
                    $content .= 'namespace ' . $namespace . ";\n";
                }
                if (isset($value['isInterface'])) {
                    $content .= "interface " . $class;
                } else {
                    if (isset($value['isAbstract'])) {
                        $content .= 'abstract ';
                    }
                    if (isset($value['isFinal']) && $value['isFinal']) {
                        $content .= 'final ';
                    }
                    $content .= 'class ' . $class;
                    if (isset($value['extends'])) {
                        if ($namespace != '') {
                            $value['extends'] = "\\" . $value['extends'];
                        }
                        $content .= ' extends ' . $value['extends'];
                    }
                    if (isset($value['interfaces']) && !empty($value['interfaces'])) {
                        if (isset(self::$_config['excepts'])) {
                            $interfaceCount = count($value['interfaces']);
                            for ($i = 0; $i < $interfaceCount; $i++) {
                                if (in_array($value['interfaces'][$i], self::$_config['excepts'])) {
                                    unset($value['interfaces'][$i]);
                                }
                            }
                        }
                        if ($useNameSpace) {
                            $interfaces = '';
                            foreach ($value['interfaces'] as $interface) {
                                $interfaces .= '\\' . $interface . ',';
                            }
                            $interfaces = trim($interfaces, ',');
                        } else {
                            $interfaces = trim(implode(", ", $value['interfaces']), ',');
                        }
                        $content .= ' implements ' . $interfaces;
                    }
                }
                $arrTmp = [];
                if ($isAlias) {
                    $arrTmp = explode("\\", $aliasClasses[$sourceClassName]);
                    if (count($arrTmp) >= 2) {
                        $namespaceArrTmp = $arrTmp;
                        array_pop($namespaceArrTmp);
                        $aliasNamespace = trim(implode("\\", $namespaceArrTmp), "\\");
                    }
                }
                $content .= "\n{\n";
                foreach ($value['consts'] as $const => $val) {
                    $val['comment'] = str_replace("\n", "\n    *", "\n" . $val['comment']);
                    $content .= "    /**     " . $val['comment'];
                    $content .= "\n    */\n    const " . $const;
                    if (isset($val['value'])) {
                        if (!is_numeric($val['value'])) {
                            $val['value'] = "'" . $val['value'] . "'";
                        }
                        $content .= "    =    " . $val['value'];
                    }
                    $content .= ";\n\n";
                }
                foreach ($value['properties'] as $p => $pv) {
                    $pv['comment'] = str_replace("\n", "\n     * ", "\n" . $pv['comment']);
                    if (strpos($pv['comment'], '@var')) {
                        $content .= "    /**\n     * " . $pv['comment'] . "\n";
                    } else {
                        $content .= "    /**\n     * @var " . $pv['type'] . " $" . $p . " " . $pv['comment'] . "\n";
                    }
                    $pv['access'] = isset($pv['access']) ? $pv['access'] : 'public';
                    $content .= "     * @access " . $pv['access'] . "\n";
                    if (isset($pv['example'])) {
                        $pv['example'] = str_replace("\n", "\n     * ", "\n" . $pv['example']);
                        $content .= "     * @example " . $pv['example'] . "\n";
                    }
                    $content .= "     */\n";
                    $content .= '    ' . $pv['access'];
                    if (isset($pv['isStatic']) && $pv['isStatic']) {
                        $content .= ' static ';
                    }
                    $content .= " $" . $p;
                    if (isset($pv['value']) && !is_null($pv['value'])) {
                        if (!is_numeric($pv['value'])) {
                            if (is_array($pv['value'])) {
                                $pv['value'] = "  " . self::toString($pv['value']);
                            } else {
                                $pv['value'] = self::toString($pv['value'], $pv['type']);
                            }

                        }
                        $content .= '    =    ' . $pv['value'];
                    } else {
                        if (strtolower($pv['type']) == 'array') {
                            $content .= '    =    array()';
                        }
                    }
                    $content .= ";\n\n";
                }
                foreach ($value['methods'] as $m => $mv) {
                    $mv['comment'] = str_replace("\n", "\n     *", "\n" . $mv['comment']);
                    $content .= "    /**\n     * " . $mv['comment'] . "\n";
                    $mv['example'] = str_replace("\n", "\n     * ", $mv['example']);
                    $content .= "     * @example " . $mv['example'] . "\n";
                    $params = '';
                    if (isset($mv['parameters']) && !empty($mv['parameters'])) {
                        foreach ($mv['parameters'] as $param => $paramValue) {
                            if (is_array($paramValue['type'])) {
                                $paramValue['type'] = isset($paramValue[0]) ? $paramValue[0] : 'unknown';
                            }
                            $content .= "     * @param ";
                            if ($paramValue['type'] == 'array') {
                                $params .= 'Array $' . $param;
                                $content .= 'array $' . $param;
                            } else if ($paramValue['type'] == 'callable') {
                                $params .= 'Callable $' . $param;
                                $content .= 'callable $' . $param;
                            } else {
                                if (!$paramValue['type'] || ($paramValue['type'] == '')) {
                                    $paramValue['type'] = 'mixed';
                                }
                                if ($paramValue['type'] == 'unknown') {
                                    $content .= ' mixed $' . $param;
                                } else {
                                    $content .= $paramValue['type'] . ' $' . $param;
                                }
                                $paramType = self::getFunctionParamType($paramValue['type']);
                                if ($paramType != "") {
                                    $params .= $paramType . " ";
                                }
                                $params .= '$' . $param;
                            }
                            if (isset($paramValue['value'])) {
                                if ($paramValue == '') {
                                    $params .= " = ''";
                                } else {
                                    if ($paramValue['type'] == 'array') {
                                        $params .= " = []";
                                    } else {

                                        $params .= " = " . self::toString($paramValue['value'], $paramValue['type']);
                                    }

                                }

                            }
                            $content .= " " . $paramValue['comment'];
                            if (isset($paramValue['options']) && !empty($paramValue['options'])) {
                                $content .= '[备选值：';
                                foreach ($paramValue['options'] as $ok => $ov) {
                                    $content .= self::toString($ov['value']) . '(' . $ov['comment'] . ')';
                                }
                                $content .= '        ]';
                            }
                            $params .= ', ';
                            $content .= "\n";
                        }
                        $params = trim($params);
                        $params = trim($params, ',');
                    }
                    $content .= "     * @return " . $mv['return'] . "\n     */\n";
                    if (!isset($mv['access'])) {
                        $mv['access'] = 'public';
                    }
                    $content .= "    " . $mv['access'];
                    if (isset($mv['isStatic']) && $mv['isStatic']) {
                        $content .= ' static ';
                    }
                    if (isset($mv['isFinal'])) {
                        $content .= ' final ';
                    }
                    if (isset($mv['isAbstract']) && !isset($value['isInterface'])) {
                        $content .= ' abstract ';
                    }

                    $content .= " function " . $m . "(";
                    $content .= $params;
                    $content .= ")";
                    if (self::checkVersion() && isset($mv['return']) && ($mv['return'] != '') && (!in_array($mv['return'], ['mixed', 'unknown', 'void']))) {

                        $map = self::getReturnType($mv['return']);
                        if ($map['type'] == 'object') {
                            if (!isset($mv['body'])) {
                                if ($useNameSpace) {
                                    $mv['body'] = 'return new ' . self::toCamel($map['value'][0]) . '();';
                                } else {
                                    $mv['body'] = 'return new ' . $map['value'][0] . '();';
                                }
                            }

                        } elseif ($map['type'] == 'interface') {
                            if (!$useNameSpace) {
                                if (count($map['value']) > 1) {
                                    $content .= ": ?" . trim($map['value'][0]);
                                } else {
                                    $content .= ": " . $mv['return'];
                                }
                            }

                        } elseif ($map['type'] == 'exception') {
                            if (!isset($mv['body'])) {
                                $mv['body'] = 'return new Exception();';
                            }
                        } else {
                            if (count($map['value']) > 1) {
                                $content .= ": ?" . trim($map['value'][0]);
                            } else {
                                $content .= ": " . $mv['return'];
                            }
                        }
                    }
                    if (isset($mv['isAbstract']) || isset($value['isInterface'])) {
                        $content .= ";\n\n";
                    } else {
                        $content .= "\n    {\n    ";
                        if (isset($mv['body']) && ($mv['body'] != '')) {
                            $content .= "    " . $mv['body'];
                        }
                        $content .= "\n    }\n\n";
                    }
                }

                $content .= "}\n\n";
                if ($namespace != '') {
                    $fullDir = Tool::createDir(OUTPUT_PATH, $namespace);
                } else {
                    $fullDir = $baseDir;
                }

                $fileName = rtrim($fullDir, '/') . '/' . $class . '.php';
                $res = Tool::writeFile($fileName, $content);
                if ($isAlias) {
                    $aliasContent = $content;
                    $aliasClass = $arrTmp[count($arrTmp) - 1];
                    $aliasContent = str_replace('class ' . $class, 'class ' . $aliasClass, $aliasContent);
                    if ($aliasNamespace != '') {
                        $aliasContent = str_replace('namespace ' . $namespace, 'namespace ' . $aliasNamespace, $aliasContent);
                    } else {
                        $aliasContent = str_replace('namespace ' . $namespace . ';', '', $aliasContent);
                    }

                    if ($aliasNamespace != '') {
                        $fullDir = Tool::createDir($baseDir, $aliasNamespace);
                    } else {
                        $fullDir = $baseDir;
                    }
                    $aliasFileName = rtrim($fullDir, '/') . '/' . $aliasClass . '.php';
                    $res = Tool::writeFile($aliasFileName, $aliasContent);
                }
            }
        }

        return $res;
    }
}