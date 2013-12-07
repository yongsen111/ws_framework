<?php if(defined(BASEPATH))  exit('No direct script access allowed');
/** 
 * 
 * 这是基础引用...
 * @var 0.1
 * @author Yongsen
*/
/* ---- 设置常量  ---- */
//     模板  view 目录
define('TPL_DIR',BASEPATH.'view/');
//     静态                目录
define('STATIC_DIR',BASEPATH.'static/');
//     模型                目录
define('MODELS_DIR',BASEPATH.'models/');
//     类                     目录
define('LIB_DIR',BASEPATH.'lib/');
//     常用方法      目录
define('FUNC_DIR',BASEPATH.'func/');
//     常用配置文件      目录
define('CONFIG_DIR',BASEPATH.'config/');
/* ---- 载入核心类  ---- */
//     基类
require_once LIB_DIR.'base_class.php';
//     路由
require_once LIB_DIR.'router_class.php';
//     数据库
require_once LIB_DIR.'db_class.php';
//     加载
//require_once MODELS_DIR.'loader.class.php';


/* ---- 载入常用方法  ---- */
//     常用方法
require_once FUNC_DIR.'common.php';
//require_once MODELS_DIR.'loader.class.php';


