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
		var numQuestions = 9
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=92;
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>
<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>


<body class="backgroundColor">
<h2 class="titleText" align="center"> 漢字クイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">An Integrated Approach to Intermediate Japanese 第九課 - 読む漢字</div>
<div class="quizlistLine"><a href="../../../kanji_ijread.php">Return
    to Kanji page</a></div> 
<p class="instructionLine"> Type the reading of the Kanji compounds in Hiragana.</p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;季節&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('きせつ',this.value,0)" style="width: 150px;">
	</INPUT>season
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;親戚&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('しんせき',this.value,1)" style="width: 150px;">
    </INPUT>relatives
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;果物&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('くだもの',this.value,2)" style="width: 150px;">
	</INPUT>fruit
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;産物&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('さんぶつ',this.value,3)" style="width: 150px;">
    </INPUT>product; produce
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;観光客&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('かんこうきゃく',this.value,4)" style="width: 150px;">
	</INPUT>sightseer; tourist
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;贅沢&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('ぜいたく',this.value,5)" style="width: 150px;">
    </INPUT>luxurious
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;悪循環&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('あくじゅんかん',this.value,6)" style="width: 150px;">
	</INPUT>vicious cycle
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 8>
	<div class="questionLineEven"><b>8. </b>&nbsp;&nbsp;影響&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('えいきょう',this.value,7)" style="width: 150px;">
    </INPUT>influence
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 9>
	<div class="questionLineOdd"><b>9. </b>&nbsp;&nbsp;少数&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('しょうすう',this.value,8)" style="width: 150px;">
	</INPUT>small number; minority
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div

	
	
	
	
	
></FORM>
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
