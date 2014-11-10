<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="ja">
<html>
<head>
<title>Grammar Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
.style1 {color: #0000FF}
-->


</style>
</head>

<!-- created by Fred Bickerstaff --> 

<script LANGUAGE="javascript" type="text/JavaScript">
		var numQuestions = 8;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=418;
		
		
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>

<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>


<body class="backgroundColor">
<h2 class="titleText" align="center"> 文法 (Grammar)- 練習 </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">"〜ようになる" (describing a change in state)</div>
<div class="quizlistLine"><a href="../../../../gquiz.php">Return
    to Practice Quizzes list page</a></div> 
<p align="left" height="100px" class="instructionLine">Write the sentences to describe habit/ability formations. Input your answers in Japanese, and use the Kanji compounds that you have learned. Use <strong>polite endings</strong>.<br>
[れい] <br>
(ability formation) <font color="red">can</font> write Kanji --><u> 　かんじ <font color="blue">が</font><font color="red">書ける</font>ようになりました　</u>。 <br><br>
(habit formation) to write Kanji --><u> 　かんじ<font color="blue">を</font>書くようになりました　</u>。</p>

<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;can write Hiragana
	<INPUT name="answer" type="text" onChange="checkAnswer('ひらがなが書けるようになりました_ひらがながかけるようになりました',this.value,0)" style="width: 250px;">
	</INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;to drive a car: 車を
	<INPUT name="answer" type="text" onChange="checkAnswer('運転するようになりました_うんてんするようになりました',this.value,1)" style="width: 250px;">
	</INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;can go to Japan alone: ひとりで
	<INPUT name="answer" type="text" onChange="checkAnswer('日本に行けるようになりました_日本へ行けるようになりました_日本にいけるようになりました_日本へいけるようになりました',this.value,2)" style="width: 250px;">
	</INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;can walk
	<INPUT name="answer" type="text" onChange="checkAnswer('歩けるようになりました_あるけるようになりました',this.value,3)" style="width: 250px;">
    </INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;to drink coffee
	<INPUT name="answer" type="text" onChange="checkAnswer('コーヒーを飲むようになりました_コーヒーをのむようになりました',this.value,4)" style="width: 250px;">
	</INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;to ride a bicycle
	<INPUT name="answer" type="text" onChange="checkAnswer('自転車に乗るようになりました_じてんしゃにのるようになりました_自転車にのるようになりました_じてんしゃに乗るようになりました',this.value,5)" style="width: 300px;">
    </INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	
		<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;can read Japanese
	<INPUT name="answer" type="text" onChange="checkAnswer('日本語が読めるようになりました_日本語がよめるようになりました_にほんごが読めるようになりました_にほんごがよめるようになりました',this.value,6)" style="width: 250px;">
	</INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 8>
	<div class="questionLineEven"><b>8. </b>&nbsp;&nbsp;can use chopsticks
	<INPUT name="answer" type="text" onChange="checkAnswer('おはしが使えるようになりました_はしが使えるようになりました_おはしがつかえるようになりました_はしがつかえるようになりました',this.value,7)" style="width: 250px;">
    </INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
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
