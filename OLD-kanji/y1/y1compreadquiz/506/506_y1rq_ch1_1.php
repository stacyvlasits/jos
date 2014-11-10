<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="ja">
<html>
<head>
<title>Kanji Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<!-- created by Fred Bickerstaff --> 

<script LANGUAGE="javascript" type="text/JavaScript">
		var numQuestions = 22;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=99;
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>

<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>
</head>
<body class="backgroundColor">

<h2 class="titleText" align="center"> 漢字クイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">ようこそ I Chapter 1-1 Kanji compound reading quiz (日〜二) </div>
<div class="quizlistLine"><a href="../../../kanji_yookoso1.php">Return
    to Kanji page</a></div> 
<p class="instructionLine"> Type the reading of the Kanji compounds in Hiragana
  (and in Katakana where appropriate). </p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;日本&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('にほん',this.value,0)" style="width: 150px;">
	</INPUT>(or にっぽん) Japan
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;日よう日&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('にちようび',this.value,1)" style="width: 150px;">
    </INPUT>Sunday
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;学生&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('がくせい',this.value,2)" style="width: 150px;">
	</INPUT>student
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;学ねん&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('がくねん',this.value,3)" style="width: 150px;">
    </INPUT>academic year
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;学こう&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('がっこう',this.value,4)" style="width: 150px;">
	</INPUT>school
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;(〜)生まれ&nbsp;&nbsp;
	  <INPUT name="answer" type="text" onChange="checkAnswer('うまれ',this.value,5)" style="width: 150px;">
    </INPUT>one who was born in...
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;名し&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('めいし',this.value,6)" style="width: 150px;">
	</INPUT>name card
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 8>
	<div class="questionLineEven"><b>8. </b>&nbsp;&nbsp;名まえ&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('なまえ',this.value,7)" style="width: 150px;">
    </INPUT>name
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 9>
	<div class="questionLineOdd"><b>9. </b>&nbsp;&nbsp;学年&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('がくねん',this.value,8)" style="width: 150px;">
	</INPUT>academic year
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 10>
	<div class="questionLineEven"><b>10. </b>&nbsp;&nbsp;何ご&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('なにご',this.value,9)" style="width: 150px;">
    </INPUT>what language
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 11>
	<div class="questionLineOdd"><b>11. </b>&nbsp;&nbsp;何ですか&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('なんですか',this.value,10)" style="width: 150px;">
	</INPUT>what is it
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 12>
	<div class="questionLineEven"><b>12. </b>&nbsp;&nbsp;何年生&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('なんねんせい',this.value,11)" style="width: 150px;">
    </INPUT>what year student
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 13>
	<div class="questionLineOdd"><b>13. </b>&nbsp;&nbsp;月よう日&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('げつようび',this.value,12)" style="width: 150px;">
	</INPUT>Monday
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 14>
	<div class="questionLineEven"><b>14. </b>&nbsp;&nbsp;何月生まれ&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('なんがつうまれ',this.value,13)" style="width: 150px;">
    </INPUT>What month were you born in?
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 15>
	<div class="questionLineOdd"><b>15. </b>&nbsp;&nbsp;一月&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('いちがつ',this.value,14)" style="width: 150px;">
	</INPUT>January
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 16>
	<div class="questionLineEven"><b>16. </b>&nbsp;&nbsp;日本人&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('にほんじん',this.value,15)" style="width: 150px;">
    </INPUT>a Japanese person
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 17>
	<div class="questionLineOdd"><b>17. </b>&nbsp;&nbsp;アメリカ人&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('アメリカじん',this.value,16)" style="width: 150px;">
	</INPUT>an American
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>

	<! Question 18>
	<div class="questionLineEven"><b>18. </b>&nbsp;&nbsp;この人&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('このひと',this.value,17)" style="width: 150px;">
    </INPUT>this person
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 19>
	<div class="questionLineOdd"><b>19. </b>&nbsp;&nbsp;一年生&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('いちねんせい',this.value,18)" style="width: 150px;">
	</INPUT>1st year student
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 20>
	<div class="questionLineEven"><b>20. </b>&nbsp;&nbsp;一さい&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('いっさい',this.value,19)" style="width: 150px;">
    </INPUT>one year old
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 21>
	<div class="questionLineOdd"><b>21. </b>&nbsp;&nbsp;二月&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('にがつ',this.value,20)" style="width: 150px;">
	</INPUT>February
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 22>
	<div class="questionLineEven"><b>22. </b>&nbsp;&nbsp;二年生&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('にねんせい',this.value,21)" style="width: 150px;">
    </INPUT>2nd year student
	<IMG SRC="../../../../grammar/gimages/blank.gif" class="symbols">
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
