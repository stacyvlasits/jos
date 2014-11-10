<?
include("include/mysql_class.php");
include("include/db.php");

// Connect to MySQL 
$DB = new mysql();
$connection=$DB->Connect($host, $name, $pass, $db);  
$sql="select * from professor where id != 9 ORDER BY `professor`.`id` ASC";
$query=$DB->Query($sql); 


if ($_GET['mode']=="q_insert"){
$quiz_name=$_GET['quiz_title']; 
$p_id=$_GET['p_id']; 
$sql_insert="INSERT INTO quizzes(id, quiz_name, p_id) VALUES('', '$quiz_name', $p_id)";
$query_insert=$DB->Query($sql_insert); 
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Professor List Page</title>
<LINK REL='STYLESHEET' TYPE='TEXT/CSS' HREF='css/style.css'>
<style type="text/css">
<!--
body {
	background-color: #003300;
}
-->
</style></head>

<body>
<br />
<center>
	<div class="box"><img src="images/logo.jpg" alt="logo" width="500" height="120" />
	<br /><br />
<table><tr><td><center>
	<form id="form1" name="form1" method="get" action="p_list.php">
		<table width="450"><tr>
			<td width="100">
				<div align="left">Class</div>
			</td>
			<td width="250">
				<select name="p_id">
		        <option value="select" selected="selected">select</option>
<?
		
 				 	while($array = $DB->FetchArray($query)){
  						extract($array);
  						echo "<option value=".$id."> $id. $class</option>";
  					}
				
?>
				</select>
			</td>
    		<td width="100">
				<input type="submit" name="Submit" value="Submit" />
				<input type="hidden" name="mode" value="quiz_title">
			</td>
		</tr></table>
	</form>
</center></td></tr>
<tr><td><center>
<? 
if ($_GET['mode']=="quiz_title"||$_GET['mode']=="q_insert"){
	$class_id=$_GET['p_id']; 

	if ($p_id=="select"){
		echo "<tr><td  colspan='3'><b>Please, select a class before submitting.</b></td></tr>";   
	}
	$sql2="select * from quizzes where p_id=$class_id or p_id=9 ORDER BY id asc";
	$query2=$DB->Query($sql2); 
	
?>
	<form id="form1" name="quiz" method="get" action="student_list.php">
  		<table width="450"><tr>
  			<td width="100">
  				<div align="left">Quizzes</div>
			</td>
			<td width="250">
				<select name="q_id">
				<option value="select" selected="selected">select</option>
<?
  				while($array2 = $DB->FetchArray($query2)){
  					extract($array2);
  					echo "<option value=".$id.">$id. $quiz_name</option>";
  				}

?>
    			</select>
			</td>
    		<td width="100">
				<input type="submit" name="Submit" value="Submit" />
				<input name="section" type="hidden" value="no" />
				<input name="p_id" type="hidden" value=<?=$class_id ?>  />
			</td>
		</tr></table>
	</form>
<?
}
  $DB->Close();
?>


</center><td><tr>
</table>
<br />
<table width="250" align="right">
  <tr>
 <!-- <td align="left"><img src="images/button.gif" alt="Professor Quiz" width="15" height="15" align="baseline" /><a href="add_pro.php"> Add Professor</a>&nbsp;&nbsp;&nbsp;&nbsp; </span></td>-->
   <td align="right"><img src="images/button.gif" alt="Add Quiz" width="15" height="15" align="baseline" /><a href="add_quiz.php"> Add Quiz</a></span></td>
  </tr></table>
  <br />

 </div>
</center>
</body>
</html>