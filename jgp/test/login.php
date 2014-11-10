   <?php
include("db.php");

$submit = $_POST['submit'];
$username = $_POST['username'];
$password = $_POST['password'];


// Check if the user is in the database, if so, see if the password matches, 
// else, throw incorrect flag
if(!empty($submit) && !empty($username) && !empty($password)){
	
	// Connect to the database
	$con = mysql_connect($host, $name, $pass, false, MYSQL_CLIENT_SSL);
	if(!$con){
		die ("Could not connect: " . mysql_error());
	}
	mysql_select_db("japanese-joshu-grammar", $con);
	
	
	// See if user is in the database
	$sql= sprintf("SELECT * FROM jgp_users WHERE user_name='%s' AND password='%s'", mysql_real_escape_string($username), mysql_real_escape_string($password));
    $result = mysql_query($sql);
	if($row = mysql_fetch_assoc($result)){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['time'] = time();
		Header("Location: http://www.laits.utexas.edu/japanese/joshu/jgp/admin.php?sid=".session_id());
		exit;
	} else {
		echo "<font color=red>Incorrect username or password.</font>";
	}
	loginForm();
} else {
	if(!empty($submit)){
		echo "<font color=red>Please enter a username and password.</font>";
	}
	loginForm();
	
}

function loginForm(){
	echo "<form name='login' action='' method='POST'>
			Username: <input type='text' name='username' /><br/>
			Password: <input type='password' name='password' /><br/>
			<input type='submit' name='submit' value='Log In' />
		 </form>";
}

?>
