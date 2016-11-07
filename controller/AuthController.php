<?php

session_start();

header("Access-Control-Allow-Origin: *");

	$db = require_once '../config/database.php';

	try{
		$DB_con = new PDO("mysql:host={$db['host']};dbname={$db['database']}",$db['user'],$db['pass']);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

if(isset($_POST['signup']))
{
	$fullname=htmlspecialchars(trim($_POST['fullname']));
	$email=htmlspecialchars(trim($_POST['email']));
	$password=htmlspecialchars(trim($_POST['password']));

	$query = $DB_con->prepare('SELECT * from phonegap_login where email=:user and password=:pwd');
	$query->execute(array(':user'=>$email,':pwd'=>$password));

	$login = $query->fetch(PDO::FETCH_ASSOC);

	if($login)
	{
		echo "exist";
	}
	else
	{
		$date=date("d-m-y h:i:s");

		$user = $DB_con->prepare('INSERT into phonegap_login (reg_date,fullname,email,password) values(:fecha,:fullname,:email,:password)');


		$user->bindParam(':fecha',$date);
		$user->bindParam(':fullname',$fullname);
		$user->bindParam(':email',$email);
		$user->bindParam(':password',$password);

		
		if($user->execute())
		{
			echo "success";
		}
		else
		{
			echo "failed";
		}
	}

}

//Login
if(isset($_POST['login']))
{
	$email=htmlspecialchars(trim($_POST['email']));
	$password=htmlspecialchars(trim($_POST['password']));

	$query = $DB_con->prepare('SELECT * from phonegap_login where email=:user and password=:pwd');
	$query->execute(array(':user'=>$email,':pwd'=>$password));

	$login = $query->fetch(PDO::FETCH_ASSOC);

	if($login)
	{	

		$_SESSION['status'] = 'success';

		$_SESSION['user'] = $login['fullname'];

		echo "success";
	}
	else
	{
		echo "failed";
	}
}

//Change Password
if(isset($_POST['change_password']))
{
	$email=mysql_real_escape_string(htmlspecialchars(trim($_POST['email'])));
	$old_password=mysql_real_escape_string(htmlspecialchars(trim($_POST['old_password'])));
	$new_password=mysql_real_escape_string(htmlspecialchars(trim($_POST['new_password'])));
	$check=mysql_num_rows(mysql_query("select * from `phonegap_login` where `email`='$email' and `password`='$old_password'"));
	if($check!=0)
	{
		mysql_query("update `phonegap_login` set `password`='$new_password' where `email`='$email'");
		echo "success";
	}
	else
	{
		echo "incorrect";
	}
}

// Forget Password
if(isset($_POST['forget_password']))
{
	$email=mysql_real_escape_string(htmlspecialchars(trim($_POST['email'])));
	$q=mysql_query("select * from `phonegap_login` where `email`='$email'");
	$check=mysql_num_rows($q);
	if($check!=0)
	{
		echo "success";
		$data=mysql_fetch_array($q);
		$string="Hey,".$data['fullname'].", Your password is".$data['password'];
		mail($email, "Your Password", $string);
	}
	else
	{
		echo "invalid";
	}
}

if(isset($_POST['logout'])){

	$_SESSION['status'] = 'false';

	session_destroy();

	echo 'success';

}

?>