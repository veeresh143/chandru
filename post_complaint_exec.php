
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
                    window.location.href='post_complaint.php';
                    </script>";
	}

	//Create INSERT query
	
        $qry = "INSERT INTO complainant(complainant_id,name,middle_name,last_name,age,occupation,caste,nationality,address) VALUES('$complainant_id','$name','$middle_name','$last_name','$age','$occupation','$caste','$nationality','$address')";
	$result = @mysql_query($qry);
       

	//Check whether the query was successful or not
	if($result) {
            echo "<script>
                    alert('Registered Successfully!!!');
                    window.location.href='public_login.php';
                    </script>";
          
	}else {
		die("Query failed");
	}
?>