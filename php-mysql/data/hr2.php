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
		$rows[]="EMP_NO :".$row["DEPT_ID"];
		//$rows[]='"EMP_NO" => 291, EMP_CAT_TITLE => NMS-11, EMP_NAME => Muhammad Iltaf, DEPT_TITLE => HQ Coy FWO, CITY_NAME => Rawalpindi';
	}
	
	//echo json_encode($rows);
	
  $myObj = array('EMP_NO' => '291', 'EMP_CAT_TITLE' => 'NMS-11', 'EMP_NAME' => 'Muhammad Iltaf', 'DEPT_TITLE' => 'HQ Coy FWO', 'CITY_NAME' => 'Rawalpindi', 'LONGITUDE' => 73.046,'LATITUDE' => 33.589);
	  //echo "[";
	  //$myObj = json_encode($myObj);
	  //echo $myObj;
	  //echo "]";
	 echo '[{"emp_no":"1003","EMP_NAME":"Imtiaz Hussain","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"Audi","CITY_NAME":"Rawalpindi","LONGITUDE":"73.046","LATITUDE":"33.589"},{"emp_no":"50799","EMP_NAME":"Ghazanfar Ali Khan","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"NIIA","CITY_NAME":"Islamabad","LONGITUDE":"73.229","LATITUDE":"33.651"},{"emp_no":"951","EMP_NAME":"Aftab Aziz","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"Plan","CITY_NAME":"Rawalpindi","LONGITUDE":"73.046","LATITUDE":"33.589"},{"emp_no":"18834","EMP_NAME":"Muhammad Naseem Khan","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"SW","CITY_NAME":"Rawalpindi","LONGITUDE":"73.046","LATITUDE":"33.589"},{"emp_no":"26787","EMP_NAME":"Muhammad Imtiaz Ul Haq","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"SW","CITY_NAME":"Rawalpindi","LONGITUDE":"73.046","LATITUDE":"33.589"},{"emp_no":"20578","EMP_NAME":"Nasrullah Abeer","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"Cslt","CITY_NAME":"Rawalpindi","LONGITUDE":"73.046","LATITUDE":"33.589"},{"emp_no":"32178","EMP_NAME":"Sardar Salman Sher Qaisrani","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"BOT","CITY_NAME":"Rawalpindi","LONGITUDE":"73.046","LATITUDE":"33.589"},{"emp_no":"34837","EMP_NAME":"Shamim Akram","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"more","CITY_NAME":"Rawalpindi","LONGITUDE":"73.046","LATITUDE":"33.589"},{"emp_no":"41682","EMP_NAME":"Nasir Kamal","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"katc","CITY_NAME":"Rawalpindi","LONGITUDE":"73.046","LATITUDE":"33.589"},{"emp_no":"42502","EMP_NAME":"Mukhtar Mahmood","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"BOT","CITY_NAME":"Rawalpindi","LONGITUDE":"73.046","LATITUDE":"33.589"},{"emp_no":"37879","EMP_NAME":"Azam Iqbal Tareen","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"MEDO","CITY_NAME":"Rawalpindi","LONGITUDE":"73.046","LATITUDE":"33.589"},{"emp_no":"43562","EMP_NAME":"Mubasher Alam","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"IT","CITY_NAME":"Rawalpindi","LONGITUDE":"73.046","LATITUDE":"33.589"},{"emp_no":"48779","EMP_NAME":"Muhammad Sajid","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"Cord","CITY_NAME":"Rawalpindi","LONGITUDE":"73.046","LATITUDE":"33.589"},{"emp_no":"49427","EMP_NAME":"Zulfiqar Ahmed Durrani ","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"495","CITY_NAME":"Islamabad","LONGITUDE":"73.229","LATITUDE":"33.651"},{"emp_no":"49812","EMP_NAME":"Sohail Ali Shah","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"Cord","CITY_NAME":"Rawalpindi","LONGITUDE":"73.046","LATITUDE":"33.589"},{"emp_no":"34658","EMP_NAME":"Syed Ashiq E Rasool Gillani","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"EqYd","CITY_NAME":"Islamabad","LONGITUDE":"73.229","LATITUDE":"33.651"},{"emp_no":"54326","EMP_NAME":"Tariq Mehmood","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"BOT","CITY_NAME":"Rawalpindi","LONGITUDE":"73.046","LATITUDE":"33.589"},{"emp_no":"26640","EMP_NAME":"Saleem Raza","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"PME","CITY_NAME":"Rawalpindi","LONGITUDE":"73.046","LATITUDE":"33.589"},{"emp_no":"26856","EMP_NAME":"Muhammad Amir Khan","EMP_CAT_TITLE":"MS-1","DEPT_TITLE":"Fin","CITY_NAME":"Rawalpindi","LONGITUDE":"73.046","LATITUDE":"33.589"}]'; 
?>
