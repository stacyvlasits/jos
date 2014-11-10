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
		var numQuestions = 14;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=80;
</script>
		
<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>


<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>
</head>
<body class="backgroundColor">
<h2 class="titleText" align="center"> 漢字クイズ </h2>
<table width="95%" border="1" cellpadding="10">
  <tr>
    <td width="23%">
 

   
      <h3><strong>Meanings in English</strong></h3>
      <p>a. extremely, very</p>
      <p>b. sickness</p>
      <p>c. generally</p>
      <p>d. face</p>
      <p>e. cold, [weather]</p>
      <p>f. question</p>
      <p>g. to part (from)</p>
      <p>&nbsp;</p>
    
      <p>&nbsp;</p>
      <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    
   
     
   </td>
    <td width="77%">
<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">An Integrated Approach to Intermediate Japanese<br>
  第二課読み物： 読む漢字 compound reading quiz</div>
<div class="quizlistLine"><a href="../../../kanji_yookoso2.php">Return
    to Kanji page</a></div> 
<p class="instructionLine">Type the reading of each Kanji compound in Hiragana in the box to the right of it, and then choose the correct English equivalent from the left column and enter the letter (lower case) in the box to the right of the word "English."</p>
<FORM name="quiz">


	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;寒い&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('さむい',this.value,0)" style="width: 150px;">
	</INPUT>&nbsp;&nbsp;&nbsp;&nbsp;<font color = #666666>English </font>
     <INPUT name="answer" type="text" onChange="checkAnswer('e_e.',this.value,1)" style="width: 20px;">
	</INPUT>    
<div class="symbols">
    <IMG SRC="../../../../grammar/gimages/blank.gif">
    <IMG SRC="../../../../grammar/gimages/blank.gif"></div>
    </div>


	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;一般的&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('いっぱんてき',this.value,2)" style="width: 150px;">
	</INPUT>&nbsp;&nbsp;&nbsp;&nbsp;<font color = #666666>English </font>
     <INPUT name="answer" type="text" onChange="checkAnswer('c_c.',this.value,3)" style="width: 20px;">
	</INPUT>    
<div class="symbols">
    <IMG SRC="../../../../grammar/gimages/blank.gif">
    <IMG SRC="../../../../grammar/gimages/blank.gif"></div>
    </div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;質問&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('しつもん',this.value,4)" style="width: 150px;">
	</INPUT>&nbsp;&nbsp;&nbsp;&nbsp;<font color = #666666>English </font>
     <INPUT name="answer" type="text" onChange="checkAnswer('f_f.',this.value,5)" style="width: 20px;">
	</INPUT>    
<div class="symbols">
    <IMG SRC="../../../../grammar/gimages/blank.gif">
    <IMG SRC="../../../../grammar/gimages/blank.gif"></div>
    </div>

	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;非常に&nbsp;&nbsp;
	  <INPUT name="answer" type="text" onChange="checkAnswer('ひじょうに',this.value,6)" style="width: 150px;">
	</INPUT>&nbsp;&nbsp;&nbsp;&nbsp;<font color = #666666>English </font>
     <INPUT name="answer" type="text" onChange="checkAnswer('a_a.',this.value,7)" style="width: 20px;">
	</INPUT>
    <div class="symbols">
    <IMG SRC="../../../../grammar/gimages/blank.gif">
    <IMG SRC="../../../../grammar/gimages/blank.gif"></div>
    </div>
	
	<! Question 5>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;別れる&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('わかれる',this.value,8)" style="width: 150px;">
	</INPUT>&nbsp;&nbsp;&nbsp;&nbsp;<font color = #666666>English </font>
     <INPUT name="answer" type="text" onChange="checkAnswer('g_g.',this.value,9)" style="width: 20px;">
	</INPUT>    
<div class="symbols">
    <IMG SRC="../../../../grammar/gimages/blank.gif">
    <IMG SRC="../../../../grammar/gimages/blank.gif"></div>
    </div>
    

	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;顔&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('かお',this.value,10)" style="width: 150px;">
	</INPUT>&nbsp;&nbsp;&nbsp;&nbsp;<font color = #666666>English </font>
     <INPUT name="answer" type="text" onChange="checkAnswer('d_d.',this.value,11)" style="width: 20px;">
	</INPUT>    
<div class="symbols">
    <IMG SRC="../../../../grammar/gimages/blank.gif">
    <IMG SRC="../../../../grammar/gimages/blank.gif"></div>
    </div>
    


	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;病気&nbsp;&nbsp;
	<INPUT name="answer" type="text" onChange="checkAnswer('びょうき',this.value,12)" style="width: 150px;">
	</INPUT>&nbsp;&nbsp;&nbsp;&nbsp;<font color = #666666>English </font>
     <INPUT name="answer" type="text" onChange="checkAnswer('b_b.',this.value,13)" style="width: 20px;">
	</INPUT>    
<div class="symbols">
    <IMG SRC="../../../../grammar/gimages/blank.gif">
    <IMG SRC="../../../../grammar/gimages/blank.gif"></div>
    </div>
    




	
	
	
	
</FORM>
<div id="score"></div>

<div>
<table class="optionBox"><tr>
	<td><BUTTON onClick="checkAnswers()">Check Answers</BUTTON></td>
	<td><BUTTON onClick="resetValues()">Reset Values</BUTTON></td>
</tr></table>
</div>
</div>
</td>
  </tr>
  
</table>
</body>
</html>
