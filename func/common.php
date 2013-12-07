<?php if(defined(BASEPATH))  exit('No direct script access allowed');
/**
 * 常用方法
 * @date 2013-12-7 上午02:11:10
 * @author Yongsen
 * @version 0.0.0
*/

/**
 * 自动加载类库
 * @date: 2013-12-7
 * @author: Yongsen
 * @return: require_once($file);
*/
function __autoload($class) {
	if (strpos($class, 'Model') !== false) {
        //模型
        $name = str_replace('Model', '', $class);
        $file = APP_ROOT . 'model/' . strtolower($name) . '.model.php';
        if ( file_exists($file) ) {
            require_once($file);
        }
	} else if (strpos($class, 'Class') !== false) {
        //类库
        $name = str_replace('Class', '', $class);
        $file = APP_ROOT . 'libs/' . strtolower($name) . '.class.php';
        if ( file_exists($file) ) {
            require_once($file);
        }
	}
} 
/**
 * 过滤输入输出
 * @date: 2013-12-7
 * @author: Yongsen
 * @return: addslashes($value)
*/
function sec_gpc($value){
	$value= is_array($value) ? array_map("sec_gpc", $value) : addslashes($value);
	return $value;
}