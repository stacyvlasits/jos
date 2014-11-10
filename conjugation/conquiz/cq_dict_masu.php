<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>

<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "dictionary forms --> 〜ます forms - Conjugation";
quizDirections = "conjugate the dictionary forms of the given verbs into 〜ます forms. <br> Please answer in Hiragana.";
quizType = "FillInNoBank";
numQuestions = 19;
quizID=217;
init();
questionArray[0] = new questionRecord("to eat:  食べる (たべる) -->", "たべます", 4, ["たべます", "", "", ""]);
questionArray[1] = new questionRecord("to drink:  飲む (のむ) -->", "のみます", 4, ["のみます", "", "", ""]);
questionArray[2] = new questionRecord("to do:  する -->", "します", 4, ["します", "", "", ""]);
questionArray[3] = new questionRecord("to come:  来る (くる) -->", "きます", 4, ["きます", "", "", ""]);
questionArray[4] = new questionRecord("to go:  行く (いく) -->", "いきます", 4, ["いきます", "", "", ""]);
questionArray[5] = new questionRecord("to read:  読む (よむ) -->", "よみます", 4, ["よみます", "", "", ""]);
questionArray[6] = new questionRecord("to write:  書く (かく) -->", "かきます", 4, ["かきます", "", "", ""]);
questionArray[7] = new questionRecord("to exist:  ある  -->", "あります", 4, ["あります", "", "", ""]);
questionArray[8] = new questionRecord("to wash:  あらう  -->", "あらいます", 4, ["あらいます", "", "", ""]);
questionArray[9] = new questionRecord("to get up:  おきる -->", "おきます", 4, ["おきます", "", "", ""]);
questionArray[10] = new questionRecord("to swim: およぐ -->", "およぎます", 4, ["およぎます", "", "", ""]);
questionArray[11] = new questionRecord("to return home: かえる -->", "かえります", 4, ["かえります", "", "", ""]);
questionArray[12] = new questionRecord("to meet: あう -->", "あいます", 4, ["あいます", "", "", ""]);
questionArray[13] = new questionRecord("to die: しぬ -->", "しにます", 4, ["しにます", "", "", ""]);
questionArray[14] = new questionRecord("to ride: のる　-->", "のります", 4, ["のります", "", "", ""]);
questionArray[15] = new questionRecord("to talk: 話す（はなす）-->", "はなします", 4, ["はなします", "", "", ""]);
questionArray[16] = new questionRecord("to stand: たつ -->", "たちます", 4, ["たちます", "", "", ""]);
questionArray[17] = new questionRecord("to play: あそぶ -->", "あそびます", 4, ["あそびます", "", "", ""]);
questionArray[18] = new questionRecord("to see: 見る（みる） -->", "みます", 4, ["みます", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>