<?php if(defined(BASEPATH))  exit('No direct script access allowed');
/**
 * ����һ������
 * @date 2013-12-7 ����02:20:09
 * @author Yongsen
 * @version 0.0.0
*/
class base{
	public $db = '';
	function __construct(){
		
	}
	/**
	 * ��̬����  ���� ...
	 * @date: 2013-12-7
	 * @author: Yongsen
	*/
	public static function run(){
		
		$a = new router();
		$a->start();
	}
	/**
	 *  ���س��򵽵�ǰobject��������������...
	 * @author: Yongsen
	 * @date: 2013-12-7
	 * @param string $class
	 * @return object
	*/
	public function get_attribute($class){
		$this->$class  = self::load_class($class);
	}
	/**
	 * ���غ��ĳ���...
	 * @author: Yongsen
	 * @date: 2013-12-7
	 * @param string $class
	 * @return object
	*/
	public static function load_class($class){
		if(file_exists($file = LIB_DIR .strtolower($class). '_class'.'.php' )){
			require_once $file;
			//�ж������$file�ļ��Ƿ���$class��
			if(!class_exists($class)){
				exit('��������Ŀ�����������');
			}else{
				return new $class();
			}
		}else{
			exit('�����ص��಻����' . $class . '===��ַ'.$file);
		}
	}
}