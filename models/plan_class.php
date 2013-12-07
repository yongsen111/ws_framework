<?php if(defined(BASEPATH))  exit('No direct script access allowed');
/**
 * 开发计划日志  记录计划要增加的功能
 * @date 2013-12-7 上午02:21:10
 * @author Yongsen
 * @version 0.0.0
*/
class plan extends base{
	function __construct(){
		parent::__construct();
	}
	function index(){
		require TPL_DIR.'bae/plan.html';
	}
}