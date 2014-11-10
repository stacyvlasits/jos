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
		var q_id=70;
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>


<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>
</head>
<body class="backgroundColor">


<h2 class="titleText" align="center">JPN 325L 第十課 読む漢字クイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">An Integrated Approach to Intermediate Japanese 第十課 - 読む漢字</div>
<div class="quizlistLine"><a href="../../../kanji_ijconv.php">Return
    to Kanji page</a></div> 
<p class="instructionLine"> Type the reading of the Kanji compounds in Hiragana.</p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;眺め&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('ながめ',this.value,0)" style="width: 150px;">
	</INPUT>view
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;連絡先&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('れんらくさき',this.value,1)" style="width: 150px;">
    </INPUT>place where one can be reached
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;預かる&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('あずかる',this.value,2)" style="width: 150px;">
	</INPUT>to keep something for someone
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;箱根&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('はこね',this.value,3)" style="width: 150px;">
    </INPUT>Hakone
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;冗談&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('じょうだん',this.value,4)" style="width: 150px;">
	</INPUT>joke
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;名古屋&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('なごや',this.value,5)" style="width: 150px;">
    </INPUT>Nagoya
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;静か(な)&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('しずか(な)',this.value,6)" style="width: 150px;">
	</INPUT>
	quiet
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 8>
	<div class="questionLineEven"><b>8. </b>&nbsp;&nbsp;浴衣&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('ゆかた',this.value,7)" style="width: 150px;">
    </INPUT>informal cotton kimono
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 9>
	<div class="questionLineOdd"><b>9. </b>&nbsp;&nbsp;運賃&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('うんちん',this.value,8)" style="width: 150px;">
	</INPUT>passenger fare
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 10>
	<div class="questionLineEven"><b>10. </b>&nbsp;&nbsp;新幹線&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('しんかんせん',this.value,9)" style="width: 150px;">
    </INPUT>bullet train
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 11>
	<div class="questionLineOdd"><b>11. </b>&nbsp;&nbsp;着替える&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('きがえる',this.value,10)" style="width: 150px;">
	</INPUT>to change clothes
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 12>
	<div class="questionLineEven"><b>12. </b>&nbsp;&nbsp;時刻表&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('じこくひょう',this.value,11)" style="width: 150px;">
    </INPUT>train schedule
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 13>
	<div class="questionLineOdd"><b>13. </b>&nbsp;&nbsp;風呂&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('ふろ',this.value,12)" style="width: 150px;">
	</INPUT>
	bath
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
