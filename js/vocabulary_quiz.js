// VARIABLES ----------------------------------------------------------
// Object constructor 
function questionRecord(question, answer, numAnswerChoices, answerChoice, audio) { 
   this.question = question; // index 0
   this.answer = answer; // index 1
   this.numAnswerChoices = numAnswerChoices; // index 2
   this.answerChoice = answerChoice;//new makeArray(numAnswerChoices);//answerChoice; // index 3
   this.audio = audio;
} 


// ----------------------------------------------------------
function makeArray(length) { 
	this.length = length 
	for (var i = 0; i < length; i++) { 
		this[i] = null 
	} 
	return this 
}


//var numQuestions;
var questionArray = new makeArray(0);
var quizType = 'Matching';


var vocabChoiceArray;

function makeVocabChoiceArray(cat) {
	vocabChoiceArray = new makeArray(vocabListArray[cat].length);
	for (var i=0; i<vocabListArray[cat].length; ++i)
	{
		vocabChoiceArray[i] = vocabListArray[cat][i].english;
	}
}

function makeVocabQuestions(cat) {
	makeVocabChoiceArray(cat);
	makeVocabChoiceArrayMap(vocabChoiceArray.length);

	for(var i=0; i<vocabListArray[cat].length; ++i)
	{
		++questionArray.length;
		shuffleVocabChoiceArrayMap(vocabChoiceArray.length);
		map = swapIfFound( map, i, 3 );

		var kanjiPlusHiragana;

		if (vocabListArray[cat][i].kanji == '&nbsp;')
			kanjiPlusHiragana = '<FONT CLASS="VOCABQUIZ_hiragana">' + vocabListArray[cat][i].hiragana + '&nbsp;&nbsp;</FONT>'
//					+ '<IMG SRC="../joshu/images/audio.gif" WIDTH="16" HEIGHT="15" BORDER="0" ALT="" ' +
//					//'onClick="PlaySound(\'' + vocabListArray[cat][i].audio + '\')">';
//					'onClick="PlaySound(\'' + '../joshu/wav/ureshii.wav' + '\')">';

		else
			kanjiPlusHiragana = '<FONT CLASS="VOCABQUIZ_kanji">' + vocabListArray[cat][i].kanji + '</FONT>' + 
					'&nbsp;&nbsp;&nbsp;( ' +
					'<FONT CLASS="VOCABQUIZ_hiragana">' + vocabListArray[cat][i].hiragana + '</FONT> )&nbsp;&nbsp;'
//					+ '<IMG SRC="../joshu/images/audio.gif" WIDTH="16" HEIGHT="15" BORDER="0" ALT="" ' +
//					//'onClick="PlaySound(\'' + vocabListArray[cat][i].audio + '\')">';
//					'onClick="PlaySound(\'' + '../joshu/wav/ureshii.wav' + '\')">';

		questionArray[questionArray.length-1] = new questionRecord (
			//vocabListArray[cat][i].kanji + '&nbsp;&nbsp;---&nbsp;&nbsp;' + vocabListArray[cat][i].hiragana + ' ', 
			kanjiPlusHiragana, 
			vocabListArray[cat][i].english, 
			//vocabListArray[cat].length,
			4, 
			[ vocabListArray[cat][i].english, vocabChoiceArray[map[0]], vocabChoiceArray[map[1]], vocabChoiceArray[map[2]] ],
			vocabListArray[cat][i].audio
			);



	}
}

// ----------------------------------------------------------

function makeVocabChoiceArrayMap(mapSize) {
	// INITIALIZE MAP
	map = new makeArray(mapSize);

	for(var s=0; s<mapSize; ++s)
		map[s] = s;
}


function shuffleVocabChoiceArrayMap(mapSize) {
	// SHUFFLE MAP
	for (var z = 0; z < 2; z++) { // SHUFFLE 5 TIMES, GOOD ENOUGH
		for (var x = 0; x < mapSize; x++) { // ONE PASS THROUGH ANSWERCHOICE ARRAY
			randomI = Math.floor(Math.random()*mapSize);
			randomVal = map[randomI];
			savedVal = map[x];
			map[x] = randomVal;
			map[randomI] = savedVal;
		}
	}
}


function swapIfFound( thisArray, element, numElementToCheck ) {
	for (var f = 0; f < numElementToCheck; ++f)
	{
		if (thisArray[f] == element)
		{
			//alert('element = ' + element + ', thisArray[f] = ' + thisArray[f]);
			var temp = thisArray[thisArray.length-1]; // temp store last element
			thisArray[f] = temp; // set to last element
			thisArray[thisArray.length-1] = element; // set last element to swapped value
			break; // only one max should be found
		}
	}
	return thisArray;
}



function showQuizHeader (cat) {
	document.writeln('<CENTER>');
	document.writeln(	'<FONT STYLE="FONT-SIZE:20px"><B>');
	document.writeln(	'Quiz :: ' + cat);
	document.writeln(	'</B></FONT>');
	document.writeln('</CENTER>');
}


// ----------------------------------------------------------
/*
function init() {
	// INITIALIZE SIZES OF questionArray, map
	questionArray = new makeArray(numQuestions);
	map = new makeArray(numQuestions);
}
*/

// ----------------------------------------------------------
function showQuiz(qtype, cat) {
	if (qtype == 'Matching')
		showMatchingQuiz(cat);
	else if (qtype == 'FillInTheBlank')
		showFillInTheBlankQuiz(cat);
	else if (qtype == 'MultipleChoice')
	{
		showMultipleChoiceQuiz(cat);
	}
	document.close();
}

// ----------------------------------------------------------
var audioOnly = false;
var tenOnly = true;
function showMatchingQuiz(cat) {
	makeMap();
	showQuizHeader(cat);

	document.writeln('<FORM NAME="f">');
	document.writeln('<TABLE align=center>');

	var numQ;
	if(tenOnly)
	{
		if(questionArray.length > 10)
		{
			qmap = newMap(questionArray.length)
			numQ = 10
		}
	}
	else
		numQ = questionArray.length


	// PRINT EACH QUESTION
	for (q=0; q<numQ; ++q)
	{
		//document.writeln('<BR>');
		document.writeln('<TR>');
		document.writeln('	<TD>');
		document.writeln('		<INPUT TYPE="CHECKBOX" NAME="check">');
		document.writeln('		' + (q+1) + '.) ');
		document.writeln('		</TD>');
		document.writeln('	<TD ALIGN=RIGHT>');

		if (!audioOnly)
			document.writeln('		'+ questionArray[qmap[q]].question + '  '); // COMMENT OUT FOR AUDIO-ONLY QUIZ

		document.writeln('		</TD>');
		document.writeln('	<TD>');

var NS4 = (navigator.appName == "Netscape" && parseInt(navigator.appVersion) < 5);
var NSX = (navigator.appName == "Netscape");
var IE4 = (document.all) ? true : false;


		if(!IE4) // FOR NETSCAPE USERS
		{
//		document.writeln('		<A HREF = "' + vocabListArray[cat][qmap[q]].audio + '">');
//		document.writeln('		<IMG SRC="../joshu/images/audio.gif" WIDTH="16" HEIGHT="15" BORDER="0" ALT=""></A>');

///*
document.writeln('<applet code=AudioButton.class name="Audio' + q + '" width=16 height=15>');
document.writeln('  <param name=image value="../joshu/images/audio.gif">');
document.writeln('  <param name=audio value="' + vocabListArray[cat][qmap[q]].audio + '">');
document.writeln('  <param name=bkgray value="128">');
document.writeln('</applet>');
//*/		
		
		}
		else
		{
		/* // USES BGSOUND TAG, NOT COMPATIBLE WITH MOST BROWSERS
		document.writeln('		<IMG SRC="../joshu/images/audio.gif" WIDTH="16" HEIGHT="15" BORDER="0" ALT="" ');
		document.writeln('		onClick="PlaySound(\'' + vocabListArray[cat][qmap[q]].audio + '\')">');
		*/
		document.writeln('<applet code=AudioButton.class name="Audio' + q + '" width=16 height=15>');
		document.writeln('  <param name=image value="../joshu/images/audio.gif">');
		document.writeln('  <param name=audio value="' + vocabListArray[cat][qmap[q]].audio + '">');
		document.writeln('  <param name=bkgray value="128">');
		document.writeln('</applet>');


		}


		//document.writeln('		onClick="PlaySound(\'' + '../joshu/wav/ureshii.wav' + '\')">');
		document.writeln('		<SELECT NAME="selectedAnswer" SIZE=1>');
		document.writeln('		<OPTION SELECTED VALUE="0">-- Choose an answer --');

		// PRINT EACH ANSWER CHOICE
		for (c=0; c<questionArray[qmap[q]].numAnswerChoices; ++c){
		document.writeln('		<OPTION VALUE="'+ questionArray[qmap[q]].answerChoice[map[qmap[q]][c]] +'">' + questionArray[qmap[q]].answerChoice[map[qmap[q]][c]] + '');
		}
		document.writeln('		</SELECT>');
		document.writeln('		</TD>');
		document.writeln('</TR>');
	}
	/*
	// PRINT EACH QUESTION
	for (q=0; q<questionArray.length; ++q)
	{
		//document.writeln('<BR>');
		document.writeln('<TR>');
		document.writeln('	<TD>');
		document.writeln('		<INPUT TYPE="CHECKBOX" NAME="check">');
		document.writeln('		' + (q+1) + '.) ');
		document.writeln('		</TD>');
		document.writeln('	<TD ALIGN=RIGHT>');

		if (!audioOnly)
			document.writeln('		'+ questionArray[q].question + '  '); // COMMENT OUT FOR AUDIO-ONLY QUIZ

		document.writeln('		</TD>');
		document.writeln('	<TD>');
		document.writeln('		<IMG SRC="../joshu/images/audio.gif" WIDTH="16" HEIGHT="15" BORDER="0" ALT="" ');
		document.writeln('		onClick="PlaySound(\'' + vocabListArray[cat][q].audio + '\')">');
		//document.writeln('		onClick="PlaySound(\'' + '../joshu/wav/ureshii.wav' + '\')">');
		document.writeln('		<SELECT NAME="selectedAnswer" SIZE=1>');
		document.writeln('		<OPTION SELECTED VALUE="0">-- Choose an answer --');

		// PRINT EACH ANSWER CHOICE
		for (c=0; c<questionArray[q].numAnswerChoices; ++c){
		document.writeln('		<OPTION VALUE="'+ questionArray[q].answerChoice[map[q][c]] +'">' + questionArray[q].answerChoice[map[q][c]] + '');
		}
		document.writeln('		</SELECT>');
		document.writeln('		</TD>');
		document.writeln('</TR>');
	}*/


	document.writeln('</TABLE>');
	document.writeln('</FORM>');

	showScore();
}

// ----------------------------------------------------------
function showFillInTheBlankQuiz() {
	makeMap();

	document.writeln('<FORM NAME="f">');
	document.writeln('<TABLE align=center>');

	// PRINT EACH QUESTION
	for (q=0; q<questionArray.length; ++q)
	{
		//document.writeln('<BR>');
		document.writeln('<TR>');
		document.writeln('	<TD>');
		document.writeln('		<INPUT TYPE="CHECKBOX" NAME="check" HIDE=1>');
		document.writeln('		' + (q+1) + '.) ');
		document.writeln('		</TD>');
		document.writeln('	<TD>');
		document.writeln('		'+ questionArray[q].question + '  ');
		document.writeln('		</TD>');
		document.writeln('	<TD>');
		document.writeln('		<INPUT TYPE="TEXT" NAME="selectedAnswer" VALUE="">');
		document.writeln('		</TD>');
		document.writeln('</TR>');
	}
	document.writeln('</TABLE>');
	document.writeln('</FORM>');

	showScore();
}

// ----------------------------------------------------------
function showMultipleChoiceQuiz() {
	makeMap();


	document.writeln('<TABLE align=center border=1 cellpadding=1 cellspacing=1>');

	// PRINT EACH QUESTION
	for (q=0; q<questionArray.length; ++q)
	{
		document.writeln('<FORM NAME="f">');//'<FORM NAME="f'+q+'">');
		document.writeln('<TR>');
		document.writeln('	<TD VALIGN=texttop>');
		document.writeln('		<INPUT TYPE="CHECKBOX" NAME="check">');
		document.writeln('		' + (q+1) + '.) ');
		document.writeln('		</TD>');
		document.writeln('	<TD VALIGN=texttop>');
		document.writeln('		'+ questionArray[q].question + '  ');
		document.writeln('		</TD>');
		document.writeln('	<TD VALIGN=texttop WIDTH=200>');
		// PRINT EACH ANSWER CHOICE
		for (c=0; c<questionArray[q].numAnswerChoices; ++c){
			document.writeln('		<INPUT TYPE="RADIO" NAME="selectedAnswer" VALUE="' + 
				questionArray[q].answerChoice[map[q][c]] +'">' + questionArray[q].answerChoice[map[q][c]]);
			document.writeln('<BR>');
		}
		document.writeln('		</TD>');
		document.writeln('</TR>');
		document.writeln('</FORM>');
	}
	document.writeln('</TABLE>');


	showScore();
}

// ----------------------------------------------------------
function gradeQuiz(qtype) {
	var studentAnswerA = new Array (); // array of stored student answers
	var i = 0; // number of correct answers
	var complete = true;
	var notAnswered = '';

	//----------------------------------------
	if(qtype == 'Matching')
	{
		if(tenOnly)
		{
		// STORE STUDENT'S ANSWERS FOR EACH QUESTION
		for (n=0; n<10; ++n)
		{
			var answerChoiceNdx = document.f.selectedAnswer[n].selectedIndex - 1;
			if (answerChoiceNdx != -1) // QUESTION WAS ANSWERED
			{
				studentAnswerA[n] = questionArray[qmap[n]].answerChoice[map[qmap[n]][answerChoiceNdx]];
			}
			else // QUESTION WAS NOT ANSWERED
			{
				//alert("Question #"+ (n+1) +" was not answered");
				notAnswered += (n+1) + ' ';
				complete = false;
			}
		}
		}


		else
		// STORE STUDENT'S ANSWERS FOR EACH QUESTION
		for (n=0; n<questionArray.length; ++n)
		{
			var answerChoiceNdx = document.f.selectedAnswer[n].selectedIndex - 1;
			if (answerChoiceNdx != -1) // QUESTION WAS ANSWERED
			{
				studentAnswerA[n] = questionArray[n].answerChoice[map[n][answerChoiceNdx]];
			}
			else // QUESTION WAS NOT ANSWERED
			{
				//alert("Question #"+ (n+1) +" was not answered");
				notAnswered += (n+1) + ' ';
				complete = false;
			}
		}




	}
	//----------------------------------------
	else if(qtype == 'FillInTheBlank')
	{
		// STORE STUDENT'S ANSWERS FOR EACH QUESTION
		for (n=0; n<questionArray.length; ++n)
		{
			if (document.f.selectedAnswer[n].value != "")
			{
				studentAnswerA[n] = document.f.selectedAnswer[n].value;
			}
			else
			{
				alert("Question #"+ (n+1) +" was not answered");
				complete = false;
			}
		}
	}
	//----------------------------------------
	else if(qtype == 'MultipleChoice')
	{
		// STORE STUDENT'S ANSWERS FOR EACH QUESTION
		for (n=0; n<questionArray.length; ++n)
		{
			var oneChecked = false;
			for (c=0; c<questionArray[n].numAnswerChoices; ++c)
			{
				if(document.f[n].selectedAnswer[c].checked) // QUESTION WAS ANSWERED
				{
					studentAnswerA[n] = document.f[n].selectedAnswer[c].value;
					oneChecked = true;
					break;
				}
			}

			if(!oneChecked) // QUESTION WAS NOT ANSWERED
			{
				alert("Question #"+ (n+1) +" was not answered");
				complete = false;
			}
		}


		// ADD UP NUMBER OF CORRECT ANSWERS
		for (n=0; n<questionArray.length; ++n)
		{
			if (studentAnswerA[n]==questionArray[n].answer)
			{
				i++;
				document.f[n].check.checked = false;
			}
			else
			{
				document.f[n].check.checked = true;
			}
		}

		// CALCULATE SCORE
		document.total.score.value = i;
		document.total.outof.value = questionArray.length;
		var per =  Math.round((i / questionArray.length) * 100);
		document.total.percent.value = per;
	}
	//----------------------------------------

	if (!complete)
		alert("Question #" + notAnswered + "was/were not answered");

	if (qtype!='MultipleChoice')
	{
		if(tenOnly)
		{
		// ADD UP NUMBER OF CORRECT ANSWERS
		for (n=0; n<10; ++n)
		{
			if (studentAnswerA[n]==questionArray[qmap[n]].answer)
			{
				i++;
				document.f.check[n].checked = false;
			}
			else
			{
				document.f.check[n].checked = true;
			}
		}
		}


		else
		// ADD UP NUMBER OF CORRECT ANSWERS
		for (n=0; n<questionArray.length; ++n)
		{
			if (studentAnswerA[n]==questionArray[n].answer)
			{
				i++;
				document.f.check[n].checked = false;
			}
			else
			{
				document.f.check[n].checked = true;
			}
		}




		// CALCULATE SCORE
		document.total.score.value = i;
		
		if(tenOnly)
			document.total.outof.value = 10;
		else
			document.total.outof.value = questionArray.length;

		var per =  Math.round((i / document.total.outof.value) * 100);
		document.total.percent.value = per;
	}
	document.close();
}

// ----------------------------------------------------------

function makeMap() {
	// INITIALIZE MAP
	map = new makeArray(0);
	for(q=0; q<questionArray.length; ++q)
	{
		++map.length;
		map[q] = new makeArray (questionArray[q].numAnswerChoices);

		for(c=0; c<questionArray[q].numAnswerChoices; ++c)
		{
			map[q][c] = c;
		}
	}

	shuffleMap();

}


function shuffleMap() {
	// SHUFFLE MAP
	for (z = 0; z < 5; z++) { // SHUFFLE 5 TIMES, GOOD ENOUGH
		for(q=0; q<questionArray.length; ++q) // FOR EACH QUESTION
		{
			for (x = 0; x < questionArray[q].numAnswerChoices; x++) { // ONE PASS THROUGH ANSWERCHOICE ARRAY
				randomI = Math.floor(Math.random()*questionArray[q].numAnswerChoices);
				randomVal = map[q][randomI];
				savedVal = map[q][x];
				map[q][x] = randomVal;
				map[q][randomI] = savedVal;
			}
		}
	}
}


// ----------------------------------------------------------
function showScore() {
	document.writeln('<CENTER>');
	document.writeln('<FORM name="total">');
	document.writeln('<INPUT TYPE="BUTTON" VALUE="Submit" onClick="gradeQuiz(quizType)">');
	document.writeln('<INPUT TYPE="button" VALUE="Reload Quiz" onClick=\'parent.location="javascript:location.reload()"\'>');
	document.writeln('<BR><HR>');
	document.writeln('	You got');
	document.writeln('		<INPUT TYPE="TEXT" NAME="score" VALUE="" SIZE=1> /');
	document.writeln('		<INPUT TYPE="TEXT" NAME="outof" VALUE="" SIZE=1> correct');
	document.writeln('		<BR>');
	document.writeln('	Your Score: ');
	document.writeln('		<INPUT TYPE="TEXT" NAME="percent" VALUE="" SIZE=1> %');
	document.writeln('		<BR><BR>');
	document.writeln('	You may correct the checked questions to try to improve your score.');
	document.writeln('<HR><BR><BR>');
	document.writeln('</FORM>');
	document.writeln('</CENTER>');
}

// ----------------------------------------------------------

function newMap(mapSize) {
	// INITIALIZE MAP
	newmap = new makeArray(mapSize);

	for(var s=0; s<mapSize; ++s)
		newmap[s] = s;

	shuffleNewMap(newmap, mapSize);
	return newmap;
}


function shuffleNewMap(newmap, mapSize) {
	// SHUFFLE MAP
	for (var z = 0; z < 2; z++) { // SHUFFLE 5 TIMES, GOOD ENOUGH
		for (var x = 0; x < mapSize; x++) { // ONE PASS THROUGH ANSWERCHOICE ARRAY
			randomI = Math.floor(Math.random()*mapSize);
			randomVal = newmap[randomI];
			savedVal = newmap[x];
			newmap[x] = randomVal;
			newmap[randomI] = savedVal;
		}
	}
}