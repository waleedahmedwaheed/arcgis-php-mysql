<?php 
session_start(); 
include_once("inc/dsn1.php");
include ("header.php");
include_once("function.php");


// print_r($_REQUEST);


		$curr_mon_arr	= "select hd.EMP_no,ec.EMP_CAT_TITLE ,hd.EMP_NAME,hrd.DEPT_TITLE , c.CITY_NAME,c.LONGITUDE,c.LATITUDE from hr_details hd,hr_dept hrd,city c, emp_cat ec
							where hd.STATUS in (0,7)
							and hrd.DEPT_ID=hd.EMP_DEPT
							and c.CITY_CODE=hrd.CITY_CODE
							and ec.EMP_CAT_ID = hd.EMP_CAT
							and hd.emp_cat = 1"; 
		$curr_mon_arr_rs	= oci_parse($conn, $curr_mon_arr);
		oci_execute($curr_mon_arr_rs);
		$all_curr_mon_arr_rows	= oci_fetch_all($curr_mon_arr_rs, $all_curr_mon_arr);
		oci_free_statement($curr_mon_arr_rs);



		// echo "<pre>";
		// print_r($all_curr_mon_arr);
		// echo "</pre>";

		// echo "<pre>";
		// print_r(json_encode($all_curr_mon_arr));
		// echo "</pre>";

		
		
		
		$dedarray = array();
		for ($i=0; $i < $all_curr_mon_arr_rows ; $i++) { 


			$post_data = array('emp_no' => $all_curr_mon_arr['EMP_NO'][$i],
							    'EMP_NAME' =>  $all_curr_mon_arr['EMP_NAME'][$i],
							    'EMP_CAT_TITLE' =>  $all_curr_mon_arr['EMP_CAT_TITLE'][$i],
							    'DEPT_TITLE' =>  $all_curr_mon_arr['DEPT_TITLE'][$i],
							    'CITY_NAME' =>  $all_curr_mon_arr['CITY_NAME'][$i],
							    'LONGITUDE' =>  $all_curr_mon_arr['LONGITUDE'][$i],
							    'LATITUDE' =>  $all_curr_mon_arr['LATITUDE'][$i]);

			array_push($dedarray, $post_data);
			//$dedarray['obj'] = $post_data;
		}

		echo "<pre>";
		print_r(json_encode($dedarray));
		echo "</pre>";


		//$CURR_ARR = $all_curr_mon_arr['CURR_ARR'][0];//if employee has arrears entered in current month	



?>





