<?php 
session_start();
include_once('Admin/lib/dao.php');
include_once('Admin/lib/model.php');

$d = new dao();
$m = new model();

$date = new DateTime();

extract($_POST);

$q=$d->select("users","email='$email'","");

$data=mysqli_fetch_array($q);

if($data>0)
	{
		extract($data);
		$otp=mt_rand(100000,999999);
		$_SESSION['otp']= $otp;
		$_SESSION['forgot_email']= $email;

		if(isset($email)){
    
    		$subject="Email Verification OTP";
		    $txt="Hello Your Email Verification otp is : $otp";
		    $header="From:dinierecettes@gmail.com";
		    //mail($email,$subject,$txt,$header);

		    header('location:otp.php');
		   }
		   else
		   {
		   	header('location:password.php?msgError=Error in Email Address..!!');
		   }
	}	
else 
	{
	
		header('location:password.php?msgError=Incorrect Email Address..!!');
		 
	}



?>