<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>

<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "Plain Command (imperative) forms  --  conjugation";
quizDirections = "ひらがなで答えてください。";
quizType = "FillInNoBank";
numQuestions = 19;
quizID=215;
init();
questionArray[0] = new questionRecord("Eat!:  食べる (たべる) -->", "たべろ", 4, ["たべろ", "", "", ""]);
questionArray[1] = new questionRecord("Drink!:  飲む (のむ) -->", "のめ", 4, ["のめ", "", "", ""]);
questionArray[2] = new questionRecord("Do!:  する -->", "しろ", 4, ["しろ", "", "", ""]);
questionArray[3] = new questionRecord("Come!:  来る (くる) -->", "こい", 4, ["こい", "", "", ""]);
questionArray[4] = new questionRecord("Go!:  行く (いく) -->", "いけ", 4, ["いけ", "", "", ""]);
questionArray[5] = new questionRecord("Read!:  読む (よむ) -->", "よめ", 4, ["よめ", "", "", ""]);
questionArray[6] = new questionRecord("Write!:  書く (かく) -->", "かけ", 4, ["かけ", "", "", ""]);
questionArray[7] = new questionRecord("Make!:  作る (つくる) -->", "つくれ", 4, ["つくれ", "", "", ""]);
questionArray[8] = new questionRecord("Use!:  使う (つかう) -->", "つかえ", 4, ["つかえ", "", "", ""]);
questionArray[9] = new questionRecord("Wear!:  着る (きる) -->", "きろ", 4, ["きろ", "", "", ""]);
questionArray[10] = new questionRecord("Swim!: 泳ぐ（およぐ） -->", "およげ", 4, ["およげ", "", "", ""]);
questionArray[11] = new questionRecord("Sleep!: 寝る（ねる） -->", "ねろ", 4, ["ねろ", "", "", ""]);
questionArray[12] = new questionRecord("Meet!: 会う（あう） -->", "あえ", 4, ["あえ", "", "", ""]);
questionArray[13] = new questionRecord("Die!: 死ぬ（しぬ） -->", "しね", 4, ["しね", "", "", ""]);
questionArray[14] = new questionRecord("Return home!: 帰る（かえる） -->", "かえれ", 4, ["かえれ", "", "", ""]);
questionArray[15] = new questionRecord("Change!: 変える（かえる）-->", "かえろ", 4, ["かえろ", "", "", ""]);
questionArray[16] = new questionRecord("Stand!: 立つ（たつ） -->", "たて", 4, ["たて", "", "", ""]);
questionArray[17] = new questionRecord("Buy!: 買う（かう） -->", "かえ", 4, ["かえ", "", "", ""]);
questionArray[18] = new questionRecord("See!: 見る（みる） -->", "みろ", 4, ["みろ", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>