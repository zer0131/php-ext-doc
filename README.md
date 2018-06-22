# php-ext-doc

PHP扩展类生成器，生成的文档类可用于PHPStorm等IDE自动提示。

## 使用

1. 下载

```sh
git clone https://github.com/zer0131/php-ext-doc.git
```

2. 生成

```sh
php generator.php $extension create
```

3. 引入

将**data/output**下生成的文件移动到适当的地方，然后使用PHPStorm将其加载进来。

## 注意

执行**dict**命令可生成json文件，后期可人工的更改，如：给未添加注释的方法添加注释

## 已生成的文档

**lib**目录下已生成了一些扩展文档可直接使用

扩展|版本
-----|-----
yaf|3.0.5
yac|2.0.2
yar|2.0.3
yaml|2.0.2
redis|3.1.4
swoole|2.2.0
