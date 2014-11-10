<?php
	require('glistphp.php');
	include("dase/DaseClient.php");
	include("Metadata.php");
?>
							<!-- pink SUBTITLE bar -->
							<TR>
							  <TD class=headline>文法 (Grammar) - 文法リスト</TD>
							</TR>


							<!-- begin MAIN BODY CONTENT -->
							<TR>
							<TD>

<!-- START CONTENT -->

<p><br>This section is organized into four categories.</p>
<blockquote>
<p><B><a href="../../gparticle.php"><img src="../../../button/t_close.gif" width="16" height="16" border="0"></a><a href="../../gparticle.php">じょし</a> (Particles)</B> <BR></p> 
	<p>
	<a href="../../gconj.php"><img src="../../../button/t_close.gif" width="16" height="16" border="0"></a><a href="../../gconj.php">活用 </a>	<b>(Conjugation):</b> Brief and detailed descriptions of verb conjugation & usage</p>
  <p><B><a href="../../glist.php"><img src="../../../button/t_open.gif" alt="close grammar ref lists and return to grammar home" width="16" height="16" border="0"></a></B><strong> 文法リスト</strong><B> (Grammar Lists)</B></p>
  
  <blockquote>
  <p><B><a href="glist_eng.php"><img src="../../../button/t_close.gif" width="16" height="16" border="0"></a><a href="glist_eng.php">English Alphabetical Listing</a></B><BR></p>
  <p><B><a href="glist_jpn.php"><img src="../../../button/t_close.gif" width="16" height="16" border="0"></a><a href="glist_jpn.php">Japanese Listing</a></B><BR></p>
  <p><B><a href="../../glist.php"><img src="../../../button/t_open.gif" width="16" height="16" border="0"></a><strong>Textbook Listing</strong></B><BR></p>

  <blockquote>
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
	
	sort($pairs);
	
	$text = $client->getAttributeValues('textbook_number/values');
	$textbook_num = "0";
	$res = $client->search('item_type:textbook');
	echo "<ul>";
	$chapter_num = "0";
	foreach($pairs as $pair){
		$split = preg_split("/\./", $pair->sortTitle);
		if (isset($split[2])){
			$table_num = " G".$split[2];
		}
		else {
			$table_num = '';
		}
		if ($textbook_num < $split[0]){
			$textbook_num = $split[0];
			$textbook_name = "";
			foreach ($res->items as $item){
			    if ($item->metadata->textbook_number[0] == $textbook_num){
			    	$textbook_name = $item->metadata->title[0];
			    }
			}
			$chapter_num = "0";
			echo "<br/><h2>".$textbook_name."</h2><br/>";
		}
		if ($chapter_num < $split[1]){
			$chapter_num = $split[1];
			echo "<br/><strong>&nbsp;&nbsp;&nbsp;Chapter ".$chapter_num."</strong><br/>";
		}
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li>";
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
			print "<ul type='circle'><li><img src=\"gvideo.png\" alt=\"video icon\" border=\"0\"> ";
			print "<a href = 'http://www.laits.utexas.edu/japanese/joshu/jgp/gvideos/gvideos.php?q=".$pair->grammar_topic_name."'>Watch example videos</a></li></ul>";
		}
		echo "</li>";
	}
	echo "</ul>";
	
	?>

	</ul>
  </blockquote>
  
  
  </blockquote>
 
 <p><B><a href="../../gquiz.php"><img src="../../../button/t_close.gif" alt="open practice list" width="16" height="16" border="0"></a><a href="../../gquiz.php">練習</a> (Practice Quizzes)</B><BR></p>
</blockquote>
<span class="style2">some of the clip arts: by Clipart Factory (Copyright (C)
2005 RICOH Co., Ltd. All Rights Reserved)</span>
  <!-- 	<LI><B>ゲーム (Games)</B></LI>
			<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<A HREF="game">aGame</A> -->
  <!-- <UL>
	<LI><B>リンク (Links)</B></LI>
			<BR>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<A HREF="http://link.lanic.utexas.edu/asnic/suito/syllabi/412L%20Ch4_G25.pdf" target="_blank">よう/みたい、そう、らしい</A> - .pdf file for download, Naoko Suito's course website
</UL> -->


  <!-- END CONTENT -->
						<?php
						require('glistfootphp.php')
						?>