<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="ja">
<html>
<head>
<title>Counter Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<!-- created by Fred Bickerstaff --> 

<script LANGUAGE="javascript" type="text/JavaScript">
		var numQuestions = 9;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=435;
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../js/quiz_top_co.js"></SCRIPT>

<LINK href="../../css/particleQuiz.css" type=text/css rel=stylesheet>
</head>
<body class="backgroundColor">


<h2 class="titleText" align="center"> カウンタークイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">



<div class="innerTitle">Counters: sentences</div>
<div class="quizlistLine"><a href="../../counters.php">Return to Counter page</a></div>   
<p class="instructionLine">Study the example sentences, then write sentences equivalent to the English sentences given. Write all of them in Hiraganai (and Katakana where appropriate). <FONT COLOR="#FF0000">Please end the sentences with「。」 (Japanese period).</FONT><br><br>
(e.g.,)<br>
Threre are 3 cats.:
 &nbsp;&nbsp;<u>　ねこが<span class="style2">さんびき</span>います。　</u><br><br>
 
 Threre are two apples here.:
 &nbsp;&nbsp;<u>　<span class="style1">ここに</span>りんごが<span class="style2">ふたつ</span>あります。　</u><br><br>
 
I ate one apple.: &nbsp;&nbsp;<u>　りんごを<span class="style2">ひとつ</span>たべました。　</u><br><br>
 

I bought one pen and one book. &nbsp;&nbsp;<u>　わたしはペンを<span class="style2">いっぽん</span>とほんを<span class="style2">いっさつ</span>かいました。　　</u>


</p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;There is one student.  &nbsp;&nbsp;&nbsp;&nbsp; 
	  <INPUT name="answer" type="text" onChange="checkAnswer('がくせいがひとりいます。_ひとりのがくせいがいます。',this.value,0)" style="width: 200px;">
	</INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;There are three students here.&nbsp;&nbsp;&nbsp;&nbsp;
	  <INPUT name="answer" type="text" onChange="checkAnswer('ここにがくせいがさんにんいます。_がくせいがここにさんにんいます。_ここにさんにんのがくせいがいます。_さんにんのがくせいがここにいます。',this.value,1)" style="width: 250px;">
    </INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
    
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;I bought 5 erasers.:&nbsp;&nbsp;わたしは 
	  <INPUT name="answer" type="text" onChange="checkAnswer('けしゴムをいつつかいました。_けしゴムをごこかいました。_いつつのけしゴムをかいました。_ごこのけしゴムをかいました。',this.value,2)" style="width: 250px;">
	</INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p>
	</div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;I bought 2 notebooks and 3 ballpoint pens.:&nbsp;&nbsp;わたしは  
	  <INPUT name="answer" type="text" onChange="checkAnswer('ノートをにさつとボールペンをさんぼんかいました。_ノートをにさつとペンをさんぼんかいました。_にさつのノートとさんぼんのボールペンをかいました。_にさつのノートとさんぼんのペンをかいました。',this.value,3)" style="width: 350px;">
    </INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p>
	</div>
	
    
    <! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;There are three teachers and 20 students.  &nbsp;&nbsp;&nbsp;&nbsp;
	  <INPUT name="answer" type="text" onChange="checkAnswer('せんせいがさんにんとがくせいがにじゅうにんいます。_さんにんのせんせいとにじゅうにんのがくせいがいます。',this.value,4)" style="width: 350px;">
	</INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>



	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;There are 2 books in the box (inside of the box). &nbsp;&nbsp;&nbsp;&nbsp;はこの中に
	  <INPUT name="answer" type="text" onChange="checkAnswer('ほんがにさつあります。_にさつのほんがあります。',this.value,5)" style="width: 300px;">
    </INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;I ate two oranges.: &nbsp;&nbsp;わたしは
	  <INPUT name="answer" type="text" onChange="checkAnswer('オレンジをふたつたべました。_オレンジをにこたべました。_ふたつのオレンジをたべました。_にこのオレンジをたべました。',this.value,6)" style="width: 250px;">
	</INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 8>
	<div class="questionLineEven"><b>8. </b>&nbsp;&nbsp;I drank two cups of coffee today.: &nbsp;&nbsp;今日、わたしは
	  <INPUT name="answer" type="text" onChange="checkAnswer('コーヒーをにはいのみました。_にはいのコーヒーをのみました。',this.value,7)" style="width: 250px;">
    </INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 9>
	<div class="questionLineOdd"><b>9. </b>&nbsp;&nbsp;How many students are there?&nbsp;&nbsp;&nbsp;&nbsp;
	  <INPUT name="answer" type="text" onChange="checkAnswer('がくせいはなんにんいますか。_がくせいがなんにんいますか。_なんにんのがくせいがいますか。',this.value,8)" style="width: 300px;">
	</INPUT>
	<IMG SRC="../../grammar/gimages/blank.gif" class="symbols">
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
