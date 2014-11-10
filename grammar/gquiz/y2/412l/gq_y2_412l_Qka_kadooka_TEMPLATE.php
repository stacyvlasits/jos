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
		var numQuestions = 6;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=269;
		
		
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>

<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>


<body class="backgroundColor">
<h2 class="titleText" align="center"> 文法 (Grammar)- 練習 </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">"Question word + か " and "〜か、どうか"</div>
<div class="quizlistLine"><a href="../../../../gquiz.php">Return
    to Practice Quizzes list page</a></div> 
<p align="left" height="100px" class="instructionLine">Answer the following sentences using "Question word + か" and "〜か、どうか". Input your answers in Japanese, and use the same 漢字 that appear on the left.  <br>
[れい] <br>
Q: あれはすしですか。 <br>
A: あれ<span class="style1">が</span>すしかどうかわかりません。(I don't know whether or not that is sushi.) <br> <br>
Q: どれがすしですか。  <br>
A: どれがすしかわかりません。(I don't know which one is sushi.) </p>

<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;Q: 今日、ぶんぽうクイズがありますか。<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A: さあ、今日、
	<INPUT name="answer" type="text" onChange="checkAnswer('ぶんぽうクイズがあるかどうか',this.value,0)" style="width: 200px;">
	</INPUT>わかりません。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;Q: いつファイナルがありますか。<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A: さあ、
	<INPUT name="answer" type="text" onChange="checkAnswer('いつファイナルがあるか',this.value,1)" style="width: 200px;">
    </INPUT>わすれました。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;Q: 明日、雪がふりますか。<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A: さあ、明日、
	<INPUT name="answer" type="text" onChange="checkAnswer('雪がふるかどうか',this.value,2)" style="width: 200px;">
	</INPUT>わかりません。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;Q: 町田さんはアメリカに来るんですか。<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A: さあ、
	<INPUT name="answer" type="text" onChange="checkAnswer('町田さんがアメリカに来るがどうか',this.value,3)" style="width: 200px;">
    </INPUT>しりません。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;Q: スミスさんはどこにすんでいるんですか。<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A: さあ、
	<INPUT name="answer" type="text" onChange="checkAnswer('スミスさんがどこにすんでいるか',this.value,4)" style="width: 200px;">
	</INPUT>しりません。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;Q: てんぷらが好きですか。<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A: さあ、
	<INPUT name="answer" type="text" onChange="checkAnswer('てんぷらが好きかどうか',this.value,5)" style="width: 200px;">
    </INPUT>わかりません。日本食を食べたことがありません。
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
