<?php @ob_start();

//Include database config file
require_once('db_connection.php');

//Website global configuration
global $prefix;

//Database table prefix.
$prefix="ret_";

//Salt using for creating password and activation key.
$_salt='R{2dX8fi7SD#J(1f[Sus&&Q9dcAUUo:k_,k@5I8rIdUh/:@O =^N[Y}aOD;l;jE6';

//Website url
$siteurl='http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

//Website Name use for title in head tag
$sitname='Sigmaways Retail Analytics';

//Global email for recieving and sending emails.

$owner_email='abhishekvaid@gmail.com';

//Email signature
$email_signature='<br />Sincerely,<br />Sigmaways Team';

//File Formats
$filetypes=array('text/plain','application/rtf','application/msword','zz-application/zz-winassoc-dat','text/comma-separated-values','text/csv', 'application/csv', 'application/excel', 'application/vnd.ms-excel', 'application/vnd.msexcel', 'text/anytext','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet','application/tar', 'application/x-tar', 'applicaton/x-gtar', 'multipart/x-tar', 'application/x-compress', 'application/x-compressed','application/gzip', 'application/x-gzip', 'application/x-gunzip', 'application/gzipped', 'application/gzip-compressed', 'gzip/document', 'application/octet-stream','application/zip', 'application/x-zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/download');
$fileextension=array('.txt','.rtf','.csv','.xlsx','.tar','.gz', '.tar.gz', '.zip', '.dat');



require_once('class/users.php');

$ip=$user->getRealIpAddr();
$data=$user->ip_info($ip, "country_code");
$timezone='Asia/Kolkata';
$zones2=$user->coutrytimzones(" and country_code='$data'");
if(!empty($zones2))
{
	$timezone=$zones2[1]['zone_name'];
	if(empty($timezone)){$timezone='Asia/Kolkata';}
}
//Set Timezone

date_default_timezone_set($timezone);

require_once('sendemails.php');

$sepratefiles=explode('/',$_SERVER['REQUEST_URI']);
$currentpage=$sepratefiles[count($sepratefiles)-1];
if(trim($currentpage)==''){$currentpage='index.php';}


$login_active=false;
if(isset($_SESSION["User_id"]) && isset($_SESSION["User_type"])){ 
	$login_active=true;
	$user_type=$_SESSION["User_type"];
	$uid=$_SESSION["User_id"];
	$skey=$_SESSION["User_key"];
}
if(isset($_REQUEST['activateaccount']) && isset($_REQUEST['email']))
{
	$email=$_REQUEST['email'];
	$activateaccount=$_REQUEST['activateaccount'];
	$check=$user->Userfield('user_email', $email);
	$active=0;
	if(!empty($check))
	{
		$uid=$check[1]['ID'];
		$udate=$user->Userdetail($uid,'udate', true);
		$storedcode=sha1($email.$_salt.$udate);
		if($storedcode==$activateaccount){
			$post['active']=1;
			$res=$user->updateUser($uid ,$post);
			if($res>0)
			{
				$to      = 	$email;
				$subject = 'Welcome to Sigmaways Retail Analytics';	
				$from = $owner_email;
				$fromname=$sitname;
				
				$message="Dear ".$user->Userdetail($uid,'fname', true)." ".$user->Userdetail($uid,'lname', true).",<br /><br />
				Congrats!<br /><br />
				Your account has been activated.</a><br />";
				$message.=$email_signature;
				@mail($to, $subject, $message, $headers);
				
				Sendemail( $to, $subject, $message,$from,$from,$fromname);
				
				$_SESSION['message']='Account Activated. Please click on login to get inside.';
				echo"<script type='text/javascript'>window.location='index.php';</script>";
				exit();
			}
		}
		else
		{
			$_SESSION['message']='Activation code is not matched.';
			echo"<script type='text/javascript'>window.location='index.php';</script>";
			exit();
		}
	}
	else
	{
		$_SESSION['message']='Activation code is not matched.';
		echo"<script type='text/javascript'>window.location='index.php';</script>";
		exit();
	}
}
ob_start();
if(isset($_REQUEST['fileid']))
{
	$file1=$_REQUEST['fileid'];
	$file=$file1;
	if(file_exists($file)) {
		header('Content-Description: File Transfer');
		header('Content-Type: application/force-download');
		header('Content-Disposition: attachment; filename='.basename($file));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file));
		ob_clean();
		flush();
		readfile($file);
		
		//exit;
	}
	else{ echo'file not exist';}
}

