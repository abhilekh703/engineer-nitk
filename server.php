<?php 
// 	session_start();

	// variable declaration
	$firstname = "";
	$email    = "";
	$lastname = "";
	$message = "";
	$phone = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect("localhost",'u748116698_phsk', 'Saikiran1!1', 'u748116698_vbiet');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
	    
		// receive all input values from the form
		$firstname = mysqli_real_escape_string($db, $_POST['first-name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$lastname = mysqli_real_escape_string($db, $_POST['last-name']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
	//	$message = mysqli_real_escape_string($db, $_POST['message']);


		// form validation: ensure that the form is correctly filled
		if (empty($firstname)) { array_push($errors, "Firstname is required"); }
		if (empty($lastname)) { array_push($errors, "Lastname is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($phone)) { array_push($errors, "Phone is required"); }
		
		if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
            array_push($errors, "Only letters and white space allowed in name");
        }
        
        if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
            array_push($errors, "Only letters and white space allowed in name");
        }
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Invalid Email Format");
        }
        
        if((preg_match("/[^0-9]/", '', $phone)) && strlen($phone) == 10)
        {
            array_push($errors, "Invalid Phone Format");
        }
        
		// register user if there are no errors in the form
		if (count($errors) == 0) {
		//	$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO test (firstname, lastname, email, phone) 
					  VALUES('$firstname', '$lastname', '$email', '$phone')";
			mysqli_query($db, $query);
		/*	$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php'); */
			
			ini_set( 'display_errors', 1 );
            error_reporting( E_ALL );
            $from = "workshops@engineernitk.org";
            $to = $email;
            $subject = "Checking PHP mail";
    //$message = "PHP mail works just fine";
            $message = '
                <html>
                <head>
                  <title>Thank you for registering</title>
                </head>
                <body>
                  <p>Here are the payment methods</p>
                  <p>Tez : 8976045880 <br>
                  Upi id : kkdfdfhd36hw6263@2 <br>
                  </p>
                </body>
                </html>
';
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = "From:" . $from;
    $value = mail($to,$subject,$message,implode("\r\n", $headers));
    echo "The email message was sent.";
    echo $value;
		}

	}

?>