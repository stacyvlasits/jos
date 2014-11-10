<?php
require('conrefphp2.php')
?>

<HEAD>
<!-- use the pre-created stylesheet -->
<LINK href="../../css/verbs_causative.css" type=text/css rel=stylesheet>
<SCRIPT language=JavaScript src="../../js/verbs_flashcards_passive.js" type=text/javascript></SCRIPT>

<!-- body -->
<BODY
	OnLoad="clearAll()"
	background='../../images/bgtest.jpg'>

<!-- display title -->
<center>
  <p><br>
    <font class=category>Verb Conjugation - Passive </font>
 </p>
 <p> <br>
    
<input name="View all" type="button" value="&nbsp;&nbsp;&nbsp;View all&nbsp;&nbsp;&nbsp;" onClick="setAll()">
&nbsp;&nbsp;&nbsp;
<input name="Clear all" type="button" value="&nbsp;&nbsp;&nbsp;Clear all&nbsp;&nbsp;&nbsp;" onClick="clearAll()">

</p>
 
 
  <form name="f">

<!-- begin TABLE OF ALL VERB FORMS -->
<table class=verbtable cellspacing=0>
  <!--<table border="1" cellpadding="0" cellspacing="0">-->
  <tr>
    <td class=columnNamesInside align=right colspan=4>Conjugation</td>
    <td class=columnNamesInside>Verb Type</td>
    <td class=columnNamesInside colspan=2 align=left>Passive Translation</td>
  </tr>
  <!-- ~a -->
  <tr>
    <!-- あ行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td align=left><input type="checkbox" name="checkbox" onClick="setVerb(0)">
        <font class=verbtype>笑う<font size=3>(わらう) C-I</font></font></td>
    <td align=right><font class=translation>to be</font></td>
    <td align=left><font class=translation-verb>laughed at </font></td>
  </tr>
  <tr>
    <!-- か行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td align=left><input type="checkbox" name="checkbox" onClick="setVerb(1)">
    <font class=verbtype>聞く<font size=3>(きく) C-I</font></font></td>
    <td align=right><font class=translation>to be</font></td>
    <td align=left><font class=translation-verb>listened to </font></td>
  </tr>
  <tr>
    <!-- さ行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(2)">
        <font class=verbtype>直す<font size=3>(なおす) C-I</font></font></td>
    <td align=right><font class=translation>to be</font></td>
    <td align=left><font class=translation-verb>corrected </font></td>
  </tr>
  <tr>
    <!-- た行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(3)">
        <font class=verbtype>勝つ<font size=2>(かつ) C-I</font></font></td>
    <td align=right><font class=translation>A wins </font></td>
    <td align=left>(againts B's wish) </td>
  </tr>
  <tr>
    <!-- な行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(4)">
        <font class=verbtype>死ぬ<font size=3>(しぬ) C-I</font></font></td>
    <td align=right><font class=translation>A dies</font></td>
    <td align=left><font class=translation-verb> on B </font></td>
  </tr>
  
  <tr>
    <!-- ま行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(5)">
        <font class=verbtype>読む<font size=3>(よむ) C-I</font></font></td>
    <td align=right><font class=translation>to be</font></td>
    <td align=left><font class=translation-verb>read</font></td>
  </tr>
  
  <tr>
    <!-- ら行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(6)">
        <font class=verbtype>取る<font size=3>(とる) C-I</font></font></td>
    <td align=right><font class=translation>to be </font></td>
    <td align=left><font class=translation-verb>taken</font></td>
  </tr>
  
    <tr>
    <!-- ら行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(7)">
        <font class=verbtype>知る<font size=3>(しる) C-I</font></font></td>
    <td align=right><font class=translation>to be</font></td>
    <td align=left><font class=translation-verb>known</font></td>
  </tr>
  
   <tr>
    <!-- が行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(8)">
        <font class=verbtype>嗅ぐ<font size=3>(かぐ) C-I</font></font></td>
    <td align=right><font class=translation>to be</font></td>
    <td align=left><font class=translation-verb>sniffed at </font></td>
  </tr>
  
  <tr>
    <!-- ば行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(9)">
        <font class=verbtype>呼ぶ<font size=3>(よぶ) C-I</font></font></td>
    <td align=right><font class=translation>to be</font></td>
    <td align=left><font class=translation-verb>called</font></td>
  </tr>
  
  
  <!-- blank row between each a-i-u-e-o -->
  <tr>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
  </tr>
  <!-- ~i -->
  <tr>
    <!-- class II i -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-i type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(10)">
        <font class=verbtype>見る<font size=3>(みる) C-II</font></font></td>
    <td align=right><font class=translation>A watches/looks </font></td>
    <td align=left><font class=translation-verb>l(against B's wis) </font></td>
  </tr>
  
   <tr>
    <!-- class II e -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-i type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(11)">
        <font class=verbtype>教える<font size=3>(おしえる) C-II</font></font></td>
    <td align=right><font class=translation>to be</font></td>
    <td align=left><font class=translation-verb>taught</font></td>
  </tr>
   
  <!-- blank row between each a-i-u-e-o -->
  <tr>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
  </tr>
  <!-- ~u -->
  <tr>
    <!-- Class III 来る -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-u type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(12)">
        <font class=verbtype>来る<font size=3>(くる) C-III</font></font></td>
    <td align=right><font class=translation>A comes </font></td>
    <td align=left><font class=translation-verb>(against B's wish)</font></td>
  </tr>
  
  <tr>
    <!-- Class III する -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-u type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(13)">
        <font class=verbtype>する <font size=3>C-III</font></font></td>
    <td align=right><font class=translation>A does  something</font></td>
    <td align=left><font class=translation-verb>(against B's wish)</font></td>
  </tr>
  
 

</table>
<!-- end TABLE OF ALL VERB FORMS -->
<p><br>
      
<input name="View all" type="button" value="&nbsp;&nbsp;&nbsp;View all&nbsp;&nbsp;&nbsp;" onClick="setAll()">
&nbsp;&nbsp;&nbsp;
<input name="Clear all" type="button" value="&nbsp;&nbsp;&nbsp;Clear all&nbsp;&nbsp;&nbsp;" onClick="clearAll()">

<?php
require('conreffootphp.php')
?>