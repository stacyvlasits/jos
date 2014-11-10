<?
include("mysql_class.php");
include("db.php");
$link = mysql_connect($host, $name, $pass, false, MYSQL_CLIENT_SSL);

	
	$user=$_GET['user'];
	$pass=$_GET['pass'];
	$f_name=$_GET['f_name'];
	$l_name=$_GET['l_name'];
	$class=$_GET['class'];
	$section=$_GET['section'];  
	$q_id=$_GET['q_id']; 
	$score=$_GET['score']; 
   
   
   	if (!$link) {
    	die('Could not connect: ' . mysql_error());
	} else {

		mysql_select_db('japanese') or die('MySQL Error: Cannot select table');
		$select_sql="SELECT * FROM stu_login where usr='$user' and pwd='$pass'";
		$select=mysql_query($select_sql); 
		$count=0; 	 

		if (mysql_num_rows($select)>0){
			$count++; 
		}

    
		if ($count < 1) {
			echo "<center>Invalid username or password. <br>Please go back and <font color=#FF0000> re-take </font> the quiz.<br />"; 
			echo "<FORM><INPUT TYPE='button' VALUE='Go Back' onClick='history.back()'></FORM></center>";
		}else {
			$insert_sql="insert into quizresults values('', '$score', $q_id, '$class', '$section', '$f_name', '$l_name')";
			$insert=mysql_query($insert_sql); 
?>		
		<script type="text/javascript" language="JavaScript">
		<!--
		setTimeout('Redirect()',10);

		function Redirect(){
			location.href = 'submit_successful.php';
		}
		// -->
		</script>

<?
			
		}

	}
?>
