<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="ja">
<html>
<head>
<title>Grammar Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
.style1 {color: #FF00FF}
-->
</style>
</head>

<!-- created by Fred Bickerstaff --> 

<script LANGUAGE="javascript" type="text/JavaScript">
		var numQuestions = 7;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=326;
			
</script>

<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>

<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>


<body class="backgroundColor">
<h2 class="titleText" align="center"> ぶんぽうクイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle"> 〜してはいけない (You must not) G6</div>
<div class="quizlistLine"><a href="../../../../gquiz.php">Return
    to Practice Quizzes list page</a></div> 
<p class="instructionLine">Answer the following question by using the form「〜てはいけません。(you must not..)」<br>
e.g.,<br>
A: 明日がっこうを休んでもいいですか。<br>
B:　いいえ、<u>休んではいけません</u>。


  <FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;A:　明日仕事を休んでもいいですか。<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B:　いいえ、（仕事を）
	<INPUT name="answer" type="text" onChange="checkAnswer('休んではいけません_やすんではいけません。',this.value,0)" style="width: 200px;">
    </INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;A:　ビールを飲んでもいいですか。<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B:　いいえ、まだ２０さいなので、（ビールを）
	<INPUT name="answer" type="text" onChange="checkAnswer('飲んではいけません_のんではいけません',this.value,1)" style="width: 200px;">
    </INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;A:　テストの時、カンニングをしてもいいですか。<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B:　いいえ、（カンニングを）
	<INPUT name="answer" type="text" onChange="checkAnswer('してはいけません',this.value,2)" style="width: 200px;">
    </INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;A:　ここでおよいでもいいですか。<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B:　いいえ、（ここで）
	<INPUT name="answer" type="text" onChange="checkAnswer('およいではいけません_泳いではいけません',this.value,3)" style="width: 200px;">
    </INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;A:　あの、ここでたばこをすってもいいですか。<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B:　いいえ、（ここでたばこを）
		<INPUT name="answer" type="text" onChange="checkAnswer('すってはいけません_吸ってはいけません',this.value,4)" style="width: 200px;">
	</SELECT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>



	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;A:　ここにすわってもいいですか。<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B:　いいえ、（ここに）
	<INPUT name="answer" type="text" onChange="checkAnswer('すわってはいけません_座ってはいけkません',this.value,5)" style="width: 200px;">
    </INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	
    	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;A:　来週、日本に行ってもいいですか。<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B:　いいえ、（日本に）
		<INPUT name="answer" type="text" onChange="checkAnswer('行ってはいけません_いってはいけません',this.value,6)" style="width: 200px;">
	</SELECT>。
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
