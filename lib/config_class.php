<?php if(defined(BASEPATH))  exit('No direct script access allowed');
/**
 * 这是一个配置文件类
 * @date 2013-12-7 上午11:46:57
 * @author Yongsen
 * @version 0.0.0
*/
class config{
	//设置成私有 不让别人读写  提供方法获取数据
	private static  $config = '';
	function __construct(){
		$this->get_config_file();
	}
	function get_config_file($filename=FALSE){
		if(!$filename){
			$filename = CONFIG_INI_FILE;
		}
		if(!$filename )exit('配置文件名称不能为空');
		if(!file_exists(CONFIG_DIR.$filename.'.config.ini'))exit('配置文件不存在');
		$config  = parse_ini_file(CONFIG_DIR.$filename.'.config.ini',true);
		self::$config = $config['default'];
	}
	/**
	 * 可以让外人读取参数 (建议设置成指定类才能读取)
	 * @date: 2013-12-7
	 * @author: Yongsen
	 * @return: return_type
	*/
	public static  function  get_config_value($name){
		return self::$config[$name];
	}
}