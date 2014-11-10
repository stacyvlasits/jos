<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="ja">
<html>
<head>
<title>Grammar Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
.style2 {color: #FF0000}
-->


</style>
</head>

<!-- created by Fred Bickerstaff --> 

<script LANGUAGE="javascript" type="text/JavaScript">
		var numQuestions = 6;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=478;
		
		
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>

<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>


<body class="backgroundColor">
<h2 class="titleText" align="center">ぶんぽうクイズ</h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">〜したことがある (expressing experience)  </div>
<div class="quizlistLine"><a href="../../../../gquiz.php">Return
    to Practice Quizzes list page</a></div> 
<p align="left" height="100px" class="instructionLine">Answer the following questions using "~ (past tense of verb) + ことがある."
<br>
<br>

e.g.,<br>
Q: 日本へ行ったことがありますか。<br>
A: はい、<u> 行ったことがあります。</u><br>
A: いいえ、<u> 行ったことはありません。</u></p>

<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;Q:&nbsp;&nbsp;オースティンでタコスを食べたことがありますか。<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A:&nbsp;&nbsp;はい、 
	<INPUT name="answer" type="text" onChange="checkAnswer('食べたことがあります_オースティンで食べたことがあります_タコスを食べたことがあります_オースティンでタコスを食べたことがありま',this.value,0)" style="width: 400px;">
	</INPUT> 。
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>


	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;Q:&nbsp;&nbsp;フランス人と話したことがありますか。<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A:&nbsp;&nbsp;いいえ、
	<INPUT name="answer" type="text" onChange="checkAnswer('話したことは_フランス人と話したことは_話したことが_フランス人と話したことが',this.value,1)" style="width: 400px;">
	</INPUT>　ありません。
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
    
    
		<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;Q:&nbsp;&nbsp;すもうをしたことがありますか。<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A:&nbsp;&nbsp;いいえ、
	<INPUT name="answer" type="text" onChange="checkAnswer('したことはありません_すもうをしたことはありません_したことがありません_すもうをしたことがありません',this.value,2)" style="width: 400px;">
	</INPUT>
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;&nbsp;&nbsp;Q:&nbsp;&nbsp;オバマにあったことがありますか。<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A:&nbsp;&nbsp;はい、 
	<INPUT name="answer" type="text" onChange="checkAnswer('あったことがあります_オバマにあったことがあります',this.value,3)" style="width: 400px;">
	</INPUT> 。
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;Q:&nbsp;&nbsp;ポケモンのえいがを見たことがありますか。<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A:&nbsp;&nbsp;いいえ、
	<SELECT name="answer" size=1 onChange="checkAnswer('1',this.value,4)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>一度も</OPTION>
	<OPTION value='2'>一度</OPTION>
	<OPTION value='3'>何度</OPTION>
	</SELECT>&nbsp;&nbsp;見たことがありません。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;Q:&nbsp;&nbsp;スケートをしたことがありますか。<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A:&nbsp;&nbsp;はい、
	<SELECT name="answer" size=1 onChange="checkAnswer('2',this.value,5)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>一度も</OPTION>
	<OPTION value='2'>一度</OPTION>
	<OPTION value='3'>何度</OPTION>
	</SELECT>&nbsp;&nbsp;したことがあります。
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
