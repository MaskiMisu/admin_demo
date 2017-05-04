<?php
/**

*================================================================

*framework/database/Mysql.class.php

*Database operation class

*================================================================

*/

class MySQL {
	protected $conn = false; 	// DB connection resources
	protected $sql;				// SQL statement

	/**

    * Constructor, to connect to database, select database and set charset

    * @param $config string configuration array

    */

    public function __construct($config = array()) {
    	$host = isset($config['host']) ? $config['host'] : 'localhost';
    	$user = isset($config['user']) ? $config['user'] : 'root';
    	$password = isset($config['password']) ? $config['password'] : '';
    	$dbname = isset($config['dbname']) ? $config['dbname'] : '';
    	$port = isset($config['port']) ? $config['port'] : '3306';
    	$charset = isset($config['charset']) ? $config['charset'] : '3306';

    	$this->conn = mysql_connect("$host:$port", $user, $password) or die('Database connection error');
    	mysql_select_db($db_name) or die('Database selection error');
    	$this->setChar($charset);
    }

    private function setChar($charset) {
    	$sql = 'set names '.$charset;
    	$this->query($sql);
    }

    public function query($sql) {
    	$this->sql = $sql;
    	$str = $sql . " [". date("Y-m-d H:i:s") . "] " . PHP_EOL;
    	file_put_contents("log.txt", $str, FILE_APPEND);
    	$result = mysql_query($this->sql, $this->conn);

    	if (!$result) {
    		die($this->errno().':'.$this->error().'<br />Error SQL statement is '.$this->sql.'<br />');
    	}
    	return $result;
    }

    public function getOne($sql) {
    	$result = $this->query($sql);
    	$row = mysql_fetch_row($result);
    	if ($row) {
    		return $row[0];
    	}
    	return false;
    }

    public function getRow($sql) {
    	if ($result = $this->query($sql)) {
    		$row = mysql_fetch_assoc($result);
    		return $row;
    	}
    	return false;
    }

    public function getAll($sql) {
    	$result = $this->query($sql);
    	$list = array();
    	while ($row = mysql_fetch_assoc($result)) {
    		$list[] = $row;
    	}
    	return $list;
    }

    // something went wrong here
    public function getCol($sql) {
    	$result = $this->query($sql);
    	$list = array();
    	while($row = mysql_fetch_row($result)) {
    		$list[] = $row[0];
    	}
    }

    public function getInsertId() {
    	return mysql_insert_id($this->conn);
    }

    public function errno() {
    	return mysql_errno($this->conn);
    }

    public function error() {
    	return mysql_error($this->conn);
    }
}

?>