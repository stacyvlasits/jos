<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Student List Page</title>
<LINK REL='STYLESHEET' TYPE='TEXT/CSS' HREF='css/style.css'>
<style type="text/css">
<!--
body {
	background-color: #003300;
}
-->
</style></head>

<body>
<br /><center>
<div class='box'><img src="images/logo.jpg" alt="logo" width="500" height="120" />

<? 

include("include/mysql_class.php");
include("include/db.php");

// Connect to MySQL 
$DB = new mysql();
$connection=$DB->Connect($host, $name, $pass, $db);  
$q_id=$_GET['q_id'];
$section=$_GET['section'];
$score=$_GET['score'];
$p_id=$_GET['p_id'];
$class_name = '';


if ($q_id=="select"){
    echo "<br/><br/>Please, select a quiz title"; 
	echo "<form><input type='button' value='Click here to go back' onClick='history.back()'></form><br/><br/>";   
}

$id_query=sprintf("select quizzes.quiz_name from quizzes where id=%d", mysql_real_escape_string($q_id)); 
$q=$DB->Query($id_query); 
?>

<? 
  while($array = $DB->FetchArray($q)){
  extract($array);
  echo "<h2>Quiz Title: $quiz_name";
  }
  
   $class_query = sprintf("select class from professor where id =%d", mysql_real_escape_string($p_id));
   $q2 = $DB->Query($class_query);
  while($array2 = $DB->FetchArray($q2)){
  extract($array2);
  echo "<br /><span style = 'font-size: small; font-weight: normal'>results for $class</span></h2>";
  $class_name = $class;
  }
?>
<table width=="350" cellspacing="1" border="0" cellpadding='2' height="20">
<tr>
	<td colspan="2">
	<center>
		<a href='p_list.php'>
		<a href=<? echo $PHP_MYSELF;?>?q_id=<?= $q_id?>&&section=1&p_id=<?= $p_id?>>1</a> &nbsp;|&nbsp;
		<a href='p_list.php'>
		<a href=<? echo $PHP_MYSELF;?>?q_id=<?= $q_id?>&section=2&p_id=<?= $p_id?>>2</a> &nbsp;|&nbsp;
		<a href='p_list.php'>
		<a href=<? echo $PHP_MYSELF;?>?q_id=<?= $q_id?>&section=3&p_id=<?= $p_id?>>3</a> &nbsp;|&nbsp;
        <a href='p_list.php'>
		<a href=<? echo $PHP_MYSELF;?>?q_id=<?= $q_id?>&&section=4&p_id=<?= $p_id?>>4</a> &nbsp;|&nbsp;
		<a href='p_list.php'>
		<a href=<? echo $PHP_MYSELF;?>?q_id=<?= $q_id?>&section=5&p_id=<?= $p_id?>>5</a> &nbsp;|&nbsp;
		<a href='p_list.php'>
		<a href=<? echo $PHP_MYSELF;?>?q_id=<?= $q_id?>&section=6&p_id=<?= $p_id?>>6</a> &nbsp;|&nbsp;
        <a href='p_list.php'>
		<a href=<? echo $PHP_MYSELF;?>?q_id=<?= $q_id?>&&section=7&p_id=<?= $p_id?>>7</a> &nbsp;|&nbsp;
		<a href='p_list.php'>
		<a href=<? echo $PHP_MYSELF;?>?q_id=<?= $q_id?>&section=8&p_id=<?= $p_id?>>8</a> &nbsp;|&nbsp;
		<a href='p_list.php'>
		<a href=<? echo $PHP_MYSELF;?>?q_id=<?= $q_id?>&section=9&p_id=<?= $p_id?>>9</a> 
	</center>
	</td>
</tr>
<tr>
	<td align='center' bgcolor='#003300' height="20" width="250"><span style='color:#FFFFFF'><strong>Student Name</strong></span>
	</td>
	<td align='center' bgcolor='#003300' width="100"><span style='color:#FFFFFF'><strong>Score</strong></span>
	</td>
</tr>
<? 
if($section==no){
	$sql=sprintf("select * from quizresults where q_id=%d and class LIKE '%s' order by l_name asc", mysql_real_escape_string($q_id), mysql_real_escape_string($class_name));
}else{
	$sql=sprintf("select * from quizresults where q_id=%d and class LIKE '%s' and section='%d' order by l_name asc", mysql_real_escape_string($q_id), mysql_real_escape_string($class_name), mysql_real_escape_string($section));
}

$query=$DB->Query($sql);
 
  while($array = $DB->FetchArray($query)){
  extract($array);


  echo "<tr><td align='center' bgcolor='#669900'><span style='color:#FFFFFF'>$l_name, $f_name</span></td><td align='center' bgcolor='#A9C118'>$score</td></tr>";
}


if($score != 100){
	$score=$score*100;
}else{
	$score=$score;
}
?>
<tr>
	<td colspan='3' align='right'><br />
		<img src="images/button.gif" alt="Professor Quiz" width="15" height="15" align="baseline" /><a href='p_list.php'> Return to Quiz List </a>
	</td>
</tr>
</table>
<?
  $DB->Close();
?>
</div>
</center>
</body>
</html>