<?
	include("include/mysql_class.php");
    include("include/db.php");
	
	$username = $_POST['usr'];
	$password = $_POST['pwd'];
	
	$DB = new mysql();
    $connection=$DB->Connect($host, $name, $pass, $db);  
    $sql= sprintf("SELECT * FROM professor WHERE username='%s' AND password='%s'", mysql_real_escape_string($username), mysql_real_escape_string($password));
    $query=$DB->Query($sql); 


	while($array = $DB->FetchArray($query)){
  		extract($array);
  		$count++; 
  	}

	if ($count < 1) {
		//echo $profusr . $profpwd;
		echo "<html><head><title>Login Failed</title><LINK REL='STYLESHEET' TYPE='TEXT/CSS' HREF='css/style.css'></head><body><center><div class='box'>Invalid username or password. <br />Click <a href=\"p_login.html\">here</a> to try again. </div></center></body></html>";
	}
	else {
		session_start();
		$_SESSION['profusr'] = $username; 
		header("Location: p_list.php?mode=professor");
	}
?>