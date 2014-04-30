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
	$middle_name =clean($_POST['middle_name']);
	$last_name = clean($_POST['last_name']);
        $date_of_birth=clean($_POST['date_of_birth']);
        $age= clean($_POST['age']);
        $gender= clean($_POST['gender']);
	$nationality = clean($_POST['nationality']);
	$category =clean($_POST['category']);
        $line1 = clean($_POST['line1']);
        $line2 = clean($_POST['line2']);
        $line3 = clean($_POST['line3']);
        $district = clean($_POST['district']);
        $state = clean($_POST['state']);
        $pincode= clean($_POST['pincode']);
        $phone_no1 = clean($_POST['phone_no1']);
        $phone_no2 = clean($_POST['phone_no2']);
        $mobile = clean($_POST['mobile']);
        $email = clean($_POST['email']);
	//Input Validations
        /* foreach ($_FILES["pictures"]["error"] as $key => $error)
           { //used for multiple uploads

                if ($error == UPLOAD_ERR_OK)
                    {
                        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
                    }
            }

        $size = getimagesize($tmp_name);

	$width = $size[0]; // get width of the image
	$height = $size[1]; //get height of the image
	$type = $size[2]; //get type of the image
	$mime_type = $size['mime']; //get MIME of the image

        if(!$data = addslashes(@fread(@fopen($tmp_name, "r"), @filesize($tmp_name))))
        {
		die("\n<BR>Cannot read temp file: $tmp_file");
	}
*/
        
	if($first_name == '')
            {
		$errmsg_arr[] = 'First_Name is missing';
		$errflag = true;
	}
	if($middle_name  == '') {
		$errmsg_arr[] = 'Middle_Name is missing';
		$errflag = true;
	}
	if($last_name == '') {
		$errmsg_arr[] = 'Last_Name is missing';
		$errflag = true;
	}
        if($date_of_birth == '')
            {
		$errmsg_arr[] = 'date_of_birth is missing';
		$errflag = true;
	}
        if($age == '')
            {
		$errmsg_arr[] = 'age is missing';
		$errflag = true;
	}if($gender == '')
        {
		$errmsg_arr[] = 'gender is missing';
		$errflag = true;
	}
	if($nationality == '')
                {
		$errmsg_arr[] = 'nationality is missing';
		$errflag = true;
	}
	if($category == '') {
		$errmsg_arr[] = 'category is missing';
		$errflag = true;
	}

        if($line1 == '') {
		$errmsg_arr[] = 'Line1 missing missing';
		$errflag = true;
	}
        if($line2 == '') {
		$errmsg_arr[] = 'Line2 missing';
		$errflag = true;
	}
        if($line3 == '') {
		$errmsg_arr[] = 'Line3 missing';
		$errflag = true;
	}
        if($district == '') {
		$errmsg_arr[] = 'District missing';
		$errflag = true;
	}
         if($state == '') {
		$errmsg_arr[] = 'state missing';
		$errflag = true;
	}
       if($pincode == '') {
		$errmsg_arr[] = 'Pincode missing';
		$errflag = true;
	}
         if($phone_no1 == '') {
		$errmsg_arr[] = 'Phone_no1 missing';
		$errflag = true;
	}
          if($phone_no2 == '') {
		$errmsg_arr[] = 'Phone_no missing';
		$errflag = true;
	}
         if($mobile == '') {
		$errmsg_arr[] = 'Mobile missing';
		$errflag = true;
	}
        
         if($email == '') {
		$errmsg_arr[] = 'email missing';
		$errflag = true;
	}

	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                echo "<script>
                    alert('Please Fill All The Fields');
                    window.location.href='add_criminal_details.php';
                    </script>";
	}

	//Create INSERT query
	$qry = "INSERT INTO criminal(first_name,middle_name,last_name,date_of_birth,age,gender,nationality,category,line1,line2,line3,district,state,pincode,phone_no1,phone_no2,mobile,email)VALUES('$first_name','$middle_name','$last_name','$date_of_birth','$age','$gender','$nationality','$category','$line1','$line2','$line3','$district','$state','$pincode','$phone_no1','$phone_no2','$mobile','$email')";

	$result = @mysql_query($qry);


	//Check whether the query was successful or not
	if($result) {
           echo "<script>
                    alert('Crimiinal Information Added Successfully');
                    window.location.href='admin_success.php';
                    </script>";
	}else {
		die("Query failed");
	}

?>