<?php if(defined(BASEPATH))  exit('No direct script access allowed');
/**
 * bae ����һ��model �ٶ��õ�
 * @date 2013-12-7 ����02:15:59
 * @author Yongsen
 * @version 0.0.0
*/

class bae extends base{
	function __construct(){
		parent::__construct();
	}
	function index(){
		require TPL_DIR.'bae/index.html';
	}
}