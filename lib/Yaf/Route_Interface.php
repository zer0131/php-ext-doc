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
interface Route_Interface
{
    /**
     *
     *
     * @example
     * @param  mixed $request
     * @return bool
     */
    public function route($request);

    /**
     *
     *
     * @example
     * @param array $info
     * @param array $query
     * @return string
     */
    public function assemble(Array $info, array $query);

}

