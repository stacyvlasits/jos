
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="ja">
<html>
<head>
<title>Kanji Writing Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<!-- created by Fred Bickerstaff --> 

<script LANGUAGE="javascript" type="text/JavaScript">
		var numQuestions = 7;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=71;
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>


<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>
</head>
<body class="backgroundColor">



<h2 class="titleText" align="center">JPN 325L 第十一課 書く漢字クイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">An Integrated Approach to Intermediate Japanese 第十一課 - 書く漢字</div>
<div class="quizlistLine"><a href="../../../kanji_ijconv.php">Return
    to Kanji page</a></div> 
<p class="instructionLine"> Type the reading of the Kanji compounds in Hiragana.</p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;人間&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('にんげん',this.value,0)" style="width: 150px;">
	</INPUT>human
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;関係&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('かんけい',this.value,1)" style="width: 150px;">
    </INPUT>relationship
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;娘&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('むすめ',this.value,2)" style="width: 150px;">
	</INPUT>daughter
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;降る&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('ふる',this.value,3)" style="width: 150px;">
    </INPUT>to fall
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;足&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('あし',this.value,4)" style="width: 150px;">
	</INPUT>foot
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;独立&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('どくりつ',this.value,5)" style="width: 150px;">
    </INPUT>independent
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;遅い&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('おそい',this.value,6)" style="width: 150px;">
	</INPUT>
	slow
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
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
