<?php 
/**
 * ���ǰٶ�bae��������
 * @date 2013-12-7 ����02:22:27
 * @author Yongsen
 * @version 0.0.0
*/



/**
 * @desc: ��������(����ģʽ =true,���߽���=false)
 * false��ֱ����ʾHTTP404
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('DEBUG', false);

/**
 * @desc: ��������(���õ�ǰ����Ŀ¼Ϊ����  �����ļ���鳣���Ƿ����)
 * @author: Yongsen
 * @date: 2013-12-7

if($f = readlink(dirname(__FILE__).'../')){
	define('BASEPATH',str_ireplace('config', '', dirname(__FILE__)));
}else{
	base::error('�ļ��в�����,���½����߼��·���Ƿ���ȷ');
}
*/


/**
 * @desc: ��������(��ǰ���򶥼�Ŀ¼)
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('BASEPATH','');


/**
 * @desc: ��������(debug����)
 * @author: Yongsen
 * @date: 2013-12-7
*/
if(isset($_GET['debug'])){
	ECHO BASEPATH;
}


/**
 * @desc: ��������(�������� ,��ʼ��,����Ӧ�ö�ȡ  ��ֹ����Ĵ����滻)
 * @author: Yongsen
 * @date: 2013-12-7
*/
$config=array();

/**
 * @desc: ��������(�������� ,����Ĭ�Ϸ���)
 * @author: Yongsen
 * @date: 2013-12-7
*/
$config['default_method']='index';
//debug ����Ӧ���ó����ȡ$config
define('DEFAULT_METHOD', $config['default_method']);

/**
 * @desc: ��������(�������� ,����Ĭ�Ͽ�����)
 * @author: Yongsen
 * @date: 2013-12-7
*/
$config['default_model']='bae';
//debug ����Ӧ���ó����ȡ$config
define('DEFAULT_MODEL', $config['default_model']);

/**
 * @desc: ��������(�������� ,��վ��ַ)
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('BASE_URL', 'http://www.self.com/');

/**
 * @desc: ��������(���ݿ���������� ,ip��ַ,���ݿ���������� ���Էֿ�)
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('DB_HOST_B', getenv('HTTP_BAE_ENV_ADDR_SQL_IP'));

/**
 * @desc: ��������(���ݿ���������� ,�˿�,���ݿ���������� ���Էֿ�)
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('DB_PORT_B', getenv('HTTP_BAE_ENV_ADDR_SQL_PORT'));

/**
 * @desc: ��������(���ݿ���������� ,�û���,���ݿ���������� ���Էֿ�)
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('DB_USER_B', getenv('HTTP_BAE_ENV_AK'));

/**
 * @desc: ��������(���ݿ���������� ,����,���ݿ���������� ���Էֿ�)
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('DB_PASS_B', getenv('HTTP_BAE_ENV_SK'));

/**
 * @desc: ��������(���ݿ���������� ,���ݿ�,���ݿ���������� ���Էֿ�)
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('DB_NAME_B', 'iXCwUeEdJRjYecNtYXdQ');

/**
 * @desc: ��������(����$config���ļ�����,��config_class��ȡ)
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('CONFIG_INI_FILE','bae');