<?php if(defined(BASEPATH))  exit('No direct script access allowed');
/**
 * ���������־  ��¼�Ѿ����õĹ���
 * @date 2013-12-7 ����02:21:10
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