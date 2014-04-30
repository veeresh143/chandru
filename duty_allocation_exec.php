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
        $first_name = clean($_POST['first_name']);
        $area = clean($_POST['area']);
        $date = clean($_POST['date']);
        $time_from = clean($_POST['time_from']);
        $time_to = clean($_POST['time_to']);
        if($first_name  == '')
            {
		$errmsg_arr[] = 'Name is missing';
		$errflag = true;
	}
	if($area== '')
            {
		$errmsg_arr[] = 'area is missing';
		$errflag = true;
	}
	if($date  == '') {
		$errmsg_arr[] = 'date is missing';
		$errflag = true;
	}
	if($time_from  == '') {
		$errmsg_arr[] = 'time  is missing';
		$errflag = true;

        }
        if($time_to  == '') {
		$errmsg_arr[] = 'time  is missing';
		$errflag = true;

        }
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                     echo "<script>
                    alert('Please Fill All The Details');
                    window.location.href='duty_allocation.php';
                    </script>";
	}

	//Create INSERT query
	$qry = "INSERT INTO duty_allocation(first_name,area,date,time_from,time_to)VALUES('$first_name','$area','$date','$time_from','$time_to')";
     
	$result = @mysql_query($qry);
       

	//Check whether the query was successful or not
	if($result) {
            echo "<script>
                alert('Duty Allocated Successfully');
                window.location.href='admin_success.php';
                </script>";
	}
                  else {
		die("Query failed");
	}
       ?>