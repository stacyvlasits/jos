<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="ja">
<html>
<head>
<title>Vocab Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<!-- created by Fred Bickerstaff --> 

<script LANGUAGE="javascript" type="text/JavaScript">
		var numQuestions = 7;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=298;
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>

<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>
</head>
<body class="backgroundColor">


<h2 class="titleText" align="center"> たんごクイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">ようこそ I Chapter 5 <font size=4>Hobbies and Leisure Activites #2 - Skills</font></div>
<div class="quizlistLine"><a href="../../vocabquiz_text.php">Return
    to Vocabulary Quizzes list page</a></div>  
<p class="instructionLine"> Type the Japanese equivalents (dictionary/plain forms) introduced in class</u>. <font color = "red">Use Hiragana (and Katakana where appropriate)</font></strong>. Reference: Yookoso I, Ch5 </p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;good at; skillful at&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('じょうず_じょうずな',this.value,0)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;bad at; unskillful at&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('へた_へたな',this.value,1)" style="width: 150px;">
    </INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;no good&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('だめ_ダメ_だめな_ダメな',this.value,2)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p>
	</div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;good at and fond of&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('とくい_とくいな',this.value,3)" style="width: 150px;">
    </INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p>
	</div>
	
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;bad at and dislike something&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('にがて_にがてな',this.value,4)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;to be able to do (plain form) &nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('できる',this.value,5)" style="width: 150px;">
    </INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;cannot do (plain form)&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('できない',this.value,6)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	
	
</FORM>
<div id="score"></div>

<div>
<table class="optionBox"><tr>
	<td><BUTTON onClick="checkAnswers()">Check Answers</BUTTON></td>
	<td><BUTTON onClick="resetValues()">Reset Values</BUTTON></td>
</tr></table>
</div>
</div>

</body>
</html>
