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
		var numQuestions = 10;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=90;
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>
<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>


<body class="backgroundColor">
<h2 class="titleText" align="center"> 漢字クイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">An Integrated Approach to Intermediate Japanese 第七課 -
  読む漢字</div>
<div class="quizlistLine"><a href="../../../kanji_ijread.php">Return
    to Kanji page</a></div> 
<p class="instructionLine"> Type the reading of the Kanji compounds in Hiragana.</p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;選手&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('せんしゅ',this.value,0)" style="width: 150px;">
	</INPUT>player selected for team
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;投げる&nbsp;&nbsp;&nbsp;&nbsp;(〜を)
	<INPUT name="answer" type="text" onChange="checkAnswer('なげる',this.value,1)" style="width: 150px;">
    </INPUT>to pitch
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;三振&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('さんしん',this.value,2)" style="width: 150px;">
	</INPUT>strike-out
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;優勝&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('ゆうしょう',this.value,3)" style="width: 150px;">
    </INPUT>championship
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;野球場&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('やきゅうじょう',this.value,4)" style="width: 150px;">
	</INPUT>baseball stadium
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;応援&nbsp;&nbsp;&nbsp;&nbsp;(〜を)
	<INPUT name="answer" type="text" onChange="checkAnswer('おうえん',this.value,5)" style="width: 150px;">
    </INPUT>cheering
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;早稲田&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('わせだ',this.value,6)" style="width: 150px;">
	</INPUT>Waseda (University)
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 8>
	<div class="questionLineEven"><b>8. </b>&nbsp;&nbsp;慶応&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('けいおう',this.value,7)" style="width: 150px;">
    </INPUT>Keiou (University)
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 9>
	<div class="questionLineOdd"><b>9. </b>&nbsp;&nbsp;観客&nbsp;&nbsp;&nbsp;&nbsp;(〜に) 
	<INPUT name="answer" type="text" onChange="checkAnswer('かんきゃく',this.value,8)" style="width: 150px;">
	</INPUT>spectators
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 10>
	<div class="questionLineEven"><b>10. </b>&nbsp;&nbsp;相撲&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('すもう',this.value,9)" style="width: 150px;">
    </INPUT>sumo
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
