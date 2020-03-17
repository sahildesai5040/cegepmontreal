<?php 
session_start();
include_once('lib/dbconnect.php');
include_once('lib/dao.php');
include_once('lib/model.php');

$d = new dao();
$m = new model();


if (isset($_POST['usercheck'])) {

 	extract($_POST);


	$q=$d->select("company_info","email='$email' AND password='$password'","");

 	$data=mysqli_fetch_array($q);

 	if($data>0)
 	{
 		$_SESSION['admin_id']= $data['c_id'];
		
		$_SESSION['admin_email']= $data['email'];
		
		header('location:index.php');
	}	
	else 
	{
		
		header('location:login.php?msgError=Wrong Username or Email');
	}
 }

 if (isset($_POST['addstudent'])) {
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
 		header('location:view_student.php');
	}
	else {
		echo "Error";
	}
 }





 if (isset($_POST['addteacher'])) {
 	extract($_POST);


	$m->set_data('username',$firstname ." " . $lastname);
 	$m->set_data('email',$email);
 	$m->set_data('password',$password);
 	$m->set_data('course_id',$course_id);
 	
 	$m->set_data('flag','1');
 	

 	$a =array(
 		
 		'username'=>$m->get_data('username'),
 		'email'=>$m->get_data('email'),
 		'password'=>$m->get_data('password'),
 		'course_id'=>$m->get_data('course_id'),
 		
 		'flag'=>$m->get_data('flag'),
 		
 	) ;

 	$q=$d->insert("users",$a);
 	if($q>0) {
 		header('location:view_teacher.php');
	}
	else {
		echo "Error";
	}
 }


if (isset($_POST['updatestudent'])) {
 	extract($_POST);



 	$m->set_data('username',$username);
 	$m->set_data('email',$email);
 	$m->set_data('password',$password);
 	$m->set_data('course_id',$course_id);
 	
 	

 	$a =array(
 		
 		'username'=>$m->get_data('username'),
 		'email'=>$m->get_data('email'),
 		'password'=>$m->get_data('password'),
 		'course_id'=>$m->get_data('course_id'),
 		
 		
 	) ;

 	$q=$d->update("users",$a,"user_id='$user_id'");
 	if($q>0) {
 		header('location:view_student.php');
	}
	else {
		echo "Error";
	}
 }


if (isset($_POST['updateteacher'])) {
 	extract($_POST);



 	$m->set_data('username',$username);
 	$m->set_data('email',$email);
 	$m->set_data('password',$password);
 	$m->set_data('course_id',$course_id);
 	
 	

 	$a =array(
 		
 		'username'=>$m->get_data('username'),
 		'email'=>$m->get_data('email'),
 		'password'=>$m->get_data('password'),
 		'course_id'=>$m->get_data('course_id'),
 		
 		
 	) ;

 	$q=$d->update("users",$a,"user_id='$user_id'");
 	if($q>0) {
 		header('location:view_teacher.php');
	}
	else {
		echo "Error";
	}
 }


 if(isset($_GET['user_id'])) {
 	extract($_GET);
 	
 	$q=$d->delete("users","user_id='$user_id'");

 	if($q>0)
 	{
		header('location:view_student.php');
	}
	else
	{
		echo "Error";
	}
 }

  if(isset($_GET['teacher_id'])) {
 	extract($_GET);
 	
 	$q=$d->delete("users","user_id='$teacher_id'");

 	if($q>0)
 	{
		header('location:view_teacher.php');
	}
	else
	{
		echo "Error";
	}
 }


