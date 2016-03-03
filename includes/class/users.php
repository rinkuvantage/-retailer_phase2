<?php
if ( !class_exists( 'Users' ) ) {
	class Users
	{
		
		/*
		Function Name: checkUserLogin()
		Function Aim : To check login
		*/
			
		function checkUserLogin($usrname, $passwd, $rememberme=false)
		{
			global $prefix;
			$strSQL ="select * from ".$prefix."users where user_email='$usrname' and user_pass='$passwd' and active='1'";
			$result = mysql_query($strSQL);
			if(!$result)
			{
				return 0;
			}
			else
			{
				$row = mysql_fetch_assoc($result);
				$_SESSION["User_id"] = $row["ID"];
				$_SESSION["User_type"] = $row["user_type"];
				$_SESSION["User_key"] = $row["keyid"];
				$_SESSION["User_token"] = $row["tokenid"];
				$_SESSION["User_mail"] = $row["user_email"];
				$_SESSION["User_company"] = $row["company"];
				
				if($rememberme) {
					setcookie("ret_usrname", $usrname, time()+ (3600*24*365) );
					setcookie("ret_password", $_POST['pwd'], time()+ (3600*24*365) );
				} else {
					setcookie("ret_usrname", $usrname, time() - (3600) );
					setcookie("ret_password", $_POST['pwd'], time()-(3600) );
				}
				
				return mysql_num_rows($result);
			}
		}
		/*
		Function Name: updateUser()
		Function Aim : To update user detail
		*/
		function updateUser($id ,$fields=array())
		{
			global $prefix;
			if(!empty($fields))
			{
				foreach($fields as $field=>$value)
				{
					$strSQL="update ".$prefix."users set $field='$value' where ID='$id'";
					$result=mysql_query($strSQL);
				}
				return 1;
			}
			else
			{
				return 0;
			}
		}
		/*
		Function Name: addUser()
		Function Aim : To register new user
		*/
		function addUser($fields='',$values='')
		{
			global $prefix;
			if(!empty($fields) && !empty($values))
			{
				
				$strSQL="INSERT INTO `".$prefix."users` ($fields) VALUES ($values)";
				$result=mysql_query($strSQL);
				
				return mysql_insert_id();
			}
			else
			{
				return 0;
			}
		}
		/*
		Function Name: addUser()
		Function Aim : To register new user
		*/
		function Deleteuser($cnd='')
		{
			global $prefix;
			
			
			$strselect="SELECT * FROM `".$prefix."users` where ID!='' $cnd";
			$selectresult = mysql_query($strselect);
			
			$row = mysql_fetch_assoc($selectresult);
			$delSQL="DELETE FROM `mantis_user_table` where `email` = '".$row['user_email']."'";
			mysql_query($delSQL);
			
			
			$strSQL="DELETE FROM `".$prefix."users` where ID!='' $cnd";
			$result=mysql_query($strSQL);
			if($result==1)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		/*
		Function Name: Userdetail()
		Function Aim : To get user detail
		*/
		function Userdetail($usrid,$field='*', $act=false)
		{ 
			global $prefix;
			$strSQL = "select $field from ".$prefix."users where ID='$usrid' ";
			//echo $strSQL;
			$result = mysql_query($strSQL);
			if(!$result)
			{
				return 0;
			}
			else
			{
				$data=array();
				$count=1;
				while($row = mysql_fetch_array($result))
				{
					//fetching all the data in the array one by one
					//putting that object in the array
					$data[$count]=$row;
					$count++;
				}
				if($act && $field!='*'){return $data[1][$field];}
				else{return $data;}
			}
		}
		/*
		Function Name: UserList()
		Function Aim : To get all user list
		*/
		function UserList($cnd='')
		{ 
			global $prefix;
			$strSQL = "select * from ".$prefix."users where ID!='' $cnd";
			//echo $strSQL;
			$result = mysql_query($strSQL);
			if(!$result)
			{
				return array();
			}
			else
			{
				$data=array();
				$count=1;
				while($row = mysql_fetch_array($result))
				{
					//fetching all the data in the array one by one
					//putting that object in the array
					$data[$count]=$row;
					$count++;
				}
				return $data;
			}
		}
		/*
		Function Name: Userfield()
		Function Aim : To get user field value
		*/
		function Userfield($field, $value)
		{ 
			global $prefix;
			$strSQL = "select $field, ID from ".$prefix."users where $field='$value' ";
			//echo $strSQL;
			$result = mysql_query($strSQL);
			if(!$result)
			{
				return 0;
			}
			else
			{
				$data=array();
				$count=1;
				while($row = mysql_fetch_array($result))
				{
					//fetching all the data in the array one by one
					//putting that object in the array
					$data[$count]=$row;
					$count++;
				}
				return $data;
			}
		}
		/*
		Function Name: generatePassword()
		Function Aim : To generate random password
		*/
		function generatePassword($length=9, $strength=0) {
			$vowels = 'aeuy';
			$consonants = 'bdghjmnpqrstvz';
			if ($strength & 1) {
				$consonants .= 'BDGHJLMNPQRSTVWXZ';
			}
			if ($strength & 2) {
				$vowels .= "AEUY";
			}
			if ($strength & 4) {
				$consonants .= '23456789';
			}
			if ($strength & 8) {
				$consonants .= '@#$%';
			}
		 
			$password = '';
			$alt = time() % 2;
			for ($i = 0; $i < $length; $i++) {
				if ($alt == 1) {
					$password .= $consonants[(rand() % strlen($consonants))];
					$alt = 0;
				} else {
					$password .= $vowels[(rand() % strlen($vowels))];
					$alt = 1;
				}
			}
			return $password;
		}
		
		/*
		Function Name: addUserFiles()
		Function Aim : To add files
		*/
		function addUserFiles($fields='',$values='')
		{
			global $prefix;
			if(!empty($fields) && !empty($values))
			{
				$strSQL="INSERT INTO `".$prefix."files` ($fields) VALUES ($values)";
				$result=mysql_query($strSQL);
				return $result;
			}
			else
			{
				return 0;
			}
		}
		
		/*
		Function Name: userFilelist()
		Function Aim : To get user files list
		*/
		function userFilelist($usrid, $cnd='')
		{ 
			global $prefix;
			$strSQL = "select * from ".$prefix."files where user_id='$usrid' $cnd";
			//echo $strSQL;
			$result = mysql_query($strSQL);
			if(!$result)
			{
				return array();
			}
			else
			{
				$data=array();
				$count=1;
				while($row = mysql_fetch_array($result))
				{
					//fetching all the data in the array one by one
					//putting that object in the array
					$data[$count]=$row;
					$count++;
				}
				return $data;
			}
		}
		
		/*
		Function Name: pagination()
		Function Aim : To show pagination
		*/
		function pagination($per_page = 10, $page = 1, $url = '', $total)
		{   
		 
			$adjacents = "2";
		
			$page = ($page == 0 ? 1 : $page);
			$start = ($page - 1) * $per_page;                             
			
			$prev = $page - 1;                        
			$next = $page + 1;
			$lastpage = ceil($total/$per_page);
			$lpm1 = $lastpage - 1;
			$nextlink='';
			$pagination = '<div class="clr"></div><div class="pagination_block">';
			$prevpage='';
			//echo $page;
			if ($page>1){
				$prevpage= "<li><a href='{$url}$prev'>Previous</a></li>";
			   // $pagination.= "<li><a href='{$url}$lastpage'>Last</a></li>";
			}
			if($lastpage > 1)
			{ 	
				$pagination .='<div class="pagination"><ul>';
				$pagination .= $prevpage;		
				if ($lastpage < 7 + ($adjacents * 2))
				{ 
					for ($counter = 1; $counter <= $lastpage; $counter++)
					{
						if ($counter == $page)
							$pagination.= "<li><span class='active'>$counter</span></li>";
						else
							$pagination.= "<li><a href='{$url}$counter'>$counter</a></li>";                  
					}
				}
				elseif($lastpage > 5 + ($adjacents * 2))
				{
					if($page < 1 + ($adjacents * 2))   
					{
						for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
						{
							if ($counter == $page)
								$pagination.= "<li><span class='active'>$counter</span></li>";
							else
								$pagination.= "<li><a href='{$url}$counter'>$counter</a></li>";                  
						}
						$pagination.= "<li><span>...</span></li>";
						$pagination.= "<li><a href='{$url}$lpm1'>$lpm1</a></li>";
						$pagination.= "<li><a href='{$url}$lastpage'>$lastpage</a></li>";    
					}
					elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
					{
						$pagination.= "<li><a href='{$url}1'>1</a></li>";
						$pagination.= "<li><a href='{$url}2'>2</a></li>";
						$pagination.= "<li><span>...</span><li>";
						for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
						{
							if ($counter == $page)
								$pagination.= "<li><span class='active'>$counter</span></li>";
							else
								$pagination.= "<li><a href='{$url}$counter'>$counter</a></li>";                  
						}
						$pagination.= "<li><span>...</span></li>";
						$pagination.= "<li><a href='{$url}$lpm1'>$lpm1</a></li>";
						$pagination.= "<li><a href='{$url}$lastpage'>$lastpage</a></li>";    
					}
					else
					{
						$pagination.= "<li><a href='{$url}1'>1</a></li>";
						$pagination.= "<li><a href='{$url}2'>2</a></li>";
						$pagination.= "<li><span>...</span><li>";
						for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
						{
							if ($counter == $page)
								$pagination.= "<li><span class='active'>$counter</span></li>";
							else
								$pagination.= "<li><a href='{$url}$counter'>$counter</a></li>";                  
						}
					}
					
				}
				
				if ($page < $counter - 1){
					$pagination.= "<li><a href='{$url}$next'>Next</a></li>";
					//$pagination.= "<li><a href='{$url}$lastpage'>Last</a></li>";
				}else{
					//$pagination.= "<li><a class='current'>Next</a></li>";
					//$pagination.= "<li><a class='current'>Last</a></li>";
				}
				$pagination .='</ul></div>';
			} 
				  
			$pagination .= '</div>'; $pagination.='</div>';
			return $pagination;
		}
		
		function dirSize($directory) {
			$size = 0;
			$filesize='0 Byte';
			foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory)) as $file){
				$size+=$file->getSize();
			}
			if($size>=1000){
				$sizeinkb=($size/1000);
				if($sizeinkb>=1000)
				{
					$sizeinmb=($sizeinkb/1000);
					if($sizeinmb>=1000)
					{
						$filesize=number_format(($sizeinmb/1000),2,'.',',').' GB';
					}
					else
					{
						$filesize=number_format($sizeinmb,2,'.',',').' MB';
					}
				}
				else
				{
					$filesize=number_format($sizeinkb,2,'.',',').' KB';
				}
			}
			else if($size<1000 && $size>0){$filesize=$size.' Bytes';}
			return $filesize;
		}
		function fileSize($path) {
			$filesize='0 Byte';
			$size=filesize($path);
			if($size>=1000){
				$sizeinkb=($size/1000);
				if($sizeinkb>=1000)
				{
					$sizeinmb=($sizeinkb/1000);
					if($sizeinmb>=1000)
					{
						$filesize=number_format(($sizeinmb/1000),2,'.',',').' GB';
					}
					else
					{
						$filesize=number_format($sizeinmb,2,'.',',').' MB';
					}
				}
				else
				{
					$filesize=number_format($sizeinkb,2,'.',',').' KB';
				}
			}
			else if($size<1000 && $size>0){$filesize=$size.' Bytes';}
			return $filesize;
		}
		function fileExtension($path) {
			$file=pathinfo($path);
			return $file['extension'].' file';
		}
		
		function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
			$output = NULL;
			if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
				$ip = $_SERVER["REMOTE_ADDR"];
				if ($deep_detect) {
					if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
						$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
					if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
						$ip = $_SERVER['HTTP_CLIENT_IP'];
				}
			}
			$purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
			$support    = array("country", "countrycode", "state", "region", "city", "location", "address", "timezone");
			$continents = array(
				"AF" => "Africa",
				"AN" => "Antarctica",
				"AS" => "Asia",
				"EU" => "Europe",
				"OC" => "Australia (Oceania)",
				"NA" => "North America",
				"SA" => "South America"
			);
			if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
				$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
				if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
					switch ($purpose) {
						case "location":
							$output = array(
								"city"           => @$ipdat->geoplugin_city,
								"state"          => @$ipdat->geoplugin_regionName,
								"country"        => @$ipdat->geoplugin_countryName,
								"country_code"   => @$ipdat->geoplugin_countryCode,
								"continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
								"continent_code" => @$ipdat->geoplugin_continentCode,
								"timezone" => @$ipdat->timezone
							);
							break;
						case "address":
							$address = array($ipdat->geoplugin_countryName);
							if (@strlen($ipdat->geoplugin_regionName) >= 1)
								$address[] = $ipdat->geoplugin_regionName;
							if (@strlen($ipdat->geoplugin_city) >= 1)
								$address[] = $ipdat->geoplugin_city;
							$output = implode(", ", array_reverse($address));
							break;
						case "city":
							$output = @$ipdat->geoplugin_city;
							break;
						case "state":
							$output = @$ipdat->geoplugin_regionName;
							break;
						case "region":
							$output = @$ipdat->geoplugin_regionName;
							break;
						case "country":
							$output = @$ipdat->geoplugin_countryName;
							break;
						case "countrycode":
							$output = @$ipdat->geoplugin_countryCode;
							break;
						case "time_zone":
							$output = @$ipdat->geoplugin_countryCode;
							break;
					}
				}
			}
			return $output;
		}
		function getRealIpAddr()
		{
			if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
			{
			  $ip=$_SERVER['HTTP_CLIENT_IP'];
			}
			elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
			{
			  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
			}
			else
			{
			  $ip=$_SERVER['REMOTE_ADDR'];
			}
			return $ip;
		}
		function coutrytimzones($cnd='')
		{
			global $prefix;
			$sql="select * from ".$prefix."zone where zone_id!='' $cnd";
			$result = mysql_query($sql);
			if(!$result)
			{
				return array();
			}
			else
			{
				$data=array();
				$count=1;
				while($row = mysql_fetch_array($result))
				{
					//fetching all the data in the array one by one
					//putting that object in the array
					$data[$count]=$row;
					$count++;
				}
				return $data;
			}
		}
		function get_user_meta( $user_id, $meta_key='', $single=false)
		{
			global $prefix;
			$cnd='';
			if(trim($meta_key)!='')
			{
				$cnd=" and meta_key='$meta_key'";
			}
			$sql="select * from ".$prefix."usermeta where user_id='$user_id' $cnd";
			$result = mysql_query($sql);
			if(!$result)
			{
				return '';
			}
			else
			{
				$data=array();
				$count=1;
				while($row = mysql_fetch_array($result))
				{
					$data[$count]=$row;
					$count++;
				}
				if(empty($data))
				{
					return '';
				}
				if($single)
				{
					return $data[1]['meta_value'];
				}
				else
				{
					$arrayvalue=array();
					if(!empty($data))
					{
						foreach($data as $k=>$value)
						{
							$value=array($data[$k]['meta_key']=>array($data[$k]['meta_key']));
							$arrayvalue=array_merge($arrayvalue,$value);
						}
					}
					return $arrayvalue;
					
				}
			}
		}
		function add_user_meta( $user_id, $meta_key, $meta_value )
		{
			global $prefix;
			$sql="INSERT INTO `".$prefix."usermeta` (`user_id`, `meta_key`,`meta_value`) VALUES ('$user_id', '$meta_key', '$meta_value')";
			$result = mysql_query( $sql );
		}
		function update_user_meta( $user_id, $meta_key, $meta_value )
		{
			global $prefix;
			$sql="UPDATE `".$prefix."usermeta` set meta_value='$meta_value' where  user_id='$user_id' and meta_key='$meta_key'";
			$result = mysql_query( $sql );
		}
		
		
		
		function add_user_mantis($mantis)
		{
			global $prefix;
			
			
			$t_cookie_string = getRandomString(64);
						
			
			$sql="INSERT INTO `mantis_user_table` (`username`, `realname`,`email`,`password`,`enabled`,`date_created`,`access_level`, `cookie_string`) VALUES ('".$mantis['username']."', '".$mantis['realname']."', '".$mantis['email']."', '".md5($mantis['password'])."', '".$mantis['enabled']."', '".$mantis['datecreated']."', '".$mantis['access_level']."', '".$t_cookie_string."')";
			$result = mysql_query( $sql );
		}
		
		
		
		
		
		function mantisLogin($email)
		{
			global $prefix;
			$strSQL ="select * from `mantis_user_table` WHERE lower(email) = '$email' and `enabled` = '1'"; 
			$result = mysql_query($strSQL);
			if(!$result)
			{
				return 0;
			}
			else
			{
				$row = mysql_fetch_assoc($result);	
				$string_cookies = $row['cookie_string'];		
				
					setcookie("MANTIS_STRING_COOKIE", $string_cookies, time()+ (3600*24*365) );
					setcookie("MANTIS_secure_session", 0, time()+ (3600*24*365) );					
					return mysql_num_rows($result);
			}
		}
	}
	
	

function getRandomString($length = 64) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string = '';

    for ($i = 0; $i < $length; $i++) {
        $string .= $characters[mt_rand(0, strlen($characters) - 1)];
    }

    return $string;
}




	global $user;

	$user = new Users();

}