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
        $complaint_id = clean($_POST['complaint_id']);
	$type_of_case = clean($_POST['type_of_case']);
        $complaint_against = clean($_POST['complaint_against']);
        $description = clean($_POST['description']);
	//Input Validations
        if($complaint_id == '')
            {
		$errmsg_arr[] = 'complaint_id is missing';
		$errflag = true;
	}
	if($type_of_case == '')
            {
		$errmsg_arr[] = 'type_of_case is missing';
		$errflag = true;
	}
	if($complaint_against == '') {
		$errmsg_arr[] = 'complaint_against is missing';
		$errflag = true;
	}
	if($description == '') {
		$errmsg_arr[] = 'description is missing';
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
                    alert('Please fill all the fields');
                    window.location.href='complaint_form.php';
                    </script>";
	}

	//Create INSERT query
        $qry = "INSERT INTO complaint(complaint_id,type_of_case,complaint_against,description) VALUES('$complaint_id','$type_of_case','$complaint_against','$description')";
	$result = @mysql_query($qry);
        
	//Check whether the query was successful or not
	if($result) {

                echo "<script>
                    alert('Complaint Registered Successfully!!!');
                    window.location.href='public_login.php';
                    </script>";
	}else {
		die("Query failed");
	}
?>