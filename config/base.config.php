<?php if(defined(BASEPATH))  exit('No direct script access allowed');
/** 
 * 
 * ���ǻ�������...
 * @var 0.1
 * @author Yongsen
*/
/* ---- ���ó���  ---- */
//     ģ��  view Ŀ¼
define('TPL_DIR',BASEPATH.'view/');
//     ��̬                Ŀ¼
define('STATIC_DIR',BASEPATH.'static/');
//     ģ��                Ŀ¼
define('MODELS_DIR',BASEPATH.'models/');
//     ��                     Ŀ¼
define('LIB_DIR',BASEPATH.'lib/');
//     ���÷���      Ŀ¼
define('FUNC_DIR',BASEPATH.'func/');
//     ���������ļ�      Ŀ¼
define('CONFIG_DIR',BASEPATH.'config/');
/* ---- ���������  ---- */
//     ����
require_once LIB_DIR.'base_class.php';
//     ·��
require_once LIB_DIR.'router_class.php';
//     ���ݿ�
require_once LIB_DIR.'db_class.php';
//     ����
//require_once MODELS_DIR.'loader.class.php';


/* ---- ���볣�÷���  ---- */
//     ���÷���
require_once FUNC_DIR.'common.php';
//require_once MODELS_DIR.'loader.class.php';


