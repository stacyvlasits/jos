<?php

require_once("authenticate.php");
authenticate();
$sid = $_GET['sid'];
echo "Administrative options: <br/>
		<a href='upload.php?sid=".$sid."'>Upload</a><br/>
		<a href='add_tags.php?sid=".$sid."'>Add tags</a><br/>
		<a href='edit_tags.php?sid=".$sid."'>Edit tags</a><br/>
		<a href='edit_videos.php?sid=".$sid."'>Edit videos</a><br/>
		<a href='gvideos.php?sid=".$sid."&tid=2'>View videos</a><br/>";

?>