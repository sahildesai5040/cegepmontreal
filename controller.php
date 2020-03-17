<?php 
session_start();
include_once('lib/dbconnect.php');
include_once('lib/dao.php');
include_once('lib/model.php');

$d = new dao();
$m = new model();


if (isset($_POST['usercheck'])) {

 	extract($_POST);


	$q=$d->select("users","email='$email' AND password='$password'","");

 	$data=mysqli_fetch_array($q);

 	if($data>0)
 	{
 		$_SESSION['user_id']= $data['user_id'];
		$_SESSION['username']= $data['username'];
		$_SESSION['email']= $data['email'];
		$_SESSION['flag']= $data['flag'];
		header('location:index.php');
	}	
	else 
	{
		
		header('location:login.php?msgError=Wrong Username or Email');
	}
 }

 if (isset($_POST['adduserbtn'])) {
 	extract($_POST);


	$m->set_data('username',$firstname ." " . $lastname);
 	$m->set_data('email',$email);
 	$m->set_data('password',$password);
 	$m->set_data('course_id',$course_id);
 	
 	$m->set_data('flag','0');
 	

 	$a =array(
 		
 		'username'=>$m->get_data('username'),
 		'email'=>$m->get_data('email'),
 		'password'=>$m->get_data('password'),
 		'course_id'=>$m->get_data('course_id'),
 		
 		'flag'=>$m->get_data('flag'),
 		
 	) ;

 	$q=$d->insert("users",$a);
 	if($q>0) {
 		header('location:login.php');
	}
	else {
		echo "Error";
	}
 }



if (isset($_POST['sendmsgbtn'])) {
 	extract($_POST);

 	$filetype=$_FILES["file"]['type'];
	$filesize=$_FILES["file"]['size'];

	$file_arr=$_FILES['file'];

	move_uploaded_file($file_arr['tmp_name'],'files/'.$file_arr['name']);

	$file_name=$file_arr['name'];



	$m->set_data('file_name',$file_name);
	$a =array(
 		'file_name'=>$m->get_data('file_name'),	
 	) ;
	
	$q=$d->insert("file_details",$a);
 	if($q>0) 
 	{
 		$q1=$d->select("file_details","file_name='$file_name'","");

 		$data1=mysqli_fetch_array($q1);
 		extract($data1);


 			$m->set_data('user_id_from','39');
			$m->set_data('user_id_to',$user_id_to);
			$m->set_data('subject',$subject);
		 	$m->set_data('date_time',date('Y-m-d H:i:s'));
		 	$m->set_data('message_details',$message);
		 	$m->set_data('file_id',$file_id);
		 	
		 	$a =array(
		 		'user_id_from'=>$m->get_data('user_id_from'),
		 		'user_id_to'=>$m->get_data('user_id_to'),
		 		'subject'=>$m->get_data('subject'),
		 		'date_time'=>$m->get_data('date_time'),
		 		'message_details'=>$m->get_data('message_details'),
		 		'file_id'=>$m->get_data('file_id'),
		 		
		 	) ;

		 	$q=$d->insert("message_details",$a);
		 	if($q>0) {
		 		header('location:inbox.php');
			}
			else {
				echo "Error";
			}

	}
	else 
	{
		echo "Error in File Uploading,,!!";
	}

	
 }

 if(isset($_GET['message_id'])) {
 	extract($_GET);
 	
 	$q=$d->delete("message_details","message_id='$message_id'");

 	if($q>0)
 	{
		header('location:inbox.php');
	}
	else
	{
		echo "Error";
	}
 }

 if (isset($_POST['validateotp']))
 {
    extract($_POST);

    $botp= $_SESSION['otp'];
   
    if($botp==$otp)
    {
        unset($_SESSION['otp']);
		header('location:reset_password.php');
    }
    else
    {
        header('location:otp.php?msgError=Wrong OTP');
    }
 }

 if (isset($_POST['resetpassword']))
 {
    extract($_POST);

    if($password==$c_password)
    {
    		$email=$_SESSION['forgot_email'];
     	
			$m->set_data('password',$password);

		 	$a =array(
		 		'password'=>$m->get_data('password'),
		 	) ;

		 	$q=$d->update("users",$a,"email='$email'");
		 	if($q>0) {

		 		session_destroy();
		 		header('location:login.php');
			}
			else {

				echo "Error";
			}
    }
    else
    {
        header('location:reset_password.php?msgError=Password does not match..!!');
    }
 }
