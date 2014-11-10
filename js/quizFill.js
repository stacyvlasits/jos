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
	document.writeln('<SCRIPT language=JavaScript src="http://www.laits.utexas.edu/japanese/joshu/js/quizFill.js" type="text/javascript"></SCRIPT>');
	document.writeln('<form name="questionFill">');
	document.writeln('<CENTER>');
	document.writeln('<FONT style="font-size:30px"><B>Create Your Quiz</B></FONT><BR><BR>');
	document.writeln('<TABLE>');
	document.writeln('<TR>');
	document.writeln('	<TD><B><FONT SIZE="" COLOR="black">Quiz Title:</FONT></B></TD>');
	document.writeln('	<TD><input type="text" value="" name="quizTitle" style="width:400px"></TD>');
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


/*
var NS4 = (navigator.appName == "Netscape" && parseInt(navigator.appVersion) < 5);
var NSX = (navigator.appName == "Netscape");
var IE4 = (document.all) ? true : false;

	if (!IE4)
		document.close();
	else
		alert('Please refresh your browser to continue.');
*/
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
	document.questionFill.code.value += '\n<SCRIPT language=JavaScript type="text/javascript">';

	document.questionFill.code.value += '\nquizTitle = "' + document.questionFill.quizTitle.value + '";'
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



function writeCodeHeader()
{
	document.questionFill.code.value = ''
	document.questionFill.code.value += '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">'
	document.questionFill.code.value += '<HTML lang="ja">'
	document.questionFill.code.value += '\n<HEAD>'
	document.questionFill.code.value += '\n<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">'
	document.questionFill.code.value += '\n<TITLE>Quiz</TITLE>'
	document.questionFill.code.value += '\n<SCRIPT language=JavaScript src="http://www.laits.utexas.edu/japanese/joshu/js/quiz.js" type="text/javascript"></SCRIPT>'
	document.questionFill.code.value += '\n</HEAD>'
	document.questionFill.code.value += '\n<BODY>\n'
}
