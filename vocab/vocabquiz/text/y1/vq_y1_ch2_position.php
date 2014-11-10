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
		var numQuestions = 14;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=405;
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>

<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>
</head>
<body class="backgroundColor">


<h2 class="titleText" align="center"> たんごクイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">



<div class="innerTitle">ようこそ I チャプター 2 <font size=4>Positional Words</font></div>
<div class="quizlistLine"><a href="../../vocabquiz_text.php">Return
    to Vocabulary Quizzes list page</a></div>  
<p class="instructionLine"> Type the Japanese equivalents introduced in class. <strong><font color = "red">Use Hiragana (and Katakana where appropriate)</font></strong>. Reference: Yookoso I, Ch2.  </p>
<FORM name="quiz">

<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;in; inside：
	  <INPUT name="answer" type="text" onChange="checkAnswer('なか',this.value,0)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;side：
	  <INPUT name="answer" type="text" onChange="checkAnswer('よこ',this.value,1)" style="width: 150px;">
    </INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;back; behind：
	<INPUT name="answer" type="text" onChange="checkAnswer('うしろ',this.value,2)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p>
	</div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;right：
	<INPUT name="answer" type="text" onChange="checkAnswer('みぎ',this.value,3)" style="width: 150px;">
    </INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p>
	</div>
	
	<! Question 5>
    <div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;facing; across from：
	<INPUT name="answer" type="text" onChange="checkAnswer('むかい',this.value,4)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;front：
	<INPUT name="answer" type="text" onChange="checkAnswer('まえ',this.value,5)" style="width: 150px;">
    </INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;left：
	<INPUT name="answer" type="text" onChange="checkAnswer('ひだり',this.value,6)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 8>
	<div class="questionLineEven"><b>8. </b>&nbsp;&nbsp;nearby：
	<INPUT name="answer" type="text" onChange="checkAnswer('そば',this.value,7)" style="width: 150px;">
    </INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 9>
	<div class="questionLineOdd"><b>9. </b>&nbsp;&nbsp;under; below; down：
	<INPUT name="answer" type="text" onChange="checkAnswer('した',this.value,8)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 10>
	<div class="questionLineEven"><b>10. </b>&nbsp;&nbsp;on; above; up：
	<INPUT name="answer" type="text" onChange="checkAnswer('うえ',this.value,9)" style="width: 150px;">
    </INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 11>
	<div class="questionLineOdd"><b>11. </b>&nbsp;&nbsp;out; outside：
	<INPUT name="answer" type="text" onChange="checkAnswer('そと',this.value,10)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 12>
	<div class="questionLineEven"><b>12. </b>&nbsp;&nbsp;between：
	<INPUT name="answer" type="text" onChange="checkAnswer('あいだ',this.value,11)" style="width: 150px;">
    </INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 13>
	<div class="questionLineOdd"><b>13. </b>&nbsp;&nbsp;next to; next door：
	<INPUT name="answer" type="text" onChange="checkAnswer('となり',this.value,12)" style="width: 150px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 14>
	<div class="questionLineEven"><b>14. </b>&nbsp;&nbsp;around：
	<INPUT name="answer" type="text" onChange="checkAnswer('まわり',this.value,13)" style="width: 150px;">
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
