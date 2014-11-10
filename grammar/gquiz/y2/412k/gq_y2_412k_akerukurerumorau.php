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
		var numQuestions = 6;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id=777;
	
				
</script>

<SCRIPT LANGUAGE="JavaScript" SRC="../../../../js/quiz_top.js"></SCRIPT>

<LINK href="../../../../css/particleQuiz.css" type=text/css rel=stylesheet>


<body class="backgroundColor">
<h2 class="titleText" align="center"> ぶんぽうクイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">Giving and Reviecing Verbs</div>
<div class="quizlistLine"><a href="../../../../gquiz.php">Return
    to Practice Quizzes list page</a></div>
<p align="left" height="100px" class="instructionLine">
*Insert one of the giving/receiving verbs (あげる、くれる、もらう）to express the situation given.<br>
*Answer in <strong>polite endings</strong> (〜ます、〜ました) and <strong>in Hiragana</strong>.
<br>*Be careful with the tense: see the examples below.<br>
*If the sentence structure given is not correctly expressing the situation, please type 「だめ」.<br><br>
e.g.,<br>
<span style="background:url('../../../gimages/gi_a_ageru_b.jpg') center center no-repeat; width:150px; height:75px; border:1px solid #444; margin:0 20px; display:inline-block;"></span>(プレゼントはまだAさんがもっています）AさんはBさんにプレゼントを<u>あげます</u>。<br>
<span style="background:url('../../../gimages/gi_me_ageta.jpg') center center no-repeat; width:150px; height:75px; border:1px solid #444; margin:0 20px; display:inline-block;"></span>(プレゼントはもうBさんがもっています）私はBさんにプレゼントを<u>あげました</u>。<br><br>
 
</p>

  <FORM name="quiz">


	<! Question 1>
    <div class="questionLineOdd"><b>1. </b>
	<div style="background:url('../../../gimages/gi_a_ageru_c.jpg') center center no-repeat; width:150px; height:75px; border:1px solid #444; margin:0 20px; display:inline-block;"></div> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AさんがCさんにプレゼントを
    <INPUT name="answer" type="text" onChange="checkAnswer('あげます',this.value,0)" style="width: 150px;">
    </INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	 </div>
    
	  <! Question 2>
    <div class="questionLineOdd">
      <p><b></b>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;毎年、たんじょうびにCさんはAさんにプレゼントを
      <INPUT name="answer" type="text" onChange="checkAnswer('もらいます',this.value,1)" style="width: 150px;">
        </INPUT>。
        <IMG SRC="../../../gimages/blank.gif" class="symbols">      </p>
<p class="translationLine">
</p></div>
	
	
	
	
	<! Question 3>
	<div class="questionLineEven"><b>2.</b>
	<div style="background:url('../../../gimages/gi_c_kureta_me.jpg') center center no-repeat; width:150px; height:75px; border:1px solid #444; margin:0 20px; display:inline-block;"></div> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cさんは私に花を
    <INPUT name="answer" type="text" onChange="checkAnswer('くれました',this.value,2)" style="width: 150px;">
    </INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	</div>


	<! Question 4>
	<div class="questionLineEven"><b></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;私はCさんに花を
	<INPUT name="answer" type="text" onChange="checkAnswer('もらいました',this.value,3)" style="width: 150px;">
	</SELECT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
    
    
    
    
	<! Question 5>
	<div class="questionLineOdd"><b>3. </b>
	<div style="background:url('../../../gimages/gi_me_ageta_a.jpg') center center no-repeat; width:150px; height:75px; border:1px solid #444; margin:0 20px; display:inline-block;"></div> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;私はAさんにねこを
    <INPUT name="answer" type="text" onChange="checkAnswer('あげました',this.value,4)" style="width: 150px;">
    </INPUT>。
	<IMG SRC="../../../gimages/blank.gif" class="symbols">
	</div>
    

	<! Question 6>
	<div class="questionLineOdd"><b></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aさんは私にねこを
	<INPUT name="answer" type="text" onChange="checkAnswer('だめ_ダメ',this.value,5)" style="width: 150px;">
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
