<?php if(defined(BASEPATH))  exit('No direct script access allowed');
/**
 * 这是一个基类
 * @date 2013-12-7 上午02:20:09
 * @author Yongsen
 * @version 0.0.0
*/
class base{
	public $db = '';
	function __construct(){
		
	}
	/**
	 * 静态方法  运行 ...
	 * @date: 2013-12-7
	 * @author: Yongsen
	*/
	public static function run(){
		
		$a = new router();
		$a->start();
	}
	/**
	 *  加载程序到当前object属性中让子类获得...
	 * @author: Yongsen
	 * @date: 2013-12-7
	 * @param string $class
	 * @return object
	*/
	public function get_attribute($class){
		$this->$class  = self::load_class($class);
	}
	/**
	 * 加载核心程序...
	 * @author: Yongsen
	 * @date: 2013-12-7
	 * @param string $class
	 * @return object
	*/
	public static function load_class($class){
		if(file_exists($file = LIB_DIR .strtolower($class). '_class'.'.php' )){
			require_once $file;
			//判断载入的$file文件是否有$class类
			if(!class_exists($class)){
				exit('您所请求的控制器不存在');
			}else{
				return new $class();
			}
		}else{
			exit('您加载的类不存在' . $class . '===地址'.$file);
		}
	}
}