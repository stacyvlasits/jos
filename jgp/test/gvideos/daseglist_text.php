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
	 
	$client = new DaseClient('japanese_grammar','php','https://dase.laits.utexas.edu');
	// get all textbook.chapter values
	$attr = $client->getAttributeValues('grammar_topic_name/values');
	$res = $client->search('item_type:grammar_topic');

	//print_r($res);
	$pairs = array();
	// for each textbook.chapter, get its grammar topic items   
	foreach ($res->items as $item) {
		
		if (isset($item->metadata->grammar_topic_name)){
		 	if (isset($item->metadata->textbook_chapter)){
		 		foreach ($item->metadata->textbook_chapter as $textbook_chapter){
					$sortTitle = $textbook_chapter;
					$pair = new Metadata($sortTitle, $item->metadata->grammar_topic_name[0], $item->metadata->grammar_topic_name[0], $item->metadata->grammar_topic_url[0]);
					$pairs[] = $pair;
				}
			}
		}
	}
	//print_r($pairs);
	sort($pairs);
	//echo "<br/><br/>";
	//print_r($pairs);
	
	$text = $client->getAttributeValues('textbook_number/values');
	//print_r($text);
	
	$print = "0";
	foreach($pairs as $pair){
		$split = preg_split("/\./", $pair->sortTitle);
		//print_r($split);
		if (isset($split[2])){
			$table_num = " G".$split[2];
		}
		else {
			$table_num = '';
		}
		if ($print < $split[0]){
			$print = $split[0];
		}
		echo "<li>";
		$string = $pair->title.$table_num;
		if(isset($pair->link)){
			echo "<a href =\"http://www.laits.utexas.edu/japanese/joshu/".$pair->link."\">".$string."</a>";
		}
		else {
			echo $string;
		}
		$hasVideos = false;
		foreach($attr->values as $value) {
			if ($value->v == $pair->grammar_topic_name){
				if ($value->t > 1){
					$hasVideos = true;
				}
			}
		}
		if ($hasVideos){
			print "\t<ul><li><img src=\"gvideo.png\" alt=\"video icon\" border=\"0\"> ";
			print "<a href = 'http://www.laits.utexas.edu/japanese/joshu/jgp/gvideos/gvideos.php?q=".$pair->grammar_topic_name."'>Watch example videos</a></ul>";
		}
	}
	/*		
	foreach ($res->values as $value){
	 	if (isset($value->textbook_chapter_grammar)) {
			echo $gtres->items[0]->metadata->textbook_name[0].": ";
			echo "Chapter ".$gtres->items[0]->metadata->chapter_number[0];
			
			foreach($gtres->items as $item) {
				
				if(isset($item->metadata->title)) {
					if(isset($item->metadata->grammar_topic_url)) {
						echo "<li><a href=\"http://www.laits.utexas.edu/japanese/joshu/".$item->metadata->grammar_topic_url[0]."\">".$item->metadata->grammar_topic_name[0]." G".$item->metadata->grammar_table_number[0]."</a>";
					} else {
						echo "<li>".$item->metadata->grammar_topic_name[0];
					}
					
					// check if there are any videos associated with this grammar topic
					$vids = $client->search('grammar_topic_name:"'.$item->metadata->grammar_topic_name[0].'"+item_type:video');
					
					if($gtres->total>1) {
						echo "<ul><li><a href=\"dasegvideos.php?q=".$item->metadata->grammar_topic_name[0]."\"><img src=\"gvideo.png\" alt=\"video icon\" border=\"0\"> Watch example videos</a><br/></li></ul>";
					
					}
					
					echo "</li>";
				}
			}
		}
	 }
	 */
	 echo "</ul>";
	
	?>

</ul>
</body>
</html>