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
		var numQuestions = 6;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=76;
</script>
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>
<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>
</head>
<body class="backgroundColor">

<h2 class="titleText" align="center">JPN 325L 第十三課 読む漢字クイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">An Integrated Approach to Intermediate Japanese 第十三課 - 読む漢字</div>
<div class="quizlistLine"><a href="../../../kanji_ijconv.php">Return
    to Kanji page</a></div> 
<p class="instructionLine"> Type the reading of the Kanji compounds in Hiragana.</p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;俳優&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('はいゆう',this.value,0)" style="width: 150px;">
	</INPUT>actor/actress
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;助詞&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('じょし',this.value,1)" style="width: 150px;">
    </INPUT>particle(s)
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;暮らし&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('くらし',this.value,2)" style="width: 150px;">
	</INPUT>lifestyle
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;複雑&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('ふくざつ',this.value,3)" style="width: 150px;">
    </INPUT>complex
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;長野&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('ながの',this.value,4)" style="width: 150px;">
	</INPUT>Nagano (prefecture)
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;一生懸命&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('いっしょうけんめい',this.value,5)" style="width: 150px;">
    </INPUT>hard (i.e. work hard)
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
