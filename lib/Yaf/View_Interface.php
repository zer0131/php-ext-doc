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
     * @return 
     */
    public function assign($name, $value);

    /**
     * 
     *
     * @example 
     * @param  mixed $tpl 
     * @param  mixed $tpl_vars 
     * @return 
     */
    public function display($tpl, $tpl_vars);

    /**
     * 
     *
     * @example 
     * @param  mixed $tpl 
     * @param  mixed $tpl_vars 
     * @return 
     */
    public function render($tpl, $tpl_vars);

    /**
     * 
     *
     * @example 
     * @param  mixed $template_dir 
     * @return 
     */
    public function setScriptPath($template_dir);

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getScriptPath();

}

