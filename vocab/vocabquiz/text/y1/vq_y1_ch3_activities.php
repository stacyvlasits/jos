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
		var numQuestions = 12;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=303;
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>

<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>
</head>
<body class="backgroundColor">


<h2 class="titleText" align="center"> たんごクイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">ようこそ I Chapter 3 <font size=4>Everyday Activites</font></div>
<div class="quizlistLine"><a href="../../vocabquiz_text.php">Return
    to Vocabulary Quizzes list page</a></div>  
<p class="instructionLine"> Type the Japanese equivalents <strong><u>introduced in class</strong></u>. <strong><font color = "red">Use Hiragana (and Katakana where appropriate)</font></strong>. Reference: Yookoso I, Ch3 </p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;to eat dinner, supper &nbsp;&nbsp;ゆうごはん
	<INPUT name="answer" type="text" onChange="checkAnswer('をたべる_をたべます',this.value,0)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;to leave (home) for&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('でかける_でかけます',this.value,1)" style="width: 150px;">
    </INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;to leave for shopping&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('かいものにでかける_かいものにでかけます',this.value,2)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p>
	</div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;to take a shower&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('シャワーをあびる_シャワーをあびます',this.value,3)" style="width: 150px;">
    </INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p>
	</div>
	
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;to leave (go out from) home&nbsp;&nbsp;うち
	<INPUT name="answer" type="text" onChange="checkAnswer('をでる_をでます',this.value,4)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;to take a bath&nbsp;&nbsp;（お)
	<INPUT name="answer" type="text" onChange="checkAnswer('ふろにはいる_ふろにはいります',this.value,5)" style="width: 150px;">
    </INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;to brush ones teeth&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('はをみがく_はをみがきます',this.value,6)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 8>
	<div class="questionLineEven"><b>8. </b>&nbsp;&nbsp;to wash ones face&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('かおをあらう_かおをあらいます',this.value,7)" style="width: 150px;">
    </INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 9>
	<div class="questionLineOdd"><b>9. </b>&nbsp;&nbsp;to put on / to wear clothes&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('ふくをきる_ふくをきます',this.value,8)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 10>
	<div class="questionLineEven"><b>10. </b>&nbsp;&nbsp;to ride or get on a bus &nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('バスにのる_バスにのります',this.value,9)" style="width: 150px;">
    </INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 11>
	<div class="questionLineOdd"><b>11. </b>&nbsp;&nbsp;to work&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('はたらく_しごとをする_はたらきます_しごとをします',this.value,10)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 12>
	<div class="questionLineEven"><b>12. </b>&nbsp;&nbsp;to take a rest; to take time off&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('やすむ_やすみます',this.value,11)" style="width: 150px;">
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
