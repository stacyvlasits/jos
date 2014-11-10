<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>

<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "たい form  Conjugation";
quizDirections = "ひらがなで答えてください。";
quizType = "FillInNoBank";
numQuestions = 19;
quizID=238;
init();
questionArray[0] = new questionRecord("to eat:  食べる (たべる) -->", "たべたい", 4, ["たべたい", "", "", ""]);
questionArray[1] = new questionRecord("to drink:  飲む (のむ) -->", "のみたい", 4, ["のみたい", "", "", ""]);
questionArray[2] = new questionRecord("to do:  する -->", "したい", 4, ["したい", "", "", ""]);
questionArray[3] = new questionRecord("to come:  来る (くる) -->", "きたい", 4, ["きたい", "", "", ""]);
questionArray[4] = new questionRecord("to go:  行く (いく) -->", "いきたい", 4, ["いきたい", "", "", ""]);
questionArray[5] = new questionRecord("to read:  読む (よむ) -->", "よみたい", 4, ["よみたい", "", "", ""]);
questionArray[6] = new questionRecord("to write:  書く (かく) -->", "かきたい", 4, ["かきたい", "", "", ""]);
questionArray[7] = new questionRecord("to make:  作る (作る) -->", "つくりたい", 4, ["つくりたい", "", "", ""]);
questionArray[8] = new questionRecord("to use:  使う (つかう) -->", "つかいたい", 4, ["つかいたい", "", "", ""]);
questionArray[9] = new questionRecord("to wear:  着る (きる) -->", "きたい", 4, ["きたい", "", "", ""]);
questionArray[10] = new questionRecord("to swim: 泳ぐ（およぐ） -->", "およぎたい", 4, ["およぎたい", "", "", ""]);
questionArray[11] = new questionRecord("to sleep: 寝る（ねる） -->", "ねたい", 4, ["ねたい", "", "", ""]);
questionArray[12] = new questionRecord("to meet: 会う（あう） -->", "あいたい", 4, ["あいたい", "", "", ""]);
questionArray[13] = new questionRecord("to die: 死ぬ（しぬ） -->", "しにたい", 4, ["しにたい", "", "", ""]);
questionArray[14] = new questionRecord("to return home: 帰る（かえる） -->", "かえりたい", 4, ["かえりたい", "", "", ""]);
questionArray[15] = new questionRecord("to change: 変える（かえる）-->", "かえたい", 4, ["かえたい", "", "", ""]);
questionArray[16] = new questionRecord("to stand: 立つ（たつ） -->", "たちたい", 4, ["たちたい", "", "", ""]);
questionArray[17] = new questionRecord("to buy: 買う（かう） -->", "かいたい", 4, ["かいたい", "", "", ""]);
questionArray[18] = new questionRecord("to see: 見る（みる） -->", "みたい", 4, ["みたい", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>