<?php 
	require_once('assembling.php');
	$con = mysqli_connect('localhost', 'root', '2k91abin1420pirzy', 'autobuy');
	//var_dump($_POST['password']);
	session_start();
	//var_dump($_SESSION);
	//echo password_hash($_POST['password'], PASSWORD_DEFAULT);
	$sql_pwd_hash = 'SELECT password FROM password';
	$result_pwd_hash = mysqli_fetch_all(mysqli_query($con, $sql_pwd_hash));
	//var_dump($result_pwd_hash[0][0]);

	//if(!empty($_POST)){
	//var_dump($_POST);
	if(isset($_POST['password'])){
		if(password_verify($_POST['password'], $result_pwd_hash[0][0])){
			//session_start();
			$_SESSION['login'] = true;
			header('Location: applications.php');
			//echo 'sss';
		}
	}
		
	//}
	

	$page_content = include_template('login.php');
	print($page_content);
