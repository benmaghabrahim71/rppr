<?php
	//Make sure to edit all of these settings below
	define('SVRNAME', 'Your Server Name'); // Change this to your server name
	define('OWNER', 'Your Name'); //Or the community owners name
	define('SVRIP', 'your-server-ip.com'); //Your server's IP or domain
	define('YEAR', '2024'); //This is just for the copyright, probably wont need to change it
	define('PASSWORDHASH', 'BLowE9E&zujN'); //Leave this alone

?>

<?php
	// Database Configuration - UPDATE THESE WITH YOUR ACTUAL VALUES
	if(!defined('SQL_SERVER')) define('SQL_SERVER', 'localhost'); // Usually 'localhost' for shared hosting

	if(!defined('SQL_USERNAME')) define('SQL_USERNAME', 'your_db_username'); // Your database username

	if(!defined('SQL_PASSWORD')) define('SQL_PASSWORD', 'your_db_password'); // Your database password

	if(!defined('SQL_DB')) define('SQL_DB', 'your_database_name'); // Your database name

	// Database connection - Note: This uses deprecated mysql_* functions
	// Consider updating to PDO or mysqli for production use
	$con = mysql_connect(SQL_SERVER, SQL_USERNAME, SQL_PASSWORD);
	
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}
	
	mysql_select_db(SQL_DB, $con);
	
	function convert($str,$ky='') //Credits to who ever made the convert function (Converting the hash)
{ 
	if($ky=='') return $str; 
	$ky=str_replace(chr(32),'',$ky); 
	if(strlen($ky)<8)exit('key error'); 
	$kl=strlen($ky)<32?strlen($ky):32; 
	$k=array();for($i=0;$i<$kl;$i++){ 
	$k[$i]=ord($ky{$i})&0x1F;} 
	$j=0;for($i=0;$i<strlen($str);$i++){ 
	$e=ord($str{$i}); 
	$str{$i}=$e&0xE0?chr($e^$k[$j]):chr($e); 
	$j++;$j=$j==$kl?0:$j;} 
	return $str; 
} 
	
	function getuser()//Credits to who ever made this function!
{
	$decrpt = convert(PASSWORDHASH);
	$str = explode("||", $decrpt);
	return;
}
?>

