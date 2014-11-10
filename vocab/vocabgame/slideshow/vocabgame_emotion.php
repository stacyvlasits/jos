<!-- HEAD -->
<!-- HEADERS, TITLE, META TAGS, CSS, JS -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>JOSHU - Japanese Online Self-Help Utility</TITLE>


<META http-equiv=Page-Enter content="progid:DXImageTransform.Microsoft.GradientWipe(GradientSize=.50,wipeStyle=1,motion='forward')">
	<META http-equiv=Content-Type content="text/html; charset=x-sjis">
	<META content="JOSHU is a portal for those who study Japanese language (Nihongo) and writing (Kanji)" name=description>
	<META content="Japanese,kanji,nihongo,travel to japan,japanese language,nihon,study Japanese,Japanese lessons,learn Japanese,Japan news,Japan images,japanese culture,japanese vocabulary,japanese language school" name=keywords>
	<META content=index,follow name=Robots>
	<META content="MSHTML 6.00.2800.1400" name=GENERATOR>
	<!-- JOSHU - A site for learners of the Japanese language -->


<LINK href="../../../css/style.css" type=text/css rel=stylesheet>
<SCRIPT language=JavaScript src="../../../js/javascripts.js" type=text/javascript></SCRIPT>

<!-- start SCRIPT for start vocabulary.htm -->
<SCRIPT LANGUAGE="JavaScript">
var numVocab = 9;
var roomajiA = new Array (
'ureshii', 'kanashii', 'kowai', 
'naku', 'warau', 'okoru',
'odoroku', 'shinpai suru', 'hazukashii'
);

var imageA = new Array (
'../../../images/ureshii.jpg', '../../../images/kanashii.jpg', '../../../images/kowai.jpg', 
'../../../images/naku.jpg', '../../../images/warau.jpg', '../../../images/okoru.jpg',
'../../../images/odoroku.jpg', '../../../images/shinpai_suru.jpg', '../../../images/hazukashii.jpg'
);

var englishA = new Array (
'happy', 'sad', 'afraid', 
'to cry', 'to laugh', 'to get angry',
'to be surprised', 'to worry', 'embarrassed'
);

var boolA = new Array (
1,1,0,
0,0,0,
0,0,0
);

var realimageA = new Array (
'ureshii', 'kanashii', 'kowai', 
'naku', 'warau', 'okoru',
'odoroku', 'shinpai suru', 'hazukashii'
);

var realenglishA = new Array (
'happy', 'sad', 'afraid', 
'to cry', 'to laugh', 'to get angry',
'to be surprised', 'to worry', 'embarrassed'
);

function init () {
	document.f.roomajitext[0].value = roomajiA[0];
	document.f.image[0].src         = imageA[0];
	document.f.englishtext[0].value = englishA[0];
	document.f.arrowmiddle[0].src   = '../../../images/rightarrow.gif';

	for (i=1; i<numVocab; i++)
		{
		document.f.roomajitext[i].value = "";
		document.f.image[i].src         = '../../../images/blankimage.gif';
		document.f.englishtext[i].value = "";
		document.f.arrowmiddle[i].src   = '../../../images/blankarrow.gif';
		}
	}

// one function for each sound MP3 there is
function playSound0() {
	document.sound0.play();}
function playSound1() {
	document.sound1play();}
function playSound2() {
	document.sound2.play();}
function playSound3() {
	document.sound3.play();}


function EvalSound(soundobj, i) {
	if (boolA[i])
	{
		var thissound= eval("document."+soundobj);
		thissound.Play();
	}
}




function showNext (i) {
	if (boolA[i])
		{
		document.f.roomajitext[i].value = roomajiA[i];
		document.f.image[i].src         = imageA[i];
		document.f.englishtext[i].value = englishA[i];
		
		if (i < numVocab-1)
			{
			setTimeout('showArrow('+i+')', 1000);
			boolA[i+1] = 1;
			}
		else
			{
			//alert('Click replay go through vocabulary words again.');
			}
		}
	}

function showArrow (i) {
	document.f.arrowmiddle[i].src = '../../../images/rightarrow.gif';
	}


</SCRIPT><!-- end SCRIPT for start vocabulary.htm -->
</HEAD>









<!-- BODY -->
<BODY 
      style="FONT-FAMILY: Verdana"
      leftMargin="0"
      topMargin="0"
      text="#000000"
      vLink=#cccccc
      alink=#cccccc
      link=#cccccc
      bgcolor=#ffffff
      background='../../../images/bgtest.jpg'
	  onload=init()
>



<!-- set default configuration for this particular page (place code b4 overlib.js) -->
<!--
<script language="JavaScript">
var ol_textfont = "Courier New, Courier";
</script>
-->

<!-- include Erik Bosrup's overLIB for popup information -->
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
<script language="JavaScript" src="../../../js/overlib400/overlib.js">
<!-- overLIB (c) Erik Bosrup --></script> 



<!-- example calls to overlib -->
<!-- Example 1 (tooltip, NONSTICKY popup) -->
<!--
<a href="javascript:void(0);" onmouseover="return overlib('This is an ordinary popup.');" onmouseout="return nd();">here</a> 
-->

<!-- Example 2 (STICKY popup) -->
<!--
<a href="javascript:void(0);" onmouseover="return overlib('This is what we call a sticky, since I stick around.', STICKY);" onmouseout="return nd();">here</a> 
-->

<!-- Example 3 (STICKY popup, clickable) -->
<!--
<a href="javascript:void(0);" onclick="return overlib('This is a sticky with a caption. And it is centered under the mouse!', STICKY, CAPTION, 'Sticky!', CENTER);" onmouseout="nd();">Click here!</a> 
-->

<!-- Example 3b(STICKY popup, clickable) -->
<!--
<A 
class=trail2 href="culture.htm"
				onmouseover="return overlib('<a href=_'culture.htm_'><img src=_'culture.gif_'></a>', STICKY, MOUSEOFF, WRAP, CELLPAD, 0, CENTER);" 
				onmouseout="nd();">Culture</A>
-->

<!-- Example 4 (change font) -->
<!--
<a href="javascript:void(0);" onmouseover="return overlib('Different font.', TEXTFONT, 'Courier, Courier New');" onmouseout="return nd();">My link</a> 
-->


<CENTER>

<!-- REVIEW OF PAGE STRUCTURE -->
<!-- WHOLE PAGE -->
	<!-- WHOLE LEFT, WHOLE MIDDLE, WHOLE RIGHT -->
	<!-- MIDDLE LEFT, MIDDLE MIDDLE, MIDDLE RIGHT -->


<!-- WHOLE PAGE table -->
<TABLE width="100%">
<TBODY>
<TR>
	<!-- start WHOLE LEFT blank column -->
	<TD width="10%" align=center>
		<TABLE>
		<TBODY>
		<TR>
		<TD></TD></TR>
		</TBODY>
		</TABLE></TD>
		<!-- end LEFT blank column -->








	<!-- start WHOLE MIDDLE -->
	<TD width="80%" align=center>

		<!-- start PRE-TAB table -->
		<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
			<TBODY>
			<!-- 1st row contains 3+2 columns -->
			<TR>
				<TD bgcolor='ffffff' vAlign=bottom colspan=1 rowspan=3 width=29 height=29>
					<IMG src="../../../images/curve_left.gif" width=29 height=29></TD>
				<TD bgcolor='ffffff' vAlign=bottom colspan=1 rowspan=3 width=130 height=58>				  
				<!-- MAIN LOGO --><IMG src="../../../images/joshuhome.gif" alt="&quot;&quot;" width=130 height=58 border=0 vAlign=textTop>				  </TD>
				<!-- long blank line -->
				<TD bgcolor='ffffff' vAlign=bottom align=center colspan=1 rowspan=1 height=30>&nbsp;
				</TD>
				<TD bgcolor='ffffff' vAlign=bottom colspan=1 rowspan=3 width=29 height=29>
					<IMG src="../../../images/curve_right2.gif" width=29 height=29></TD></TR>
			<!-- 2nd row contains long black line -->
			<TR>
				<TD bgcolor='ffffff' vAlign=bottom class=black align=center colSpan=1 rowspan=1 height=5>
					<IMG src="../../../images/spacer.gif" width=1 height=1></TD></TR>
			<!-- 3rd row contains long blank line -->
			<TR>
				<TD bgcolor='ffffff' vAlign=bottom align=right rowspan=1 colspan=1 height=23>&nbsp;
					</TD></TR>
		</TBODY></TABLE>
		<!-- end PRE-TAB table -->


		<!-- start TAB table -->
		<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
			<TBODY>
			<TR>
			<!-- left black border -->
			<TD bgcolor='ffffff' class=black rowspan=2 width=5 height=25><IMG height=25 src="../../../images/spacer.gif" width=5></TD>

			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-left.gif"></TD>
			<TD class=taboff><A href="/japanese/joshu/index.php"
						onmouseover="window.status='Return HOME';return true"
						onmouseout="window.status='';return true">Home</A></TD>
			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-right.gif"></TD>

			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-left.gif"></TD>
			<TD class=taboff><A href="/japanese/joshu/kana.php"
						onmouseover="window.status='kana';return true"
						onmouseout="window.status='';return true">Kana</A></TD>
			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-right.gif"></TD>

			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-left.gif"></TD>
			<TD class=taboff><A href="/japanese/joshu/kanji.php"
						onmouseover="window.status='kanji';return true"
						onmouseout="window.status='';return true">Kanji</A></TD>
			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-right.gif"></TD>

			<TD rowspan=2 class=tabonborder><IMG src="/japanese/joshu/images/tabon-left.gif"></TD>
			<TD rowspan=2 class=tabon><A href="/japanese/joshu/vocabulary.php"
						onmouseover="window.status='Do the tango';return true"
						onmouseout="window.status='';return true">Vocabulary</A></TD>
			<TD rowspan=2 class=tabonborder><IMG src="/japanese/joshu/images/tabon-right.gif"></TD>

			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-left.gif"></TD>
			<TD class=taboff><A href="/japanese/joshu/grammar.php"
						onmouseover="window.status='Grammar';return true"
						onmouseout="window.status='';return true">Grammar</A></TD>
			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-right.gif"></TD>

			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-left.gif"></TD>
			<TD class=taboff><A href="/japanese/joshu/counters.php"
						onmouseover="window.status='Counters';return true"
						onmouseout="window.status='';return true">Counters</A></TD>
			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-right.gif"></TD>

			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-left.gif"></TD>
			<TD class=taboff><A href="/japanese/joshu/reading.php"
						onmouseover="window.status='Kanji flashcards';return true"
						onmouseout="window.status='';return true">Reading</A></TD>
			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-right.gif"></TD>

			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-left.gif"></TD>
			<TD class=taboff><A href="/japanese/joshu/video.php"
						onmouseover="window.status='Video';return true"
						onmouseout="window.status='';return true">Listen/Speak</A></TD>
			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-right.gif"></TD>

			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-left.gif"></TD>
			<TD class=taboff><A href="/japanese/joshu/culture.php"
						onmouseover="window.status='Culture';return true"
						onmouseout="window.status='';return true">Culture</A></TD>
			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-right.gif"></TD>

			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-left.gif"></TD>
			<TD class=taboff><A href="/japanese/joshu/links.php"
						onmouseover="window.status='Japanese-related Links';return true"
						onmouseout="window.status='';return true">Links</A></TD>
			<TD class=taboffborder><IMG src="/japanese/joshu/images/taboff-right.gif"></TD>

			<!-- blank space after tabs -->
			<TD width="100%">&nbsp;</TD>

			<!-- right black border -->
			<TD bgcolor='ffffff' class=black rowspan=2 width=5 height=25><IMG height=25 src="../../../images/spacer.gif" width=5></TD>
			</TR>

			<!-- start black line under off-tabs -->
			<TR>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>

			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>

			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>

			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>

			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>

			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>

			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>

			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>

			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>

			<TD class=black valign=bottom height=1><IMG src="../../../images/spacer.gif" width=1 height=1></TD>
			</TR>
			<!-- end black line under off-tabs -->

		</TBODY></TABLE>
		<!-- end TAB table -->


		<!-- start ON-TAB table -->
		<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
		<TBODY>
			<!-- start yellow SUBTITLE bar -->
			<TR>
				<!-- black left border -->
				<TD bgcolor='ffffff' class=black width=5 height=30 ><IMG src="../../../images/spacer.gif" width=5 height=30 ></TD>

				<!-- yellow SUBTITLE TITLE -->
				<TD class=tabontitle align=left>&nbsp;
					<FONT COLOR=#538BFF>J</FONT>apanese
					<FONT COLOR=#538BFF>O</FONT>nline
					<FONT COLOR=#538BFF>S</FONT>elf -
					<FONT COLOR=#538BFF>H</FONT>elp
					<FONT COLOR=#538BFF>U</FONT>tility</TD>

				<!-- QUICK NAVIGATION bar -->
				<TD class=tabontitle align=right>
					<SCRIPT LANGUAGE="JavaScript">
					<!--
					function showPage(form) {
					// Default (form) value is 0
					// Web/HTML page is set with OPTION SELECTED VALUE
					var formindex=form.navigateSelect.selectedIndex;
					if(form.navigateSelect.options[formindex].name == "forums")
						window.open(form.navigateSelect.options[formindex].value);
					else
						parent.self.location=form.navigateSelect.options[formindex].value;
					// parent.self refers to the current browser window
					}

					// -->
					</SCRIPT>

					<FORM style="PADDING-RIGHT: 8px; PADDING-LEFT: 0px; PADDING-BOTTOM: 2px; MARGIN: 0px; PADDING-TOP: 2px" name="quickNavigation">
					<SELECT size=1 name="navigateSelect">
                      <OPTION selected class=quick style="background-color: #538bff;" value="">Quick Navigation</OPTION>
                      <OPTION class=quick style="background-color: #538bff;"  value="/japanese/joshu/index.php">Home</OPTION>
                      <OPTION class=quick style="background-color: #97b8fd;"  value="/japanese/joshu/kana.php">Kana</OPTION>
                      <OPTION class=quick style="background-color: #538bff;"  value="/japanese/joshu/kanji.php">Kanji</OPTION>
                      <OPTION class=quick style="background-color: #97b8fd;"  value="/japanese/joshu/vocabulary.php">Vocabulary</OPTION>
                      <OPTION class=quick style="background-color: #538bff;"  value="/japanese/joshu/grammar.php">Grammar</OPTION>
                      <OPTION class=quick style="background-color: #97b8fd;"  value="/japanese/joshu/counters.php">Counters</OPTION>
                      <OPTION class=quick style="background-color: #538bff;"  value="/japanese/joshu/reading.php">Reading</OPTION>
                      <OPTION class=quick style="background-color: #97b8fd;"  value="/japanese/joshu/video.php">Listening/Speaking</OPTION>
                      <OPTION class=quick style="background-color: #538bff;"  value="/japanese/joshu/culture.php">Culture</OPTION> 
                      <OPTION class=quick style="background-color: #97b8fd;"  value="/japanese/joshu/links.php">Links</OPTION>                 
                    </SELECT> 
					&nbsp;

					<INPUT TYPE="button" VALUE="Go!" OnClick="showPage(this.form)"></FORM></TD>

				<!-- black right border -->
				<TD bgcolor='ffffff' class=black width=5 height=30><IMG src="../../../images/spacer.gif" width=5 height=30></TD>
			</TR>
			<!-- end yellow SUBTITLE bar -->


			<!-- start yellow SUBTITLE bar shadow -->
			<TR>
				<TD bgcolor='ffffff' class=black width=5 height=1><IMG src="../../../images/spacer.gif" width=5 height=1></TD>
				<TD width="100%" class=shadow colspan=2><IMG src="../../../images/spacer.gif" height=1 width=1></TD>
				<TD bgcolor='ffffff' class=black width=5 height=1><IMG src="../../../images/spacer.gif" width=5 height=1></TD>
			</TR>
			<!-- end yellow SUBTITLE bar shadow -->
		</TBODY></TABLE>
		<!-- end ON-TAB table -->




		<!-- start MAIN CONTENT TABLE under TAB -->
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
<TBODY>
	<TR>
		<!-- left vertical black line -->
		<TD bgcolor='ffffff' class=black width=5><IMG height=1 src="../../../images/spacer.gif" width=5></TD>

		<!-- middle main content -->
		<TD bgcolor='ffffff' width="100%">

			<!-- start middle main content table -->
			<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0><TBODY>
				<TR>
					<!-- left blank margin -->
					<TD width=8>&nbsp;</TD>		



					<!-- start middle content margin -->
					<TD vAlign=top>
						<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0><TBODY>

							<!-- blank row above pink welcome bar -->
							<TR><TD height=5><IMG height=5 src="../../../images/spacer.gif" width=1></TD></TR>
							<!-- pink SUBTITLE bar -->
							<TR>
							  <TD class=headline>Vocabulary: Emotions (use Firefox, Netscape,
							    or IE 6.0)</TD>
							</TR>


							<!-- begin MAIN BODY CONTENT -->
							<TR>
							<TD>


<BR>Let's play with our emotions!
<BR>
<BR>Each image will be accompanied by the English translation (below image) and the Romanized Japanese pronunciation (above image).
<BR>
<BR>* Click on the red arrow to view the next image.
<BR>* You may also click on the image to hear an audio sample in Japanese.

<embed src="../../../mp3/ureshii.mp3" hidden=true autostart=false loop=false name="sound0" mastersound>
<embed src="../../../mp3/kanashii.mp3" hidden=true autostart=false loop=false name="sound1" mastersound>
<embed src="../../../mp3/kowai.mp3" hidden=true autostart=false loop=false name="sound2" mastersound>
<embed src="../../../mp3/naku.mp3" hidden=true autostart=false loop=false name="sound3" mastersound>
<embed src="../../../mp3/warau.mp3" hidden=true autostart=false loop=false name="sound4" mastersound>
<embed src="../../../mp3/okoru.mp3" hidden=true autostart=false loop=false name="sound5" mastersound>
<embed src="../../../mp3/odoroku.mp3" hidden=true autostart=false loop=false name="sound6" mastersound>
<embed src="../../../mp3/shinpaisuru.mp3" hidden=true autostart=false loop=false name="sound7" mastersound>
<embed src="../../../mp3/hazukashii.mp3" hidden=true autostart=false loop=false name="sound8" mastersound>


<form name="f">

<center>
<br>
<br>
<br>
<table cellpadding="0" cellspacing="0" border="0">
	<!-- first row, roomaji -->
	<tr><td><input class="roomaji" type="text" name="roomajitext" value=""></td>
		<td><input class="arrow" type="text" name="arrowtop" value=""></td>
		<td><input class="roomaji" type="text" name="roomajitext" value=""></td>
		<td><input class="arrow" type="text" name="arrowtop" value=""></td>
		<td><input class="roomaji" type="text" name="roomajitext" value=""></td>
		<td><input class="arrow" type="text" name="arrowtop" value=""></td></tr>

	<!-- first row, image -->
	<tr><td class="picture"><img name="image" src="../../../images/blankimage.gif" height=125 width=150 onClick="EvalSound('sound0',0)"></td>
		<td><img src="../../../images/blankarrow.gif" name="arrowmiddle" onClick="showNext(1)"></td>
		<td class="picture"><img name="image" src = "../../../images/blankimage.gif" height=125 width=150 onClick="EvalSound('sound1',1)"></td>
		<td><img src="../../../images/blankarrow.gif" name="arrowmiddle" onClick="showNext(2)"></td>
		<td class="picture"><img name="image" src = "../../../images/blankimage.gif" height=125 width=150 onClick="EvalSound('sound2',2)"></td>
		<td><img src="../../../images/blankarrow.gif" name="arrowmiddle" onClick="showNext(3)"></td></tr>

	<!-- first row, english -->
	<tr><td><input class="english" type="text" name="englishtext" value=""></td>
		<td><input class="arrow" type="text" name="arrowbottom" value=""></td>
		<td><input class="english" type="text" name="englishtext" value=""></td>
		<td><input class="arrow" type="text" name="arrowbottom" value=""></td>
		<td><input class="english" type="text" name="englishtext" value=""></td>
		<td><input class="arrow" type="text" name="arrowbottom" value=""></td></tr>
</table>


<hr> 
<table cellpadding="0" cellspacing="0" border="0">
	<!-- second row, roomaji -->
	<tr><td><input class="roomaji" type="text" name="roomajitext" value=""></td>
		<td><input class="arrow" type="text" name="arrowtop" value=""></td>
		<td><input class="roomaji" type="text" name="roomajitext" value=""></td>
		<td><input class="arrow" type="text" name="arrowtop" value=""></td>
		<td><input class="roomaji" type="text" name="roomajitext" value=""></td>
		<td><input class="arrow" type="text" name="arrowtop" value=""></td></tr>

	<!-- second row, image -->
	<tr><td class="picture"><img name="image" src = "../../../images/blankimage.gif" height=125 width=150 onClick="EvalSound('sound3',3)"></td>
		<td><img src="../../../images/blankarrow.gif" name="arrowmiddle" onclick=showNext(4)></td>
		<td class="picture"><img name="image" src = "../../../images/blankimage.gif" height=125 width=150 onClick="EvalSound('sound4',4)"></td>
		<td><img src="../../../images/blankarrow.gif" name="arrowmiddle" onclick=showNext(5)></td>
		<td class="picture"><img name="image" src = "../../../images/blankimage.gif" height=125 width=150 onClick="EvalSound('sound5',5)"></td>
		<td><img src="../../../images/blankarrow.gif" name="arrowmiddle" onclick=showNext(6)></td></tr>

	<!-- second row, english -->
	<tr><td><input class="english" type="text" name="englishtext" value=""></td>
		<td><input class="arrow" type="text" name="arrowbottom" value=""></td>
		<td><input class="english" type="text" name="englishtext" value=""></td>
		<td><input class="arrow" type="text" name="arrowbottom" value=""></td>
		<td><input class="english" type="text" name="englishtext" value=""></td>
		<td><input class="arrow" type="text" name="arrowbottom" value=""></td></tr>
</table>


<hr> 
<table cellpadding="0" cellspacing="0" border="0">
	<!-- third row, roomaji -->
	<tr><td><input class="roomaji" type="text" name="roomajitext" value=""></td>
		<td><input class="arrow" type="text" name="arrowtop" value=""></td>
		<td><input class="roomaji" type="text" name="roomajitext" value=""></td>
		<td><input class="arrow" type="text" name="arrowtop" value=""></td>
		<td><input class="roomaji" type="text" name="roomajitext" value=""></td>
		<td><input class="arrow" type="text" name="arrowtop" value=""></td></tr>

	<!-- third row, image -->
	<tr><td class="picture"><img name="image" src = "../../..u/images/blankimage.gif" height=125 width=150 onClick="EvalSound('sound6',6)"></td>
		<td><img src="../../../images/blankarrow.gif" name="arrowmiddle" onclick=showNext(7)></td>
		<td class="picture"><img name="image" src = "../../../images/blankimage.gif" height=125 width=150 onClick="EvalSound('sound7',7)"></td>
		<td><img src="../../../images/blankarrow.gif" name="arrowmiddle" onclick=showNext(8)></td>
		<td class="picture"><img name="image" src = "../../../images/blankimage.gif" height=125 width=150 onClick="EvalSound('sound8',8)"></td>
		<td><img src="../../../images/blankarrow.gif" name="arrowmiddle"></td></tr>

	<!-- third row, english -->
	<tr><td><input class="english" type="text" name="englishtext" value=""></td>
		<td><input class="arrow" type="text" name="arrowbottom" value=""></td>
		<td><input class="english" type="text" name="englishtext" value=""></td>
		<td><input class="arrow" type="text" name="arrowbottom" value=""></td>
		<td><input class="english" type="text" name="englishtext" value=""></td>
		<td><input class="arrow" type="text" name="arrowbottom" value=""></td></tr>
</table>


<br><br><br>
<input type="button" name="replay" value="Play Again!" onClick=init()>
</center>
</form>


<CENTER><A HREF = "#Top">Return to Top</A></CENTER>
							</TD></TR>
							<!-- end MAIN BODY CONTENT -->
						<?php
							require('../vgfootphp.php')
						?>