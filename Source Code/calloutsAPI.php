<?php 
  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  include 'DB.php';
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);

  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
	$sql = "SELECT `callouts`.`date_start`, `callouts`.`date_end`, `callouts`.`time_start`, `callouts`.`time_end`, `callouts`.`location`, `callouts`.`activity_text`, `callouts`.`description`, `callouts`.`people`, `callouts`.`incident`, `callouts`.`grid_ref`, `callouts`.`latitude`, `callouts`.`longitude`, `callouts`.`fatalities`, `callouts`.`photo`, `callouts`.`description_summary` FROM `callouts`";
	
	$result = mysql_query($sql);
	$data = array();
	while ( $row = mysql_fetch_row($result) )
	{
		$data[] = $row;
	}
	echo json_encode( $data );       //fetch result    

?>