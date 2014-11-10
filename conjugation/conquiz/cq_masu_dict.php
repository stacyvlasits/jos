<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>

<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "〜ます forms --> dictionary forms - Conjugation";
quizDirections = "conjugate 〜ます forms of the given verbs into the dictionary forms. <br> Please answer in Hiragana.";
quizType = "FillInNoBank";
numQuestions = 19;
quizID=224;
init();
questionArray[0] = new questionRecord("to eat:  食べます (たべます) -->", "たべる", 4, ["たべる", "", "", ""]);
questionArray[1] = new questionRecord("to drink:  飲みます (のみます) -->", "のむ", 4, ["のむ", "", "", ""]);
questionArray[2] = new questionRecord("to do:  します -->", "する", 4, ["する", "", "", ""]);
questionArray[3] = new questionRecord("to come:  来ます (きます) -->", "くる", 4, ["くる", "", "", ""]);
questionArray[4] = new questionRecord("to go:  行きます (いきます) -->", "いく", 4, ["いく", "", "", ""]);
questionArray[5] = new questionRecord("to read:  読みます (よみます) -->", "よむ", 4, ["よむ", "", "", ""]);
questionArray[6] = new questionRecord("to write:  書きます (かきます) -->", "かく", 4, ["かく", "", "", ""]);
questionArray[7] = new questionRecord("to exist:  あります -->", "ある", 4, ["ある", "", "", ""]);
questionArray[8] = new questionRecord("to wash:  あらいます -->", "あらう", 4, ["あらう", "", "", ""]);
questionArray[9] = new questionRecord("to get up: おきます -->", "おきる", 4, ["おきる", "", "", ""]);
questionArray[10] = new questionRecord("to swim: およぎます -->", "およぐ", 4, ["およぐ", "", "", ""]);
questionArray[11] = new questionRecord("to return home: かえります -->", "かえる", 4, ["かえる", "", "", ""]);
questionArray[12] = new questionRecord("to meet: あいます -->", "あう", 4, ["あう", "", "", ""]);
questionArray[13] = new questionRecord("to die: しにます -->", "しぬ", 4, ["しぬ", "", "", ""]);
questionArray[14] = new questionRecord("to ride: のります　-->", "のる", 4, ["のる", "", "", ""]);
questionArray[15] = new questionRecord("to talk: 話します（はなします）-->", "はなす", 4, ["はなす", "", "", ""]);
questionArray[16] = new questionRecord("to stand: たちます -->", "たつ", 4, ["たつ", "", "", ""]);
questionArray[17] = new questionRecord("to call: よびます -->", "よぶ", 4, ["よぶ", "", "", ""]);
questionArray[18] = new questionRecord("to see: 見ます（みます） -->", "みる", 4, ["みる", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>