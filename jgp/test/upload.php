<?php
require_once("authenticate.php");
authenticate();

function populateDropdown () {
		$con = mysql_connect("mysql.laits.utexas.edu","japanese-grammar","QInG7mq+",false,MYSQL_CLIENT_SSL);
		if(!$con){
			die('Could not connect: ' . mysql_error());
			}
		mysql_select_db("japanese-joshu-grammar", $con);
		$query = "SET NAMES 'utf8'";
		mysql_query($query);
		
		$query = "SELECT * FROM jgp_tags";
		$result = mysql_query($query);
		
		while($row = mysql_fetch_assoc($result)){
			$tag = $row['english_title'];
			$string = "<input type = 'checkbox' name = '".$row['tag_ID']."'>$tag</option><br/>";
			echo $string;
		}
		
		mysql_close();
}
 if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST) && $_SERVER['CONTENT_LENGTH'] > 0) {
 echo "OH CRAP!";
        throw new Exception(sprintf('The server was unable to handle that much POST data (%s bytes) due to its current configuration', $_SERVER['CONTENT_LENGTH']));
    }
//$filename=$_FILES["file"]["name"];
$filename=$_POST['file'];
$e_title=$_POST['e_title'];
$j_title=$_POST['j_title'];
//$grammar_array=$_POST['grammar_array'];
?>

<form action="" method="POST" enctype="multipart/form-data">
Video file: <input type="text" name="file" /><br/><br/>
English title: <input type="text" name="e_title" value="<?=$e_title?>" /><br/><br/>
Japanese title: <input type="text" name="j_title" value="<?=$j_title?>" /><br/><br/>
Grammar categories:<br/>
<?php
populateDropdown();
?>
<br/>
<input type="submit" value="Submit" />
</form>

<?php

$a = array($e_title, $j_title);
var_dump($a);
if(!empty($e_title) && !empty($j_title)){
	/*
	if ($_FILES["file"]["error"] > 0)
    	{
    	echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  	else{
  	  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  	  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  	  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  	  echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
	
	    if (file_exists("upload/" . $_FILES["file"]["name"]))
	      {
	      echo $_FILES["file"]["name"] . " already exists. ";
    	  }
    	else
    	  {
    	  move_uploaded_file($_FILES["file"]["tmp_name"],
    	  "upload/" . $_FILES["file"]["name"]);
    	  echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
    	  
    	  $con = mysql_connect("mysql.laits.utexas.edu","japanese-grammar","QInG7mq+",false,MYSQL_CLIENT_SSL);
		  if (!$con)
	  	  	{
	  		die('Could not connect: ' . mysql_error());
	  		}
  
	  	  mysql_select_db("japanese-joshu-grammar", $con);
	      $query  = "SET NAMES 'utf8'";
	      mysql_query($query);

		  $query = "INSERT INTO jgp_videos VALUES ('','$filename','$e_title', '$j_title')";
		  mysql_query($query);
		  mysql_close();
    	  }
    }
    */
    $con = mysql_connect("mysql.laits.utexas.edu","japanese-grammar","QInG7mq+",false,MYSQL_CLIENT_SSL);
		  if (!$con)
	  	  	{
	  		die('Could not connect: ' . mysql_error());
	  		}
  
	  	  mysql_select_db("japanese-joshu-grammar", $con);
	      $query  = "SET NAMES 'utf8'";
	      mysql_query($query);

		  $query = "INSERT INTO jgp_videos VALUES ('','$filename','$e_title', '$j_title')";
		  mysql_query($query);
	
	echo "<br/><br/>";	
	 
	$query = "SELECT * FROM jgp_videos WHERE file_name='$filename'";
	$result = mysql_query($query);
	$vid_ID = 0;
	while($row = mysql_fetch_assoc($result)){
		$vid_ID = $row['video_ID'];
	    echo "Video ID: {$row['video_ID']} <br>";
		echo "File name: {$row['file_name']} <br>";
		echo "Japanese Title: {$row['japanese_title']} <br>";
		echo "English Title: {$row['english_title']} <br><br>";
	}
	echo "<br/>";
	
	
	$query = "SELECT * FROM jgp_tags";
	$result = mysql_query($query);
		
	while($row = mysql_fetch_assoc($result))
	{
		$tag_ID = $row['tag_ID'];
		if($_POST[$tag_ID])
		{
			$query = "INSERT INTO jgp_vid_tag_link VALUES ('','$vid_ID', '$tag_ID')";
			mysql_query($query);
		}
	}

	mysql_close();
	}
	
	
?>
