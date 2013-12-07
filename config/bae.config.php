<?php 
/**
 * 这是百度bae核心配置
 * @date 2013-12-7 上午02:22:27
 * @author Yongsen
 * @version 0.0.0
*/



/**
 * @desc: 功能描述(调试模式 =true,上线建议=false)
 * false则直接显示HTTP404
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('DEBUG', false);

/**
 * @desc: 功能描述(设置当前工作目录为常量  后期文件检查常量是否存在)
 * @author: Yongsen
 * @date: 2013-12-7

if($f = readlink(dirname(__FILE__).'../')){
	define('BASEPATH',str_ireplace('config', '', dirname(__FILE__)));
}else{
	base::error('文件夹不存在,请新建或者检查路径是否正确');
}
*/


/**
 * @desc: 功能描述(当前程序顶级目录)
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('BASEPATH','');


/**
 * @desc: 功能描述(debug调试)
 * @author: Yongsen
 * @date: 2013-12-7
*/
if(isset($_GET['debug'])){
	ECHO BASEPATH;
}


/**
 * @desc: 功能描述(参数配置 ,初始化,这里应该读取  防止后面的代码替换)
 * @author: Yongsen
 * @date: 2013-12-7
*/
$config=array();

/**
 * @desc: 功能描述(参数配置 ,设置默认方法)
 * @author: Yongsen
 * @date: 2013-12-7
*/
$config['default_method']='index';
//debug 这里应该用程序读取$config
define('DEFAULT_METHOD', $config['default_method']);

/**
 * @desc: 功能描述(参数配置 ,设置默认控制器)
 * @author: Yongsen
 * @date: 2013-12-7
*/
$config['default_model']='bae';
//debug 这里应该用程序读取$config
define('DEFAULT_MODEL', $config['default_model']);

/**
 * @desc: 功能描述(参数配置 ,网站地址)
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('BASE_URL', 'http://www.self.com/');

/**
 * @desc: 功能描述(数据库主库的配置 ,ip地址,数据库主库的配置 可以分库)
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('DB_HOST_B', getenv('HTTP_BAE_ENV_ADDR_SQL_IP'));

/**
 * @desc: 功能描述(数据库主库的配置 ,端口,数据库主库的配置 可以分库)
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('DB_PORT_B', getenv('HTTP_BAE_ENV_ADDR_SQL_PORT'));

/**
 * @desc: 功能描述(数据库主库的配置 ,用户名,数据库主库的配置 可以分库)
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('DB_USER_B', getenv('HTTP_BAE_ENV_AK'));

/**
 * @desc: 功能描述(数据库主库的配置 ,密码,数据库主库的配置 可以分库)
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('DB_PASS_B', getenv('HTTP_BAE_ENV_SK'));

/**
 * @desc: 功能描述(数据库主库的配置 ,数据库,数据库主库的配置 可以分库)
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('DB_NAME_B', 'iXCwUeEdJRjYecNtYXdQ');

/**
 * @desc: 功能描述(设置$config的文件名字,让config_class读取)
 * @author: Yongsen
 * @date: 2013-12-7
*/
define('CONFIG_INI_FILE','bae');