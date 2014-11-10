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
					$temp = new Metadata($sortTitle, $english_title, $item->metadata->grammar_topic_name);
					$pairs[] = $temp;
				}
			}
	    }
	}
	sort($pairs);
	
	$characters = array();
	$char = 0;  
	foreach ($pairs as $pair){
	  $newChar = ord($pair->sortTitle);
	  //echo($newChar."<br/><br/>");
	  //echo(ord($char)."<br/><br/>");
	  if($newChar != ord($char)){
	    $characters[] = $newChar;
	    $char = $pair->sortTitle;
	  }
	}
	//print_r($characters);
	
	echo "Jump to letter:  ";
	foreach($characters as $character){
	  echo "<a href='#".chr($character)."'>".strtoupper(chr($character))."  </a>";  
	}
	
	echo "<ul>";
	$count = 0;
	$current = $characters[$count];
	foreach ($pairs as $pair){
	  //echo ord($pair->sortTitle);
	  //echo $current;
	  if($count == 0){
	    echo "<h3><a name='".chr($current)."'>".strtoupper(chr($current))."</a></h3><br/>";
	    $count = $count + 1;
	  }
	  if($current != ord($pair->sortTitle)){
	    $current = $characters[$count];
	    echo "<br/><br/><h3><a name='".chr($current)."'>".strtoupper(chr($current))."</a></h3><br/>";
	    $count = $count + 1;
	  }
	  echo "<li>";
	  if (isset($pair->link)){
	    echo "<a href=\"http://www.laits.utexas.edu/japanese/joshu/".$pair->link."\">".$pair->title."</a>";
	  }
	  else {
	    echo "".$pair->title;
	  }
	  $hasVideos = false;
	  //print_r($attr);
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
	    print "<a href = 'http://www.laits.utexas.edu/japanese/joshu/jgp/gvideos/gvideos.php?q=".$pair->grammar_topic_name[0]."'>Watch example videos</a></li></ul>";
	  }
	}
	echo "</ul>";
	?>
    <p><a href="#top">go to top</a></p>
    </blockquote>
  <p><B><a href="glist_jpn.php"><img src="../../../button/t_close.gif" width="16" height="16" border="0"></a><a href="glist_jpn.php">Japanese Listing</a></B><BR>
  </p>
  <p><B><a href="glist_text.php"><img src="../../../button/t_close.gif" width="16" height="16" border="0"></a><a href="glist_text.php">Textbook Listing</a></B><BR>
  </p>
  </blockquote>
  <p><B><a href="../../gquiz.php"><img src="../../../button/t_close.gif" alt="open practice list" width="16" height="16" border="0"></a><a href="../../gquiz.php">練習</a> (Practice Quizzes)</B><BR>
  </p>
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
