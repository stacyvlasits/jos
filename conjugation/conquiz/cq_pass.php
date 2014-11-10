<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>
<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>


<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "受け身 【うけみ】 - Passive Verb Conjugation<br>--A was V-ed by B--<br>";
quizDirections = "ひらがなで答えてください。<br><br>";
quizType = "FillInNoBank";
numQuestions = 19;
quizID=229;
init();
questionArray[0] = new questionRecord("食べる (たべる, to eat) -->", "たべられる", 4, ["たべられる", "", "", ""]);
questionArray[1] = new questionRecord("飲む (のむ, to drink) -->", "のまれる", 4, ["のまれる", "", "", ""]);
questionArray[2] = new questionRecord("する (to do) -->", "される", 4, ["される", "", "", ""]);
questionArray[3] = new questionRecord("来る (くる, to come) -->", "こられる", 4, ["こられる", "", "", ""]);
questionArray[4] = new questionRecord("行く (いく, to go) -->", "いかれる", 4, ["いかれる", "", "", ""]);
questionArray[5] = new questionRecord("読む (よむ, to read) -->", "よまれる", 4, ["よまれる", "", "", ""]);
questionArray[6] = new questionRecord("書く (かく, to write) -->", "かかれる", 4, ["かかれる", "", "", ""]);
questionArray[7] = new questionRecord("作る (つくる, to make) -->", "つくられる", 4, ["つくられる", "", "", ""]);
questionArray[8] = new questionRecord("使う (つかう, to use) -->", "つかわれる", 4, ["つかわれる", "", "", ""]);
questionArray[9] = new questionRecord("着る (きる, to wear) -->", "きられる", 4, ["きられる", "", "", ""]);
questionArray[10] = new questionRecord("泳ぐ（およぐ, to swim） -->", "およがれる", 4, ["およがれる", "", "", ""]);
questionArray[11] = new questionRecord("寝る（ねる, to sleep） -->", "ねられる", 4, ["ねられる", "", "", ""]);
questionArray[12] = new questionRecord("会う（あう, to meet） -->", "あわれる", 4, ["あわれる", "", "", ""]);
questionArray[13] = new questionRecord("死ぬ（しぬ, to die） -->", "しなれる", 4, ["しなれる", "", "", ""]);
questionArray[14] = new questionRecord("帰る（かえる, to return home） -->", "かえられる", 4, ["かえられる", "", "", ""]);
questionArray[15] = new questionRecord("変える（かえる, to change）-->", "かえられる", 4, ["かえられる", "", "", ""]);
questionArray[16] = new questionRecord("立つ（たつ, to stand） -->", "たたれる", 4, ["たたれる", "", "", ""]);
questionArray[17] = new questionRecord("買う（かう, to buy） -->", "かわれる", 4, ["かわれる", "", "", ""]);
questionArray[18] = new questionRecord("見る（みる, to see） -->", "みられる", 4, ["みられる", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>