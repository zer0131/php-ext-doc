<?php
/**
 * @author: zhangenrui
 * @date: 2018/6/21
 * @desc: 工具类
 */

namespace PHPExtDoc;

class Tool {
    public static function export($prefix, $isLocal = false, $delimiter = '_') {
        $data = [];
        if ($isLocal) {
            $constName = strtoupper($prefix).'_VERSION';
            $data['comment'] = '';
            $data['constants'] = self::getLocalConstants($prefix);
            $data['version'] = isset($data['constants'][$constName]) ? $data['constants'][$constName]['value'] : '';
            $data['ini'] = [];
            $data['functions'] = self::getLocalFunctions($prefix);
            $data['classes'] = [];
            $classNames = self::getLocalClassNames($prefix, $delimiter);
        } else {
            $upper = strtoupper($prefix);
            $ext = new \ReflectionExtension($upper);
            $data['version'] = $ext->getVersion();
            $data['comment'] = '';
            $data['constants'] = self::getConstants($ext);
            $data['ini'] = self::getIniEntries($ext);
            $data['functions'] = self::getFunctions($ext);
            $data['classes'] = [];
            $classNames = self::getClassNames($ext);
        }

        foreach ($classNames as $k => $className) {
            $data['classes'][$k] = $className;
            $data['classes'][$k]['consts'] = self::getConsts($className['object']);
            $data['classes'][$k]['properties'] = self::getProperties($className['object']);
            $data['classes'][$k]['methods'] = self::getMethods($className['object']);
        }

        return $data;
    }

    public static function getLocalConstants($prefix) {
        $constants = get_defined_constants();
        $arr = [];
        $prefix = strtoupper($prefix);
        foreach ($constants as $constant => $v) {
            if (stripos($constant, $prefix . '_') === 0) {
                $arr[$constant] = [
                    'value' => $v,
                    'type' => self::getVarDataType($v),
                    'comment' => ''
                ];
            }
        }
        return $arr;
    }

    public static function getLocalFunctions($prefix = '', $strict = false) {
        $functions = get_defined_functions();
        $arr = [];
        $targets = $strict ? array_merge($functions['internal'], $functions['user']) : $functions['user'];
        foreach ($targets as $function) {
            $matched = $strict ? $function == $prefix : stripos($function, $prefix . '_') === 0;
            if ($matched) {
                $func = new \ReflectionFunction($function);
                $name = $function;
                $arr[$name]['comment'] = $func->getDocComment();
                $arr[$name]['parameters'] = [];
                $arr[$name]['return'] = '';
                $arr[$name]['example'] = '';
                $params = $func->getParameters();
                foreach ($params as $param) {
                    $paramName = $param->getName();
                    $type = 'unknown';
                    if ($param->hasType()) {
                        $type = $param->getType();
                    }

                    $arr[$name]['parameters'][$paramName] = [
                        'comment' => '',
                        'options' => [],
                        'type' => $type
                    ];
                }
            }

        }
        return $arr;
    }

    public static function getLocalClassNames($prefix = '', $delimiter = '_', $strict = false) {
        $classNames = array_unique(get_declared_classes());
        $arr = [];
        foreach ($classNames as $className) {
            $matched = $strict ? $className == $prefix : stripos($className, $prefix . $delimiter) === 0;
            if ($matched) {
                $classObj = new \ReflectionClass($className);
                $name = $className;
                $arr[$name]['object'] = $classObj;
                $arr[$name]['comment'] = $classObj->getDocComment();
                $arr[$name]['namespace'] = $classObj->getNamespaceName();
                $parentClass = $classObj->getParentClass();
                if ($parentClass) {
                    $arr[$name]['extends'] = $parentClass->getName();
                }
                if ($classObj->isAbstract()) {
                    $arr[$name]['isAbstract'] = 1;
                }
                if ($classObj->isFinal()) {
                    $arr[$name]['isFinal'] = 1;
                }
                if ($classObj->isInterface()) {
                    $arr[$name]['isInterface'] = 1;
                }
                $arr[$name]['interfaces'] = $classObj->getInterfaceNames();
            }

        }
        return $arr;
    }

    public static function getConstants(\ReflectionExtension $reflection) {
        $constants = $reflection->getConstants();
        $arr = [];
        foreach ($constants as $k => $v) {
            $arr[$k] = [
                'value' => $v,
                'type' => self::getVarDataType($v),
                'comment' => ''
            ];
        }
        return $arr;
    }

    public static function getIniEntries(\ReflectionExtension $reflection) {
        $entries = $reflection->getINIEntries();
        $arr = [];
        foreach ($entries as $key => $value) {
            $arr[$key] = [
                'value' => $value,
                'options' => [],
                'comment' => ''
            ];
        }
        return $arr;
    }

    public static function getFunctions(\ReflectionExtension $reflection) {
        $functions = $reflection->getFunctions();
        $arr = [];
        foreach ($functions as $func) {
            $name = $func->getName();
            $arr[$name]['comment'] = $func->getDocComment();
            $arr[$name]['parameters'] = [];
            $arr[$name]['return'] = '';
            if ($func->hasReturnType()) {
                $arr[$name]['return'] = self::transformDataType($func->getReturnType());
            }
            $arr[$name]['example'] = '';
            $params = $func->getParameters();
            foreach ($params as $param) {
                $paramName = $param->getName();
                if ($paramName == "") {
                    continue;
                }
                $type = '';
                if ($param->hasType()) {
                    $type = $param->getType();
                }
                $defaultValue = null;
                if ($param->isDefaultValueAvailable()) {
                    $defaultValue = $param->getDefaultValue();
                    if ($type == '') {
                        $type = self::getVarDataType($param->getDefaultValue());
                    }
                }

                $arr[$name]['parameters'][$paramName] = [
                    'comment' => '',
                    'options' => [],
                    'type' => $type,
                    'value' => $defaultValue
                ];
            }
        }
        return $arr;
    }

    public static function getClassNames(\ReflectionExtension $reflection) {
        $classNames = $reflection->getClasses();
        $arr = [];
        foreach ($classNames as $className) {
            $name = $className->getName();
            $arr[$name]['object'] = $className;
            $arr[$name]['comment'] = $className->getDocComment();
            $arr[$name]['namespace'] = $className->getNamespaceName();
            $parentClass = $className->getParentClass();
            if ($parentClass) {
                $arr[$name]['extends'] = $parentClass->getName();
            }
            if ($className->isAbstract()) {
                $arr[$name]['isAbstract'] = 1;
            }
            if ($className->isFinal()) {
                $arr[$name]['isFinal'] = 1;
            }
            if ($className->isInterface()) {
                $arr[$name]['isInterface'] = 1;
            }
            $arr[$name]['interfaces'] = $className->getInterfaceNames();
        }
        return $arr;
    }

    public static function getConsts(\ReflectionClass $reflection) {
        $arr = [];
        $consts = $reflection->getConstants();
        foreach ($consts as $const => $value) {
            $arr[$const]['comment'] = '';
            $arr[$const]['type'] = self::getVarDataType($value);
            $arr[$const]['value'] = $value;
        }
        return $arr;
    }

    public static function getProperties(\ReflectionClass $reflection) {
        $arr = [];
        $properties = $reflection->getProperties();
        $defaultProperties = $reflection->getDefaultProperties();
        foreach ($properties as $property) {
            $name = $property->getName();
            if ($property->isPrivate()) {
                $arr[$name]['access'] = 'private';
            } else if ($property->isProtected()) {
                $arr[$name]['access'] = 'protected';
            } else {
                $arr[$name]['access'] = 'public';
            }
            $arr[$name]['type'] = 'unknown';
            $arr[$name]['comment'] = $property->getDocComment();
            $arr[$name]['isStatic'] = $property->isStatic();
            if (isset($defaultProperties[$name])) {
                $arr[$name]['value'] = $defaultProperties[$name];
            } else {
                if ($arr[$name]['isStatic'] && $property->isPublic()) {
                    $arr[$name]['value'] = $property->getValue();
                }
            }
            if (isset($arr[$name]['value'])) {
                $arr[$name]['type'] = self::getVarDataType($arr[$name]['value']);
            }
        }
        return $arr;
    }

    public static function getMethods(\ReflectionClass $reflection) {
        $methods = $reflection->getMethods();
        $isAbstractClass = $reflection->isAbstract();
        $arr = [];
        foreach ($methods as $method) {
            $name = $method->getName();
            if ($method->isPrivate()) {
                $arr[$name]['access'] = 'private';
            } else if ($method->isProtected()) {
                $arr[$name]['access'] = 'protected';
            } else {
                $arr[$name]['access'] = 'public';
            }
            if ($method->isFinal()) {
                $arr[$name]['isFinal'] = 1;
            }
            if ($method->isAbstract() && $isAbstractClass) {
                $arr[$name]['isAbstract'] = 1;
            }
            $arr[$name]['comment'] = $method->getDocComment();
            $arr[$name]['isStatic'] = $method->isStatic();
            $arr[$name]['return'] = '';
            if ($method->hasReturnType()) {
                $arr[$name]['return'] = self::transformDataType($method->getReturnType());
            }
            $arr[$name]['example'] = '';
            $params = $method->getParameters();
            $arr[$name]['parameters'] = [];
            foreach ($params as $param) {
                $paramName = $param->getName();
                if ($paramName == "") {
                    continue;
                }
                $type = 'unknown';
                if ($param->hasType()) {
                    $type = $param->getType();
                } else {
                    if ($param->isArray()) {
                        $type = 'array';
                    } else if ($param->isCallable()) {
                        $type = 'callable';
                    }

                }
                $arr[$name]['parameters'][$paramName]['comment'] = '';
                $arr[$name]['parameters'][$paramName]['type'] = $type;
                $arr[$name]['parameters'][$paramName]['options'] = [];
                if ($param->isDefaultValueAvailable()) {
                    $arr[$name]['parameters'][$paramName]['value'] = $param->getDefaultValue();
                    if ($type == 'unknown') {
                        $arr[$name]['parameters'][$paramName]['type'] = self::getVarDataType($param->getDefaultValue());
                    }
                }
            }
        }
        return $arr;
    }

    public static function getVarDataType($val) {
        if (is_int($val)) {
            return 'int';
        } elseif (is_string($val)) {
            return 'string';
        } elseif (is_null($val)) {
            return 'null';
        } elseif (is_bool($val)) {
            return 'bool';
        } elseif (is_float($val)) {
            return 'float';
        } elseif (is_array($val)) {
            return 'Array';
        } elseif (is_callable($val)) {
            return 'Callable';
        } elseif (is_resource($val)) {
            return 'resource';
        } elseif (is_object($val)) {
            return 'Object';
        } else {
            return 'unknown';
        }
    }

    public static function transformDataType($type) {
        if ($type == 'long') {
            return 'int';
        }
        return $type;
    }

    public static function writeFile($fileName, $content) {
        if (!is_string($content)) {
            $content = json_encode($content, JSON_UNESCAPED_UNICODE);
        }
        return file_put_contents($fileName, $content);
    }

    public static function createDir($baseDir, $namespace = false) {

        $fullDir = rtrim($baseDir, '/');
        if (!is_dir($fullDir)) {
            mkdir($baseDir);
        }
        if (!$namespace || $namespace == '') {
            return $fullDir;
        }
        $arr = explode("\\", $namespace);
        foreach ($arr as $dir) {
            $fullDir .= '/' . $dir;
            if (!is_dir($fullDir)) {
                mkdir($fullDir);
            }
        }
        return $fullDir;
    }

    public static function getAliasName($alias) {
        $aliasNames = [];
        if (is_string($alias)) {
            $alias = [$alias];
        }
        foreach ($alias as $row) {
            $tmp = new \ReflectionClass($row);
            $aliasNames[$row] = $tmp->getName();
        }
        return $aliasNames;
    }
}