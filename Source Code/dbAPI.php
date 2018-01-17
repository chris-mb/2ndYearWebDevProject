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
	$sql = "SELECT `title`, `description`, `photo_file`, `cost` FROM `merchandise`";
	$result = mysql_query($sql);
	$data = array();
	while ( $row = mysql_fetch_row($result) )
	{
		$data[] = $row;
	}
	echo json_encode( $data ); //fetch result    

?>