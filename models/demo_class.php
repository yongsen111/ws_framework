<?php if(defined(BASEPATH))  exit('No direct script access allowed');
/**
 * 测试文件  测试本地数据库查询
 * @date 2013-12-7 上午02:21:10
 * @author Yongsen
 * @version 0.0.0
*/
class demo extends base{
	function __construct(){
		parent::__construct();
		parent::get_attribute('db');
		var_dump($this->db);
		echo "this is hello";
	}
	function index(){
		$query = $this->db->query('SELECT * FROM `wp_users` LIMIT 0 , 30');
		while($row = $this->db->fetch_array($query)){
			var_dump($row);
		}
	}
}