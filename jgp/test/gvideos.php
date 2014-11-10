<?php
require_once("authenticate.php");
authenticate();
$sid = $_GET['sid'];
$sid = str_replace('"',"",$sid);
$sid = str_replace("'","",$sid);
$sid = htmlspecialchars($sid, ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>JOSHU - Japanese Online Self-Help Utility // Grammar Videos Made By Students</title>

<META http-equiv=Page-Enter content="progid:DXImageTransform.Microsoft.GradientWipe(GradientSize=.50,wipeStyle=1,motion='forward')">
	<META content="JOSHU is a portal for those who study Japanese language (Nihongo) and writing (Kanji)" name=description>
	<META content="Japanese,kanji,nihongo,travel to japan,japanese language,nihon,study Japanese,Japanese lessons,learn Japanese,Japan news,Japan images,japanese culture,japanese vocabulary,japanese language school" name=keywords>
	<META content=index,follow name=Robots>
	<META content="MSHTML 6.00.2800.1400" name=GENERATOR>
	<!-- JOSHU - A site for learners of the Japanese language -->
<LINK href="style.css" type=text/css rel=stylesheet>
<LINK href="http://laits.utexas.edu/japanese/joshu/css/style.css" type=text/css rel=stylesheet>
<?php
	include("mysql_class.php");
	include("db.php");
?>
</head>

<body>
<div id="wrapper">
	<div id="header">
   	 	<div id="header-txt">Grammar Videos Made By Students</div>
    </div>
    <div id="mid">
    <div id="menu">
<!-- PHP databse querying. -->    

<?php
  $con = mysql_connect($host, $name, $pass, false, MYSQL_CLIENT_SSL);
  if(!$con){
  	die ("Could not connect: " . mysql_error());
  }
  mysql_select_db("japanese-joshu-grammar", $con);
  
$query  = "SET NAMES 'utf8'";
$result = mysql_query($query);

$check_tid = $_GET['tid'];
$tid = sprintf(mysql_real_escape_string($check_tid));

$query = "SELECT * FROM jgp_tags WHERE tag_ID = $tid";
$result = mysql_query($query);

while($row = mysql_fetch_assoc($result))
{
	echo "<p>{$row['japanese_title']} <br/> {$row['english_title']}</p>";
}

// Example query for getting all videos of tag #1
$query  = "SELECT DISTINCT * FROM jgp_videos INNER JOIN jgp_vid_tag_link ON jgp_videos.video_ID=jgp_vid_tag_link.video_ID WHERE jgp_vid_tag_link.tag_ID = $tid ORDER BY japanese_title";
$result = mysql_query($query);

echo "<ul>";
while($row = mysql_fetch_assoc($result))
{
	echo "<li><img src=\"gvideo.png\" alt=\"video icon\" border=\"0\"> <a href=\"gvideos.php?sid=".$sid."&tid=$tid&vid={$row['video_ID']}\">{$row['japanese_title']}</a> </li>";
}
echo "</ul>";

//({$row['english_title']})


?>
    </div>
    <div id="video">
    	<?php
		if($_GET['vid']) {
			$check_vid = $_GET['vid'];
			$vid = sprintf(mysql_real_escape_string($check_vid));
			$query  = "SELECT * FROM jgp_videos WHERE video_ID=$vid";
			$result = mysql_query($query);
			$row = mysql_fetch_assoc($result);
			echo "<embed src=\"http://www.laits.utexas.edu/japanese/joshu/jgp/upload/{$row['file_name']}\" height=\"260\" width=\"320\" controller=\"true\" cache=\"true\" autoplay=\"false\"></embed>";
		}
		else
	      	echo "<p>Click on a video link on the left menu bar to view a video!</p> <center><img src=\"video.jpg\" /></center>";
			
			mysql_close();
    	?>
    </div>
    <div id="footer">
   		Videos edited by Adrian LaGuette, Chiang Leng, and N.Suito, ~FAST Tex Project  
    </div>
    
    </div>
    
    
</div>
</body>
</html>
