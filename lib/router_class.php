<?php if(defined(BASEPATH))  exit('No direct script access allowed');
/**
 * ����һ��·����
 * @date 2013-12-7 ����02:20:23
 * @author Yongsen
 * @version 0.0.0
*/
class router{
	public function __construct(){
		
		
	}
	public function start(){
		//����config������Ϣ
		base::load_class('config');
		//��������
		$_GET = sec_gpc($_GET);
		$_POST = sec_gpc($_POST);
		$_COOKIE = sec_gpc($_COOKIE);
		$class = isset($_GET['c'])? $_GET['c'] : config::get_config_value('default_model');
		$model = isset($_GET['m'])? $_GET['m'] : config::get_config_value('default_method');
		if(file_exists($file = MODELS_DIR .strtolower($class). '_class'.'.php' )){
			require_once $file;
			//�ж������$file�ļ��Ƿ���$class��
			if(!class_exists($class)){
				exit('��������Ŀ�����������');
			}
			//�ж������$class�����Ƿ���$model����
			if(method_exists($class, $model)){
				$class = new $class();
				return $class->$model(); 
			}else{
				exit('��������Ŀ������������������');
			}
		}else{
			exit('��������Ŀ�����������' . $class . '===��ַ'.$file);
		}
	}
}