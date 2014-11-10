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
		var numQuestions = 13;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=84;
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>

<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>


<body class="backgroundColor">
<h2 class="titleText" align="center"> 漢字クイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">An Integrated Approach to Intermediate Japanese 第四課 - 読む漢字</div>
<div class="quizlistLine"><a href="../../../kanji_ijread.php">Return
    to Kanji page</a></div> 
<p class="instructionLine"> Type the reading of the Kanji compounds in Hiragana.</p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;熱心に&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('ねっしんに',this.value,0)" style="width: 150px;">
	</INPUT>intently, eagerly
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;暖かい&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('あたたかい',this.value,1)" style="width: 150px;">
    </INPUT>warm (weather)
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;紅葉&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('こうよう',this.value,2)" style="width: 150px;">
	</INPUT>fall colors [of leaves]
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;携帯&nbsp;&nbsp;
	  <INPUT name="answer" type="text" onChange="checkAnswer('けいたい',this.value,3)" style="width: 150px;">
    </INPUT>cell phone
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;面白い&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('おもしろい',this.value,4)" style="width: 150px;">
	</INPUT>interesting
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;経験&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('けいけん',this.value,5)" style="width: 150px;">
    </INPUT>experience
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;〜ないで済む&nbsp;&nbsp;
	  〜ないで
	  <INPUT name="answer" type="text" onChange="checkAnswer('すむ',this.value,6)" style="width: 150px;">
	</INPUT>to get by without ~ing
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 8>
	<div class="questionLineEven"><b>8. </b>&nbsp;&nbsp;料理&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('りょうり',this.value,7)" style="width: 150px;">
    </INPUT>cooking; cuisine
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 9>
	<div class="questionLineOdd"><b>9. </b>&nbsp;&nbsp;物&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('もの',this.value,8)" style="width: 150px;">
	</INPUT>thing; object
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 10>
	<div class="questionLineEven"><b>10. </b>&nbsp;&nbsp;体重&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('たいじゅう',this.value,9)" style="width: 150px;">
    </INPUT>[body] weight
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 11>
	<div class="questionLineOdd"><b>11. </b>&nbsp;&nbsp;〜が足りる&nbsp;&nbsp;〜が
	  <INPUT name="answer" type="text" onChange="checkAnswer('たりる',this.value,10)" style="width: 150px;">
	</INPUT>~ is sufficient
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 12>
	<div class="questionLineEven"><b>12. </b>&nbsp;&nbsp;うつ&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('うつ',this.value,11)" style="width: 150px;">
    </INPUT>to type
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 13>
	<div class="questionLineOdd"><b>13. </b>&nbsp;&nbsp;伝える&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('つたえる',this.value,12)" style="width: 150px;">
	</INPUT>to convey (information)
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
