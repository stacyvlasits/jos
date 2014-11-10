<?php

require_once("authenticate.php");
authenticate();

?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>

<?php
include("db.php");
$con = mysql_connect($host, $name, $pass, false, MYSQL_CLIENT_SSL);
  if(!$con){
  	die ("Could not connect: " . mysql_error());
  }
  mysql_select_db("japanese-joshu-grammar", $con);
		$query = "SET NAMES 'utf8'";
		mysql_query($query);
		
function populateTags () {
		$query = "SELECT * FROM jgp_tags";
		$result = mysql_query($query);
		echo "<select name='tag'>";
		while($row = mysql_fetch_assoc($result)){
			$tag = $row['english_title'];
			echo "<option value='$tag'>$tag</option>";
		}
		echo "</select>";
}


function populateVideos ($num) {
		$select_query = "SELECT * FROM jgp_vid_tag_link WHERE tag_ID=$num";
		$select_result = mysql_query($select_query);
		while($select_row = mysql_fetch_assoc($select_result)){
			$selected[] = $select_row['video_ID'];
		}
		
		
		$query = "SELECT * FROM jgp_videos";
		$result = mysql_query($query);
		while($row = mysql_fetch_assoc($result)){
			$tag = $row['english_title'];
			$string = "<input type = 'checkbox' name = '".$row['video_ID']."'";
			for($i = 0; $i < count($selected); $i++){
				if($row['video_ID'] == $selected[$i]){
					$string = $string . "checked='checked'";
				}
			}
			$string = $string . ">$tag</option><br/>";
			echo $string;
		}
		mysql_close();
}

$delete = $_POST['delete'];
$old_name = $_POST['old_title'];
$new_ename = $_POST['new_etitle'];
$new_jname = $_POST['new_jtitle'];

// Get the video's data
	$query = "SELECT * FROM jgp_tags WHERE english_title='$old_name'";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	$tag_ID = $row['tag_ID'];

// If they want to edit and not delete the grammar category
if($delete!='on'){
	// Replaces old title with new title
	if(!empty($new_jname) && !empty($new_ename) && !empty($old_name)){
		$query = "UPDATE jgp_tags SET english_title='$new_ename', japanese_title='$new_jname' WHERE english_title='$old_name'";
		mysql_query($query);
	}
	
	// Delete the linking tags from the link table
	$query = "DELETE FROM jgp_vid_tag_link WHERE tag_ID=$tag_ID";
	$result = mysql_query($query);
	
	// Create new tag links
	$query = "SELECT * FROM jgp_videos";
	$result = mysql_query($query);
		
		// Goes through each video, checks to see if it's been checked
	while($row = mysql_fetch_assoc($result))
	{
		$vid_ID = $row['video_ID'];
		if($_POST[$vid_ID])
		{
			$query = "INSERT INTO jgp_vid_tag_link VALUES ('','$vid_ID', '$tag_ID')";
			mysql_query($query);
		}
	}
}
else { // Delete the tag and its links from the database.

		// Delete the grammar category from the jgp_tags table
	$query = "DELETE FROM jgp_tags WHERE english_title='$old_name'";
	$result = mysql_query($query);

		// Delete the linking tags from the link table
	$query = "DELETE FROM jgp_vid_tag_link WHERE tag_ID=$tag_ID";
	$result = mysql_query($query);
}
?>

<form action="" method="POST">
Select tag to edit: <br/>

<?php
populateTags();
?>

<input type="submit" value="Edit" />
</form>

<?php
$tag_name = $_POST['tag'];
$query = "SELECT * FROM jgp_tags WHERE english_title='$tag_name'";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
$title = $row['english_title'];
$tag_ID = $row['tag_ID'];
if(!empty($tag_name)){
	echo "<form action=''"." method='POST' onSubmit=\"return confirm('Confirm changes?')\">
		Current English tag name: " .$row['english_title'] . "<br/> 
		New tag name: <input type='text' name='new_etitle' value='".$row['english_title']."'<br/><br/>
		Current Japanese tag name: " .$row['japanese_title'] . "<br/> 
		New tag name: <input type='text' name='new_jtitle' value='".$row['japanese_title']."'<br/><br/>";
	echo "Videos Tagged: <br/>";
	populateVideos($tag_ID);
	echo "<input type='hidden' name='old_title' value='".$tag_name."'>";
	echo "<br/> <input type='checkbox' name='delete'> Delete this grammar category. </input>";
	echo "<br/><input type='submit'>";
	echo "</form>";
}

?>
