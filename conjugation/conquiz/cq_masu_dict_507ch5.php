<?php
require('conquizphp.php')
?>
	
<!-- START CONTENT -->
<BR>

<SCRIPT language=JavaScript src="../../js/quiz_c.js" type="text/javascript"></SCRIPT>

<SCRIPT language=JavaScript type=text/javascript>
quizTitle = "〜ます forms --> dictionary forms (Ch5) - Conjugation";
quizDirections = "conjugate 〜ます forms of the given verbs into the dictionary forms. <br> Please answer in Hiragana.";
quizType = "FillInNoBank";
numQuestions = 19;
quizID=281;
init();
questionArray[0] = new questionRecord("to see:  見ます (みます) -->", "みる", 4, ["みる", "", "", ""]);
questionArray[1] = new questionRecord("to enjoy: たのしみます　-->", "たのしむ", 4, ["たのしむ", "", "", ""]);
questionArray[2] = new questionRecord("to do:  します -->", "する", 4, ["する", "", "", ""]);
questionArray[3] = new questionRecord("to come:  来ます (きます) -->", "くる", 4, ["くる", "", "", ""]);
questionArray[4] = new questionRecord("to go:  行きます (いきます) -->", "いく", 4, ["いく", "", "", ""]);
questionArray[5] = new questionRecord("to play: 　あそびます -->", "あそぶ", 4, ["あそぶ", "", "", ""]);
questionArray[6] = new questionRecord("to play a string instrument:  ひきます -->", "ひく", 4, ["ひく", "", "", ""]);
questionArray[7] = new questionRecord("to take:  とります  -->", "とる", 4, ["とる", "", "", ""]);
questionArray[8] = new questionRecord("to meet:  会います (あいます) -->", "あう", 4, ["あう", "", "", ""]);
questionArray[9] = new questionRecord("to teach:  教えます (おしえます) -->", "おしえる", 4, ["おしえる", "", "", ""]);
questionArray[10] = new questionRecord("to swim: 泳ぎます（およぎます） -->", "およぐ", 4, ["およぐ", "", "", ""]);
questionArray[11] = new questionRecord("to be able to: できます -->", "できる", 4, ["できる", "", "", ""]);
questionArray[12] = new questionRecord("to understand: わかります -->", "わかる", 4, ["わかる", "", "", ""]);
questionArray[13] = new questionRecord("to read : 読みます（よみます） -->", "よむ", 4, ["よむ", "", "", ""]);
questionArray[14] = new questionRecord("to sing: うたいます -->", "うたう", 4, ["うたう", "", "", ""]);
questionArray[15] = new questionRecord("to wear: きます-->", "きる", 4, ["きる", "", "", ""]);
questionArray[16] = new questionRecord("to carry: 持ちます（もちます） -->", "もつ", 4, ["もつ", "", "", ""]);
questionArray[17] = new questionRecord("to stand up: たちます -->", "たつ", 4, ["たつ", "", "", ""]);
questionArray[18] = new questionRecord("to eat: 食べます（たべます） -->", "たべる", 4, ["たべる", "", "", ""]);
showQuiz("FillInNoBank");
</SCRIPT>

<?php
require('conquizfootphp.php')
?>