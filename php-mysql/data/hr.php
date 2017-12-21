<?php
header("Content-Type: application/json; charset=UTF-8");
include("../../bdd.php");
error_reporting(0);
// $myObj = "[{EMP_NO: 291,EMP_CAT_TITLE: NMS-11,EMP_NAME: Muhammad Iltaf,DEPT_TITLE: HQ Coy FWO,CITY_NAME: Rawalpindi,LONGITUDE: 73.046,LATITUDE: 33.589},{EMP_NO: 291,EMP_CAT_TITLE: NMS-11,EMP_NAME: Muhammad Iltaf,DEPT_TITLE: HQ Coy FWO,CITY_NAME: Rawalpindi,LONGITUDE: 67.010,LATITUDE: 24.860}]";
 
// $myObj = array("EMP_NO: 291", "EMP_CAT_TITLE: NMS-11", "73.046","33.589");
  
  $sqls = "select * from hr_dept where dept_id in (1,2)";
	mysqli_select_db($database_dbconfig, $dbconfig);
	$Results = mysqli_query($dbconfig, $sqls) or die(mysqli_error());
	while($row	= mysqli_fetch_assoc($Results))
	{
		//$rows[]="EMP_NO"':'"291";
		//$rows[]='"EMP_NO" => 291, EMP_CAT_TITLE => NMS-11, EMP_NAME => Muhammad Iltaf, DEPT_TITLE => HQ Coy FWO, CITY_NAME => Rawalpindi';
	}
	
	//echo json_encode($rows);
	
  $myObj = array('EMP_NO' => '291', 'EMP_CAT_TITLE' => 'NMS-11', 'EMP_NAME' => 'Muhammad Iltaf', 'DEPT_TITLE' => 'HQ Coy FWO', 'CITY_NAME' => 'Rawalpindi', 'LONGITUDE' => 73.046,'LATITUDE' => 33.589);
	  echo "[";
	  $myObj = json_encode($myObj);
	  echo $myObj;
	  echo "]";
	  
?>
