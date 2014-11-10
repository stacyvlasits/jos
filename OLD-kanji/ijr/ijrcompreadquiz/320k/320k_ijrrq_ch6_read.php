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
		var q_id=88;
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>
<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>


<body class="backgroundColor">
<h2 class="titleText" align="center"> 漢字クイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">An Integrated Approach to Intermediate Japanese 第六課 -
  読む漢字</div>
<div class="quizlistLine"><a href="../../../kanji_ijread.php">Return
    to Kanji page</a></div> 
<p class="instructionLine"> Type the reading of the Kanji compounds in Hiragana.</p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;面倒&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('めんどう',this.value,0)" style="width: 150px;">
	</INPUT>troublesome
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;(〜を)降りる&nbsp;&nbsp;&nbsp;&nbsp;(〜を)
	<INPUT name="answer" type="text" onChange="checkAnswer('おりる',this.value,1)" style="width: 150px;">
    </INPUT>to get off..., to get out of [a vehicle]
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;運転手&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('うんてんしゅ',this.value,2)" style="width: 150px;">
	</INPUT>driver [by occupation]
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;荷物&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('にもつ',this.value,3)" style="width: 150px;">
    </INPUT>baggage
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;運ふ&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('はこぶ',this.value,4)" style="width: 150px;">
	</INPUT>to carry
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;(〜を)片付ける&nbsp;&nbsp;&nbsp;&nbsp;(〜を)
	<INPUT name="answer" type="text" onChange="checkAnswer('かたづける',this.value,5)" style="width: 150px;">
    </INPUT>to clean, to tidy up
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;食堂&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('しょくどう',this.value,6)" style="width: 150px;">
	</INPUT>dining room
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 8>
	<div class="questionLineEven"><b>8. </b>&nbsp;&nbsp;簡単&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('かんたん',this.value,7)" style="width: 150px;">
    </INPUT>simple, easy
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 9>
	<div class="questionLineOdd"><b>9. </b>&nbsp;&nbsp;含む&nbsp;&nbsp;
	  <INPUT name="answer" type="text" onChange="checkAnswer('(ふくまれる',this.value,8)" style="width: 150px;">
	</INPUT>
	to include 
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 10>
	<div class="questionLineEven"><b>10. </b>&nbsp;&nbsp;計算する&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('けいさん',this.value,9)" style="width: 150px;">
    </INPUT>する&nbsp;&nbsp;&nbsp;&nbsp;to calculate
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 11>
	<div class="questionLineOdd"><b>11. </b>&nbsp;&nbsp;床屋&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('とこや',this.value,10)" style="width: 150px;">
	</INPUT>barber shop
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 12>
	<div class="questionLineEven"><b>12. </b>&nbsp;&nbsp;美容院&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('びよういん',this.value,11)" style="width: 150px;">
    </INPUT>beauty salon
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 13>
	<div class="questionLineOdd"><b>13. </b>&nbsp;&nbsp;宣伝する&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('せんでん',this.value,12)" style="width: 150px;">
	</INPUT>する&nbsp;&nbsp;&nbsp;&nbsp;to advertise
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
