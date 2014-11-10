<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>

<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "Causative-Passive Verb Conjugation (short forms if available)";
quizDirections = "ひらがなで答えてください。<br><br>";
quizType = "FillInNoBank";
numQuestions = 19;
quizID=212;
init();
questionArray[0] = new questionRecord("be forced to eat:  食べる (たべる) -->", "たべさせられる", 4, ["たべさせられる", "", "", ""]);
questionArray[1] = new questionRecord("be forced to drink:  飲む (のむ) -->", "のまされる", 4, ["のまされる", "", "", ""]);
questionArray[2] = new questionRecord("be forced to do:  する -->", "させられる", 4, ["させられる", "", "", ""]);
questionArray[3] = new questionRecord("be forced to come:  来る (くる) -->", "こさせられる", 4, ["こさせられる", "", "", ""]);
questionArray[4] = new questionRecord("be forced to go:  行く (いく) -->", "いかされる", 4, ["いかされる", "", "", ""]);
questionArray[5] = new questionRecord("be forced to read:  読む (よむ) -->", "よまされる", 4, ["よまされる", "", "", ""]);
questionArray[6] = new questionRecord("be forced to write:  書く (かく) -->", "かかされる", 4, ["かかされる", "", "", ""]);
questionArray[7] = new questionRecord("be forced to make:  作る (つくる) -->", "つくらされる", 4, ["つくらされる", "", "", ""]);
questionArray[8] = new questionRecord("be forced to use:  使う (つかう) -->", "つかわされる", 4, ["つかわされる", "", "", ""]);
questionArray[9] = new questionRecord("be forced to wear:  着る (きる) -->", "きさせられる", 4, ["きさせられる", "", "", ""]);
questionArray[10] = new questionRecord("be forced to swim: 泳ぐ（およぐ） -->", "およがされる", 4, ["およがされる", "", "", ""]);
questionArray[11] = new questionRecord("be forced to sleep: 寝る（ねる） -->", "ねさせられる", 4, ["ねさせられる", "", "", ""]);
questionArray[12] = new questionRecord("be forced to meet: 会う（あう） -->", "あわされる", 4, ["あわされる", "", "", ""]);
questionArray[13] = new questionRecord("be forced to die: 死ぬ（しぬ） -->", "しなされる", 4, ["しなされる", "", "", ""]);
questionArray[14] = new questionRecord("be forced to return home: 帰る（かえる） -->", "かえらされる", 4, ["かえらされる", "", "", ""]);
questionArray[15] = new questionRecord("be forced to change: 変える（かえる）-->", "かえさせられる", 4, ["かえさせられる", "", "", ""]);
questionArray[16] = new questionRecord("be forced to stand: 立つ（たつ） -->", "たたされる", 4, ["たたされる", "", "", ""]);
questionArray[17] = new questionRecord("be forced to buy: 買う（かう） -->", "かわされる", 4, ["かわされるされる", "", "", ""]);
questionArray[18] = new questionRecord("be forced to see: 見る（みる） -->", "みさせられる", 4, ["みさせられる", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>