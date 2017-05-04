<?php 
// framework/core/Model.class.php

// Base Model Class
class Model {
	protected $db; // database connection object
	protected $table;
	protected $fields = array();

	public function __construct($table) {
		$dbconfig['host'] = $GLOBALS['config']['host'];
		$dbconfig['user'] = $GLOBALS['config']['user'];
		$dbconfig['password'] = $GLOBALS['config']['password'];
		$dbconfig['dbname'] = $GLOBALS['config']['dbname'];
		$dbconfig['port'] = $GLOBALS['config']['port'];
		$dbconfig['charset'] = $GLOBALS['config']['charset'];

		$this->db = new Mysql($dbconfig);
		$this->table = $GLOBALS['config']['prefix'] . $table;
		$this->getFields();
	}

	private function getFields() {
		$sql = "DESC " . $this->table;
		$results = $this->db->getAll($sql);

		foreach ($results as $result) {
			$this->fields[] = $result['Field'];
			if ($result['Key'] == 'PRI') {
				// If there is primary key, save it in pkey
				$pkey = $result['Field'];
			}
		}

		// If there is pkey, add it into fields list
		if (isset($pkey)) {
			$this->fields['pkey'] = $pkey;
		}
	}

	public function insert($list) {
		$field_list = '';
		$value_list = '';

		foreach ($list as $key => $value) {
			if (in_array($key, $this->fields)) {
				$field_list .= "`" . $key . "`". ',';
				$value_list .= "`" . $value . "`". ',';
			}
		}

		// Trim the comma on the right
		$field_list = rtrim($field_list, ',');
		$value_list = rtrim($value_list, ',');

		// Construct sql statement
		$sql = "INSERT INTO `{$this->table}` ({$field_list}) VALUES ($value_list)";
		if ($this->db->query($sql)) {
			return $this->db->getInsertId();
		}
		return false;
	}

	public function update($list) {
		$uplist = ''; // update fields
		$where = 0; // update condition, default is 0
		foreach ($list as $key => $value) {
			if (in_array($key, $this->fields)) {
				if ($key == $this->fields['pkey']) {
					$where = "`$key` = $value";
				} else {
					$uplist .= "`$key` = '$value'".",";
				}
			}
		}

		// Trim comma on the right of update list
		$uplist = rtrim($uplist, ',');

		// Construct SQL statement
		$sql = "UPDATE `{$this->table}` SET {$uplist} WHERE {$where}";

		if ($this->db->query($sql)) {
			// If succeed, return the count of affected rows
			if ($rows = mysql_affected_rows()) {
				// Has count of affected rows
				return $rows;
			}
			return false;
		}
		return false;
	}

	public function delete ($pkey) {
		$where = 0;

		//Check if $pk is a single value or array, and construct where condition accordingly
		if (in_array($pkey)) {
			$where = "`{$this->fields['pkey']}` in (" . implode(',', $pkey) . ")";
		} else {
			$where = "`{$this->fields['pkey']}` = $pkey";
		}

		// Construct SQL statement
		$sql = "DELETE FROM `{$this->table}` WHERE $where";

		if ($this->db->query($sql)) {
			if ($rows = mysql_affected_rows()) {
				// Has count of affected rows
				return $rows;
			}
			return false;
		}
		return false;
	}

	public function selectByPkey($pkey) {
		$sql = "select * from `{$this->table}` where `{$this->fields['pkey']}` = $pkey";

		return $this->db->getRow($sql);
	}

	public function countTable() {
		$sql = "select count(*) from {$this->table}";

		return $this->db->getOne($sql);
	}

	public function pageRows($offset, $limit, $where = '') {
		if (empty($where)) {
			$sql = "select * from {$this->table} limit $offset, $limit";
		} else {
			$sql = "select * from {$this->table} where $where limit $offset, $limit";
		}
		return $this->db->getAll($sql);
	}
}

?>