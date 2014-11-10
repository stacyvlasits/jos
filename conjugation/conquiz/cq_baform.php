<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>

<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "ば form - Conjugation";
quizDirections = "ひらがなで答えてください。<br><br>";
quizType = "FillInNoBank";
numQuestions = 25;
quizID=209;
init();
questionArray[0] = new questionRecord("to eat:  食べる (たべる) -->", "たべれば", 4, ["たべれば", "", "", ""]);
questionArray[1] = new questionRecord("to drink:  飲む (のむ) -->", "のめば", 4, ["のめば", "", "", ""]);
questionArray[2] = new questionRecord("to do:  する -->", "すれば", 4, ["すれば", "", "", ""]);
questionArray[3] = new questionRecord("to come:  来る (くる) -->", "くれば", 4, ["くれば", "", "", ""]);
questionArray[4] = new questionRecord("to go:  行く (いく) -->", "いけば", 4, ["いけば", "", "", ""]);
questionArray[5] = new questionRecord("to read:  読む (よむ) -->", "よめば", 4, ["よめば", "", "", ""]);
questionArray[6] = new questionRecord("to write:  書く (かく) -->", "かけば", 4, ["かけば", "", "", ""]);
questionArray[7] = new questionRecord("to rain: 雨がふる（あめがふる） -->", "あめがふれば", 4, ["あめがふれば", "", "", ""]);
questionArray[8] = new questionRecord("to use:  使う (つかう) -->", "つかえば", 4, ["つかえば", "", "", ""]);
questionArray[9] = new questionRecord("to wear:  着る (きる) -->", "きれば", 4, ["きれば", "", "", ""]);
questionArray[10] = new questionRecord("to swim: 泳ぐ（およぐ） -->", "およげば", 4, ["およげば", "", "", ""]);
questionArray[11] = new questionRecord("to sleep: 寝る（ねる） -->", "ねれば", 4, ["ねれば", "", "", ""]);
questionArray[12] = new questionRecord("to meet: 会う（あう） -->", "あえば", 4, ["あえば", "", "", ""]);
questionArray[13] = new questionRecord("to die: 死ぬ（しぬ） -->", "しねば", 4, ["しねば", "", "", ""]);
questionArray[14] = new questionRecord("to return home: 帰る（かえる） -->", "かえれば", 4, ["かえれば", "", "", ""]);
questionArray[15] = new questionRecord("to change: 変える（かえる）-->", "かえれば", 4, ["かえれば", "", "", ""]);
questionArray[16] = new questionRecord("to wait: 待つ（まつ） -->", "まてば", 4, ["まてば", "", "", ""]);
questionArray[17] = new questionRecord("to buy: 買う（かう） -->", "かえば", 4, ["かえば", "", "", ""]);
questionArray[18] = new questionRecord("to see: 見る（みる） -->", "みれば", 4, ["みれば", "", "", ""]);
questionArray[19] = new questionRecord("clean/pretty: きれい-->　きれいであれば or ", "きれいならば", 4, ["きれいならば", "", "", ""]);
questionArray[20] = new questionRecord("famous: 有名（ゆうめい） -->　ゆうめいであれば or ", "ゆうめいならば", 4, ["ゆうめいならば", "", "", ""]);
questionArray[21] = new questionRecord("big: 大きい（おおきい） -->", "おおきければ", 4, ["おおきければ", "", "", ""]);
questionArray[22] = new questionRecord("new: 新しい（あたらしい） -->", "あたらしければ", 4, ["あたらしければ", "", "", ""]);
questionArray[23] = new questionRecord("student: 学生（がくせい） -->　がくせいであれば or ", "がくせいならば", 4, ["がくせいならば", "", "", ""]);
questionArray[24] = new questionRecord("college: 大学（だいがく） -->　だいがくであれば or ", "だいがくならば", 4, ["だいがくならば", "", "", ""]);
showQuiz("FillInNoBank");

</SCRIPT>

<?php
require('conquizfootphp.php')
?>