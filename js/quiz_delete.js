/* begin USER INPUT */


// Object constructor 
function questionRecord(question, answer, answerChoices) { 
   this.question = question 
   this.answer = answer 
   this.answerChoices = answerChoices 
} 

var questionArray = new Array();
questionArray[0] = new questionRecord("what is my name?", "Shirley Smith", ["shirley","birley","mirley"]) 



/*
	var numQuestions = 10;
	var questionA = new Array(
	'Who is my cabbage patch doll?',
	'What is robbin\'s nickname?',
	'What is yummy to eat?',
	'What\'s your favorite ice cream?',
	'What\'s your second favorite ice cream?',
	'What\'s your third favorite ice cream?',
	'What\'s your favorite color?',
	'What\'s your second favorite color?',
	'What\'s your third favorite color?',
	'Who\'s your best friend?'
	);
	var answerA = new Array ( // correct answers to questionA
	'bob1',
	'rob2',
	'cob3',
	'peache',
	'banana',
	'cheeryy',
	'prune',
	'i dunno',
	'then again',
	'id like to try them all'
	);

var numAnswerChoices = 14;
*/
/*
var answerChoiceA = new Array (
'bob1',
'rob2',
'cob3',
'dob4',
'peache',
'banana',
'cheeryy',
'prune',
'i dunno',
'then again',
'id like to try them all',
'custard',
'boba',
'green gelly'
);
*/

/*
var answerChoiceA = [
['bob1',
'rob2',
'cob3',
'dob4',
'peache',
'banana',
'cheeryy',
'prune',
'i dunno',
'then again',
'id like to try them all',
'custard',
'boba',
'green gelly'],
['bob1',
'rob2',
'cob3',
'dob4',
'peache',
'banana',
'cheeryy',
'prune',
'i dunno',
'then again',
'id like to try them all',
'custard',
'boba',
'green gelly'],
['bob1',
'rob2',
'cob3',
'dob4',
'peache',
'banana',
'cheeryy',
'prune',
'i dunno',
'then again',
'id like to try them all',
'custard',
'boba',
'green gelly'],
['bob1',
'rob2',
'cob3',
'dob4',
'peache',
'banana',
'cheeryy',
'prune',
'i dunno',
'then again',
'id like to try them all',
'custard',
'boba',
'green gelly'],
['bob1',
'rob2',
'cob3',
'dob4',
'peache',
'banana',
'cheeryy',
'prune',
'i dunno',
'then again',
'id like to try them all',
'custard',
'boba',
'green gelly'],
['bob1',
'rob2',
'cob3',
'dob4',
'peache',
'banana',
'cheeryy',
'prune',
'i dunno',
'then again',
'id like to try them all',
'custard',
'boba',
'green gelly'],
['bob1',
'rob2',
'cob3',
'dob4',
'peache',
'banana',
'cheeryy',
'prune',
'i dunno',
'then again',
'id like to try them all',
'custard',
'boba',
'green gelly'],
['bob1',
'rob2',
'cob3',
'dob4',
'peache',
'banana',
'cheeryy',
'prune',
'i dunno',
'then again',
'id like to try them all',
'custard',
'boba',
'green gelly'],
['bob1',
'rob2',
'cob3',
'dob4',
'peache',
'banana',
'cheeryy',
'prune',
'i dunno',
'then again',
'id like to try them all',
'custard',
'boba',
'green gelly'],
['bob1',
'rob2',
'cob3',
'dob4',
'peache',
'banana',
'cheeryy',
'prune',
'i dunno',
'then again',
'id like to try them all',
'custard',
'boba',
'green gelly']
];
*/

/* end USER INPUT */



var map = new Array ();
var mapIndex;
var result = new Array ();

// ----------------------------------------------------------
function showMatchingQuiz() {
	scramble();
	document.writeln('<FORM NAME="f">');
	document.writeln('<TABLE align=center>');

	// PRINT EACH QUESTION
	for (n=0; n<numQuestions; ++n)
	{
		//document.writeln('<BR>');
		document.writeln('<TR>');
		document.writeln('	<TD>');
		document.writeln('		<INPUT  TYPE="CHECKBOX" NAME="check">');
		document.writeln(		(n+1) + '.) ');
		document.writeln('		</TD>');
		document.writeln('	<TD>');
		document.writeln(		'  ' + questionA[n] + '  ');
		document.writeln('		</TD>');
		document.writeln('	<TD>');
		document.writeln('		<SELECT NAME="answer" SIZE=1>');
		document.writeln('		<OPTION SELECTED VALUE="0">-- Choose an answer --');

		// PRINT EACH ANSWER CHOICE
		for (a=0; a<numAnswerChoices; ++a){
			document.writeln('	<OPTION VALUE="'+ answerChoiceA[n][map[a]] +'">' + answerChoiceA[n][map[a]] + '');}
		document.writeln('		</SELECT>');
		document.writeln('		</TD>');
		document.writeln('</TR>');
	}
	document.writeln('</TABLE>');
	document.writeln('</FORM>');

	showScore();
}

/*
<TABLE>
<TR>
	<TD>checkbox+prob#</TD>
	<TD>question</TD>
	<TD>dropdownmenu</TD>
</TR>
<TR>
	<TD>checkbox+prob#</TD>
	<TD>question</TD>
	<TD>dropdownmenu</TD>
</TR>
</TABLE>
*/

// ----------------------------------------------------------
function showMultipleChoiceQuiz() {
	scramble();
	document.writeln('<FORM NAME="f">');
	document.writeln('<TABLE align=center>');

	// PRINT EACH QUESTION
	for (n=0; n<numQuestions; ++n)
	{
		//document.writeln('<BR>');
		document.writeln('<TR>');
		document.writeln('	<TD>');
		document.writeln('		<INPUT  TYPE="CHECKBOX" NAME="check">');
		document.writeln(		(n+1) + '.) ');
		document.writeln('		</TD>');
		document.writeln('	<TD>');
		document.writeln(		'  ' + questionA[n] + '  ');
		document.writeln('		</TD>');
		document.writeln('	<TD>');
		document.writeln('		<SELECT NAME="answer" SIZE=1>');
		document.writeln('		<OPTION SELECTED VALUE="0">-- Choose an answer --');

		// PRINT EACH ANSWER CHOICE
		for (a=0; a<numAnswerChoices; ++a){
			document.writeln('	<OPTION VALUE="'+ answerChoiceA[n][map[a]] +'">' + answerChoiceA[n][map[a]] + '');}
		document.writeln('		</SELECT>');
		document.writeln('		</TD>');
		document.writeln('</TR>');
	}
	document.writeln('</TABLE>');
	document.writeln('</FORM>');

	showScore();
}
// ----------------------------------------------------------
function quiz(form) {
	var i = 0; // number of correct answers
	var complete = true;


	// STORE STUDENT'S ANSWERS FOR EACH QUESTION
	for (n=0; n<numQuestions; ++n)
	{
		var answerChoiceNdx = document.f.answer[n].selectedIndex - 1;
		if (answerChoiceNdx != -1) // QUESTION WAS ANSWERED
		{
			result[n] = answerChoiceA[n][map[answerChoiceNdx]];
		}
		else // QUESTION WAS NOT ANSWERED
		{
			alert("Question #"+ (n+1) +" was not answered");
			complete = false;
		}
	}

	if (complete)
	{
		// ADD UP NUMBER OF CORRECT ANSWERS
		for (n=0; n<numQuestions; ++n)
		{
			if (result[n]==answerA[n])
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
		document.total.outof.value = numQuestions;
		var per =  Math.round((i / numQuestions) * 100);
		document.total.percent.value = per;
	}
}

// ----------------------------------------------------------
function scramble() {
	// INITIALIZE MAP
	for (m=0; m<numAnswerChoices; m++)
		{
		map[m] = m;
		}

	// SHUFFLE MAP
	for (z = 0; z < 5; z++) { // SHUFFLE 5 TIMES, GOOD ENOUGH
		for (x = 0; x < numAnswerChoices; x++) {
			randomI = Math.floor(Math.random()*3);
			randomVal = map[randomI];
			savedVal = map[x];
			map[x] = randomVal;
			map[randomI] = savedVal;
		}
	}
}


// ----------------------------------------------------------
/*
<CENTER>
<FORM name="total">
<INPUT TYPE="BUTTON" VALUE="Submit" onClick="quiz()">
<INPUT TYPE="button" VALUE="Reload Quiz" onClick='parent.location="javascript:location.reload()"'>
<BR><HR>
	You got
		<INPUT TYPE="TEXT" NAME="score" VALUE="" SIZE=1> /
		<INPUT TYPE="TEXT" NAME="outof" VALUE="" SIZE=1> correct.
		<BR>
	Your Score: 
		<INPUT TYPE="TEXT" NAME="percent" VALUE="" SIZE=1> %
		<BR><BR>
	You may correct the checked questions to try to improve your score.
<HR><BR><BR>
</FORM>
</CENTER>
*/
function showScore() {
	document.writeln('<CENTER>');
	document.writeln('<FORM name="total">');
	document.writeln('<INPUT TYPE="BUTTON" VALUE="Submit" onClick="quiz()">');
	document.writeln('<INPUT TYPE="button" VALUE="Reload Quiz" onClick="parent.location="javascript:location.reload()"">');
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