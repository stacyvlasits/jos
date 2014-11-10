<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="ja">
<html>
<head>
<title>Katakana Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<!-- created by Fred Bickerstaff --> 

<script LANGUAGE="javascript" type="text/JavaScript">
		var numQuestions = 25;
		var numAnswered = 0;
		var numCorrect = 0;
		var q_id = 7777;
		
</script>


<SCRIPT LANGUAGE="JavaScript" SRC="../../../js/quiz_top_kana.js"></SCRIPT>

<!-- START OF AUDIO EMBED ============================ -->
<script language="javascript" type="text/javascript">
function playSound(soundfile) {
	document.getElementById("player").innerHTML="<embed src=\""+soundfile+"\" hidden=\"true\" autostart=\"true\" loop=\"false\" />";
}
</script>
<!-- END OF AUDIO EMBED ============================== -->


<LINK href="../../../css/particleQuiz.css" type=text/css rel=stylesheet>


<body class="backgroundColor">
<h2 class="titleText" align="center"> カタカナクイズ </h2>

<div class="backgroundLayer" align="center" id="quiz">


<div class="innerTitle">どのカタカナ？ ア〜ノ</div>
<div class="quizlistLine"><a href="../../katakana.php">Return
    to Katakana page</a></div> 
<p class="instructionLine"><span class="innerTitle">Click and listen: choose the correct Katakana character.</span></p>
<FORM name="quiz">





	<! Question 1>
	<div class="questionLineOdd"><b>1. </b>&nbsp;&nbsp;
	<a onclick="playSound('../../kana_audio/ke.mp3');" style="background:url('../../kana_audio/audio.gif') center center no-repeat; margin:0 20px; width:121px; height:25px; display:inline-block;"></a>
    <input style="margin-left:15px;" type="radio" name="q1" onChange="checkAnswer('3',this.value,0)" value="1"> ク
    <input style="margin-left:15px;" type="radio" name="q1" onChange="checkAnswer('3',this.value,0)" value="2"> カ
    <input style="margin-left:15px;" type="radio" name="q1" onChange="checkAnswer('3',this.value,0)" value="3"> ケ
    <input style="margin-left:15px;" type="radio" name="q1" onChange="checkAnswer('3',this.value,0)" value="4"> セ
    <input style="margin-left:15px;" type="radio" name="q1" onChange="checkAnswer('3',this.value,0)" value="5"> ウ
	<div class="symbols">
	<IMG SRC="../../../grammar/gimages/blank.gif">
    </div>
	<p class="translationLine"></p></div>

	<! Question 2>
	<div class="questionLineEven"><b>2. </b>&nbsp;&nbsp;   
    <a onclick="playSound('../../kana_audio/na.mp3');" style="background:url('../../kana_audio/audio.gif') center center no-repeat; margin:0 20px; width:121px; height:25px; display:inline-block;"></a>
	 <input style="margin-left:15px;" type="radio" name="q2" onChange="checkAnswer('1',this.value,1)" value="1"> ナ
    <input style="margin-left:15px;" type="radio" name="q2" onChange="checkAnswer('1',this.value,1)" value="2"> ヌ
    <input style="margin-left:15px;" type="radio" name="q2" onChange="checkAnswer('1',this.value,1)" value="3"> イ
    <input style="margin-left:15px;" type="radio" name="q2" onChange="checkAnswer('1',this.value,1)" value="4"> ス
    <input style="margin-left:15px;" type="radio" name="q2" onChange="checkAnswer('1',this.value,1)" value="5"> ノ
	<div class="symbols">
	<IMG SRC="../../../grammar/gimages/blank.gif">
    </div>
	<p class="translationLine"></p></div>
	
	<! Question 3>
	<div class="questionLineOdd"><b>3. </b>&nbsp;&nbsp;a. 木　　b. ホ　　c. な　　d. ふ　　e. 本&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('2',this.value,2)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 4>
	<div class="questionLineEven"><b>4. </b>&nbsp;&nbsp;a. ニ　　b. こ　　c. に　　d. 三　　e. い&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('1',this.value,3)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question ５>
	<div class="questionLineOdd"><b>5. </b>&nbsp;&nbsp;a. し　　b. モ　　c. せ　　d. ま　　e. も&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('2',this.value,4)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 6>
	<div class="questionLineEven"><b>6. </b>&nbsp;&nbsp;a. 又　　b. う　　c. マ　　d. か&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('3',this.value,5)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 7>
	<div class="questionLineOdd"><b>7. </b>&nbsp;&nbsp;a. セ　　b. せ　　c. さ　　d. 世　　e. 他&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('1',this.value,6)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 8>
	<div class="questionLineEven"><b>8. </b>&nbsp;&nbsp;a. イ　　b. 人　　c. し　　d. い　　e. 入&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('1',this.value,7)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 9>
	<div class="questionLineOdd"><b>9. </b>&nbsp;&nbsp;a. く　　b. ク　　c. 久　　d. 多　　e. ち&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('2',this.value,8)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 10>
	<div class="questionLineEven"><b>10. </b>&nbsp;&nbsp;a. つ　　b. う　　c. ラ　　d. ろ　　e. ら&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('3',this.value,9)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 11>
	<div class="questionLineOdd"><b>11. </b>&nbsp;&nbsp;a. 千　　b. ち　　c. 于　　d. チ　　e. 十&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('4',this.value,10)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<div class="questionLineEven"><b>12. </b>&nbsp;&nbsp;a. キ　　b. き　　c. さ　　d. 木　　e. ち&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('1',this.value,11)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 13>
	<div class="questionLineOdd"><b>13. </b>&nbsp;&nbsp;a. ケ　　b. け　　c. 久　　d. せ　　e. か&nbsp;&nbsp;&nbsp;&nbsp;
	  <SELECT name="answer" size=1 onChange="checkAnswer('1',this.value,12)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	
	<! Question 14>
	<div class="questionLineEven"><b>14. </b>&nbsp;&nbsp;a. ソ　　b. け　　c. こ　　d. 八　　e. の&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('1',this.value,13)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	
	<! Question 15>
	<div class="questionLineOdd"><b>15. </b>&nbsp;&nbsp;a. に　　b. こ　　c. 匸　　d. ヨ　　e. よ&nbsp;&nbsp;&nbsp;&nbsp;   
	<SELECT name="answer" size=1 onChange="checkAnswer('4',this.value,14)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	
	<! Question 16>
	<div class="questionLineEven"><b>16. </b>&nbsp;&nbsp;a. 三　　b. ミ　　c. こ　　d. き　　e. み&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('2',this.value,15)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 17>
	<div class="questionLineOdd"><b>17. </b>&nbsp;&nbsp;a. や　　b. せ　　c. ヤ　　d. 八　　e. 又&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('3',this.value,16)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 18>
	<div class="questionLineEven"><b>18. </b>&nbsp;&nbsp;a. か　　b. が　　c. ガ　　d. 刀　　e. 入&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('3',this.value,17)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	
	<! Question 19>
	<div class="questionLineOdd"><b>19. </b>&nbsp;&nbsp;a. ン　　b. ん　　c. し　　d. に　　e. こ&nbsp;&nbsp;&nbsp;&nbsp;
	  <SELECT name="answer" size=1 onChange="checkAnswer('1',this.value,18)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	
	<! Question 20>
	<div class="questionLineEven"><b>20. </b>&nbsp;&nbsp;a. 才　　b. お　　c. オ　　d. 大　　e. を&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('3',this.value,19)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	
	<! Question 21>
	<div class="questionLineOdd"><b>21. </b>&nbsp;&nbsp;a. フ　　b. う　　c. つ　　d. 宀　　e. ふ&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('1',this.value,20)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	
	<! Question 22>
	<div class="questionLineEven"><b>22. </b>&nbsp;&nbsp;a. ん　　b. 七　　c. 九　　d. レ　　e. し&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('4',this.value,21)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 23>
	<div class="questionLineOdd"><b>23. </b>&nbsp;&nbsp;a. 八　　b. い　　c. 人　　d. は　　e. ハ&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('5',this.value,22)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	<! Question 24>
	<div class="questionLineEven"><b>24. </b>&nbsp;&nbsp;a. こ　　b. い　　c. 匸　　d. コ　　e. 冂&nbsp;&nbsp;&nbsp;&nbsp;
	<SELECT name="answer" size=1 onChange="checkAnswer('4',this.value,23)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	
	<! Question 25>
	<div class="questionLineOdd"><b>25. </b>&nbsp;&nbsp;a. う　　b. え　　c. ウ　　d. 宇　　e. ら&nbsp;&nbsp;&nbsp;&nbsp;
	  <SELECT name="answer" size=1 onChange="checkAnswer('3',this.value,24)">
	<OPTION value='0'> -- </OPTION>
	<OPTION value='1'>a</OPTION>
	<OPTION value='2'>b</OPTION>
	<OPTION value='3'>c</OPTION>
	<OPTION value='4'>d</OPTION>
	<OPTION value='5'>e</OPTION>
	</SELECT>
	<IMG SRC="../../../grammar/gimages/blank.gif" class="symbols">
	<p class="translationLine"></p></div>
	
	
</FORM>
<div id="player"></div>
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
