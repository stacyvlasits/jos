<?php
require('conrefphp2.php')
?>

<HEAD>
<!-- use the pre-created stylesheet -->
<LINK href="../../css/verbs.css" type=text/css rel=stylesheet>
<SCRIPT language=JavaScript src="../../js/verbs_flashcards.js" type=text/javascript></SCRIPT>

<!-- body -->
<BODY
	OnLoad="clearAll()"
	background='../../images/bgtest.jpg'>

<!-- display title -->
<center>
<br>
  <p><font class=category>Verb Conjugation - Class I: 飲む(のむ、to drink)</font></p>
  
  <P><br>
     
<input name="View all" type="button" value="&nbsp;&nbsp;&nbsp;View all&nbsp;&nbsp;&nbsp;" onClick="setAll()">
&nbsp;&nbsp;&nbsp;
<input name="Clear all" type="button" value="&nbsp;&nbsp;&nbsp;Clear all&nbsp;&nbsp;&nbsp;" onClick="clearAll()">
</P>
  
 
  <form name="f">

<!-- begin TABLE OF ALL VERB FORMS -->
<table class=verbtable cellspacing=0> <!--<table border="1" cellpadding="0" cellspacing="0">-->
		<tr>
			<td class=columnNamesInside align=right colspan=4>Conjugation</td>
			<td class=columnNamesInside>Verb Type</td>
			<td class=columnNamesInside colspan=2 align=left>Translation</td>
		</tr>

	<!-- ~a -->
		<tr>
		<!-- plain negative -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td><input class=aiueo-a type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td align=left><input type="checkbox" name="checkbox" onClick="setVerb(0)">
			<font class=verbtype>plain negative</font></td>
			<td align=right><font class=translation>to not&nbsp;</font></td>
			<td align=left><font class=translation-verb>drink</font></td>
		</tr>
		<tr>
		<!-- ba conditional negative -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td><input class=aiueo-a type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td align=left><input type="checkbox" name="checkbox" onClick="setVerb(1)">
			<font class=verbtype>ba conditional negative</font></td>
			<td align=right><font class=translation>If (I) don't&nbsp;</font></td>
			<td align=left><font class=translation-verb>drink, ...</font></td>
		</tr>
		<tr>
		<!-- passive -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(2)">
			<font class=verbtype>passive</font></td>
			<td align=right><font class=translation>to be&nbsp;</font></td>
			<td align=left><font class=translation-verb>drunken (by someone)</font></td>
		</tr>
		<tr>
		<!-- causative -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(3)">
			<font class=verbtype>causative</font></td>
			<td align=right><font class=translation>to make/let (someone)&nbsp;</font></td>
			<td align=left><font class=translation-verb>drink</font></td>
		</tr>
		<tr>
		<!-- passive causative -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(4)">
			<font class=verbtype>causative passive</font></td>
			<td align=right><font class=translation>to be made to&nbsp;</font></td>
			<td align=left><font class=translation-verb>drink (by someone)</font></td>
		</tr>




	<!-- blank row between each a-i-u-e-o -->
	<tr>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td></tr>
	<!-- ~i -->
		<tr>
		<!-- polite -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-i type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(5)">
			<font class=verbtype>polite</font></td>
			<td align=right><font class=translation>to&nbsp;</font></td>
			<td align=left><font class=translation-verb>drink</font></td>
		</tr>
		<tr>
		<!-- polite negative-->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-i type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(6)">
			<font class=verbtype>polite negative</font></td>
			<td align=right><font class=translation>to not&nbsp;</font></td>
			<td align=left><font class=translation-verb>drink</font></td>
		</tr>
		<tr>
		<!-- volitional (polite) -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-i type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(7)">
			<font class=verbtype>volitional (polite)</font></td>
			<td align=right><font class=translation>to intend to/Let's&nbsp;</font></td>
			<td align=left><font class=translation-verb>drink</font></td>
		</tr>
		<tr>
		<!-- command (polite) -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-i type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(8)">
			<font class=verbtype>command (polite)</font></td>
			<td align=right><font class=translation>&nbsp;</font></td>
			<td align=left><font class=translation-verb>Drink. (command)</font></td>
		</tr>
		<tr>
		<!-- tai form -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-i type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(9)">
			<font class=verbtype>tai form</font></td>
			<td align=right><font class=translation>wanting to&nbsp;</font></td>
			<td align=left><font class=translation-verb>drink</font></td>
		</tr>
		<tr>
		<!-- conjunctive -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-i type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(10)">
			<font class=verbtype>conjunctive</font></td>
			<td align=right><font class=translation>&nbsp;</font></td>
			<td align=left><font class=translation-verb>&nbsp;</font></td>
		</tr>





	<!-- blank row between each a-i-u-e-o -->
	<tr>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td></tr>
	<!-- ~u -->
		<tr>
		<!-- plain -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-u type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(11)">
			<font class=verbtype>plain</font></td>
			<td align=right><font class=translation>to&nbsp;</font></td>
			<td align=left><font class=translation-verb>drink</font></td>
		</tr>


	<!-- blank row between each a-i-u-e-o -->
	<tr>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td></tr>
	<!-- ~e -->
		<tr>
		<!-- potential -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(12)">
			<font class=verbtype>potential</font></td>
			<td align=right><font class=translation>to be able to&nbsp;</font></td>
			<td align=left><font class=translation-verb>drink</font></td>
		</tr>
		<tr>
		<!-- ba conditional -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(13)">
			<font class=verbtype>ba conditional</font></td>
			<td align=right><font class=translation>If (I)&nbsp;</font></td>
			<td align=left><font class=translation-verb>drink, ...</font></td>
		</tr>
		<tr>
		<!-- command (plain) -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(14)">
			<font class=verbtype>command (plain)</font></td>
			<td align=right><font class=translation>&nbsp;</font></td>
			<td align=left><font class=translation-verb>Drink. (command)</font></td>
		</tr>


	<!-- blank row between each a-i-u-e-o -->
	<tr>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td></tr>
	<!-- ~o -->
		<tr>
		<!-- volitional (plain) -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-o type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(15)">
			<font class=verbtype>volitional (plain)</font></td>
			<td align=right><font class=translation>to intend to/Let's&nbsp;</font></td>
			<td align=left><font class=translation-verb>drink</font></td>
		</tr>


	<!-- blank row between each a-i-u-e-o -->
	<tr>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td>
		<td class=blankrow>&nbsp;</td></tr>
	<!-- ~te form -->
		<tr>
		<!-- te form -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-x type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(16)">
			<font class=verbtype>te form</font></td>
			<td align=right><font class=translation>&nbsp;</font></td>
			<td align=left><font class=translation-verb>&nbsp;</font></td>
		</tr>
		<tr>
		<!-- ta form -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-x type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(17)">
			<font class=verbtype>ta form</font></td>
			<td align=right><font class=translation>&nbsp;</font></td>
			<td align=left><font class=translation-verb>&nbsp;</font></td>
		</tr>
		<tr>
		<!-- tara conditional -->
			<td align=right><input class=stem type="text" name="stem" value=""></td>
			<td class=cell><input class=aiueo-x type="text" name="aiueo" value=""></td>
			<td><input class=conjugation type="text" name="conjugation" value=""></td>
			<td class=blank>&nbsp;</td>
			<td><input type="checkbox" name="checkbox" onClick="setVerb(18)">
			<font class=verbtype>tara conditional</font></td>
			<td align=right><font class=translation>If (I)&nbsp;</font></td>
			<td align=left><font class=translation-verb>drink, ...</font></td>
		</tr>

</table><!-- end TABLE OF ALL VERB FORMS -->

<p><br>
   
<input name="View all" type="button" value="&nbsp;&nbsp;&nbsp;View all&nbsp;&nbsp;&nbsp;" onClick="setAll()">
&nbsp;&nbsp;&nbsp;
<input name="Clear all" type="button" value="&nbsp;&nbsp;&nbsp;Clear all&nbsp;&nbsp;&nbsp;" onClick="clearAll()">


<?php
require('conreffootphp.php')
?>