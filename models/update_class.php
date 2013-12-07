<?php if(defined(BASEPATH))  exit('No direct script access allowed');
/**
 * 程序更新日志  记录已经做好的功能
 * @date 2013-12-7 上午02:21:10
 * @author Yongsen
 * @version 0.0.0
*/
class update extends base{
	function __construct(){
		parent::__construct();
	}
	function index(){
		require TPL_DIR.'bae/update.html';
	}
}