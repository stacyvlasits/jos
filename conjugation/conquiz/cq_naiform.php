<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>

<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "ない form - plain negative form Conjugation";
quizDirections = "ひらがなで答えてください。";
quizType = "FillInNoBank";
numQuestions = 19;
quizID=225;
init();
questionArray[0] = new questionRecord("to eat:  食べる (たべる) -->", "たべない", 4, ["たべない", "", "", ""]);
questionArray[1] = new questionRecord("to drink:  飲む (のむ) -->", "のまない", 4, ["のまない", "", "", ""]);
questionArray[2] = new questionRecord("to do:  する -->", "しない", 4, ["しない", "", "", ""]);
questionArray[3] = new questionRecord("to come:  来る (くる) -->", "こない", 4, ["こない", "", "", ""]);
questionArray[4] = new questionRecord("to go:  行く (いく) -->", "いかない", 4, ["いかない", "", "", ""]);
questionArray[5] = new questionRecord("to read:  読む (よむ) -->", "よまない", 4, ["よまない", "", "", ""]);
questionArray[6] = new questionRecord("to write:  書く (かく) -->", "かかない", 4, ["かかない", "", "", ""]);
questionArray[7] = new questionRecord("to make:  作る (つくる) -->", "つくらない", 4, ["つくらない", "", "", ""]);
questionArray[8] = new questionRecord("to use:  使う (つかう) -->", "つかわない", 4, ["つかわない", "", "", ""]);
questionArray[9] = new questionRecord("to wear:  着る (きる) -->", "きない", 4, ["きない", "", "", ""]);
questionArray[10] = new questionRecord("to swim: 泳ぐ（およぐ） -->", "およがない", 4, ["およがない", "", "", ""]);
questionArray[11] = new questionRecord("to sleep: 寝る（ねる） -->", "ねない", 4, ["ねない", "", "", ""]);
questionArray[12] = new questionRecord("to meet: 会う（あう） -->", "あわない", 4, ["あわない", "", "", ""]);
questionArray[13] = new questionRecord("to die: 死ぬ（しぬ） -->", "しなない", 4, ["しなない", "", "", ""]);
questionArray[14] = new questionRecord("to return home: 帰る（かえる） -->", "かえらない", 4, ["かえらない", "", "", ""]);
questionArray[15] = new questionRecord("to change: 変える（かえる）-->", "かえない", 4, ["かえない", "", "", ""]);
questionArray[16] = new questionRecord("to stand: 立つ（たつ） -->", "たたない", 4, ["たたない", "", "", ""]);
questionArray[17] = new questionRecord("to buy: 買う（かう） -->", "かわない", 4, ["かわない", "", "", ""]);
questionArray[18] = new questionRecord("to see: 見る（みる） -->", "みない", 4, ["みない", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>