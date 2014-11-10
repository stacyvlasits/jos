<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>

<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "使役動詞 【しえきどうし】 - Causative Verb Short form Conjugation ";
quizDirections = "ひらがなで答えてください。<br><br>";
quizType = "FillInNoBank";
numQuestions = 19;
quizID=210;
init();
questionArray[0] = new questionRecord("to make/let someone eat:  食べる (たべる) -->", "たべさす", 4, ["たべさす", "", "", ""]);
questionArray[1] = new questionRecord("to make/let someone drink:  飲む (のむ) -->", "のます", 4, ["のます", "", "", ""]);
questionArray[2] = new questionRecord("to be done:  する -->", "させる", 4, ["させる", "", "", ""]);
questionArray[3] = new questionRecord("to make/let someone come:  来る (くる) -->", "こさせる", 4, ["こさせる", "", "", ""]);
questionArray[4] = new questionRecord("to make/let someone go:  行く (いく) -->", "いかす", 4, ["いかす", "", "", ""]);
questionArray[5] = new questionRecord("to make/let someone read:  読む (よむ) -->", "よます", 4, ["よます", "", "", ""]);
questionArray[6] = new questionRecord("to make/let someone write:  書く (かく) -->", "かかす", 4, ["かかす", "", "", ""]);
questionArray[7] = new questionRecord("to make/let someone make:  作る (つくる) -->", "つくらす", 4, ["つくらす", "", "", ""]);
questionArray[8] = new questionRecord("to make/let someone use:  使う (つかう) -->", "つかわす", 4, ["つかわす", "", "", ""]);
questionArray[9] = new questionRecord("to make/let someone wear:  着る (きる) -->", "きさす", 4, ["きさす", "", "", ""]);
questionArray[10] = new questionRecord("to make/let someone swim: 泳ぐ（およぐ） -->", "およがす", 4, ["およがす", "", "", ""]);
questionArray[11] = new questionRecord("to make/let someone sleep: 寝る（ねる） -->", "ねさす", 4, ["ねさす", "", "", ""]);
questionArray[12] = new questionRecord("to make/let someone meet: 会う（あう） -->", "あわす", 4, ["あわす", "", "", ""]);
questionArray[13] = new questionRecord("to make/let someone die: 死ぬ（しぬ） -->", "しなす", 4, ["しなす", "", "", ""]);
questionArray[14] = new questionRecord("to make/let someone return home: 帰る（かえる） -->", "かえらす", 4, ["かえらす", "", "", ""]);
questionArray[15] = new questionRecord("to make/let someone change: 変える（かえる）-->", "かえさす", 4, ["かえさす", "", "", ""]);
questionArray[16] = new questionRecord("to make/let someone stand: 立つ（たつ） -->", "たたす", 4, ["たたす", "", "", ""]);
questionArray[17] = new questionRecord("to make/let someone buy: 買う（かう） -->", "かわす", 4, ["かわす", "", "", ""]);
questionArray[18] = new questionRecord("to make/let someone see: 見る（みる） -->", "みさす", 4, ["みさす", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>