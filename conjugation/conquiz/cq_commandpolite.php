<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>

<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "Polite Command forms -- Conjugation";
quizDirections = "ひらがなで答えてください。";
quizType = "FillInNoBank";
numQuestions = 19;
quizID=216;
init();
questionArray[0] = new questionRecord("Eat!:  食べる (たべる) -->", "たべなさい", 4, ["たべなさい", "", "", ""]);
questionArray[1] = new questionRecord("Drink!:  飲む (のむ) -->", "のみなさい", 4, ["のみなさい", "", "", ""]);
questionArray[2] = new questionRecord("Do!:  する -->", "しなさい", 4, ["しなさい", "", "", ""]);
questionArray[3] = new questionRecord("Come!:  来る (くる) -->", "きなさい", 4, ["きなさい", "", "", ""]);
questionArray[4] = new questionRecord("Go!:  行く (いく) -->", "いきなさい", 4, ["いきなさい", "", "", ""]);
questionArray[5] = new questionRecord("Read!:  読む (よむ) -->", "よみなさい", 4, ["よみなさい", "", "", ""]);
questionArray[6] = new questionRecord("Write!:  書く (かく) -->", "かきなさい", 4, ["かきなさい", "", "", ""]);
questionArray[7] = new questionRecord("Make!:  作る (つくる) -->", "つくりなさい", 4, ["つくりなさい", "", "", ""]);
questionArray[8] = new questionRecord("Use!:  使う (つかう) -->", "つかいなさい", 4, ["つかいなさい", "", "", ""]);
questionArray[9] = new questionRecord("Wear!:  着る (きる) -->", "きなさい", 4, ["きなさい", "", "", ""]);
questionArray[10] = new questionRecord("Swim!: 泳ぐ（およぐ） -->", "およぎなさい", 4, ["およぎなさい", "", "", ""]);
questionArray[11] = new questionRecord("Sleep!: 寝る（ねる） -->", "ねなさい", 4, ["ねなさい", "", "", ""]);
questionArray[12] = new questionRecord("Meet!: 会う（あう） -->", "あいなさい", 4, ["あいなさい", "", "", ""]);
questionArray[13] = new questionRecord("Die!: 死ぬ（しぬ） -->", "しになさい", 4, ["しになさい", "", "", ""]);
questionArray[14] = new questionRecord("Return home!: 帰る（かえる） -->", "かえりなさい", 4, ["かえりなさい", "", "", ""]);
questionArray[15] = new questionRecord("Change!: 変える（かえる）-->", "かえなさい", 4, ["かえなさい", "", "", ""]);
questionArray[16] = new questionRecord("Stand!: 立つ（たつ） -->", "たちなさい", 4, ["たちなさい", "", "", ""]);
questionArray[17] = new questionRecord("Buy!: 買う（かう） -->", "かいなさい", 4, ["かいなさい", "", "", ""]);
questionArray[18] = new questionRecord("See!: 見る（みる） -->", "みなさい", 4, ["みなさい", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>