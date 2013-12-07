<?php if(defined(BASEPATH))  exit('No direct script access allowed');
/**
 * 这是一个路由器
 * @date 2013-12-7 上午02:20:23
 * @author Yongsen
 * @version 0.0.0
*/
class router{
	public function __construct(){
		
		
	}
	public function start(){
		//加载config配置信息
		base::load_class('config');
		//过滤输入
		$_GET = sec_gpc($_GET);
		$_POST = sec_gpc($_POST);
		$_COOKIE = sec_gpc($_COOKIE);
		$class = isset($_GET['c'])? $_GET['c'] : config::get_config_value('default_model');
		$model = isset($_GET['m'])? $_GET['m'] : config::get_config_value('default_method');
		if(file_exists($file = MODELS_DIR .strtolower($class). '_class'.'.php' )){
			require_once $file;
			//判断载入的$file文件是否有$class类
			if(!class_exists($class)){
				exit('您所请求的控制器不存在');
			}
			//判断载入的$class类中是否有$model方法
			if(method_exists($class, $model)){
				$class = new $class();
				return $class->$model(); 
			}else{
				exit('您所请求的控制器不存在这个方法');
			}
		}else{
			exit('您所请求的控制器不存在' . $class . '===地址'.$file);
		}
	}
}