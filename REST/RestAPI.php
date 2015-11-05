<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	function getinfo_by_id($id) {
		mysql_connect('localhost', 'root', '');
		mysql_select_db('test');
		$info = array();
		$result = mysql_query('SELECT * FROM progif1 WHERE ID=' . $id);
		$info = mysql_fetch_array ($result, MYSQL_ASSOC);
		return $info;
	}
	if (isset ($_GET["action"])) {
		switch ($_GET["action"]){
				case "get_info";
				if (isset ($_GET["id"])) 
				$value = getinfo_by_id($_GET["id"]);
				else 
					$value = "ERROR";
					break;
			}
		}
	exit(json_encode($value));
?>
