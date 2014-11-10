<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="ja">
<html>
<head>
<title>Grammar Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<!-- created by Fred Bickerstaff --> 

<script LANGUAGE="javascript" type="text/JavaScript">
		var numQuestions = 10;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id =131;
	
				
</script>
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>
<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>


<body class="backgroundColor">
<h2 class="titleText" align="center"> 文法クイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">320L Chapter 14 Grammar Review</div>
<div class="quizlistLine"><a href="../../../../gquiz.php">Return
    to Practice Quizzes list page</a></div> 
<p class="instructionLine">習った漢字とかなを使って答えなさい。文の終わりはplain formを使いなさい。-- An Integrated
  Approach to Intermediate Japanese Ch 14.  </p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;娘が自分の部屋を
	<INPUT name="answer" type="text" onChange="checkAnswer('掃除してくれたら_そうじしてくれたら',this.value,0)" style="width: 150px;">
	</INPUT>と思います。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine">[I wish my daughter clean（そうじする） her room.]</p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;先生がもっとたくさん作文を
		<INPUT name="answer" type="text" onChange="checkAnswer('書かせてくれたら',this.value,1)" style="width: 150px;">
    </INPUT>と思うんですが。。。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine">I wish my teacher lets us write more sakubun.</p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;先生と
	<INPUT name="answer" type="text" onChange="checkAnswer('話すたびに',this.value,2)" style="width: 150px;">
	</INPUT>、先生は私を励ましてくださる。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine">[Every time I talk with my teacher]</p></div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;それは
	<INPUT name="answer" type="text" onChange="checkAnswer('私に',this.value,3)" style="width: 50px;">
    </INPUT>まかせてください。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine">to leave it to me</p></div>
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;テンプラはすし
	  <INPUT name="answer" type="text" onChange="checkAnswer('とともに_と共に',this.value,4)" style="width: 150px;">
	</INPUT>日本の伝統的な料理だ。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine">[together with]</p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;そうじは私に
	<INPUT name="answer" type="text" onChange="checkAnswer('まかせない_任せない',this.value,5)" style="width: 100px;">
    </INPUT>ほうがいいです。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine">[better <font color = "red">NOT</font> to leave ... to me] </p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;学生の時、私は夏休みの
	<INPUT name="answer" type="text" onChange="checkAnswer('たびに',this.value,6)" style="width: 50px;">
	</INPUT>旅行した。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine">[on every...]</p></div>

	<! Question 8>
	<div class="questionLineEven"><b>8. </b>&nbsp;&nbsp;時代が
	<INPUT name="answer" type="text" onChange="checkAnswer('変わる_かわる',this.value,7)" style="width: 100px;">
    </INPUT>とともに人の考え方も変わる。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine">[People's ways of thinking change with time (as time changes)]</p></div>
	
	<! Question 9>
	<div class="questionLineOdd"><b>9. </b>&nbsp;&nbsp;両親が新しい車を
	<INPUT name="answer" type="text" onChange="checkAnswer('買ってくれたら',this.value,8)" style="width: 150px;">
	</INPUT>と思うんですが。。。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine">[I wish my parents would buy...]</p></div>

		
	
	<! Question 10>
	<div class="questionLineEven"><b>10. </b>&nbsp;&nbsp;両親が私を日本に
	<INPUT name="answer" type="text" onChange="checkAnswer('行かせてくれたら',this.value,9)" style="width: 150px;">
	</INPUT>いいのですが。。。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine">[It would be great if my parents let me go...]</p></div>

	
	
	
	
	
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
