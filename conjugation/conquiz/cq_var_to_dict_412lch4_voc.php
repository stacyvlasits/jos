<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>

<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "Conjugation: various forms to dictionary forms -- Ch4 voc.";
quizDirections = "ひらがなで答えてください。";
quizType = "FillInNoBank";
numQuestions = 19;
quizID=410;
init();
questionArray[0] = new questionRecord("して -->", "する", 4, ["する", "", "", ""]);
questionArray[1] = new questionRecord("飲んで  (のんで) -->", "のむ", 4, ["のむ", "", "", ""]);
questionArray[2] = new questionRecord("させる -->", "する", 4, ["する", "", "", ""]);
questionArray[3] = new questionRecord("来よう (こよう) -->", "くる", 4, ["くる", "", "", ""]);
questionArray[4] = new questionRecord("はいて -->", "はく", 4, ["はく", "", "", ""]);
questionArray[5] = new questionRecord("つかもう -->", "つかむ", 4, ["つかむ", "", "", ""]);
questionArray[6] = new questionRecord("たたきたい -->", "たたく", 4, ["たたく", "", "", ""]);
questionArray[7] = new questionRecord("おこらない  -->", "おこる", 4, ["おこる", "", "", ""]);
questionArray[8] = new questionRecord("わらわない  -->", "わらう", 4, ["わらう", "", "", ""]);
questionArray[9] = new questionRecord("うけます -->", "うける", 4, ["うける", "", "", ""]);
questionArray[10] = new questionRecord("急ごう（いそごう） -->", "いそぐ", 4, ["いそぐ", "", "", ""]);
questionArray[11] = new questionRecord("困ります（こまります） -->", "こまる", 4, ["こまる", "", "", ""]);
questionArray[12] = new questionRecord("買いたい（かいたい） -->", "かう", 4, ["かう", "", "", ""]);
questionArray[13] = new questionRecord("死なない（しなない） -->", "しぬ", 4, ["しぬ", "", "", ""]);
questionArray[14] = new questionRecord("しろ　-->", "する", 4, ["する", "", "", ""]);
questionArray[15] = new questionRecord("消せ（けせ）-->", "けす", 4, ["けす", "", "", ""]);
questionArray[16] = new questionRecord("待つな（まつな） -->", "まつ", 4, ["まつ", "", "", ""]);
questionArray[17] = new questionRecord("並びたい（ならびたい） -->", "ならぶ", 4, ["ならぶ", "", "", ""]);
questionArray[18] = new questionRecord("止めよう（とめよう） -->", "とめる", 4, ["とめる", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>