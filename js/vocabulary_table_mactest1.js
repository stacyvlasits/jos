// VARIABLES ----------------------------------------------------------
// Object constructor 
function vocabWordRecord (kanji, hiragana, roomaji, partsofspeech, english, audio, sentenceJ, sentenceR, sentenceE) { 
   this.kanji = kanji; // index 0
   this.hiragana = hiragana; // index 1
   this.roomaji = roomaji; // index 2
   this.partsofspeech = partsofspeech;
   this.english = english;
   this.audio = audio;
   this.sentenceJ = sentenceJ;
   this.sentenceR = sentenceR;
   this.sentenceE = sentenceE;
}

// ----------------------------------------------------------
function makeArray(length) { 
	this.length = length 
	for (var i = 0; i < length; i++) { 
		this[i] = null 
	} 
	return this 
}


/*
var vocabListArray = new makeArray(0); // Array of vocabulary lists

// begin FOR EACH VOCABULARY LIST

++vocabListArray.length;
vocabListArray['Emotions'] = new makeArray(0); // 5 vocab words in category 'Emotions'


++vocabListArray['Emotions'].length;
vocabListArray['Emotions'][0] = new vocabWordRecord (
	'漢字',
	'ひらがな',
	'roomaji',
	'partofspeech',
	'english',
	'../joshu/wav/teform.wav',
	'sample Japanese sentence',
	'sample roomaji sentence',
	'English translation');

++vocabListArray['Emotions'].length;
vocabListArray['Emotions'][1] = new vocabWordRecord (
	'漢字2',
	'ひらがな',
	'roomaji',
	'partofspeech',
	'english',
	'../joshu/wav/blank.wav',
	'sample Japanese sentence',
	'sample roomaji sentence',
	'English translation');
*/

// end FOR EACH VOCABULARY LIST

//init();


// ----------------------------------------------------------
function showVocabHeader (cat) {
//		alert('inside showVocabHeader');
	document.writeln('<CENTER>');
	document.writeln('<TABLE border=0 cellpadding=2 cellspacing=0 width=600>');
	document.writeln('<TR class="VOCABLIST_show">');
	document.writeln('	<TD>&nbsp;</TD>');
	document.writeln('	<TD colspan=5 style="FONT-SIZE: 20px"><B>' + cat + '</B></TD>');
	document.writeln('	</TR>');
	document.writeln('<TR class="VOCABLIST_show">');
	document.writeln('	<TD class="VOCABLIST_show"></TD>');
	document.writeln('	<TD class="VOCABLIST_kanji_title"><B>漢字</B></TD>');
	document.writeln('	<TD class="VOCABLIST_hiragana_title"><B>ひらがな / カタカナ</B></TD>');
	document.writeln('	<TD class="VOCABLIST_roomaji_title"><B>Roomaji</B></TD>');
	document.writeln('	<TD class="VOCABLIST_english_title" colspan=2 style="BORDER-LEFT: 1px solid black"><B>English</B></TD>');
	document.writeln('	<TD class="VOCABLIST_audio">&nbsp;</TD>');
	document.writeln('	</TR>');
}


// ----------------------------------------------------------
function showVocabList (cat) { // cat is the Vocabulary List Category
//alert('vocabListArray\'s length = ' + vocabListArray.length);
//alert('emotions length = ' + vocabListArray['Emotions'].length);
//alert('kanji = ' + vocabListArray['Emotions'][0].kanji);
	showVocabHeader (cat);
	
	for (i = 0; i<vocabListArray[cat].length; ++i)
	{
	document.writeln('<TR>');

	document.writeln('	<TD class="VOCABLIST_show">&nbsp;');
	//document.writeln('		<script type=\'text/javascript\'>showToggle("+","-","' + cat + i + '")</script>');
	document.writeln('		</TD>');
	document.writeln('	<TD class="VOCABLIST_kanji">' + vocabListArray[cat][i].kanji + '</TD>');
	document.writeln('	<TD class="VOCABLIST_hiragana">' + vocabListArray[cat][i].hiragana + '</TD>');
	document.writeln('	<TD class="VOCABLIST_roomaji">' + vocabListArray[cat][i].roomaji + '</TD>');
	document.writeln('	<TD class="VOCABLIST_partsofspeech"><I>(' + vocabListArray[cat][i].partsofspeech + ')</I></TD>');
	document.writeln('	<TD class="VOCABLIST_english">' + vocabListArray[cat][i].english + '</TD>');
	document.writeln('	<TD class="VOCABLIST_audio">');




var NS4 = (navigator.appName == "Netscape" && parseInt(navigator.appVersion) < 5);
var NSX = (navigator.appName == "Netscape");
var IE4 = (document.all) ? true : false;
		if(!IE4) // FOR NETSCAPE USERS
		{
//		document.writeln('		<A HREF = "' + vocabListArray[cat][qmap[q]].audio + '">');
//		document.writeln('		<IMG SRC="../joshu/images/audio.gif" WIDTH="16" HEIGHT="15" BORDER="0" ALT=""></A>');

		/*
		document.writeln('<applet code=AudioButton.class name="Audio' + i + '" width=20 height=20>');
		document.writeln('  <param name=image value="../joshu/images/audio.gif">');
		document.writeln('  <param name=audio value="' + vocabListArray[cat][i].audio + '">');
		document.writeln('  <param name=bkgray value="128">');
		document.writeln('</applet>');
		*/		


		
		document.writeln('<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" width="50" ');
		document.writeln('height="34" codebase="http://www.apple.com/qtactivex/qtplugin.cab">');
		document.writeln('<param name="src" value="../joshu/images/audio.mov">');
		document.writeln('<param name="href" value="../joshu/wav/iie.mov">');
		document.writeln('<param name="target" value="myself">');
		document.writeln('<param name="autoplay" value="false">');
		document.writeln('<param name="controller" value="false">');
		document.writeln('<embed src="../joshu/images/audio.mov" target="myself" width="50" height="15" href="../joshu/wav/iie.mov" autoplay="');
		document.writeln('false" controller="false"> ');
		document.writeln('</embed> </object>');
		
		
		}
		else
		{
		 // PC INTERNET EXPLORER
		document.writeln('		<IMG SRC="../joshu/images/audio.gif" WIDTH="16" HEIGHT="15" BORDER="0" ALT="" ');
		document.writeln('		onClick="PlaySound(\'../joshu/wav/iie.wav\')">');
		
		}

	document.writeln('	</TR>');
	/*
	document.writeln('<TR id="inside' + cat + i + '">');
	document.writeln('	<TD></TD>');
	document.writeln('	<TD class="VOCABLIST_sentence" colspan=5>');
	document.writeln('		' + vocabListArray[cat][i].sentenceJ);
	document.writeln('		<BR>' + vocabListArray[cat][i].sentenceR);
	document.writeln('		<BR>' + vocabListArray[cat][i].sentenceE);
	document.writeln('	</TD></TR>');
	*/
	}
	document.writeln('</TABLE>');
	document.writeln('</CENTER>');

//	alert('inside showVocabList');
}
