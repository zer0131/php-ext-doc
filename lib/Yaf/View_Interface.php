<?php
/**
* Yaf自动补全类(基于3.0.5版本)
* @author ryan(http://www.zhangenrui.com)
* @modified 2018/06/22
*/

/**
*
*/
namespace Yaf;
interface View_Interface
{
    /**
     *
     *
     * @example
     * @param  mixed $name
     * @param  mixed $value
     * @return bool
     */
    public function assign($name, $value);

    /**
     *
     *
     * @example
     * @param  mixed $tpl
     * @param  mixed $tpl_vars
     * @return bool
     */
    public function display($tpl, $tpl_vars);

    /**
     *
     *
     * @example
     * @param  mixed $tpl
     * @param  mixed $tpl_vars
     * @return string
     */
    public function render($tpl, $tpl_vars);

    /**
     *
     *
     * @example
     * @param  mixed $template_dir
     * @return void
     */
    public function setScriptPath($template_dir);

    /**
     *
     *
     * @example
     * @return void
     */
    public function getScriptPath();

}

