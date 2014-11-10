<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
<HTML lang="ja">
<http://www.w3.org/TR/html4/loose.dtd>
<html>
<head>
<title>Particle Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<script LANGUAGE="javascript" type="text/JavaScript">
		var numQuestions = 9;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id = 205;
		</script>

<SCRIPT LANGUAGE="JavaScript" SRC="../../../js/quiz_top_p.js"></SCRIPT>

<LINK href="../../../css/particleQuiz.css" type=text/css rel=stylesheet>

<body class="backgroundColor">
<h2 class="titleText" align="center"> 助詞クイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<p class="innerTitle"> See how many particles you can guess correctly </p> 
<div class="quizlistLine"><a href="../../../gparticle.php">Return
    to Practice Quizzes list page</a></div>
<p class="instructionLine"> Simply choose the proper particle for each sentence from the drop down menu. </p>
<FORM name="quiz">
	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>スミスさんは
	<INPUT name="answer" type="text" onChange="checkAnswer('日本語',this.value,0)" style="width: 75px;">
	</INPUT>が話せると言いました。
	<IMG SRC="../gimages/blank.gif" class="symbols">
	<p class="translationLine">Mr. Smith said that he can speak Japanese</p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>学生が
	<INPUT name="answer" type="text" onChange="checkAnswer('三十人も',this.value,1)" style="width: 75px;">
    </INPUT>います。
	<IMG SRC="../gimages/blank.gif" class="symbols">
	<p class="translationLine">There are as many as 30 students</p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>フットボールはすもう
	<SELECT name="answer" size=1 onChange="checkAnswer('2',this.value,2)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>が</OPTION>
	<OPTION value='2'>より</OPTION>
	<OPTION value='3'>と</OPTION>
	</SELECT>おもしろいです。
	<IMG SRC="../gimages/blank.gif" class="symbols">
	<p class="translationLine">Football is more interesting then Sumo</p></div>
	
	<! Question 4>
	<div class="questionLineEven"><b>4. </b>日本語
	<SELECT name="answer" size=1 onChange="checkAnswer('1',this.value,3)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>と</OPTION>
	<OPTION value='2'>か</OPTION>
	<OPTION value='3'>や</OPTION>
	<OPTION value='4'>も</OPTION>
	</SELECT>フランス語をべんきょうしています。
	<IMG SRC="../gimages/blank.gif" class="symbols">
	<p class="translationLine">I am studying Japanese and French</p></div>
	
	<! Question ５>
	<div class="questionLineOdd"><b>5. </b>ケーキだけ
	<INPUT name="answer" type="text" onChange="checkAnswer('買いました',this.value,4)" style="width: 100px;">
	</INPUT>。
	<IMG SRC="../gimages/blank.gif" class="symbols">
	<p class="translationLine">I only bought cake</p></div>
	
	<! Question 6>
	<div class="questionLineEven"><b>6. </b>これは日本語です
	<SELECT name="answer" size=1 onChange="checkAnswer('2',this.value,5)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>か</OPTION>
	<OPTION value='2'>ね</OPTION>
	<OPTION value='3'>よ</OPTION>
	</SELECT>。
	<IMG SRC="../gimages/blank.gif" class="symbols">
	<p class="translationLine">This is Japanese, right?</p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>「たんぽぽ」
	<SELECT name="answer" size=1 onChange="checkAnswer('2',this.value,6)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>(none)</OPTION>
	<OPTION value='2'>と</OPTION>
	<OPTION value='3'>が</OPTION>
	</SELECT>いうえいがを見たことがありますか。
	<IMG SRC="../gimages/blank.gif" class="symbols">
	<p class="translationLine">Have you ever seen a movie called 'Tanpopo'?</p></div>
	
	<! Question 8>
	<div class="questionLineEven"><b>8. </b>わたし
	<SELECT name="answer" size=1 onChange="checkAnswer('3',this.value,7)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>は</OPTION>
	<OPTION value='2'>な</OPTION>
	<OPTION value='3'>の</OPTION>
	</SELECT>大学はテキサスのオースチンにあります。
	<IMG SRC="../gimages/blank.gif" class="symbols">
	<p class="translationLine">My college is in Austin, Texas</p></div>
	
	<! Question 9>
	<div class="questionLineOdd"><b>9. </b>ケーキ
	<SELECT name="answer" size=1 onChange="checkAnswer('3',this.value,8)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>だけ</OPTION>
	<OPTION value='2'>が</OPTION>
	<OPTION value='3'>しか</OPTION>
	</SELECT>買いませんでした。
	<IMG SRC="../gimages/blank.gif" class="symbols">
	<p class="translationLine">I bought nothing but cake</p></div>
	
	
</FORM>
<div id="score" style="margin-bottom: 15px; font-size: 20px;"></div>
<div>
<table class="optionBox"><tr>
	<td><BUTTON onClick="checkAnswers()">Check Answers</BUTTON></td>
	<td><BUTTON onClick="resetValues()">Reset Values</BUTTON></td>
</tr></table>
</div>
</div>

</body>
</html>
