

// Object constructor 
function questionRecord(question, answer, numAnswerChoices, answerChoice) { 
   this.question = question; // index 0
   this.answer = answer; // index 1
   this.numAnswerChoices = numAnswerChoices; // index 2
   this.answerChoice = answerChoice;//new makeArray(numAnswerChoices);//answerChoice; // index 3
} 

var numQuestions; // in js file
numQuestions = 4; // in user file
var questionArray = new makeArray(numQuestions); // in js file

// in user file
questionArray[0] = new questionRecord('what is my name?', 'shirley', 3, ['shirley','birley','mirley']);
questionArray[1] = new questionRecord('Who is my cabbage patch doll?', 'bob', 4, ['bob','lob','dob','fob']);
questionArray[2] = new questionRecord('What is yummy to eat?', 'chocolate', 4, ['poop','schmoop','chocolate','loop']);
questionArray[3] = new questionRecord('What is robbin\'s nickname?', 'rob', 2, ['bob','rob']);
	





function makeArray(length) { 
	this.length = length 
	for (var i = 1; i <= length; i++) { 
		this[i] = null 
	} 
	return this 
}


var map = new makeArray (4);//(questionArray.length); // size == numQuestions
var result = new Array ();

/*
map[0] = new Array (2,1,0);
map[1] = new Array (3,2,1,0);
map[2] = new Array (3,2,1,0);
map[3] = new Array (1,0);
*/



/*
//3
map[0][0] = 2;
map[0][1] =1;
map[0][2] =0;
//4
map[1][0] = 3;
map[1][1] =2;
map[1][2] =1;
map[1][3] =0;
//4
map[2][0] = 3;
map[2][1] =2;
map[2][2] =1;
map[2][3] =0;
//2
map[3][0] = 1;
map[3][1] =0;
*/








function init() {
	
	// INITIALIZE MAP
	for(q=0; q<questionArray.length; ++q)
	{
		map[q] = new makeArray (questionArray[q].numAnswerChoices);

		for(c=0; c<questionArray[q].numAnswerChoices; ++c)
		{
			map[q][c] = c;
		}
	}


/*
map[0] = [2,1,0];
map[1] = [3,2,1,0];
map[2] = [3,2,1,0];
map[3] = [1,0];
*/



}



// ----------------------------------------------------------
function showMatchingQuiz() {
	init();

	scramble();
	//writeHTMLheaders();

//	writeVariables();

	document.writeln('<FORM NAME="f">');
	document.writeln('<TABLE align=center>');

	// PRINT EACH QUESTION
	for (q=0; q<questionArray.length; ++q)
	{
		//document.writeln('<BR>');
		document.writeln('<TR>');
		document.writeln('	<TD>');
		document.writeln('		<INPUT  TYPE="CHECKBOX" NAME="check">');
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
printMap();
	//writeHTMLfooters();
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











function writeHTMLheaders() {
	document.writeln('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">');
	document.writeln('<HTML lang="ja">');
	document.writeln('<HEAD>');
	document.writeln('<TITLE> New Document </TITLE>');
	document.writeln('<META NAME="Author" CONTENT="">');
	document.writeln('<META NAME="Keywords" CONTENT="">');
	document.writeln('<META NAME="Description" CONTENT="">');
	document.writeln('<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">');
	document.writeln('<SCRIPT language=JavaScript src="../joshu/js/quiz.js" type=text/javascript></SCRIPT>');
	document.writeln('</HEAD>');
	document.writeln(' ');
	document.writeln(' ');
	document.writeln(' ');
	document.writeln('<BODY onload="">');
}

function writeQuiz() {
	writeHTMLheaders();
	document.writeln('<script type=\'text/javascript\'>');
document.writeln('showMatchingQuiz()');
	document.writeln('</script>');
	document.writeln('silly rabbit');
	writeHTMLfooters();
}

function writeVariables() {
	document.writeln('<script type=\'text/javascript\'>');
	document.writeln('init();');

	// WRITE MAP VARIABLES
	for(q=0; q<questionArray.length; ++q)
	{
		for(c=0; c<questionArray[q].numAnswerChoices; ++c)
		{
			document.writeln('map['+q+']['+c+']='+c+';');
		}
	}

	document.writeln('</script>');
}


function writeHTMLfooters() {
	document.writeln(' ');
	document.writeln(' ');
	document.writeln(' ');
	document.writeln('</BODY>');
	document.writeln('</HTML>');
}

function printMap() {
	for(q=0; q<questionArray.length; ++q)
	{
		for(c=0; c<questionArray[q].numAnswerChoices; ++c)
		{
			document.writeln('map[' + q + '][' + c + '] = ' + map[q][c]);
			document.writeln('<BR>');
		}
	}
}


// ----------------------------------------------------------

// ----------------------------------------------------------
function quiz(form) {

/*
	//init();
	var i = 0; // number of correct answers
	var complete = true;

	// STORE STUDENT'S ANSWERS FOR EACH QUESTION
	for (n=0; n<questionArray.length; ++n)
	{
		var answerChoiceNdx = document.f.selectedAnswer[n].selectedIndex - 1;
		if (answerChoiceNdx != -1) // QUESTION WAS ANSWERED
		{
			result[n] = questionArray[n].answerChoice[map[n][answerChoiceNdx]];
			alert('answerchoicendx = ' + answerChoiceNdx);
			alert('map[n][aci] = ' + map[n][answerChoiceNdx]);
			alert('result[n] = ' + result[n]);
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
		for (n=0; n<questionArray.length; ++n)
		{
			if (result[n]==questionArray[n].answer)
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
		document.total.outof.value = questionArray.length;
		var per =  Math.round((i / questionArray.length) * 100);
		document.total.percent.value = per;
	}
*/
}

// ----------------------------------------------------------

function scramble() {
	/*
	// INITIALIZE MAP
	for (m=0; m<numAnswerChoices; m++)
		{
		map[m] = m;
		}*/

/*
	// INITIALIZE MAP
	for(q=0; q<questionArray.length; ++q)
	{
		map[q] = new Array (questionArray[q].numAnswerChoices);

		for(c=0; c<questionArray[q].numAnswerChoices; ++c)
		{
			map[q][c] = c;
			alert("map[q][c] = " + map[q][c]);
			alert(questionArray[q].answerChoice[map[q][c]]);
		}
	}
*/


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