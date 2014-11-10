<?
include 'db2.php';
mysql_connect($server,$usr,$pwd,false,MYSQL_CLIENT_SSL);
mysql_select_db($db);
		
//$mysqli = new mysqli("$server", "$usr", "$pwd", "$db");
//if (mysqli_connect_errno()) {
 //   printf("Connect failed: %s\n", mysqli_connect_error());
  //  exit();
//}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Insertion Page</title>
<LINK REL="STYLESHEET" TYPE="TEXT/CSS" HREF="quiz_style.css">
<style type="text/css">
<!--
.style3 {font-size: 12px}
-->
</style>
</head>
<body>
<?
if($_POST['cue']=="submit"){
    $user_last=$_POST['user_last'];
	$user_first=$_POST['user_first'];  
	$username = $_POST['username'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	 


	if($user_last!=""){
	
	}else{
?>
	<script type="text/javascript">
		alert('Please enter the professor last name');
		history.go(-1); 
	</script>
<?
	}
	if($user_first!=""){
	
	}else{
?>
	<script type="text/javascript">
		alert('Please enter the professor first name');
		history.go(-1); 
	</script>
<?
	}
	
	if($username!=""){
	
	}else{
?>
	<script type="text/javascript">
		alert('Please enter the username');
		history.go(-1); 
	</script>
<?
	}
	
	if ($password==$repassword){
			$passwordHash = sha1($_POST['password']);
	}else{
?>		
		
		<script type="text/javascript">
		alert('Please verify your password again');
		history.go(-1); 
		</script>
	
<?
	}
	
	
$sql = "INSERT INTO professor (id, user_last, user_first, username, password) VALUES ('', $user_last,$user_first, $username, $passwordHash)";
echo $sql; 
//$result = $mysqli->query($sql, array(id, $user_last, $user_first, $username, $passwordHash));

//if($result){

?>
	<table align="center" width="800"> 
  <tr>
    <td>
	<div class="box">
	<span>
	<h2>You have successfully added a new professor.</h2>
	</span>
	</div>
	</td>
  </tr>
  <tr>
  <td align="right">
  <a href="add_pro.php">Go Back to the Insertion Page</a>
  </td>
  </tr>
</table>
<? 
//}//if result
}else{
?>
<table align="center" width="800"> 
  <tr>
    <td>
	<div class="box">
	<span>
	<h2>Greetings, Professor. Please submit your information.</h2>
	<br />
	</span>
	  <form id="form1" name="form1" method="post" action="add_pro.php">
	    <table width="765" border="0" cellspacing="1" cellpadding="5">
          <tr>
            <td width="147" bgcolor="#E0E0E0"><div align="right">Last Name </div></td>
            <td width="7" bgcolor="#E0E0E0">&nbsp;</td>
            <td width="195" bgcolor="#E0E0E0"><label>
              <input type="text" name="user_last" />
            </label></td>
            <td width="347" bgcolor="#E0E0E0">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#E0E0E0"><div align="right">First Name </div></td>
            <td bgcolor="#E0E0E0">&nbsp;</td>
            <td bgcolor="#E0E0E0"><input type="text" name="user_first" /></td>
            <td bgcolor="#E0E0E0">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#E0E0E0"><div align="right">User Name </div></td>
            <td bgcolor="#E0E0E0">&nbsp;</td>
            <td bgcolor="#E0E0E0"><input type="text" name="username" /></td>
            <td bgcolor="#E0E0E0">&nbsp;</td>
          </tr>
          <tr>
            <td bgcolor="#E0E0E0"><div align="right">Password</div></td>
            <td bgcolor="#E0E0E0">&nbsp;</td>
            <td bgcolor="#E0E0E0">
              <input type="password" name="password" />            </td>
            <td bgcolor="#E0E0E0"><div align="left"><span class="style3">Capitalization matters. Use 6 to 32 characters, no spaces</span></div></td>
          </tr>
          <tr>
            <td bgcolor="#E0E0E0"><div align="right">Retype Password</div></td>
            <td bgcolor="#E0E0E0">&nbsp;</td>
            <td bgcolor="#E0E0E0"><input type="password" name="repassword" /></td>
            <td bgcolor="#E0E0E0">&nbsp;</td>
          </tr>
		  <tr>
            <td bgcolor="#E0E0E0">&nbsp;</td>
            <td bgcolor="#E0E0E0">&nbsp;</td>
            <td bgcolor="#E0E0E0"><label>
              <input type="submit" name="Submit" value="Submit" />
              <input type="reset" name="Submit2" value="Clear" />
            </label></td>
		    <td bgcolor="#E0E0E0">&nbsp;</td>
		  </tr>
        </table>
		<input name="cue" type="hidden" value="submit" />
        </form>
	  </div>
	</td>
  </tr>
</table>
<?
}
?>
</body>
</html>
