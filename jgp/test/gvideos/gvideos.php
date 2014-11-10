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
	include("dase/DaseClient.php");
?>

<script type="text/javascript">
function nav()
   {
   var w = document.form1.gtopic.selectedIndex;
   var url_add = document.form1.gtopic.options[w].value;
   if(url_add!="top")
   	window.location.href = 'gvideos.php?q="' + url_add + '"';
   }

</script>

</head>

<body>
<div id="wrapper">
	<div id="header">
   	 	<div id="header-txt">Grammar Videos Made By Students</div>
    </div>
    <div id="mid">
    <div id="menu">
    <?php
	 
	$client = new DaseClient('japanese_grammar', 'php','https://dase.laits.utexas.edu');
//	$client->setReturnFormat('php');
		
	echo '<form name="form1">
		  <select name="gtopic" style="width:250px" onChange="nav()">
		  <option value="top">Select a grammar topic</option>';
	
	$gres = $client->getAttributeValues('grammar_topic_name/values');
	
	foreach($gres->values as $value) { 
		echo $value->v;
		if($value->t>1) {
			echo '<option value="'.$value->v.'">'.$value->v.'</option>';
		}
	}
	echo '</select></form>';
	
//	$gtop = str_replace('"', '', $_GET['q']);
	$gtop = $_GET['q'];
	$gtop = str_replace('"',"",$gtop);
	$gtop = str_replace("'","",$gtop);
	$gtop = htmlspecialchars($gtop, ENT_QUOTES, 'UTF-8');	
	echo "<strong>Grammar Topic</strong>: ".$gtop;
		
	if($gtop) {
		$query = 'grammar_topic_name:"'.$gtop.'"+item_type:video';
		
		$res = $client->search($query);
		echo "<ul>";
		foreach ($res->items as $item) {
			if (isset($item->metadata->filename)) {
				//$q = str_replace('"', '&quot;', $_GET['q']);
				echo "<li><img src=\"gvideo.png\" alt=\"video icon\" border=\"0\"><a href=\"gvideos.php?q=".$gtop."&v=filename:".$item->metadata->filename[0]."\">". $item->metadata->japanese_title[0]."</a></li>";
			}
		 }
		 echo "</ul>";
	}
	
	?>

    </div>
    
    <div id="video">
    	<?php
		$video = $_GET['v'];
		if($video) {
			$r =  $client->search($video);
				
			echo "<object width=\"320\" height=\"260\"><param name=\"movie\" value=\"".$r->app_root.$r->items[0]->media->quicktime."\"></param><embed src=\"https://dase.laits.utexas.edu/".$r->items[0]->media->quicktime."\" height=\"260\" width=\"320\" controller=\"true\" cache=\"true\" autoplay=\"false\"></embed></object>";
			
		
		}
		else
	      	echo "<center><p>Select a grammar topic and click on a video link!</p><img src=\"video.jpg\" /></center>";			
    	?>
    </div>
    
    <div id="footer">
   		Videos edited by Adrian LaGuette and Chiang Leng
    </div>
    
    </div>
    
    
    
    
</div>
</body>
</html>