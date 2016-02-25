<?php require_once('header-withoutlogin.php');
$uid='';
if(isset($_REQUEST['user_id']) && trim($_REQUEST['user_id'])>0)
{
	$uid=$_REQUEST['user_id'];
}
$keyid='';
if(isset($_REQUEST['key']) && trim($_REQUEST['key'])!='')
{
	$keyid=$_REQUEST['key'];
}
if($uid!='')
{
	$res=$user->Deleteuser("and ID='$uid' and keyid='$keyid'");
	if($res==1)
	{
		$_SESSION['message']='Deleted user successfully.';
	}
	else
	{
		$_SESSION['message']='Not deleted user successfully.';
	}
}
@header('Location: manageusers.php');
exit();