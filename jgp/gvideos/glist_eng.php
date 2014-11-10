<?php
  require('glistphp.php');
  include('dase/DaseClient.php');
  include('Metadata.php');
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
  <p><B><a href="../../grammar.php"><img src="../../../button/t_open.gif" alt="close grammar ref lists and return to grammar home" width="16" height="16" border="0"></a></B><strong> 文法リスト</strong><B> (Grammar Lists)</B></p>
  <blockquote>
  <p><B><a name="top"></a><a href="../../glist.php"><img src="../../../button/t_open.gif" width="16" height="16" border="0"></a><strong>English Alphabetical LIsting</strong></B></p>
  <blockquote>
    <?php
	 
	
	$c = new DaseClient('japanese_grammar','php','http://dase.laits.utexas.edu');
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
					$temp = new Metadata($sortTitle, $english_title, $item->metadata->grammar_topic_name);
					$pairs[] = $temp;
				}
			}
	    }
	}
	sort($pairs);
	
	foreach ($pairs as $pair){
		if (isset($pair->link)){
		  echo "<li><a href=\"http://www.laits.utexas.edu/japanese/joshu/".$pair->link."\">".$pair->title."</a>";
		}
		else {
		  echo "<li>".$pair->title;
		}
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
			print "\t<ul type='circle'><li><img src=\"gvideo.png\" alt=\"video icon\" border=\"0\"> ";
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
    <p><a href="#top">go to top</a></p>
    <p><B><a href="glist_jpn.php"><img src="../../../button/t_close.gif" width="16" height="16" border="0"></a><a href="glist_jpn.php">Japanese Listing</a></B><BR>
    </p>
    <p><B><a href="glist_text.php"><img src="../../../button/t_close.gif" width="16" height="16" border="0"></a><a href="glist_text.php">Textbook Listing</a></B><BR>
    </p>
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
