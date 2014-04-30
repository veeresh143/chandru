<?php
	//Start the session
	session_start();
        //Include database connection details
	require_once('connect_db.php');
	
	//Array to store validation errors
	$errmsg_arr = array();

	//Validation error flag
	$errflag = false;

	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
        //Sanitize the POST values
        $FIR_ID = clean($_POST['FIR_ID']);
	$police_station = clean($_POST['police_station']);
	$taluk =clean($_POST['taluk']);
	$distict = clean($_POST['distict']);
        $crime_no=clean($_POST['crime_no']);
        $type_of_case=clean($_POST['type_of_case']);
        $date= clean($_POST['date']);
        $section= clean($_POST['section']);
	$act = clean($_POST['act']);
	$occurance_of_offence_day =clean($_POST['occurance_of_offence_day']);
        $time = clean($_POST['time']);
        $Information_received_at_the_ps = clean($_POST['Information_received_at_the_ps']);
        $reason_for_delay = clean($_POST['reason_for_delay']);
        $place_of_occurance = clean($_POST['place_of_occurance']);
        $distance_from_ps = clean($_POST['distance_from_ps']);
        $complainant_id=clean($_POST['complainant_id']);
        $name = clean($_POST['name']);
        $middle_name = clean($_POST['middle_name']);
        $last_name = clean($_POST['last_name']);
        $age = clean($_POST['age']);
        $occupation = clean($_POST['occupation']);
        $caste = clean($_POST['caste']);
        $nationality = clean($_POST['nationality']);
        $address = clean($_POST['address']);
	//Input Validations
        if($FIR_ID == '')
            {
		$errmsg_arr[] = 'FIR_ID is missing';
		$errflag = true;
	}
	if($police_station == '')
            {
		$errmsg_arr[] = 'police_station fied is missing';
		$errflag = true;
	}
	if($taluk == '') {
		$errmsg_arr[] = 'taluk field is missing';
		$errflag = true;
	}
	if($distict == '') {
		$errmsg_arr[] = 'distict field is missing';
		$errflag = true;
	}
        if($crime_no == '') {
		$errmsg_arr[] = 'crime_no cant be blank';
		$errflag = true;
	}
         if($type_of_case == '') {
		$errmsg_arr[] = 'type_of_case cant be blank';
		$errflag = true;
	}
        if($date == '') {
		$errmsg_arr[] = 'date is missing';
		$errflag = true;
	}if($section == '')
        {
		$errmsg_arr[] = 'section is missing';
		$errflag = true;
	}
	if($act == '')
                {
		$errmsg_arr[] = 'act missing';
		$errflag = true;
	}
	if($occurance_of_offence_day == '') {
		$errmsg_arr[] = 'occurance_of_offence_day missing';
		$errflag = true;
	}
	
        if($time == '') {
		$errmsg_arr[] = 'time missing missing';
		$errflag = true;
	}
        if($Information_received_at_the_ps == '') {
		$errmsg_arr[] = 'Information_received_at_the_ps missing';
		$errflag = true;
	}
        if($reason_for_delay == '') {
		$errmsg_arr[] = 'reason_for_delay missing';
		$errflag = true;
	}
        if($place_of_occurance == '') {
		$errmsg_arr[] = 'place_of_occurance missing';
		$errflag = true;
	}
         if($distance_from_ps == '') {
		$errmsg_arr[] = 'distance_from_ps missing';
		$errflag = true;
	}
        if($complainant_id == '') {
		$errmsg_arr[] = 'complainant_id is missing';
		$errflag = true;
	}
       if($name == '') {
		$errmsg_arr[] = 'name missing';
		$errflag = true;
	}
         if($middle_name == '') {
		$errmsg_arr[] = 'middle_name missing';
		$errflag = true;
	}
         if($last_name == '') {
		$errmsg_arr[] = 'last_name missing';
		$errflag = true;
	}
         if($age == '') {
		$errmsg_arr[] = 'age missing';
		$errflag = true;
	}
        if($occupation == '') {
		$errmsg_arr[] = 'occupation missing';
		$errflag = true;
	}
        if($caste == '') {
		$errmsg_arr[] = 'caste missing';
		$errflag = true;
	}
        if($nationality == '') {
		$errmsg_arr[] = 'nationality missing';
		$errflag = true;
	}
         if($address == '') {
		$errmsg_arr[] = 'address missing';
		$errflag = true;
	}
	//Check for duplicate login ID
	/*if($usn != '') {
		$qry = "SELECT * FROM student WHERE USN='$usn'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'USN is already in use';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}
	*/
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                echo "<script>
                    alert('Please Fill All The Fields');
                    window.location.href='FIR_form.php';
                    </script>";
	}

	//Create INSERT query
	$qry1 = "INSERT INTO fir(FIR_ID,police_station,taluk,distict,crime_no,type_of_case,date,section,act,occurance_of_offence_day,time,Information_received_at_the_ps,reason_for_delay,place_of_occurance,distance_from_ps)VALUES('$FIR_ID','$police_station','$taluk','$distict','$crime_no','$type_of_case',$date','$section','$act','$occurance_of_offence_day','$time','$Information_received_at_the_ps','$reason_for_delay','$place_of_occurance','$distance_from_ps')";
        $qry2 = "INSERT INTO complainant(complainant_id,name,middle_name,last_name,age,occupation,caste,nationality,address) VALUES('$complainant_id','$name','$middle_name','$last_name','$age','$occupation','$caste','$nationality','$address')";
	$result1 = @mysql_query($qry1);
        $result2 = @mysql_query($qry2);

	//Check whether the query was successful or not
	if($result1 && $result2) {
           echo "<script>
                    alert('FIR Generated Successfully!!!');
                    window.location.href='admin_success.php';
                    </script>";
	}
        else {
		die("Query failed");
	}
?>