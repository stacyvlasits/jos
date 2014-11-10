<?php
function authenticate(){
	$sid = $_GET['sid'];
	session_start();
	if($sid != session_id()){
		
		Header("Location: http://www.laits.utexas.edu/japanese/joshu/jgp/login.php");
		exit;
	}
}
?>