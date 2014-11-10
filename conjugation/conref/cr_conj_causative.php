<?php
require('conrefphp2.php')
?>

<HEAD>
<!-- use the pre-created stylesheet -->
<LINK href="../../css/verbs_causative.css" type=text/css rel=stylesheet>
<SCRIPT language=JavaScript src="../../js/verbs_flashcards_causative.js" type=text/javascript></SCRIPT>

<!-- body -->
<BODY
	OnLoad="clearAll()"
	background='../../images/bgtest.jpg'>

<!-- display title -->
<center>
  <p><br>
    <font class=category>Verb Conjugation - Causative</font><br>
 </p>
 
 <p>
   <br> 
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
    <td class=columnNamesInside colspan=2 align=left>Causative Translation</td>
  </tr>
  <!-- ~a -->
  <tr>
    <!-- あ行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td align=left><input type="checkbox" name="checkbox" onClick="setVerb(0)">
        <font class=verbtype>会う<font size=3>(あう) C-I</font></font></td>
    <td align=right><font class=translation>to make/let someone</font></td>
    <td align=left><font class=translation-verb>meet</font></td>
  </tr>
  <tr>
    <!-- か行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td align=left><input type="checkbox" name="checkbox" onClick="setVerb(1)">
    <font class=verbtype>書く<font size=3>(かく) C-I</font></font></td>
    <td align=right><font class=translation>to make/let someone</font></td>
    <td align=left><font class=translation-verb>write</font></td>
  </tr>
  <tr>
    <!-- さ行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(2)">
        <font class=verbtype>話す<font size=3>(はなす) C-I</font></font></td>
    <td align=right><font class=translation>to make/let someone</font></td>
    <td align=left><font class=translation-verb> talk </font></td>
  </tr>
  <tr>
    <!-- た行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(3)">
        <font class=verbtype>立つ<font size=2>(たつ) C-I</font></font></td>
    <td align=right><font class=translation>to make/let someone</font></td>
    <td align=left><font class=translation-verb>stand up </font></td>
  </tr>
  <tr>
    <!-- な行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(4)">
        <font class=verbtype>死ぬ<font size=3>(しぬ) C-I</font></font></td>
    <td align=right><font class=translation>to make/let someone</font></td>
    <td align=left><font class=translation-verb>die</font></td>
  </tr>
  
  <tr>
    <!-- ま行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(5)">
        <font class=verbtype>読む<font size=3>(よむ) C-I</font></font></td>
    <td align=right><font class=translation>to make/let someone</font></td>
    <td align=left><font class=translation-verb>read</font></td>
  </tr>
  
  <tr>
    <!-- ら行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(6)">
        <font class=verbtype>切る<font size=3>(きる) C-I</font></font></td>
    <td align=right><font class=translation>to make/let someone</font></td>
    <td align=left><font class=translation-verb>cut</font></td>
  </tr>
  
    <tr>
    <!-- ら行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(7)">
        <font class=verbtype>帰る<font size=3>(かえる) C-I</font></font></td>
    <td align=right><font class=translation>to make/let someone</font></td>
    <td align=left><font class=translation-verb>return home</font></td>
  </tr>
  
   <tr>
    <!-- が行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(8)">
        <font class=verbtype>泳ぐ<font size=3>(およぐ) C-I</font></font></td>
    <td align=right><font class=translation>to make/let someone</font></td>
    <td align=left><font class=translation-verb>swim</font></td>
  </tr>
  
  <tr>
    <!-- ば行 -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(9)">
        <font class=verbtype>呼ぶ<font size=3>(よぶ) C-I</font></font></td>
    <td align=right><font class=translation>to make/let someone</font></td>
    <td align=left><font class=translation-verb>call</font></td>
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
        <font class=verbtype>着る<font size=3>(きる) C-II</font></font></td>
    <td align=right><font class=translation>to make/let someone</font></td>
    <td align=left><font class=translation-verb>wear</font></td>
  </tr>
  
   <tr>
    <!-- class II e -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-i type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(11)">
        <font class=verbtype>変える<font size=3>(かえる) C-II</font></font></td>
    <td align=right><font class=translation>to make/let someone</font></td>
    <td align=left><font class=translation-verb>change</font></td>
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
    <td align=right><font class=translation>to make/let someone</font></td>
    <td align=left><font class=translation-verb>come</font></td>
  </tr>
  
  <tr>
    <!-- Class III する -->
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-u type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(13)">
        <font class=verbtype>する <font size=3>C-III</font></font></td>
    <td align=right><font class=translation>to make/let someone</font></td>
    <td align=left><font class=translation-verb>do</font></td>
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