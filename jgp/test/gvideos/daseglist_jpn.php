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
<LINK href="http://laits.utexas.edu/japanese/joshu/css/style.css" type=text/css rel=stylesheet>
<?php
	include("dase/DaseClient.php");
	include("Metadata.php");
?>
</head>

<body>
    <?php
    setlocale(LC_COLLATE, 'ja_JP.utf8');
	$c = new DaseClient('japanese_grammar','php','https://dase.laits.utexas.edu');
	$res = $c->search('item_type:grammar_topic');
	//print_r($res);
	
	$attr = $c->getAttributeValues('grammar_topic_name/values');
	//print_r($attr);
	
	$pairs = array();
	$sortTitles = array();
	foreach ($res->items as $item){
	    if(isset($item->metadata->grammar_topic_name)){
			foreach ($item->metadata->japanese_listing_name as $japanese_title){
				/*$temp = $japanese_title;
				for ($counter = strlen($japanese_title); $counter > 0; $counter = $counter - 1){
					print ord($temp)." - ".$temp."<br/>";
					$temp = substr($temp, 1);
				}*/
				//print $sortTitle."<br/>";
				$sortTitle = $japanese_title;
				$sortTitle = str_replace('〜', '', $sortTitle);
				$sortTitle = ltrim($sortTitle, "\x00..\x7F");
				//$sortTitle = strtolower($sortTitle);
				//print $sortTitle."<br/>";
				$sortTitles[] = $sortTitle;
				if(isset($item->metadata->grammar_topic_url)){
				    $temp = new Metadata($sortTitle, $japanese_title, $item->metadata->grammar_topic_name, $item->metadata->grammar_topic_url[0]);
					$pairs[] = $temp;
				}
				else{
					$temp = new Metadata($sortTitle, $japanese_title, $item->metadata->grammar_topic_name, '');
					$pairs[] = $temp;
				}
			}
	    }
	}
	//print_r($sortTitles);
	sort($sortTitles, SORT_LOCALE_STRING);
	//print_r($sortTitles);
	
	$sorted = array();
	foreach ($sortTitles as $key){
		foreach ($pairs as $pair){
			if ($pair->sortTitle == $key){
				$sorted[] = $pair;
			}
		}
	}
	echo "<ul>";
	foreach ($sorted as $pair){
		echo "<li>";
		$string = $pair->title;
		if(isset($pair->link)){
			echo "<a href =\"http://www.laits.utexas.edu/japanese/joshu/".$pair->link."\">".$string."</a>";
		}
		else {
			echo $string;
		}$hasVideos = false;
		foreach($attr->values as $value) {
			//echo $value->v . "<br/>";
			//echo $pair->grammar_topic_name[0] . "<br/>";
			if ($value->v == $pair->grammar_topic_name[0]){
				if ($value->t > 1){
					$hasVideos = true;
				}
			}
		}
		if ($hasVideos){
			print "\t<ul><li><img src=\"gvideo.png\" alt=\"video icon\" border=\"0\"> ";
			print "<a href = 'http://www.laits.utexas.edu/japanese/joshu/jgp/gvideos/gvideos.php?q=".$pair->grammar_topic_name[0]."'>Watch example videos</a></ul>";
		}
	}
	?>

</ul>
</body>
</html>