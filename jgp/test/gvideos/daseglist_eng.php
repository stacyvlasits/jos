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
    <ul>
    <?php
	 
	
	$c = new DaseClient('japanese_grammar','php','https://dase.laits.utexas.edu');
	$res = $c->search('item_type:grammar_topic');
	//print_r($res);
	
	$attr = $c->getAttributeValues('grammar_topic_name/values');
	//print_r($attr);
	
	$pairs = array();
	foreach ($res->items as $item){
	    if(isset($item->metadata->grammar_topic_name)){
			foreach ($item->metadata->english_listing_name as $english_title){
				$sortTitle = ltrim($english_title, "\x00..\x40");
				$sortTitle = strtolower($sortTitle);
				if(isset($item->metadata->grammar_topic_url)){
				    $temp = new Metadata($sortTitle, $english_title, $item->metadata->grammar_topic_name, $item->metadata->grammar_topic_url[0]);
					$pairs[] = $temp;
				}
				else{
					$temp = new Metadata($sortTitle, $english_title, $item->metadata->grammar_topic_name, '');
					$pairs[] = $temp;
				}
			}
	    }
	}
	sort($pairs);
	
	foreach ($pairs as $pair){
		echo "<li><a href=\"http://www.laits.utexas.edu/japanese/joshu/".$pair->link."\">".$pair->title."</a><br/>";
		$hasVideos = false;
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


	
	/*
	echo "<ul>";
	// for each english listing, get its grammar topic item   
	foreach ($res->values as $value) { 
	 	if (isset($value->v)) {
			$gtres = $client->search('english_listing_name:"'.$value->v.'"+item_type:grammar_topic');
			
			foreach($gtres->items as $item) {
				if(isset($item->metadata->title)) {
					if(isset($item->metadata->grammar_topic_url)) {
					echo "<li><a href=\"http://www.laits.utexas.edu/japanese/joshu/".$item->metadata->grammar_topic_url[0]."\">".$value->v."</a>";
					} else {
						echo "<li>".$value->v;
					}
					
					// check if there are any videos associated with this grammar topic
				//	$vids = $client->search('grammar_topic_name:"'.$gtres->items[0]->metadata->grammar_topic_name[0].'"+item_type:video');
				//	
				//	if($gtres->total>1) {
				//		echo "<ul><li><a href=\"dasegvideos.php?q=".$gtres->items[0]->metadata->grammar_topic_name[0]."\"><img src=\"gvideo.png\" alt=\"video icon\" border=\"0\"> Watch example videos</a><br/></li></ul>";
				//	
				//	}
					
					echo "</li>";
				}
			}
		}
	 }
	 
	 echo "</ul>";
	 */
	?>
	
</ul>
</body>
</html>