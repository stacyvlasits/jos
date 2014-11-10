<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>
<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>


<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "Potential forms of verbs -- Conjugation<br>--can do ..., be able to do ...<br>";
quizDirections = "ひらがなで答えてください。<br><br>";
quizType = "FillInNoBank";
numQuestions = 19;
quizID=230;
init();
questionArray[0] = new questionRecord("食べる (たべる, to eat) -->", "たべられる", 4, ["たべられる", "", "", ""]);
questionArray[1] = new questionRecord("飲む (のむ, to drink) -->", "のめる", 4, ["のめる", "", "", ""]);
questionArray[2] = new questionRecord("する (to do) -->", "できる", 4, ["できる", "", "", ""]);
questionArray[3] = new questionRecord("来る (くる, to come) -->", "こられる", 4, ["こられる", "", "", ""]);
questionArray[4] = new questionRecord("行く (いく, to go) -->", "いける", 4, ["いける", "", "", ""]);
questionArray[5] = new questionRecord("読む (よむ, to read) -->", "よめる", 4, ["よめる", "", "", ""]);
questionArray[6] = new questionRecord("書く (かく, to write) -->", "かける", 4, ["かける", "", "", ""]);
questionArray[7] = new questionRecord("作る (つくる, to make) -->", "つくれる", 4, ["つくれる", "", "", ""]);
questionArray[8] = new questionRecord("使う (つかう, to use) -->", "つかえる", 4, ["つかえる", "", "", ""]);
questionArray[9] = new questionRecord("着る (きる, to wear) -->", "きられる", 4, ["きられる", "", "", ""]);
questionArray[10] = new questionRecord("泳ぐ（およぐ, to swim） -->", "およげる", 4, ["およげる", "", "", ""]);
questionArray[11] = new questionRecord("寝る（ねる, to sleep） -->", "ねられる", 4, ["ねられる", "", "", ""]);
questionArray[12] = new questionRecord("会う（あう, to meet） -->", "あえる", 4, ["あえる", "", "", ""]);
questionArray[13] = new questionRecord("死ぬ（しぬ, to die） -->", "しねる", 4, ["しねる", "", "", ""]);
questionArray[14] = new questionRecord("帰る（かえる, to return home） -->", "かえれる", 4, ["かえれる", "", "", ""]);
questionArray[15] = new questionRecord("起きる（おきる, to change）-->", "おきられる", 4, ["おきれる", "", "", ""]);
questionArray[16] = new questionRecord("立つ（たつ, to stand） -->", "たてる", 4, ["たてる", "", "", ""]);
questionArray[17] = new questionRecord("買う（かう, to buy） -->", "かえる", 4, ["かえる", "", "", ""]);
questionArray[18] = new questionRecord("見る（みる, to see） -->", "みられる", 4, ["みられる", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>