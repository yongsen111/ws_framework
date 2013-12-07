<?php if(defined(BASEPATH))  exit('No direct script access allowed');
/**
 * ����һ�������ļ���
 * @date 2013-12-7 ����11:46:57
 * @author Yongsen
 * @version 0.0.0
*/
class config{
	//���ó�˽�� ���ñ��˶�д  �ṩ������ȡ����
	private static  $config = '';
	function __construct(){
		$this->get_config_file();
	}
	function get_config_file($filename=FALSE){
		if(!$filename){
			$filename = CONFIG_INI_FILE;
		}
		if(!$filename )exit('�����ļ����Ʋ���Ϊ��');
		if(!file_exists(CONFIG_DIR.$filename.'.config.ini'))exit('�����ļ�������');
		$config  = parse_ini_file(CONFIG_DIR.$filename.'.config.ini',true);
		self::$config = $config['default'];
	}
	/**
	 * ���������˶�ȡ���� (�������ó�ָ������ܶ�ȡ)
	 * @date: 2013-12-7
	 * @author: Yongsen
	 * @return: return_type
	*/
	public static  function  get_config_value($name){
		return self::$config[$name];
	}
}