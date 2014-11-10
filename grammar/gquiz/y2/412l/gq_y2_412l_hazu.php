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
		var q_id=159;
		
		
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>

<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>


<body class="backgroundColor">
<h2 class="titleText" align="center"> 文法 (Grammar)- 練習 </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">〜はず(dependant noun)</div>
<div class="quizlistLine"><a href="../../../../gquiz.php">Return
    to Practice Quizzes list page</a></div> 
<p align="left" height="100px" class="instructionLine">「ふみあきは毎日ピアノをひきます。」<br>Fumiaki, a Japanese boy, plays piano everyday. Complete each sentence according to the description given. Input your answers in Japanese, and use the Kanji compounds that you have learned in class. The sentence should be in polite form. <br>
[れい]
<br>
It's 5:00 am now:
ふみあきは今日、ピアノを<u>ひくはずです</u> 。

 </p>

<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;It's 11:30 pm now:<br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ふみあきは今日もピアノを
	<INPUT name="answer" type="text" onChange="checkAnswer('ひいたはずです',this.value,0)" style="width: 150px;">
	</INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;It's 11:30 pm now: <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ふみあきは明日もピアノを
	<INPUT name="answer" type="text" onChange="checkAnswer('ひくはずです',this.value,1)" style="width: 150px;">
    </INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
    
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;I am sure he likes to play piano: <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ふみあきはピアノをひくのが
	<INPUT name="answer" type="text" onChange="checkAnswer('好きなはずです_すきなはずです',this.value,2)" style="width: 150px;">
	。
	</INPUT>
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;He was climbing a mountain for 3 days.I assume that he didn't play piano yesterday:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ふみあきは昨日ピアノを
	<INPUT name="answer" type="text" onChange="checkAnswer('ひかなかったはずです',this.value,3)" style="width: 150px;">
    </INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;I heard he has a grand piano. I assume that his room is large:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ふみあきのへやは
	<INPUT name="answer" type="text" onChange="checkAnswer('大きいはずです_ひろいはずです_広いはずです',this.value,4)" style="width: 150px;">
	</INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;I assume his piano was expensive: <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ふみあきのピアノは
	<INPUT name="answer" type="text" onChange="checkAnswer('高かったはずです',this.value,5)" style="width: 150px;">
    </INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	
    <! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;I expect that he is playing piano right now:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ふみあきは今ピアノを
	<INPUT name="answer" type="text" onChange="checkAnswer('ひいているはずです',this.value,6)" style="width: 150px;">
	</INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 8>
	<div class="questionLineEven"><b>8. </b>&nbsp;&nbsp;I heard that Fumiaki and his mother are only people who can play piano in his town. I assume that his piano teacher is his mother: <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ふみあきのピアノの先生はふみあきの
	<INPUT name="answer" type="text" onChange="checkAnswer('お母さんのはずです',this.value,7)" style="width: 150px;">
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
