<?
	include 'include/db.php';

	$answers = serialize(explode("\r\n",$_POST['answers'])); //prepare to serialize the answers for storage
	
	$submitPwd = 'suito'; //TODO make it so that each professor can set their own password through some sort of web interface
	
	if ($submitPwd == $_POST['pwd']) {
		$link = mysql_connect($server,$usr,$pwd,false,MYSQL_CLIENT_SSL);
		mysql_select_db($db);
		mysql_query("SET NAMES 'utf8'");
		mysql_query("INSERT INTO quizresults VALUES('{$_POST['name']}', {$_POST['quizID']}, '{$_POST['profname']}', {$_POST['score']}, '$answers', '{$_POST['class']}');") or die(mysql_error());
		mysql_close($link);
		
		echo "Your quiz has been submitted!"; //TODO do something better than this perhaps?
		
	}
	else echo "wrong password"; //TODO ask for the password again hopefully without losing the student's data we're trying to submit (some browsers don't retain form status if you return to the quiz page -- STUPID INTERNET EXPLORER for one)
?>
