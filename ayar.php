
<?php 

try {
	
	

	
	$host   = "localhost";
	$dbname = "id5783308_myblog";
	$kadi   = "id5783308_myblog";
	$sifre  = "123asd123";
	

	
	
	$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8","$kadi","$sifre");
	
}catch (PDOException $mesaj){
	
	
	echo $mesaj->getmessage();
	
}

?>