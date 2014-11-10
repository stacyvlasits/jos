<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>

<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "たら form - Conjugation";
quizDirections = "ひらがなで答えてください。";
quizType = "FillInNoBank";
numQuestions = 19;
quizID=239;
init();
questionArray[0] = new questionRecord("to eat:  食べる (たべる) -->", "たべたら", 4, ["たべたら", "", "", ""]);
questionArray[1] = new questionRecord("to drink:  飲む (のむ) -->", "のんだら", 4, ["のんだら", "", "", ""]);
questionArray[2] = new questionRecord("to do:  する -->", "したら", 4, ["したら", "", "", ""]);
questionArray[3] = new questionRecord("to come:  来る (くる) -->", "きたら", 4, ["きたら", "", "", ""]);
questionArray[4] = new questionRecord("to go:  行く (いく) -->", "いったら", 4, ["いったら", "", "", ""]);
questionArray[5] = new questionRecord("to read:  読む (よむ) -->", "よんだら", 4, ["よんだら", "", "", ""]);
questionArray[6] = new questionRecord("to write:  書く (かく) -->", "かいたら", 4, ["かいたら", "", "", ""]);
questionArray[7] = new questionRecord("to make:  作る (作る) -->", "つくったら", 4, ["つくったら", "", "", ""]);
questionArray[8] = new questionRecord("to use:  使う (つかう) -->", "つかったら", 4, ["つかったら", "", "", ""]);
questionArray[9] = new questionRecord("to wear:  着る (きる) -->", "きたら", 4, ["きたら", "", "", ""]);
questionArray[10] = new questionRecord("to swim: 泳ぐ（およぐ） -->", "およいだら", 4, ["およいだら", "", "", ""]);
questionArray[11] = new questionRecord("to sleep: 寝る（ねる） -->", "ねたら", 4, ["ねたら", "", "", ""]);
questionArray[12] = new questionRecord("to meet: 会う（あう） -->", "あったら", 4, ["あったら", "", "", ""]);
questionArray[13] = new questionRecord("to die: 死ぬ（しぬ） -->", "しんだら", 4, ["しんだら", "", "", ""]);
questionArray[14] = new questionRecord("to return home: 帰る（かえる） -->", "かえったら", 4, ["かえったら", "", "", ""]);
questionArray[15] = new questionRecord("to change: 変える（かえる）-->", "かえたら", 4, ["かえたら", "", "", ""]);
questionArray[16] = new questionRecord("to stand: 立つ（たつ） -->", "たったら", 4, ["たったら", "", "", ""]);
questionArray[17] = new questionRecord("to buy: 買う（かう） -->", "かったら", 4, ["かったら", "", "", ""]);
questionArray[18] = new questionRecord("to msee: 見る（みる） -->", "みたら", 4, ["みたら", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>