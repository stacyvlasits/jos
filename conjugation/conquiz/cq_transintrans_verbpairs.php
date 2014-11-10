<?php
require('conquizphp.php')
?>
<!-- START CONTENT -->
<BR>


<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "Transitive and Intransitive Verb Pairs<br>";
quizDirections = "ひらがなで答えてください。<br> For transitive verbs, type matching intransitive verbs and vice versa.<br><br>";
quizType = "FillInNoBank";
numQuestions = 20;
quizID=241;
init();
questionArray[0] = new questionRecord("Transitive: 上げる (あげる);   Intransitive-->", "あがる", 4, ["あがる", "", "", ""]);
questionArray[1] = new questionRecord("Transitive: 下げる (さげる);   Intransitive-->", "さがる", 4, ["さがる", "", "", ""]);
questionArray[2] = new questionRecord("Transitive: 開ける (あける);   Intransitive-->", "あく", 4, ["あく", "", "", ""]);
questionArray[3] = new questionRecord("Intransitive: 閉まる (しまる);   Transitive-->", "しめる", 4, ["しめる", "", "", ""]);
questionArray[4] = new questionRecord("Intransitive: 出る (でる);   Transitive-->", "だす", 4, ["だす", "", "", ""]);
questionArray[5] = new questionRecord("Transitive: 入れる (いれる);   Intransitive-->", "はいる", 4, ["はいる", "", "", ""]);
questionArray[6] = new questionRecord("Transitive: 直す (なおす);   Intransitive-->", "なおる", 4, ["なおる", "", "", ""]);
questionArray[7] = new questionRecord("Transitive: こわす;   Intransitive-->", "こわれる", 4, ["こわれる", "", "", ""]);
questionArray[8] = new questionRecord("Intransitive: つく;   Transitive-->", "つける", 4, ["つける", "", "", ""]);
questionArray[9] = new questionRecord("Intransitive: 消える (きえる);   Transitive-->", "けす", 4, ["けす", "", "", ""]);
questionArray[10] = new questionRecord("Intransitive: 動く (うごく);   Transitive-->", "うごかす", 4, ["うごかす", "", "", ""]);
questionArray[11] = new questionRecord("Transitive: 止める (とめる);   Intransitive-->", "とまる", 4, ["とまる", "", "", ""]);
questionArray[12] = new questionRecord("Transitive: おとす;   Intransitive-->", "おちる", 4, ["おちる", "", "", ""]);
questionArray[13] = new questionRecord("Intransitive: かかる;   Transitive-->", "かける", 4, ["かける", "", "", ""]);
questionArray[14] = new questionRecord("Intransitive: 乗る（のる）;   Transitive-->", "のせる", 4, ["のせる", "", "", ""]);
questionArray[15] = new questionRecord("Intransitive: 回る（まわる）;   Transitive-->", "まわす", 4, ["まわす", "", "", ""]);
questionArray[16] = new questionRecord("Intransitive: 起きる（おきる）;   Transitive-->", "おこす", 4, ["おこす", "", "", ""]);
questionArray[17] = new questionRecord("Transitive: かえる;   Intransitive-->", "かわる", 4, ["かわる", "", "", ""]);
questionArray[18] = new questionRecord("Transitive: 始める（はじめる);   Intransitive-->", "はじまる", 4, ["はじまる", "", "", ""]);
questionArray[19] = new questionRecord("Transitive: 終わる（おわる);   Intransitive-->", "おわる", 4, ["おわる", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>