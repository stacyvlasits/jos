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
.style2 {color: #FF0000}
-->


</style>
</head>

<!-- created by Fred Bickerstaff --> 

<script LANGUAGE="javascript" type="text/JavaScript">
		var numQuestions = 7;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=417;
		
		
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>

<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>


<body class="backgroundColor">
<h2 class="titleText" align="center"> 文法 (Grammar)- 練習 </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">"〜てほしい／〜てもらいたい" vs "〜がほしい"</div>
<div class="quizlistLine"><a href="../../../../gquiz.php">Return
    to Practice Quizzes list page</a></div> 
<p align="left" height="100px" class="instructionLine">Tell your friends what you want them to do or not to do or what you want by using 〜てほしい／〜てもらいたい or 〜がほしい. Input your answers in Japanese, and use the Kanji compounds that you have learned. Use polite endings.<br>
  〜てほしい/もらいたい：I want you/him/her to do ... for me.<br>
  〜ないでほしい/もらいたい：I want you/him/her not to do ... for me.<br>
  〜てほしくない/もらいたくない：I don't want you/him/her to do ... for me.(stronger statement)<br>
〜がほしい: I want something (object)<br>
  [れい] <br>
 You like your firend to clean the room--><u> 　部屋をそうじしてほしいです　</u>。<br><br>
 You <span class="style1"> don't want </span> your friend to drink beer everyday --> 毎日<u> 　ビールを飲んで<span class="style1">ほしくない</span>です　</u>。 <br>
 <br>
 You want your friend <span class="style2">to not drink</span> beer everyday --> 毎日<u> 　ビールを<span class="style2">飲まないで</span>ほしいです　</u>。 <br>
 <br>
 You want a book--><u> 　本がほしいです　</u>。</p>

<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;You don't want your friend to smoke in the room --> 部屋で
	  <INPUT name="answer" type="text" onChange="checkAnswer('たばこをすってほしくない_たばこをすってもらいたくない_タバコをすってほしくない_タバコをすってもらいたくない',this.value,0)" style="width: 200px;">
	</INPUT>です。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>You want your friend to listen to music quietely --> 友達に音楽を
	  <INPUT name="answer" type="text" onChange="checkAnswer('静かに聞いてほしい_静かに聞いてもらいたい',this.value,1)" style="width: 200px;">
	</INPUT>です。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;You want a car for your birthday --> たん生日のプレゼントに
	  <INPUT name="answer" type="text" onChange="checkAnswer('車がほしい_自動車がほしい',this.value,2)" style="width: 200px;">
	</INPUT>です。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;You want your friend to not sing --> 友達に
	  <INPUT name="answer" type="text" onChange="checkAnswer('うたわないでほしい_うたわないでもらいたい',this.value,3)" style="width: 200px;">
    </INPUT>です。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;You want your friend to cook everyday --> 毎日友達に
	<INPUT name="answer" type="text" onChange="checkAnswer('料理してほしい_料理をしてほしい_料理してもらいたい_料理をしてもらいたい',this.value,4)" style="width: 200px;">
	</INPUT>です。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>You want your friend to not borrow your shoes -->　友達に私の
	  <INPUT name="answer" type="text" onChange="checkAnswer('くつを借りないでほしい_くつを借りないでもらいたい_くつをはかないでほしい_くつをはかないでもらいたい',this.value,5)" style="width: 200px;">
    </INPUT>です。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;You want your friend to buy a car for your birthday --> （友達に）たん生日のプレゼントに
	  <INPUT name="answer" type="text" onChange="checkAnswer('車を買ってほしい_自動車を買ってほしい_車を買ってもらいたい_自動車を買ってもらいたい',this.value,6)" style="width: 200px;">
	</INPUT>です。
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
