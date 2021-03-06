<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="ja">
<html>
<head>
<title>Kanji Reading Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<!-- created by Fred Bickerstaff --> 

<script LANGUAGE="javascript" type="text/JavaScript">
		var numQuestions = 8;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=68;
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>


<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>
</head>
<body class="backgroundColor">

<h2 class="titleText" align="center">JPN 325L 第九課 読む漢字クイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">An Integrated Approach to Intermediate Japanese 第九課 - 読む漢字</div>
<div class="quizlistLine"><a href="../../../kanji_ijconv.php">Return
    to Kanji page</a></div> 
<p class="instructionLine"> Type the reading of the Kanji compounds in Hiragana.</p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;湯のみ&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('ゆのみ',this.value,0)" style="width: 150px;">
	</INPUT>tea cup
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;披露宴&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('ひろうえん',this.value,1)" style="width: 150px;">
    </INPUT>reception
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;贈り物&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('おくりもの',this.value,2)" style="width: 150px;">
	</INPUT>gift
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;歳暮&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('せいぼ',this.value,3)" style="width: 150px;">
    </INPUT>end-of-the-year gift
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;坂本&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('さかもと',this.value,4)" style="width: 150px;">
	</INPUT>Sakamoto (family name)
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;働く&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('はたらく',this.value,5)" style="width: 150px;">
    </INPUT>to work
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;恐れ入る&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('おそれいる',this.value,6)" style="width: 150px;">
	</INPUT>
	Thank you very much (formal and polite)
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 8>
	<div class="questionLineEven"><b>8. </b>&nbsp;&nbsp;紺&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('こん',this.value,7)" style="width: 150px;">
    </INPUT>navy blue
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
