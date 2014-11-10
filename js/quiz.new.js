// VARIABLES ----------------------------------------------------------
// Object constructor 

function questionRecord(question, answer, numAnswerChoices, answerChoice) { 
   this.question = question; // index 0
   this.answer = answer; // index 1
   this.numAnswerChoices = numAnswerChoices; // index 2
   this.answerChoice = answerChoice;//new makeArray(numAnswerChoices);//answerChoice; // index 3
} 

var numQuestions;
var quizTitle;
var quizDirections;
var questionArray;
var quizType;

// ----------------------------------------------------------
function makeArray(length) { 
	alert('making an array');
	this.length = length;
	for (var i = 1; i <= length; i++) { 
		this[i] = null;
	} 
	return this;
}

// ----------------------------------------------------------
function init() {
	// INITIALIZE SIZES OF questionArray, map
	questionArray = new makeArray(numQuestions);
	map = new makeArray(numQuestions);
}

// ----------------------------------------------------------
function showQuiz(qtype) {
	if (qtype == 'PullDown')
		showPullDownQuiz();
	else if (qtype == 'FillInNoBank')
		showFillInNoBankQuiz();
	else if (qtype == 'FillInYesBank')
		showFillInYesBankQuiz();
	else if (qtype == 'MultipleChoice')
	{
		showMultipleChoiceQuiz();
	}
	document.close();
}

// ----------------------------------------------------------
function showPullDownQuiz() {
	makeMap();
	showTitleDirections();
	document.writeln('<FORM id="f">');
	document.writeln('<TABLE align=center>');

	// PRINT EACH QUESTION
	for (q=0; q<questionArray.length; ++q)
	{
		//document.writeln('<BR>');
		document.writeln('<TR>');
		document.writeln('	<TD>');
		document.writeln('		<INPUT TYPE="CHECKBOX" NAME="check">');
		document.writeln('		' + (q+1) + '.) ');
		document.writeln('		</TD>');
		document.writeln('	<TD>');
		document.writeln('		'+ questionArray[q].question + '  ');
		document.writeln('		</TD>');
		document.writeln('	<TD>');
		document.writeln('		<SELECT NAME="selectedAnswer" SIZE=1>');
		document.writeln('		<OPTION SELECTED VALUE="0">-- Choose an answer --');

		// PRINT EACH ANSWER CHOICE
		for (c=0; c<questionArray[q].numAnswerChoices; ++c){
			document.writeln('		<OPTION VALUE="'+ questionArray[q].answerChoice[map[q][c]] +'">' + questionArray[q].answerChoice[map[q][c]] + '');
		}
		document.writeln('		</SELECT>');
		document.writeln('		</TD>');
		document.writeln('</TR>');
	}
	document.writeln('</TABLE>');
	document.writeln('</FORM>');

	showScore();
}

// ----------------------------------------------------------
function showFillInNoBankQuiz() {
	makeMap();
	showTitleDirections();
	document.writeln('<FORM id="f">');
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
function showFillInYesBankQuiz() {
	makeMap();
	showTitleDirections();
	document.writeln('<FORM id="f">');
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


	// SHOW WORD BANK
	document.writeln('<TR ALIGN=CENTER>');
	document.writeln('	<TD colspan=3><BR>');
	document.writeln('<B>Word Bank:</B>');
	document.writeln('	</TD>');
	document.writeln('</TR>');
	bankmap = newMap(questionArray.length);
	for(q=0; q<questionArray.length; ++q)
	{
		document.writeln('<TR ALIGN=CENTER>');
		document.writeln('	<TD colspan=3>');
		document.writeln(questionArray[bankmap[q]].answer);
		document.writeln('	</TD>');
	document.writeln('</TR>');
	}


	document.writeln('</TABLE>');
	document.writeln('</FORM>');

	showScore();
}


// ----------------------------------------------------------
function showMultipleChoiceQuiz() {
	makeMap();
	showTitleDirections();


	document.writeln('<TABLE align=center border=1 cellpadding=1 cellspacing=1>');

	// PRINT EACH QUESTION
	for (q=0; q<questionArray.length; ++q)
	{
		document.writeln('<FORM id="f">');//'<FORM NAME="f'+q+'">');
		document.writeln('<TR>');
		document.writeln('	<TD VALIGN=texttop>');
		document.writeln('		<INPUT TYPE="CHECKBOX" NAME="check">');
		document.writeln('		' + (q+1) + '.) ');
		document.writeln('		</TD>');
		document.writeln('	<TD VALIGN=texttop>');
		document.writeln('		'+ questionArray[q].question + '  ');
		document.writeln('		</TD>');
		document.writeln('	<TD VALIGN=texttop WIDTH=300>');
		// PRINT EACH ANSWER CHOICE
		var numAC = 0;
		for (c=0; c<questionArray[q].numAnswerChoices; ++c){
			if(questionArray[q].answerChoice[map[q][c]] != "")
			{
				document.writeln('		<INPUT TYPE="RADIO" NAME="selectedAnswer" VALUE="' + 
					questionArray[q].answerChoice[map[q][c]] +'">' + questionArray[q].answerChoice[map[q][c]]);
				document.writeln('<BR>');
				numAC++;
			}
		}
		questionArray[q].numAnswerChoices = numAC;

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

	//----------------------------------------
	if(qtype == 'PullDown')
	{
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
				complete = false;
			}
		}
	}
	//----------------------------------------
	else if(qtype == 'FillInNoBank' || qtype == 'FillInYesBank')
	{
		//alert('entered into proper elseif and about to begin for look with questionArray.length='+questionArray.length);
		//alert(questionArray);
		// STORE STUDENT'S ANSWERS FOR EACH QUESTION
		for (n=0; n<questionArray.length; ++n)
		{
			f = document.getElementById('f');
			//alert(f.selectedAnswer[n].value);
			if (f.selectedAnswer[n].value != "")
			{
				studentAnswerA[n] = f.selectedAnswer[n].value;
			}
			else
			{
				//alert("Question #"+ (n+1) +" was not answered");
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
			var numAC = 0;
			for (c=0; c<questionArray[n].numAnswerChoices; ++c)
			{
				if (document.f[n].selectedAnswer[c].checked) // QUESTION WAS ANSWERED
				{
					studentAnswerA[n] = document.f[n].selectedAnswer[c].value;
					numAC++;
					oneChecked = true;
					break;
				}
			}

			if(!oneChecked) // QUESTION WAS NOT ANSWERED
			{
				//alert("Question #"+ (n+1) +" was not answered");
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
		if(!complete){
			alert("Some questions were not answered");
		}
		document.total.score.value = i;
		document.total.outof.value = questionArray.length;
		var per =  Math.round((i / questionArray.length) * 100);
		document.total.percent.value = per;
	}
	//----------------------------------------


	if (qtype!='MultipleChoice')
	{
		// ADD UP NUMBER OF CORRECT ANSWERS
		for (n=0; n<questionArray.length; ++n)
		{
			f = document.getElementById('f');
			alert(questionArray[n].answer)
			if (studentAnswerA[n]==questionArray[n].answer)
			{
				i++;
				f.check[n].checked = false;
			}
			else
			{
				f.check[n].checked = true;
			}
		}

		// CALCULATE SCORE
		if(!complete){
			alert("Some questions were not answered");
		}
		total = document.getElementById('total');
		total.score.value = i;
		total.outof.value = questionArray.length;
		var per =  Math.round((i / questionArray.length) * 100);
		total.percent.value = per;
	}
	document.close();
}

// ----------------------------------------------------------

function makeMap() {
	// INITIALIZE MAP
	for(q=0; q<questionArray.length; ++q)
	{
		map[q] = new makeArray (questionArray[q].numAnswerChoices);

		for(c=0; c<questionArray[q].numAnswerChoices; ++c)
		{
			map[q][c] = c;
		}
	}

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
	document.writeln('		<INPUT TYPE="TEXT" NAME="score" VALUE="" SIZE=2> /');
	document.writeln('		<INPUT TYPE="TEXT" NAME="outof" VALUE="" SIZE=2> correct');
	document.writeln('		<BR>');
	document.writeln('	Your Score: ');
	document.writeln('		<INPUT TYPE="TEXT" NAME="percent" VALUE="" SIZE=4> %');
	document.writeln('		<BR><BR>');
	document.writeln('	You may correct the checked questions to try to improve your score.');
	document.writeln('<HR><BR><BR>');
	document.writeln('</FORM>');
	document.writeln('</CENTER>');
	document.close();
}

// ----------------------------------------------------------

//nothing();

function nothing()
{
	//alert('done');
	return true;
}

function showTitleDirections () {
	document.writeln('<CENTER>');

	document.writeln(	'<FONT STYLE="FONT-SIZE:20px"><B>');
	document.writeln(quizTitle);
	document.writeln(	'</B></FONT>');

	document.writeln(	'<BR><FONT STYLE="FONT-SIZE:15px">');
	document.writeln(quizDirections);
	document.writeln(	'</FONT>');

	document.writeln('</CENTER>');
}



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