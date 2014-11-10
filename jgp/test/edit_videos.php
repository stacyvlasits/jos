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
		
function populateVideos () {
		$tag_array = array();
		$query = "SELECT * FROM jgp_videos";
		$result = mysql_query($query);
		echo "<select name='video'>";
		while($row = mysql_fetch_assoc($result)){
			$tag = $row['english_title'];
			$tag_array[] = $row;
			echo "<option value='$tag'>$tag</option>";
		}
		echo "</select>";
}

function populateTags ($num) {
		
		$select_query = "SELECT * FROM jgp_vid_tag_link WHERE video_ID=$num";
		$select_result = mysql_query($select_query);
		while($select_row = mysql_fetch_assoc($select_result)){
			$selected[] = $select_row['tag_ID'];
		}
		
		
		
		$query = "SELECT * FROM jgp_tags";
		$result = mysql_query($query);
		while($row = mysql_fetch_assoc($result)){
			$tag = $row['english_title'];
			$string = "<input type='checkbox' name='".$row['tag_ID']."'";
			//echo count($selected);
			for($i = 0; $i < count($selected); $i++){
				if($row['tag_ID'] == $selected[$i]){
					$string = $string . " checked='checked'";
					echo $selected[$i]==$row['tag_ID'];
				}
			}
			$string = $string . ">$tag</option><br/>";
			echo $string;
		}
}

$delete = $_POST['delete'];
$old_name = $_POST['old_title'];
$new_ename = $_POST['new_etitle'];
$new_jname = $_POST['new_jtitle'];
// Get the video's data
	$query = "SELECT * FROM jgp_videos WHERE english_title='$old_name'";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	$filename = $row['file_name'];
	$vid_ID = $row['video_ID'];
// If they want to edit and not delete the video
if($delete!='on'){
	// Replaces old title with new title
	if(!empty($new_ename) && !empty($new_jname) && !empty($old_name)){
		$query = "UPDATE jgp_videos SET english_title='$new_ename', japanese_title='$new_jname' WHERE english_title='$old_name'";
		mysql_query($query);
	}
	
	// Delete the linking tags from the link table
	$query = "DELETE FROM jgp_vid_tag_link WHERE video_ID=$vid_ID";
	$result = mysql_query($query);

	// Creates new linking tags from post data
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
}
else { // Delete the video and its links from the database.
		// Delete the file itself
	unlink('upload/'.$filename);
		// Delete the video from the jgp_videos table
	$query = "DELETE FROM jgp_videos WHERE english_title='$old_name'";
	$result = mysql_query($query);
		// Delete the linking tags from the link table
	$query = "DELETE FROM jgp_vid_tag_link WHERE video_ID=$vid_ID";
	$result = mysql_query($query);
}
?>


<form action="" method="POST">
Select video to edit: <br/>
<?php
populateVideos();
?>
<input type="submit" value="Edit" />
</form>

<?php

$video_name = $_POST['video'];
// If a video has been selected to be edited, create the edit form
if(!empty($video_name)){
	$query = "SELECT * FROM jgp_videos WHERE english_title='$video_name'";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	$etitle = $row['english_title'];
	$jtitle = $row['japanese_title'];
	$video_ID = $row['video_ID'];
	echo "<form action='' method='POST' onSubmit=\"return confirm('Confirm changes?')\">
		Current English video name: " .$etitle . "<br/> 
		New English video name: <input type='text' name='new_etitle' value='".$etitle."'<br/><br/>
		Current Japanese video name: " .$jtitle . "<br/> 
		New Japanese video name: <input type='text' name='new_jtitle' value='".$jtitle."'<br/><br/>
		Grammar Categories:<br/>";
	populateTags($video_ID);
	echo "<input type='hidden' name='old_title' value='".$video_name."'>";
	echo "<br/> <input type='checkbox' name='delete'> Delete this video. </input>";
	echo "<br/><input type='submit'>";
	echo "</form>";
}
?>

<?php
mysql_close();
?>
</body>
