<?php 
session_start();
include_once('lib/dbconnect.php');
include_once('lib/dao.php');
include_once('lib/model.php');

$d = new dao();
$m = new model();


if (isset($_POST['teacher_check'])) {

 	extract($_POST);


	$q=$d->select("users","email='$email' AND password='$password' AND flag='1'","");

 	$data=mysqli_fetch_array($q);

 	if($data>0)
 	{
 		$_SESSION['teacher_id']= $data['user_id'];
		$_SESSION['teacher_username']= $data['username'];
		$_SESSION['teacher_email']= $data['email'];
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



if (isset($_POST['addassignment'])) {
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


 			
			$m->set_data('assignment_name',$assignment_name);
			$m->set_data('file_id',$file_id);
		 	$m->set_data('submission_deadline',$submission_deadline);
		 	$m->set_data('submission_status','0');
		 	
		 	
		 	$a =array(
		 	
		 		'assignment_name'=>$m->get_data('assignment_name'),
		 		'file_id'=>$m->get_data('file_id'),
		 		'submission_deadline'=>$m->get_data('submission_deadline'),
		 		'submission_status'=>$m->get_data('submission_status'),
		 		
		 		
		 	) ;

		 	$q=$d->insert("assignment_details",$a);
		 	if($q>0) {
		 		header('location:assignments.php');
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


if (isset($_POST['addexam'])) {
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


 			
			$m->set_data('exam_name',$exam_name);
			$m->set_data('file_id',$file_id);
		 	$m->set_data('submission_deadline',$submission_deadline);
		 	$m->set_data('submission_status','0');
		 	
		 	
		 	$a =array(
		 	
		 		'exam_name'=>$m->get_data('exam_name'),
		 		'file_id'=>$m->get_data('file_id'),
		 		'submission_deadline'=>$m->get_data('submission_deadline'),
		 		'submission_status'=>$m->get_data('submission_status'),
		 		
		 		
		 	) ;

		 	$q=$d->insert("exam_details",$a);
		 	if($q>0) {
		 		header('location:exams.php');
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

  if(isset($_GET['assignment_id'])) {
 	extract($_GET);
 	
 	$q=$d->delete("assignment_details","assignment_id='$assignment_id'");

 	if($q>0)
 	{
		header('location:assignments.php');
	}
	else
	{
		echo "Error";
	}
 }

   if(isset($_GET['exam_id'])) {
 	extract($_GET);
 	
 	$q=$d->delete("exam_details","exam_id='$exam_id'");

 	if($q>0)
 	{
		header('location:exams.php');
	}
	else
	{
		echo "Error";
	}
 }


 if (isset($_POST['updateinfo'])) {
 	extract($_POST);



 	$m->set_data('grade',$grade);
 	$m->set_data('absents',$absents);

 	

 	$a =array(
 		
 		'grade'=>$m->get_data('grade'),
 		'absents'=>$m->get_data('absents'),

 	) ;

 	$q=$d->update("student_details",$a,"user_id='$user_id' AND subject_id='$subject_id'");
 	if($q>0) {
 		header('location:index.php');
	}
	else {
		echo "Error";
	}
 }