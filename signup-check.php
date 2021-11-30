<?php 
session_start(); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
include "db_conn.php";


if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['re_password'])) {
		   //Instantiation and passing `true` enables exceptions
		   $mail = new PHPMailer(true);


		 

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$email = validate($_POST['email']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: index.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: index.php?error=Re Password is required&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: index.php?error=Email is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: index.php?error=Name is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: index.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$mail_sql="SELECT * FROM users WHERE email='$email' ";
		$email_result = mysqli_query($log,$mail_sql);
		$result = mysqli_query($log, $sql);

		if (mysqli_num_rows($result) > 0 || mysqli_num_rows($email_result) > 0) {
			header("Location: index.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
			
			try{
//Enable verbose debug output
$mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;
	 
//Send using SMTP
$mail->isSMTP();

//Set the SMTP server to send through
$mail->Host = 'smtp.gmail.com';

//Enable SMTP authentication
$mail->SMTPAuth = true;

//SMTP username
$mail->Username = 'lalkabezanussa@gmail.com';

//SMTP password
$mail->Password = 'rjnsr4321';

//Enable TLS encryption;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
$mail->Port = 587;

//Recipients
$mail->setFrom('lalkabezanussa@gmail.com', 'SportChance');

//Add a recipient
$mail->addAddress($email, $name);

//Set email format to HTML
$mail->isHTML(true);

$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

$mail->Subject = 'Email verification';
$mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b> <br>  Щоб підтвердити натиисніть <a href="http://localhost/verefication.php">тут</a></p>';

$mail->send();

$sql2 = "INSERT INTO users(user_name, password, name, email,verification_code) VALUES('$uname', '$pass', '$name', '$email','$verification_code')";
           $result2 = mysqli_query($log, $sql2);
           if ($result2) {
           	 header("Location: index.php?success=Your account has been created successfully");
					echo'<script> alert("Підтвердіть свою пошту. Лист був відправлений вам вам на пошту!")</script>';
	         exit();
           }
		   else {
	           	header("Location: index.php?error=unknown error occurred&$user_data");
		        exit();
           }


} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


           
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}