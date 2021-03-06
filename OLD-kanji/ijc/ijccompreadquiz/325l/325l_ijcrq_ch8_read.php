<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="ja">
<html>
<head>
<title>Kanji Reading Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!-- created by Fred Bickerstaff --> 

<script LANGUAGE="javascript" type="text/JavaScript">
		var numQuestions = 9;
		var numAnswered = 0;
		var numCorrect = 0; 
		var q_id=66;
</script>
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>

<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>
</head>
<body class="backgroundColor">

<h2 class="titleText" align="center">JPN 325L 第八課 読む漢字クイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">An Integrated Approach to Intermediate Japanese 第八課 - 読む漢字</div>
<div class="quizlistLine"><a href="../../../kanji_ijconv.php">Return
    to Kanji page</a></div> 
<p class="instructionLine"> Type the reading of the Kanji compounds in Hiragana.</p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;主婦&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('しゅふ',this.value,0)" style="width: 150px;">
	</INPUT>housewife
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;親類&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('しんるい',this.value,1)" style="width: 150px;">
    </INPUT>relatives
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;対象&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('たいしょう',this.value,2)" style="width: 150px;">
	</INPUT>target
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;詳しい&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('くわしい',this.value,3)" style="width: 150px;">
    </INPUT>detailed
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;掲示板&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('けいじばん',this.value,4)" style="width: 150px;">
	</INPUT>bulletin board
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;雇う&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('やとう',this.value,5)" style="width: 150px;">
    </INPUT>to hire
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;編集&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('へんしゅう',this.value,6)" style="width: 150px;">
	</INPUT>
	editing
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 8>
	<div class="questionLineEven"><b>8. </b>&nbsp;&nbsp;雑誌&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('ざっし',this.value,7)" style="width: 150px;">
    </INPUT>magazine
	<IMG SRC="../../../../particlequiz/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 9>
	<div class="questionLineOdd"><b>9. </b>&nbsp;&nbsp;翻訳&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('ほんやく',this.value,8)" style="width: 150px;">
	</INPUT>translation
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
