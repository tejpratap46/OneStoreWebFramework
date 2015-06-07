<?php
error_reporting ( 0 );
require ("../connection.php");

$username = $_GET ["username"];
$apikey = $_GET ['apikey'];

if (! empty ( $apikey )) {
	$api = mysql_query ( "SELECT * FROM apikey WHERE api_key = '" . $apikey . "'" ) or die ( "{\"status\":0," . "\"error\":\"" . mysql_error () . "\"}" );
	if (mysql_num_rows ( $api ) != 1) {
		die ( "{\"status\":0," . "\"error\":\"invalid apikey\"}" );
	}
} else {
	die ( "{\"status\":0," . "\"error\":\"invalid apikey\"}" );
}

if (! empty ( $username )) {
  $que = mysql_query("SELECT bankid FROM customer WHERE username='$username'") or die ( "{\"status\":0," . "\"error\":\"" . mysql_error () . "\"}" );
  $inf = mysql_fetch_array ( $que );

	$query = mysql_query ( "SELECT items FROM `payment_completed` WHERE `fromid` = '".$inf['bankid']."' ORDER BY `payment_completed`.`listid` DESC LIMIT $start,$limit" ) or die ( "{\"status\":0," . "\"error\":\"" . mysql_error () . "\"}" );
	$items = "";
	for($i = 0; $i < mysql_num_rows ( $query ); $i ++) {
		$info = mysql_fetch_array ( $query );
		$items = $items . $info ['listitems'];
	}
	preg_match_all ( "#<id.*?>([^<]+)</id>#", $items, $matches );
	$itemcount = array_count_values ( $matches [1] );
	arsort ( $itemcount );
	echo ("{\"status\":1," . "\"items\":[");
	$i = 0;
	foreach ( $itemcount as $key => $value ) {
		if ($i == count($itemcount) - 1) {
			echo "\"$key\"";
		}else{
			echo "\"$key\",";
		}
		$i++;
	}
	echo "]}";
} else {
	die ( "{\"status\":0," . "\"error\":\"enter username\"}" );
}
?>
