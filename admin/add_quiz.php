<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Add Quiz Page</title>
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
<center><div class="box"><img src="images/logo.jpg" alt="logo" width="500" height="120" />
<? 

include("include/mysql_class.php");
include("include/db.php");

// Connect to MySQL 
$DB = new mysql();
$connection=$DB->Connect($host, $name, $pass, $db);  
$sql="select * from professor";
$query=$DB->Query($sql); 
?>

<form id="form1" name="form1" method="get" action="p_list.php">
<br />
<table width=="420">
<tr>
<td width="120">Professor</td>
<td width="300">
<select name="p_id">
	<option value="select" selected="selected">select</option>
<?

  while($array = $DB->FetchArray($query)){
  extract($array);
  echo "<option value=$id> $first_name $last_name</option>";
  }

?>
	</select>
</td>
</tr>
<tr>
<td >Quiz Name
</td>
<td>
    <input name="quiz_title" type="text" size="30" />
    </label>
</td>
	</tr>
	<tr>
	    <td width="100">
			<p style="line-height:20%">&nbsp;</p>	 
	       <input type="submit" name="Submit" value="Submit" />
          </td>
		  <td>
		  <input type="hidden" name="mode" value="q_insert">
		  	<div align="right">
				<p style="line-height:20%">&nbsp;</p>	  
				<img src="images/button.gif" alt="Professor Quiz" width="15" height="15" align="baseline" /><a href='p_list.php'> Go to Quiz List </a>
			</div>
		</td>
	</tr></table>
</form>

<?
$DB->Close();
?>

</div>
</center>
</body>
</html>