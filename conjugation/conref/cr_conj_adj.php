<?php
require('conrefphp2.php')
?>


<HEAD>
<!-- use the pre-created stylesheet -->
<LINK href="../../css/adj_conjugation.css" type=text/css rel=stylesheet>
<SCRIPT language=JavaScript src="../../js/Adj_conj_flashcards.js" type=text/javascript></SCRIPT>

<!-- body -->
<BODY
	OnLoad="clearAll()"
	background='../../images/bgtest.jpg'>

<!-- display title -->
<center>
  <p>
    <font class=category>Adjective Conjugation</font><br>
    
	
	
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
    <td width="180" class=columnNamesInside> 大きい (big)</td>
    <td class=columnNamesInside colspan=2 align=left>い adjective </td>
  </tr>
  
 
  <tr>
    
    <td width="70" align=right><input class=stem type="text" name="stem" value=""></td>
    <td width="20"><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td width="172"><input class=conjugation type="text" name="conjugation" value=""></td>
    <td width="5" class=blank>&nbsp;&nbsp;</td>
    <td align=left><input type="checkbox" name="checkbox" onClick="setVerb(0)">
      <font class=verbtype><font color="#660000">affirmative Plain</font></font></td>
     <td width="100"><font class=translation>nonpast</font></td>
  </tr>
  
  
  <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td><input class=aiueo-i type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td align=left><input type="checkbox" name="checkbox" onClick="setVerb(1)">
      <font class=verbtype><font color="#0000FF">affirmative Polite </font></font></td>
    <td><font class=translation>nonpast</font></td>
  </tr>
  
  
  <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-u type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(2)">
        <font class=verbtype><font color="ff5500">negative Plain </font></font></td>
    <td><font class=translation>nonpast</font></td>
  </tr>
  
  <tr>
   
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(3)">
        <font class=verbtype><font color="#FF00FF">negative Polite </font></font></font></td>
    <td><font class=translation>nonpast</font></td>
</tr>

<tr>
   
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(4)">
        <font class=verbtype><font color="#FF00FF">negative Polite </font></font></font></td>
    <td><font class=translation>nonpast</font></td>
</tr>

<tr>
   
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(5)">
        <font class=verbtype><font color="#006600">te-form </font></font></td>
    <td>&nbsp;</td>
</tr>

<tr>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
   
  </tr>

  <tr>
   
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(6)">
      <font class=verbtype><font color="#660000">affirmative Plain</font></font></td>
    <td><font class=translation>past</font></td>
  </tr>
  
  <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-i type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(7)">
      <font class=verbtype><font color="#0000FF">affirmative Polite </font></font></td>
    <td><font class=translation>past</font></td>
  </tr>
  
  <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-u type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(8)">
         <font class=verbtype><font color="ff5500">negative Plain </font></font></td>
    <td><font class=translation>past</font></td>
  </tr>
  
    <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(9)">
    <font class=verbtype><font color="#FF00FF">negative Polite </font></font></font></td>
    <td><font class=translation>past</font></td>
  </tr>
  
  
    <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(10)">
    <font class=verbtype><font color="#FF00FF">negative Polite </font></font></font></td>
    <td><font class=translation>past</font></td>
  </tr>
  
 
  <tr>
    <td class=columnNamesInside align=right colspan=4>Conjugation</td>
    <td class=columnNamesInside>いい/よい (good）</td>
    <td class=columnNamesInside align=left>い adj. irreg. </td>
  </tr>
 
  <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(11)">
      <font class=verbtype><font color="#660000">affirmative Plain</font></font></td>
    <td><font class=translation>nonpast</font></td>
  </tr>
  
   <tr>
   
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-i type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(12)">
      <font class=verbtype><font color="#0000FF">affirmative Polite </font></font></td>
    <td><font class=translation>nonpast</font></td>
  </tr>
  
  <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-u type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(13)">
         <font class=verbtype><font color="ff5500">negative Plain </font></font></td>
    <td><font class=translation>nonpast</font></td>
  </tr>
  
   <tr>
   
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(14)">
        <font class=verbtype><font color="#FF00FF">negative Polite </font></font></font></td>
    <td><font class=translation>nonpast</font></td>
  </tr>
  <tr>
  
   <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(15)">
        <font class=verbtype><font color="#FF00FF">negative Polite </font></font></font></td>
    <td><font class=translation>nonpast</font></td>
  </tr>
  
  <tr>
   
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(16)">
        <font class=verbtype><font color="#006600">te-form </font></font></td>
    <td>&nbsp;</td>
</tr>
  
  <tr>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
   
  </tr>
  
  
  <tr>
  
  
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(17)">
      <font class=verbtype><font color="#660000">affirmative Plain</font></font></td>
    <td><font class=translation>past </font></td>
  </tr>
  
   <tr>
   
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-i type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(18)">
      <font class=verbtype><font color="#0000FF">affirmative Polite </font></font></td>
    <td><font class=translation>past </font></td>
  </tr>
  
  <tr>
   
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-u type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(19)">
         <font class=verbtype><font color="ff5500">negative Plain </font></font></td>
    <td><font class=translation>past </font></td>
  </tr>
  
   <tr>
  
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(20)">
        <font class=verbtype><font color="#FF00FF">negative Polite </font></font></font></td>
    <td><font class=translation>past </font></td>
  </tr>
   
  <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(21)">
        <font class=verbtype><font color="#FF00FF">negative Polite </font></font></font></td>
    <td><font class=translation>past </font></td>
  </tr>  
   
   
 
<tr>
    <td class=columnNamesInside align=right colspan=4>Conjugation</td>
    <td class=columnNamesInside>しずか (quiet)</td>
    <td class=columnNamesInside colspan=2 align=left>な adjective </td>
  </tr>
 
 
  <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(22)">
      <font class=verbtype><font color="#660000">affirmative Plain</font></font></td>
    <td><font class=translation>nonpast</font></td>
  </tr>
  
  <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-i type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(23)">
      <font class=verbtype><font color="#0000FF">affirmative Polite </font></font></td>
    <td><font class=translation>nonpast</font></td>
  </tr>
  
  <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-u type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(24)">
         <font class=verbtype><font color="ff5500">negative Plain </font></font></td>
    <td><font class=translation>nonpast</font></td>
  </tr>
  
  <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(25)">
        <font class=verbtype><font color="#FF00FF">negative Polite </font></font></font></td>
    <td><font class=translation>nonpast</font></td>
  </tr>
  
   <tr>
   
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(26)">
        <font class=verbtype><font color="#FF00FF">negative Polite </font></font></font></td>
    <td><font class=translation>nonpast</font></td>
  </tr>
  
  <tr>
   
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(27)">
        <font class=verbtype><font color="#006600">te-form </font></font></td>
    <td>&nbsp;</td>
</tr>
  
    <tr>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
    <td class=blankrow>&nbsp;</td>
   
  </tr>
  
  
  
   <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-a type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(28)">
     <font class=verbtype><font color="#660000">affirmative Plain</font></font></td>
    <td><font class=translation>past </font></td>
  </tr>
  
  <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-i type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(29)">
      <font class=verbtype><font color="#0000FF">affirmative Polite </font></font></td>
    <td><font class=translation>past</font></td>
  </tr>
  
   <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-u type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(30)">
         <font class=verbtype><font color="ff5500">negative Plain </font></font></td>
    <td><font class=translation>past</font></td>
  </tr>
  
  <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(31)">
        <font class=verbtype><font color="#FF00FF">negative Polite </font></font></font></td>
    <td><font class=translation>past</font></td>
  </tr>
  
    <tr>
    
    <td align=right><input class=stem type="text" name="stem" value=""></td>
    <td class=cell><input class=aiueo-e type="text" name="aiueo" value=""></td>
    <td><input class=conjugation type="text" name="conjugation" value=""></td>
    <td class=blank>&nbsp;</td>
    <td><input type="checkbox" name="checkbox" onClick="setVerb(32)">
        <font class=verbtype><font color="#FF00FF">negative Polite </font></font></font></td>
    <td><font class=translation>past</font></td>
  </tr>
  
</table>

<p>

<input name="View all" type="button" value="&nbsp;&nbsp;&nbsp;View all&nbsp;&nbsp;&nbsp;" onClick="setAll()">
&nbsp;&nbsp;&nbsp;
<input name="Clear all" type="button" value="&nbsp;&nbsp;&nbsp;Clear all&nbsp;&nbsp;&nbsp;" onClick="clearAll()">

<?php
require('conreffootphp.php')
?>