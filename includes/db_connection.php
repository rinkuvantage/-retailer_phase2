<?php @session_start();
$hostname='localhost';
$dbuser='root';
$dbpass='';
$dbname='retailernew';


function connect($hostname,$dbuser,$dbpass,$dbname)
{
	$conn=@mysql_connect($hostname,$dbuser,$dbpass);
	$select_db=@mysql_select_db($dbname);
	
	if(!$conn || !$select_db)
	{
		throw new Exception('could not connect to the database');
	}
}

try{
connect($hostname,$dbuser,$dbpass,$dbname);
}
catch (Exception $e) {
    echo $e->getMessage();
	die();
}

class ExceptionHandling
{
	function trycatch($para)
	{
		try{
			if($para==NULL){
				throw new Exception('Null value returned');
			}
			else{
				return 1;
			}
		}
		catch (Exception $e) {
		echo $e->getMessage();
		die();
		}
	}
	
	function isnumeric($value)
	{
		try{
			if(!is_numeric($value)){
				throw new Exception('parameter passed is not correct');
			}
			else{
				return 1;
			}
		}
		catch (Exception $e) {
		echo $e->getMessage();
		die();
		}
	}
}

?>
