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
		var numQuestions = 5;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id= 294;
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>

<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>
</head>
<body class="backgroundColor">


<h2 class="titleText" align="center"> たんごクイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">ようこそ I Chapter 4 <font size=4>Forcasting, Rain, and Other Precipitation</font></div>
<div class="quizlistLine"><a href="../../vocabquiz_text.php">Return
    to Vocabulary Quizzes list page</a></div>  
<p class="instructionLine"> Type the Japanese equivalents introduced in class. <strong><font color = "red">Use  Hiragana (and Katakana where appropriate)</font></strong>. Reference: Yookoso I, Ch4</p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;sky&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('そら',this.value,0)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;heavy rain&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('おおあめ',this.value,1)" style="width: 150px;">
    </INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;heavy snowstorm&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('おおゆき',this.value,2)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p>
	</div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;frost&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('しも',this.value,3)" style="width: 150px;">
    </INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p>
	</div>
	
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;fog&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('きり',this.value,4)" style="width: 150px;">
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
