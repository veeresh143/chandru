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
        $staff_id = clean($_POST['staff_id']);
	$first_name = clean($_POST['first_name']);
	$middle_name =clean($_POST['middle_name']);
	$last_name = clean($_POST['last_name']);
        $date_of_joining_department=clean($_POST['date_of_joining_department']);
        $date_of_joining_police_station= clean($_POST['date_of_joining_police_station']);
        $caste= clean($_POST['caste']);
	$designation = clean($_POST['designation']);
	$experience =clean($_POST['experience']);
        $line1 = clean($_POST['line1']);
        $line2 = clean($_POST['line2']);
        $line3 = clean($_POST['line3']);
        $district = clean($_POST['district']);
        $state = clean($_POST['state']);
        $pincode= clean($_POST['pincode']);
        $phone_no1 = clean($_POST['phone_no1']);
        $phone_no2 = clean($_POST['phone_no2']);
        $mobile = clean($_POST['mobile']);
        $blood_group= clean($_POST['blood_group']);
        $line11= clean($_POST['line11']);
        $line22 = clean($_POST['line22']);
        $line33 = clean($_POST['line33']);
        $district1 = clean($_POST['district1']);
        $state1 = clean($_POST['state1']);
        $pincode1 = clean($_POST['pincode1']);
        $phone_no11 = clean($_POST['phone_no11']);
        $phone_no22 = clean($_POST['phone_no22']);
        $mobile1 = clean($_POST['mobile1']);
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
        if($staff_id  == '')
            {
		$errmsg_arr[] = 'Staff_ID is missing';
		$errflag = true;
	}
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
        if($date_of_joining_department == '')
            {
		$errmsg_arr[] = 'Date_of_joining_department is missing';
		$errflag = true;
	}
        if($date_of_joining_police_station == '')
            {
		$errmsg_arr[] = 'Date_of_joining_police_station is missing';
		$errflag = true;
	}if($caste == '')
        {
		$errmsg_arr[] = 'Caste is missing';
		$errflag = true;
	}
	if($designation == '')
                {
		$errmsg_arr[] = 'Designation is missing';
		$errflag = true;
	}
	if($experience == '') {
		$errmsg_arr[] = 'Experience is missing';
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
		$errmsg_arr[] = 'Phone_no missing';
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
         if($blood_group == '') {
		$errmsg_arr[] = 'Blood_group missing';
		$errflag = true;
	}
        if($line11 == '') {
		$errmsg_arr[] = 'Line11 missing';
		$errflag = true;
	}
        if($line22 == '') {
		$errmsg_arr[] = 'Line22 missing';
		$errflag = true;
	}
        if($line33 == '') {
		$errmsg_arr[] = 'Line33 missing';
		$errflag = true;
	}
         if($district1 == '') {
		$errmsg_arr[] = 'District1 missing';
		$errflag = true;
	}
        if($state1 == '') {
		$errmsg_arr[] = 'state1 missing';
		$errflag = true;
	}
        if($pincode1 == '') {
		$errmsg_arr[] = 'Pincode1 missing';
		$errflag = true;
	}
         if($phone_no11 == '') {
		$errmsg_arr[] = 'Phone_n1 missing';
		$errflag = true;
	}
         if($phone_no22 == '') {
		$errmsg_arr[] = 'Phone_no missing';
		$errflag = true;
	}
         if($mobile1 == '') {
		$errmsg_arr[] = 'Mobile1 missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                echo "<script>
                    alert('Please Fill All The Fields');
                    window.location.href='adminstaff.php';
                    </script>";
	}

	//Create INSERT query
	$qry = "INSERT INTO add_staff(staff_id,first_name,middle_name,last_name,date_of_joining_department,date_of_joining_police_station,caste,designation,experience,line1,line2,line3,district,state,pincode,phone_no1,phone_no2,mobile,blood_group,line11,line22,line33,district1,state1,pincode1,phone_no11,phone_no22,mobile1)VALUES('$staff_id','$first_name','$middle_name','$last_name','$date_of_joining_department','$date_of_joining_police_station','$caste','$designation','$experience','$line1','$line2','$line3','$district','$state','$pincode','$phone_no1','$phone_no2','$mobile','$blood_group','$line11','$line22','$line33','$district1','$state1','$pincode1','$phone_no11','$phone_no22','$mobile1')";
     
	$result = @mysql_query($qry);
       

	//Check whether the query was successful or not
	if($result) {
           echo "<script>
                    alert('Staff Information Added Successfully');
                    window.location.href='admin_success.php';
                    </script>";
	}else {
		die("Query failed");
	}
       
?>