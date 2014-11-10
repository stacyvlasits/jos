<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>

<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "Volitional form - Conjugation";
quizDirections = "ひらがなで答えてください。";
quizType = "FillInNoBank";
numQuestions = 19;
quizID=242;
init();
questionArray[0] = new questionRecord("to eat:  食べる (たべる) -->", "たべよう", 4, ["たべよう", "", "", ""]);
questionArray[1] = new questionRecord("to drink:  飲む (のむ) -->", "のもう", 4, ["のもう", "", "", ""]);
questionArray[2] = new questionRecord("to do:  する -->", "しよう", 4, ["しよう", "", "", ""]);
questionArray[3] = new questionRecord("to come:  来る (くる) -->", "こよう", 4, ["こよう", "", "", ""]);
questionArray[4] = new questionRecord("to go:  行く (いく) -->", "いこう", 4, ["いこう", "", "", ""]);
questionArray[5] = new questionRecord("to read:  読む (よむ) -->", "よもう", 4, ["よもう", "", "", ""]);
questionArray[6] = new questionRecord("to write:  書く (かく) -->", "かこう", 4, ["かこう", "", "", ""]);
questionArray[7] = new questionRecord("to make:  作る (つくる) -->", "つくろう", 4, ["つくろう", "", "", ""]);
questionArray[8] = new questionRecord("to use:  使う (つかう) -->", "つかおう", 4, ["つかおう", "", "", ""]);
questionArray[9] = new questionRecord("to wear:  着る (きる) -->", "きよう", 4, ["きよう", "", "", ""]);
questionArray[10] = new questionRecord("to swim: 泳ぐ（およぐ） -->", "およごう", 4, ["およごう", "", "", ""]);
questionArray[11] = new questionRecord("to sleep: 寝る（ねる） -->", "ねよう", 4, ["ねよう", "", "", ""]);
questionArray[12] = new questionRecord("to meet: 会う（あう） -->", "あおう", 4, ["あおう", "", "", ""]);
questionArray[13] = new questionRecord("to die: 死ぬ（しぬ） -->", "しのう", 4, ["しのおう", "", "", ""]);
questionArray[14] = new questionRecord("to return home: 帰る（かえる） -->", "かえろう", 4, ["かえろう", "", "", ""]);
questionArray[15] = new questionRecord("to change: 変える（かえる）-->", "かえよう", 4, ["かえよう", "", "", ""]);
questionArray[16] = new questionRecord("to stand: 立つ（たつ） -->", "たとう", 4, ["たとう", "", "", ""]);
questionArray[17] = new questionRecord("to buy: 買う（かう） -->", "かおう", 4, ["かおう", "", "", ""]);
questionArray[18] = new questionRecord("to see: 見る（みる） -->", "みよう", 4, ["みよう", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>