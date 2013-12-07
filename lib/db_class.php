<?php if(defined(BASEPATH))  exit('No direct script access allowed');
/**
 * 这是一个数据库操作类
 * @date 2013-12-7 上午02:21:46
 * @author Yongsen
 * @version 0.0.0
*/
class db{
	private static  $conn ='';
	private $curlink = '';
	/**
	 * 
	 * 连接数据库 ...
	*/
	public function __construct(){
		if(self::$conn==''){
          $conn = mysql_connect(DB_HOST_B.':'.DB_PORT_B,DB_USER_B,DB_PASS_B,DB_PORT_B,true);
			if(!$conn) {
			    die("Connect Server Failed: " . mysql_error());
			}
			self::$conn = $conn;
		}
		$this->curlink = self::$conn;
		mysql_select_db(DB_NAME_B);
		mysql_set_charset('utf-8');
	}
	function select_db($dbname) {
		return mysql_select_db($dbname, $this->curlink);
	}

	function fetch_array($query, $result_type = MYSQL_ASSOC) {
		if($result_type == 'MYSQL_ASSOC') $result_type = MYSQL_ASSOC;
		return mysql_fetch_array($query, $result_type);
	}

	function fetch_first($sql) {
		return $this->fetch_array($this->query($sql));
	}

	function result_first($sql) {
		return $this->result($this->query($sql), 0);
	}

	public function query($sql) {
		return mysql_query($sql, $this->curlink);
	}

	function affected_rows() {
		return mysql_affected_rows($this->curlink);
	}

	function error() {
		return (($this->curlink) ? mysql_error($this->curlink) : mysql_error());
	}

	function errno() {
		return intval(($this->curlink) ? mysql_errno($this->curlink) : mysql_errno());
	}

	function result($query, $row = 0) {
		$query = @mysql_result($query, $row);
		return $query;
	}

	function num_rows($query) {
		$query = mysql_num_rows($query);
		return $query;
	}

	function num_fields($query) {
		return mysql_num_fields($query);
	}

	function free_result($query) {
		return mysql_free_result($query);
	}

	function insert_id() {
		return ($id = mysql_insert_id($this->curlink)) >= 0 ? $id : $this->result($this->query("SELECT last_insert_id()"), 0);
	}

	function fetch_row($query) {
		$query = mysql_fetch_row($query);
		return $query;
	}

	function fetch_fields($query) {
		return mysql_fetch_field($query);
	}

	function version() {
		if(empty($this->version)) {
			$this->version = mysql_get_server_info($this->curlink);
		}
		return $this->version;
	}

	function escape_string($str) {
		return mysql_escape_string($str);
	}

	function close() {
		return mysql_close($this->curlink);
	}
}