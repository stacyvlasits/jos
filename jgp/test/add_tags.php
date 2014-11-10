<?php
require_once("authenticate.php");
authenticate();

include("db.php");
$con = mysql_connect($host, $name, $pass, false, MYSQL_CLIENT_SSL);
  if(!$con){
  	die ("Could not connect: " . mysql_error());
  }
  mysql_select_db("japanese-joshu-grammar", $con);
function videoList(){

	$query = "SELECT * FROM jgp_videos";
	$result = mysql_query($query);
	$vid_array = array();
	while( $row = mysql_fetch_assoc($result)){
		echo "<input type='checkbox' name='video".$row['video_ID']."'>".
			$row['english_title']."<br/>";
		$vid_array[] = $row['video_ID'];
	}
	return $vid_array;
}

$tag_name=$_POST['tag_name'];
$url_link=$_POST['url_link'];
$chapter_num=$_POST['chapter_num'];
$grammar_table_num=$_POST['grammar_table_num'];

?>

<form action="add_tags.php" method="POST" enctype="multipart/form-data">
Grammar Tag Name: <input type="text" name="tag_name" value="<?=$tag_name?>" /><br/><br/>
URL Link: <input type="text" name="url_link" value="<?=$url_link?>" /><br/><br/>
Chapter: <input type="text" name="chapter_num" value="<?=$chapter_num?>" /><br/><br/>
Grammar Table Number: <input type="text" name="grammar_table_num" value="<?=$grammar_table_num?>" /><br/><br/>
<br/>
Select the videos to tag:
<br/>
<?php
$returned = videoList();
?>
<br/>
<input type="submit" value="Submit" />
</form>

<?php
if(!empty($tag_name)){

$con = mysql_connect($host, $name, $pass, false, MYSQL_CLIENT_SSL);
  if(!$con){
  	die ("Could not connect: " . mysql_error());
  }
  mysql_select_db("japanese-joshu-grammar", $con);
	
	$query = "SELECT * FROM jgp_tags WHERE tag_name='$tag_name'";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
	
  	if(!empty($row))
	{
	    echo $tag_name." already exists. ";
   	}
    else
    {
    	echo "query";
  		$query = "INSERT INTO jgp_tags VALUES ('','$tag_name','$url_link', '$chapter_num', '$grammar_table_num')";
		mysql_query($query);
		$query = "SELECT * FROM jgp_tags WHERE jgp_tags.tag_name='$tag_name'";
		$result = mysql_query($query);
		$row = mysql_fetch_assoc($result);
		$tag_ID = $row['tag_ID'];
		foreach ($returned as $i){
			if($_POST['video'.$i]){
				$query = "INSERT INTO jgp_vid_tag_link VALUES ('','$i','$tag_ID')";
				mysql_query($query);
			}
		}
		mysql_close();
    }
}
	
echo "<br/><br/>";
?>
