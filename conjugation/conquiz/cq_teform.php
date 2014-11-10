<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>

<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "て form - Conjugation";
quizDirections = "ひらがなで答えてください。";
quizType = "FillInNoBank";
numQuestions = 19;
quizID=240;
init();
questionArray[0] = new questionRecord("to eat:  食べる (たべる) -->", "たべて", 4, ["たべて", "", "", ""]);
questionArray[1] = new questionRecord("to drink:  飲む (のむ) -->", "のんで", 4, ["のんで", "", "", ""]);
questionArray[2] = new questionRecord("to do:  する -->", "して", 4, ["して", "", "", ""]);
questionArray[3] = new questionRecord("to come:  来る (くる) -->", "きて", 4, ["きて", "", "", ""]);
questionArray[4] = new questionRecord("to go:  行く (いく) -->", "いって", 4, ["いって", "", "", ""]);
questionArray[5] = new questionRecord("to read:  読む (よむ) -->", "よんで", 4, ["よんで", "", "", ""]);
questionArray[6] = new questionRecord("to write:  書く (かく) -->", "かいて", 4, ["かいて", "", "", ""]);
questionArray[7] = new questionRecord("to make:  作る (つくる) -->", "つくって", 4, ["つくって", "", "", ""]);
questionArray[8] = new questionRecord("to use:  使う (つかう) -->", "つかって", 4, ["つかって", "", "", ""]);
questionArray[9] = new questionRecord("to wear:  着る (きる) -->", "きて", 4, ["きて", "", "", ""]);
questionArray[10] = new questionRecord("to swim: 泳ぐ（およぐ） -->", "およいで", 4, ["およいで", "", "", ""]);
questionArray[11] = new questionRecord("to sleep: 寝る（ねる） -->", "ねて", 4, ["ねて", "", "", ""]);
questionArray[12] = new questionRecord("to meet: 会う（あう） -->", "あって", 4, ["あって", "", "", ""]);
questionArray[13] = new questionRecord("to die: 死ぬ（しぬ） -->", "しんで", 4, ["しんで", "", "", ""]);
questionArray[14] = new questionRecord("to return home: 帰る（かえる） -->", "かえって", 4, ["かえって", "", "", ""]);
questionArray[15] = new questionRecord("to change: 変える（かえる）-->", "かえて", 4, ["かえて", "", "", ""]);
questionArray[16] = new questionRecord("to stand: 立つ（たつ） -->", "たって", 4, ["たって", "", "", ""]);
questionArray[17] = new questionRecord("to buy: 買う（かう） -->", "かって", 4, ["かって", "", "", ""]);
questionArray[18] = new questionRecord("to see: 見る（みる） -->", "みて", 4, ["みて", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>