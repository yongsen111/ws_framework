<?php if(defined(BASEPATH))  exit('No direct script access allowed');
/**
 * hello 这是一个测试程序
 * @date 2013-12-7 上午02:15:59
 * @author Yongsen
 * @version 0.0.0
*/

class hello extends base{
	function __construct(){
		parent::__construct();
		parent::get_attribute('db');
		var_dump($this->db);
		echo "this is hello";
	}
	function index(){
		echo "-hello->index";
		echo "<br />";
		require TPL_DIR.'hello.html';
	}
	function index1(){
		echo "-hello->index1";
		echo "<br />";
		require TPL_DIR.'hello.html';
		echo "<br />";
		echo $_GET['aa'];
	}
	function bae(){
		echo "-hello->index1";
		echo "<br />";
		require TPL_DIR.'hello.html';
		echo "<br />";
		echo $_GET['aa'];
	}
}