// ---------------
// Object constructor
// ---------------
function questionRecord(question, answer, numAnswerChoices, answerChoice, audio) { 
   this.question = question; // index 0
   this.answer = answer; // index 1
   this.numAnswerChoices = numAnswerChoices; // index 2
   this.answerChoice = answerChoice;//new makeArray(numAnswerChoices);//answerChoice; // index 3
   this.audio = audio;
} 



// ---------
// makeArray
// ---------
function makeArray(length) { 
	this.length = length 
	for (var i = 0; i < length; i++) { 
		this[i] = null 
	} 
	return this 
}



// -----
// fillQuiz
// -----
function fillQuiz(f)
{
	var numQuestions = document.f.numQuestionsFill.value;
	var computerChoices;
	//if (document.f.answerChooserGroup[0].checked == true)
		computerChoices = false;
	//else computerChoices = true;

	// FILL-OUT QUIZ TITLE INFORMATION
	document.writeln('<SCRIPT language=JavaScript src="../joshu/js/quizFill.js" type=text/javascript></SCRIPT>');
	document.writeln('<form name="questionFill">');
	document.writeln('<CENTER>');
	document.writeln('<FONT style="font-size:30px"><B>Create Your Quiz</B></FONT><BR><BR>');
	document.writeln('<TABLE>');
	document.writeln('<TR>');
	document.writeln('	<TD><B><FONT SIZE="" COLOR="black">Quiz Title:</FONT></B></TD>');
	document.writeln('	<TD><input type="text" value="" name="flashcardSetTitle" style="width:400px"></TD>');
	document.writeln('</TR>');
	document.writeln('<TR>');
	document.writeln('	<TD><B><FONT SIZE="" COLOR="black">Quiz Directions:</FONT></B></TD>');
	document.writeln('	<TD><input type="text" value="" name="quizDirections" style="width:400px"></TD>');
	document.writeln('</TR>');
	document.writeln('<TR>');
	document.writeln('	<TD valign="text-top"><B><FONT SIZE="" COLOR="black">Quiz Type:</FONT></B></TD>');
	document.writeln('	<TD>');
	document.writeln('		&nbsp;&nbsp;&nbsp;&nbsp<input type="radio" value="pullDown" name="quizTypeGroup" onClick="">');
	document.writeln(		'Pull-down answers');
	document.writeln('		<BR>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="multipleChoice" name="quizTypeGroup" onClick="">');
	document.writeln(		'Multiple Choice');
	document.writeln('		<BR>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="fillInNoBank" name="quizTypeGroup" onClick="">');
	document.writeln(		'Fill in the blank, no word bank');
	document.writeln('		<BR>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="fillInYesBank" name="quizTypeGroup" onClick="">');
	document.writeln(		'Fill in the blank, with word bank');
	document.writeln('	</TD>');
	document.writeln('</TR>');
	document.writeln('</TABLE>');
	document.writeln('</CENTER>');
	document.writeln('<BR><BR>');

	// FILL-OUT QUIZ QUESTIONS
	var fillQuestionColor = new Array ('white', '#587FFF');
	document.writeln('<CENTER>');

	for (var i=0; i<numQuestions; i++)
		{
		document.writeln('<TABLE bgcolor="'  + (fillQuestionColor[(i+1)%2]) +  '">');
		document.writeln('<TR>');
		document.writeln('	<TD><B><FONT SIZE="" COLOR="' + (fillQuestionColor[i%2]) +'">Question ' +  (i+1)  + ':</FONT></B></TD>');
		document.writeln('	<TD><input type="text" value="" name="Question" style="width:400px"></TD>');
		document.writeln('</TR>');
		document.writeln('<TR>');
		document.writeln('	<TD><B><FONT SIZE="" COLOR="' + (fillQuestionColor[i%2]) +'">Correct Answer:</FONT></B></TD>');
		document.writeln('	<TD><input type="text" value="" name="Answer" style="width:400px"></TD>');
		document.writeln('</TR>');

		if(!computerChoices)
			{
			document.writeln('<TR>');
			document.writeln('	<TD><B><FONT SIZE="" COLOR="' + (fillQuestionColor[i%2]) +'">Incorrect Answer Choices:</FONT></B></TD>');
			document.writeln('	<TD>');
			document.writeln('		<input type="text" value="" name="wrongAnswerA" style="width:100px">');
			document.writeln('		<input type="text" value="" name="wrongAnswerB" style="width:100px">');
			document.writeln('		<input type="text" value="" name="wrongAnswerC" style="width:100px"></TD>');
			document.writeln('</TR>');
			}

		document.writeln('</TABLE>');
		document.writeln('<BR>');
		}

	document.writeln('<input type="button" value="Create My Quiz!" name="createQuizButton" onClick="createQuiz('+ numQuestions +',' + computerChoices + ')">');
	document.writeln('<HR>');
	document.writeln('<BR>The HTML code for the quiz will be inserted below.');
	document.writeln('<BR>Copy and paste this code and save it as a ".htm" file.');
	document.writeln('<BR>Make sure it is saved in UTF-8 encoding');
	document.writeln('<BR>to ensure that the Japanese characters will be displayed properly.');
	document.writeln('<BR><textarea value="blank" name="code" wrap="virtual" rows=4 cols=70></textarea>');
	document.writeln('</form>');
	document.writeln('</CENTER>');



var NS4 = (navigator.appName == "Netscape" && parseInt(navigator.appVersion) < 5);
var NSX = (navigator.appName == "Netscape");
var IE4 = (document.all) ? true : false;

	if (!IE4)
		document.close();
	else
		alert('Please refresh your browser to continue.');
}	// end fillQuiz()



// ---------
// createQuiz
// ---------
function createQuiz(numberQ, computerChoices)
{
	var questionArray = new makeArray(0);
	//var quizType = 'Matching';
	var question, answer, numAnswerChoices, answerChoice, audio;

	// construct each question
	for(var i=0; i<numberQ; ++i)
	{
		question = document.questionFill.Question[i].value;
		answer = document.questionFill.Answer[i].value;
		numAnswerChoices = 4; // default value
		answerChoice = [
			answer,
			document.questionFill.wrongAnswerA[i].value,
			document.questionFill.wrongAnswerB[i].value,
			document.questionFill.wrongAnswerC[i].value];
		audio = ''; // default value

		++questionArray.length;
		questionArray[i] = new questionRecord (question, answer, numAnswerChoices, answerChoice, audio);
	}

	if (document.questionFill.quizTypeGroup[0].checked == true) // pull-down
		showQuiz(questionArray, 'PullDown');
	else if (document.questionFill.quizTypeGroup[1].checked == true)	// multiple choice
		showQuiz(questionArray, 'MultipleChoice');
	else if (document.questionFill.quizTypeGroup[2].checked == true)	// fill in no bank
		showQuiz(questionArray, 'FillInNoBank');
	else if (document.questionFill.quizTypeGroup[3].checked == true)	// fill in with bank
		showQuiz(questionArray, 'FillInYesBank');
	else
		showQuiz(questionArray, 'PullDown'); // default value
}	// end createQuiz()



// --------
// showQuiz
// --------
function showQuiz(qArray, quizType)
{
	writeCodeHeader();
	document.questionFill.code.value += '\n<SCRIPT language=JavaScript type=text/javascript>';

	document.questionFill.code.value += '\nflashcardSetTitle = "' + document.questionFill.flashcardSetTitle.value + '";'
	document.questionFill.code.value += '\nquizDirections = "' + document.questionFill.quizDirections.value + '";'
	document.questionFill.code.value += '\nquizType = "' + quizType + '";'
	document.questionFill.code.value += '\nnumQuestions = ' + qArray.length + ';'
	document.questionFill.code.value += '\ninit();'

	for (var i=0; i<qArray.length; ++i)
	{
		document.questionFill.code.value += '\nquestionArray[' + i + '] = new questionRecord('
		document.questionFill.code.value += '"' + qArray[i].question + '", '
		document.questionFill.code.value += '"' + qArray[i].answer + '", '
		document.questionFill.code.value += qArray[i].numAnswerChoices + ', '
		document.questionFill.code.value += '['
		for (var c=0; c<qArray[i].numAnswerChoices; ++c)
			{
				document.questionFill.code.value += '"' + qArray[i].answerChoice[c] + '"';
				if (c != qArray[i].numAnswerChoices - 1)
					document.questionFill.code.value += ', '
			}

		document.questionFill.code.value += ']);'
	}

	document.questionFill.code.value += '\nshowQuiz("' + quizType + '");'
	document.questionFill.code.value += '\n</SCRIPT>\n\n</BODY>\n</HTML>'
	alert('Quiz Successfully Created');
	return;
}









function showMultipleChoiceQuiz(qArray)
{
}

function showFillInNoBankQuiz(qArray)
{
}

function showFillInYesBankQuiz(qArray)
{
}



function writeHeader()
{
	document.questionFill.code.value = ''
	document.questionFill.code.value += '\n<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">' 
	document.questionFill.code.value += '\n<HTML lang="ja">'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n<HEAD>'
	document.questionFill.code.value += '\n<TITLE>Kanji Flashcards</TITLE>'
	document.questionFill.code.value += '\n<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n<STYLE type="text/css">'
	document.questionFill.code.value += '\n<!--'
	document.questionFill.code.value += '\n.furigana {'
	document.questionFill.code.value += '\n	BACKGROUND: #ffb892;'
	document.questionFill.code.value += '\n	FONT-WEIGHT: normal;'
	document.questionFill.code.value += '\n	FONT-SIZE: 25px;'
	document.questionFill.code.value += '\n	COLOR: #000000; '
	document.questionFill.code.value += '\n	LETTER-SPACING: 1px; '
	document.questionFill.code.value += '\n	HEIGHT: 40px; '
	document.questionFill.code.value += '\n	WIDTH: 550px;'
	document.questionFill.code.value += '\n	TEXT-ALIGN: center;'
	document.questionFill.code.value += '\n	PADDING-TOP: 11px;'
	document.questionFill.code.value += '\n	BORDER-TOP: 4px dashed black;'
	document.questionFill.code.value += '\n	BORDER-BOTTOM: 0;'
	document.questionFill.code.value += '\n	BORDER-LEFT: 4px dashed black;'
	document.questionFill.code.value += '\n	BORDER-RIGHT: 4px dashed black;'
	document.questionFill.code.value += '\n}'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n.kanji {'
	document.questionFill.code.value += '\n	BACKGROUND: #00abcd; '
	document.questionFill.code.value += '\n	FONT-WEIGHT: normal;'
	document.questionFill.code.value += '\n	FONT-SIZE: 70px;'
	document.questionFill.code.value += '\n	COLOR: #ffffff; '
	document.questionFill.code.value += '\n	LETTER-SPACING: 1px; '
	document.questionFill.code.value += '\n	HEIGHT: 120px; '
	document.questionFill.code.value += '\n	WIDTH: 550px;'
	document.questionFill.code.value += '\n	TEXT-ALIGN: center;'
	document.questionFill.code.value += '\n	PADDING-TOP: 30px;'
	document.questionFill.code.value += '\n	BORDER-TOP: 0;'
	document.questionFill.code.value += '\n	BORDER-BOTTOM: 0;'
	document.questionFill.code.value += '\n	BORDER-LEFT: 4px dashed black;'
	document.questionFill.code.value += '\n	BORDER-RIGHT: 4px dashed black;'
	document.questionFill.code.value += '\n}'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n.english {'
	document.questionFill.code.value += '\n	BACKGROUND: #ffb892; '
	document.questionFill.code.value += '\n	FONT-WEIGHT: bold;'
	document.questionFill.code.value += '\n	FONT-SIZE: 12px; '
	document.questionFill.code.value += '\n	COLOR: #000000; '
	document.questionFill.code.value += '\n	LETTER-SPACING: 1px; '
	document.questionFill.code.value += '\n	HEIGHT: 40px; '
	document.questionFill.code.value += '\n	WIDTH: 550px;'
	document.questionFill.code.value += '\n	TEXT-ALIGN: center;'
	document.questionFill.code.value += '\n	PADDING-TOP: 5px;'
	document.questionFill.code.value += '\n	BORDER-TOP: 0;'
	document.questionFill.code.value += '\n	BORDER-BOTTOM: 4px dashed black;'
	document.questionFill.code.value += '\n	BORDER-LEFT: 4px dashed black;'
	document.questionFill.code.value += '\n	BORDER-RIGHT: 4px dashed black;'
	document.questionFill.code.value += '\n}'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n.startbutton {'
	document.questionFill.code.value += '\n	BACKGROUND: #000000; '
	document.questionFill.code.value += '\n	FONT-WEIGHT: bold;'
	document.questionFill.code.value += '\n	FONT-SIZE: 14px;'
	document.questionFill.code.value += '\n	FONT-FAMILY: sans-serif; '
	document.questionFill.code.value += '\n	COLOR: #ffffff; '
	document.questionFill.code.value += '\n	LETTER-SPACING: 1px; '
	document.questionFill.code.value += '\n	HEIGHT: 30px; '
	document.questionFill.code.value += '\n	WIDTH: 100px;'
	document.questionFill.code.value += '\n	TEXT-ALIGN: center;'
	document.questionFill.code.value += '\n}'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n.arrowbutton {'
	document.questionFill.code.value += '\n	BACKGROUND: #000000; '
	document.questionFill.code.value += '\n	FONT-WEIGHT: bold;'
	document.questionFill.code.value += '\n	FONT-SIZE: 14px;'
	document.questionFill.code.value += '\n	FONT-FAMILY: sans-serif; '
	document.questionFill.code.value += '\n	COLOR: #ffffff; '
	document.questionFill.code.value += '\n	LETTER-SPACING: 1px; '
	document.questionFill.code.value += '\n	HEIGHT: 30px; '
	document.questionFill.code.value += '\n	WIDTH: 50px;'
	document.questionFill.code.value += '\n	TEXT-ALIGN: center;'
	document.questionFill.code.value += '\n}'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n.delay {'
	document.questionFill.code.value += '\n	WIDTH: 25px;'
	document.questionFill.code.value += '\n	TEXT-ALIGN: center;'
	document.questionFill.code.value += '\n}'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n.options {'
	document.questionFill.code.value += '\n	FONT-WEIGHT: normal;'
	document.questionFill.code.value += '\n	FONT-SIZE: 12px;'
	document.questionFill.code.value += '\n	FONT-FAMILY: sans-serif;'
	document.questionFill.code.value += '\n}'
	document.questionFill.code.value += '\n-->'
	document.questionFill.code.value += '\n</STYLE>'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n<SCRIPT language=JavaScript type="text/javascript">'
	document.questionFill.code.value += '\n// variables'
	document.questionFill.code.value += '\nvar kanjiA = new Array();'
	document.questionFill.code.value += '\nvar furiganaA = new Array();'
	document.questionFill.code.value += '\nvar englishA = new Array();'
	document.questionFill.code.value += '\nvar numFlashcards;'
	document.questionFill.code.value += '\nvar map = new Array ();'
	document.questionFill.code.value += '\nvar mapIndex;'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n// functions'
	document.questionFill.code.value += '\nfunction init() {'
	document.questionFill.code.value += '\n	for (i=0; i<numFlashcards; i++)'
	document.questionFill.code.value += '\n		{'
	document.questionFill.code.value += '\n		map[i] = i;'
	document.questionFill.code.value += '\n		}'
	document.questionFill.code.value += '\n	document.f.kanji.value = "";'
	document.questionFill.code.value += '\n	document.f.furigana.value = "";'
	document.questionFill.code.value += '\n	document.f.english.value = "";'
	document.questionFill.code.value += '\n	mapIndex = -1;'
	document.questionFill.code.value += '\n	scramble();'
	document.questionFill.code.value += '\n	nextKanji();'
	document.questionFill.code.value += '\n	}'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\nfunction nextKanji() {'
	document.questionFill.code.value += '\n	if (mapIndex < numFlashcards-1)'
	document.questionFill.code.value += '\n		{'
	document.questionFill.code.value += '\n		mapIndex++;'
	document.questionFill.code.value += '\n		document.f.kanji.value = kanjiA[map[mapIndex]];'
	document.questionFill.code.value += '\n		document.f.furigana.value = "";'
	document.questionFill.code.value += '\n		document.f.english.value = "";'
	document.questionFill.code.value += '\n		if (eval("document.f.displayF.checked") == true)'
	document.questionFill.code.value += '\n			{'
	document.questionFill.code.value += '\n			setTimeout("showFurigana()", document.f.delay.value*1000);'
	document.questionFill.code.value += '\n			}'
	document.questionFill.code.value += '\n		else if (eval("document.f.displayE.checked") == true)'
	document.questionFill.code.value += '\n			{setTimeout("showEnglish()", document.f.delay.value*1000);}'
	document.questionFill.code.value += '\n		}'
	document.questionFill.code.value += '\n	else'
	document.questionFill.code.value += '\n		{'
	document.questionFill.code.value += '\n		done();'
	document.questionFill.code.value += '\n		}'
	document.questionFill.code.value += '\n	}'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\nfunction previousKanji() {'
	document.questionFill.code.value += '\n	if (mapIndex > 0)'
	document.questionFill.code.value += '\n		{'
	document.questionFill.code.value += '\n		mapIndex--;'
	document.questionFill.code.value += '\n		document.f.kanji.value = kanjiA[map[mapIndex]];'
	document.questionFill.code.value += '\n		document.f.furigana.value = "";'
	document.questionFill.code.value += '\n		document.f.english.value = "";'
	document.questionFill.code.value += '\n		if (eval("document.f.displayF.checked") == true)'
	document.questionFill.code.value += '\n			{'
	document.questionFill.code.value += '\n			setTimeout("showFurigana()", document.f.delay.value*1000);'
	document.questionFill.code.value += '\n			}'
	document.questionFill.code.value += '\n		else if (eval("document.f.displayE.checked") == true)'
	document.questionFill.code.value += '\n			{setTimeout("showEnglish()", document.f.delay.value*1000);}'
	document.questionFill.code.value += '\n		}'
	document.questionFill.code.value += '\n	else'
	document.questionFill.code.value += '\n		{'
	document.questionFill.code.value += '\n		done();'
	document.questionFill.code.value += '\n		}'
	document.questionFill.code.value += '\n	}'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\nfunction showFurigana() {'
	document.questionFill.code.value += '\n	document.f.furigana.value = furiganaA[map[mapIndex]];'
	document.questionFill.code.value += '\n	if (eval("document.f.displayE.checked") == true)'
	document.questionFill.code.value += '\n		{setTimeout("showEnglish()", document.f.delay.value*1000);}'
	document.questionFill.code.value += '\n	}'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\nfunction showEnglish() {'
	document.questionFill.code.value += '\n	document.f.english.value = englishA[map[mapIndex]];'
	document.questionFill.code.value += '\n	}'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\nfunction done() {'
	document.questionFill.code.value += '\n	alert("Click START for a new game.");'
	document.questionFill.code.value += '\n	}'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\nfunction scramble() {'
	document.questionFill.code.value += '\n	for (z = 0; z < 2; z++) {'
	document.questionFill.code.value += '\n		for (x = 0; x < numFlashcards; x++) {'
	document.questionFill.code.value += '\n			randomI = Math.floor(Math.random()*numFlashcards);'
	document.questionFill.code.value += '\n			randomVal = map[randomI];'
	document.questionFill.code.value += '\n			savedVal = map[x];'
	document.questionFill.code.value += '\n			map[x] = randomVal;'
	document.questionFill.code.value += '\n			map[randomI] = savedVal;'
	document.questionFill.code.value += '\n			}'
	document.questionFill.code.value += '\n		}'
	document.questionFill.code.value += '\n	}'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n</SCRIPT>'
	document.questionFill.code.value += '\n</HEAD>'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n<BODY background="../joshu/images/bg_blackwhite.jpg" bgcolor="#ffffff">'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n<center>'
	document.questionFill.code.value += '\n<h2>'

}


function writeInputTitle()
{
	document.questionFill.code.value += document.questionFill.flashcardSetTitle.value
}

function writeArraysHeader()
{
	document.questionFill.code.value += '\n</h2>'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n<form name="f" ACTION="post"> '
	document.questionFill.code.value += '\n<SCRIPT LANGUAGE="JavaScript" type="text/javascript">'
	document.questionFill.code.value += '\n<!-- Begin'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n// variables'
	document.questionFill.code.value += '\nkanjiA = new Array'
	document.questionFill.code.value += '\n('
}

function writeInputArrays()
{
	// kanjiA
	// fill in the Kanji List
	// fix problem of Japanese Quote/Comma versus English Quote/Comma
	var inputKanjiList = document.questionFill.kanjiList.value
	var resultKanjiList = '';
	for( var i = 0; i < inputKanjiList.length; i++ )
	{
		if( inputKanjiList.charAt(i) == '”' )
			resultKanjiList += '"';
		else if( inputKanjiList.charAt(i) == '、' )
			resultKanjiList += ',';
		else
			resultKanjiList += inputKanjiList.charAt(i);
	}
	
	document.questionFill.code.value += resultKanjiList
	document.questionFill.code.value += '\n);'


	// furiganaA
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\nfuriganaA = new Array'
	document.questionFill.code.value += '\n('
	// fill in the Furigana List	
	// fix problem of Japanese Quote/Comma versus English Quote/Comma
	var inputFuriganaList = document.questionFill.furiganaList.value
	var resultFuriganaList = '';
	for( var i = 0; i < inputFuriganaList.length; i++ )
	{
		if( inputFuriganaList.charAt(i) == '”' )
			resultFuriganaList += '"';
		else if( inputFuriganaList.charAt(i) == '、' )
			resultFuriganaList += ',';
		else
			resultFuriganaList += inputFuriganaList.charAt(i);
	}
	document.questionFill.code.value += resultFuriganaList
	document.questionFill.code.value += '\n);'


	// englishA
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\nenglishA = new Array'
	document.questionFill.code.value += '\n('
	// fill in the English List
	document.questionFill.code.value += document.questionFill.englishList.value
	document.questionFill.code.value += '\n);'
}

function writeInputNumber()
{
	document.questionFill.code.value += '\n numFlashcards = ' + document.questionFill.numFlashcards.value + ';'
}

function writeFooter()
{
	document.questionFill.code.value += '\n//  End -->'
	document.questionFill.code.value += '\n</SCRIPT>'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n<br><input class=startbutton type="button" value="スタート" name="start" onClick="javascript:init()">'
	document.questionFill.code.value += '\n<br>'
	document.questionFill.code.value += '\n<br><input class=furigana type="text" size="30" name="furigana" value="">'
	document.questionFill.code.value += '\n<br><input class=kanji type="text" size="30" name="kanji" value="漢字">'
	document.questionFill.code.value += '\n<br><input class=english type="text" size="30" name="english" value="">'
	document.questionFill.code.value += '\n<br>'
	document.questionFill.code.value += '\n<br>'
	document.questionFill.code.value += '\n<input class=arrowbutton type="button" value="<--" name="previous" onClick="previousKanji()">'
	document.questionFill.code.value += '\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
	document.questionFill.code.value += '\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n<FONT class=options>Delay (seconds): </FONT><input class=delay type="text" value="2" name="delay">'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
	document.questionFill.code.value += '\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
	document.questionFill.code.value += '\n<input class=arrowbutton type="button" value="-->" name="next" onClick="nextKanji()">'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n<br>'
	document.questionFill.code.value += '\n<br>'
	document.questionFill.code.value += '\n<table>'
	document.questionFill.code.value += '\n<tr>'
	document.questionFill.code.value += '\n<td><input class=options type=checkbox name=displayF checked="checked"></td>'
	document.questionFill.code.value += '\n<td><FONT class=options>display furigana</FONT></td>'
	document.questionFill.code.value += '\n</tr>'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n<tr>'
	document.questionFill.code.value += '\n<td><input type=checkbox name=displayE></td>'
	document.questionFill.code.value += '\n<td><FONT class=options>display english</FONT></td>'
	document.questionFill.code.value += '\n</tr>'
	document.questionFill.code.value += '\n</table>'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n'
	document.questionFill.code.value += '\n</form>'
	document.questionFill.code.value += '\n</center>'
	document.questionFill.code.value += '\n</BODY>'
	document.questionFill.code.value += '\n</HTML>'

}

function createFlashcards()
{
	writeHeader();
	writeInputTitle();
	writeArraysHeader();
	writeInputArrays();
	writeInputNumber();
	writeFooter();

	alert('Flashcards Successfully Created');
	return;
}