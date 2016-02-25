<?php @session_start();

require_once('includes/head.php'); 
$json = array();
if(isset($_GET['showdir']) && $_GET['showdir']=='maindir')
{	

	$ID=$_POST['dir'];
	$skey=$_POST['skey'];
	$uid=$_POST['uid'];
	$filelist=$user->userFilelist($uid, " and keyid='$skey' and ID='$ID'");
	$data='';
	if(!empty($filelist))
	{
		$inputsize=$user->dirSize('uploads/'.$uid.'/'.date('Y-m-d H-i-s',strtotime($filelist[1]['udate'])).'/input');
		
		$data='<ul class="main_folder main_subbox col-md-12 subfolder_'.$ID.'">
          <li class="f_name col-md-6"><a href="javascript:;" coords="'.$filelist[1]['ID'].'" filetype="input" class="getfiles"><b class="upcaret"></b><img src="img/f.png"/> Input</a></li>
          <li class="f_size col-md-1">'.$inputsize.'</li>
          <li class="f_type col-md-2">Directory</li>
          <li class="f_action col-md-1"></li>
        </ul>';
		
		/*$outputsize=$user->dirSize('uploads/'.$uid.'/'.date('Y-m-d H-i-s',strtotime($filelist[1]['udate'])).'/output');
		$data.='<ul class="main_folder main_subbox col-md-12 subfolder_'.$ID.'">
          <li class="f_name col-md-6"><a href="javascript:;" coords="'.$filelist[1]['ID'].'" filetype="output" class="getfiles"><b class="upcaret"></b> <img src="img/f.png"/> Output</a></li>
          <li class="f_size col-md-1">'.$outputsize.'</li>
          <li class="f_type col-md-2">Directory</li>
          <li class="f_date col-md-2">'.date('Y-m-d',strtotime($filelist[1]['udate'])).'</li>
          <li class="f_action col-md-1"></li>
        </ul>';*/
		$json['data'] = $data;
	}
}
if(isset($_GET['showdir']) && $_GET['showdir']=='files')
{	
	$ID=$_POST['dir'];
	$skey=$_POST['skey'];
	$filetype=$_POST['filetype'];
	$uid=$_POST['uid'];
	$filelist=$user->userFilelist($uid, " and keyid='$skey' and ID='$ID'");
	$data='';
	if(!empty($filelist))
	{
		if($filetype=='input'){
			
			$path='uploads/'.$uid.'/'.date('Y-m-d H-i-s',strtotime($filelist[1]['udate'])).'/input/'.$filelist[1]['filename'];
			$inputfile='javascript:;';
			if(file_exists($path))
			{
				$inputfile='viewfiles.php?fileid='.$path;
			}
			
			$filesize=$user->fileSize($path);
			$fileextension=$user->fileExtension($path);
			$data='<ul class="main_folder main_subbox m_sub_subbox col-md-12 files_'.$ID.' '.$filetype.'_'.$ID.'">
			  <li class="f_name col-md-6"><img src="img/installer.png"/> <a href="'.$inputfile.'">'.$filelist[1]['filename'].'</a></li>
			  <li class="f_size col-md-1">'.$filesize.'</li>
			  <li class="f_type col-md-2">'.$fileextension.'</li>
			  <li class="f_action col-md-1">
			   
			  </li>
			</ul>';
		}
		else if($filetype=='output'){
			if(trim($filelist[1]['gdate'])!=''){
				$ourputfile='javascript:;';
				if(file_exists('output/'.$uid.'/'.$file['filename']))
				{
					$ourputfile='viewfiles.php?fileid=output/'.$uid.'/'.$file['filename'];
				}
				$path='uploads/'.$uid.'/'.date('Y-m-d H-i-s',strtotime($filelist[1]['udate'])).'/output/'.$filelist[1]['filename'];
				$filesize=$user->fileSize($path);
				$fileextension=$user->fileExtension($path);
				$data='<ul class="main_folder main_subbox m_sub_subbox col-md-12 files_'.$ID.' '.$filetype.'_'.$ID.'">
				  <li class="f_name col-md-6"><img src="img/installer.png"/> '.$filelist[1]['filename'].'</li>
				  <li class="f_size col-md-1">'.$filesize.'</li>
				  <li class="f_type col-md-2">'.$fileextension.'</li>
				  <li class="f_action col-md-1">
				   
				  </li>
				</ul>';
			}
			else
			{
				$data='';
			}
		}
		$json['data'] = $data;
	}
}
print(json_encode($json));
?>
