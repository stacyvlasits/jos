<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>

<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "Causative-Passive Verb Conjugation (regular form)";
quizDirections = "ひらがなで答えてください。";
quizType = "FillInNoBank";
numQuestions = 19;
quizID=213;
init();
questionArray[0] = new questionRecord("be forced to eat:  食べる (たべる) -->", "たべさせられる", 4, ["たべさせられる", "", "", ""]);
questionArray[1] = new questionRecord("be forced to drink:  飲む (のむ) -->", "のませられる", 4, ["のませられる", "", "", ""]);
questionArray[2] = new questionRecord("be forced to do:  する -->", "させられる", 4, ["させられる", "", "", ""]);
questionArray[3] = new questionRecord("be forced to come:  来る (くる) -->", "こさせられる", 4, ["こさせられる", "", "", ""]);
questionArray[4] = new questionRecord("be forced to go:  行く (いく) -->", "いかせられる", 4, ["いかせられる", "", "", ""]);
questionArray[5] = new questionRecord("be forced to read:  読む (よむ) -->", "よませられる", 4, ["よませられる", "", "", ""]);
questionArray[6] = new questionRecord("be forced to write:  書く (かく) -->", "かかせられる", 4, ["かかせられる", "", "", ""]);
questionArray[7] = new questionRecord("be forced to make:  作る (つくる) -->", "つくらせられる", 4, ["つくらせられる", "", "", ""]);
questionArray[8] = new questionRecord("be forced to use:  使う (つかう) -->", "つかわせられる", 4, ["つかわせられる", "", "", ""]);
questionArray[9] = new questionRecord("be forced to wear:  着る (きる) -->", "きさせられる", 4, ["きさせられる", "", "", ""]);
questionArray[10] = new questionRecord("be forced to swim: 泳ぐ（およぐ） -->", "およがせられる", 4, ["およがせられる", "", "", ""]);
questionArray[11] = new questionRecord("be forced to sleep: 寝る（ねる） -->", "ねさせられる", 4, ["ねさせられる", "", "", ""]);
questionArray[12] = new questionRecord("be forced to meet: 会う（あう） -->", "あわせられる", 4, ["あわせられる", "", "", ""]);
questionArray[13] = new questionRecord("be forced to die: 死ぬ（しぬ） -->", "しなせられる", 4, ["しなせられる", "", "", ""]);
questionArray[14] = new questionRecord("be forced to return home: 帰る（かえる） -->", "かえらせられる", 4, ["かえらせられる", "", "", ""]);
questionArray[15] = new questionRecord("be forced to change: 変える（かえる）-->", "かえさせられる", 4, ["かえさせられる", "", "", ""]);
questionArray[16] = new questionRecord("be forced to stand: 立つ（たつ） -->", "たたせられる", 4, ["たたせられる", "", "", ""]);
questionArray[17] = new questionRecord("be forced to buy: 買う（かう） -->", "かわせられる", 4, ["かわせられる", "", "", ""]);
questionArray[18] = new questionRecord("be forced to see: 見る（みる） -->", "みさせられる", 4, ["みさせられる", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>