<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="ja">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<!--desgin by Fred Bickerstaff and Naoko Suito-->


<!--[if gte IE 5.5000]>
<script language="JavaScript">
function correctPNG() // correctly handle PNG transparency in Win IE 5.5 or higher.
   {
   for(var i=0; i<document.images.length; i++)
      {
	  var img = document.images[i]
	  var imgName = img.src.toUpperCase()
	  if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
	     {
		 var imgID = (img.id) ? "id='" + img.id + "' " : ""
		 var imgClass = (img.className) ? "class='" + img.className + "' " : ""
		 var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
		 var imgStyle = "display:inline-block;" + img.style.cssText 
		 if (img.align == "left") imgStyle = "float:left;" + imgStyle
		 if (img.align == "right") imgStyle = "float:right;" + imgStyle
		 if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle		
		 var strNewHTML = "<span " + imgID + imgClass + imgTitle
		 + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
	     + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
		 + "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>" 
		 img.outerHTML = strNewHTML
		 i = i-1
	     }
      }
   }
window.attachEvent("onload", correctPNG);
</script>
<![endif]-->

<script language="javascript" type="text/javascript">
	var charArray = new Array("は (wa)","が","に (1)","に (2)","へ (e)","で","ね","か","と","や","も","よ","を (wo/o)","の", "な", "から","まで","より","だけ","しか","し");
	var charDescArray = new Array
	("Topic Marker: A noun in front of は is the topic of the sentence<br><br>(Comparision は)<br>は replaces を and が<br>は follows に、へ、で、etc.: e.g. に--> には",
	"1. Subject Marker: A noun in front of が is emphasized <br><br>2. Object Marker of Adjective",
	"1. [to]: Direction of the motion verbs such as いく、くる、かえる<br><br>2. [at, on, in]: Point in time. **Some expressions of time don't use に<br><br>3. [for, in order to]: Purpose of the motion verbs<br><br>4. [at, on, in]: Location of existence",
	"1. [per]: A(amount of time) に B(#+counter) --> B per A<br><br>2. Indirect Object Marker<br><br>3. Direction of an action",
	"[to] Dirrection of the motion verb such as いく、くる、かえる",
	"[at, on, in] Location where an action takes place<br><br>[by, with, by means of...] <br><br>[because of...] ",
	"1. [isn't it?] Sentence-final particle: Asking for someone's agreement.",
	"1. [?] sentence-final question marker<br><br>2. [or] Connecting two or more nouns or pronouns.<br><br><a href=\"../../glist/y1/gl_y1_kadooka.php\">〜かどうか</a href><br><br><a href=\"../../glist/y2/gl_y2_embedquestion.php\">embedded question か</a href>",
	"1. [and] Connecting two or more nouns or pronouns.<br><br>2. [with]<br><br>3. Marks a quotation (direct/indirect/thought), sound...<br><br>4.  Marks information which identifies the noun following the phrase ",
	"[and things like that] Connecting two or more nouns or pronouns.",
	"1. [also] It replaces は、が、を. It follows other particles: <br> に --> にも、から --> からも、まで --> までも、etc. <br> <br> 2. [booth A and B]<br><br>3. [as much/many as]",
	"Sentence-final particle: Indicates strong conviction about a statement.",
	"1. Direct object marker: A noun in front of を is a direct object of the sentence. <p>2. [from, out of] Indicates a place/object from which something/someone leaves.</p> <p>3. [through] Indicates a place which something/someone moves over or through.",
	"1. [of, ...'s,] A noun modifying a noun. Possessive.", 
	"adjective marker: な comes after a な-adjective when it procedes a noun.",  
	"1. [..., so..., since, because] Marking the reason<p>2. [from] starting point in space or time of an action.<p></p><p><a href=\"../../glist/y2/gl_y2_tamenibc.php\">see also 〜から、〜ので、〜ために</a href></p>",
	"[until, as far as, to] ending point in space or time of an action.<p><a href=\"../../glist/y2/gl_y2_made&madeni.php\">see also まで vs までに</a href></p>",
	"AはBより（AのほうがBより）: A is more 〜 than B<p>より is a particle whereas ほう is a dependent noun.<p><a href=\"../../glist/y1/gl_y1_comparsuper.php\">see also 〜より〜ほうが；いちばん (Comparatives and Superlatives）</a href></p>",
	"[only, just, alone] Modifies the preceding noun. Neutral statement. だけ sentence can end either in affirmative or negative. <p>Replaceが、は、を with だけ；add だけ before or after other particles </p><p><a href=\"../../glist/y2/gl_y2_bakari_dake_shika.php\">see 〜だけ、〜ばかり、〜しか〜ない</a href></p>",
	"[only, just, nothing but...] Modifies the preceding noun. Emphasizes the negative proposition of a non-Noun/pronoun (what one did/does is not sufficient). <P>しか sentence ends with a negative.</p><p>しか replaces は、が、を.<br>しか follows other particles.<p><a href=\"../../glist/y2/gl_y2_bakari_dake_shika.php\">see 〜だけ、〜ばかり、〜しか〜ない</a href></p>",
	"listing reasons<br><br>plain form of い-adjective/verb + し、...<br>dictionary form of な-adjective/noun + だ／だった + し。...<br><br>the words listed have to agree (all good, all bad)");
	
	
	
	
	var examples = new Array
	("私<font color=#ff0000>は</font>HEBへ行きます。（わたし<font color=#ff0000>は</font>HEBへいきます。）<br>Topic Marker: <font color=#ff0000>I</font> go to HEB.<br><br>私は肉<font color=#ff0000>は</font>食べません。（わたしはにく<font color=#cff0000>は</font>たべません。)<br>Comparison は: I don't eat <font color=#ff0000>meat</font>, (but I eat other things.)",
	"1. 誰<font color=#ff0000>が</font>学校に行きますか。(だれ<font color=#ff0000>が</font>だっこうにいきますか。)<br>Subject Marker: <font color=#ff0000>Who</font> goes to school?<br><br>2. 日本語<font color=#ff0000>が</font>好きです。(にほんご<font color=#ff0000>が</font>すきです。)<br>Object Marker of Adjective: I like <font color=#ff0000>Japanese</font>.",
	"1. モール<font color=#ff0000>に</font>行きます。（モール<font color=#ff0000>に</font>いきます。）　I will go <font color=#ff0000>to</font>...<br><br>2. 二時<font color=#ff0000>に</font>モールに行きます。（にじ<font color=#ff0000>に</font>...　）　...<font color=#ff0000>at</font> 2:00.<br><br>**来週、モールに行きます。（らいしゅう...　）<br>I will go to the mall next week.<br><br>3. 二時にモールにかいもの<font color=#ff0000>に</font>行きます。　...<font color=#ff0000>for</font> shopping.<br><br>4. モール<font color=#ff0000>に</font>フード・コートがあります。<br>...a food court<font color=#ff0000> at</font> a mall.",
	"1  一日<font color=#ff0000>に</font>二回食べます。（いちにち<font color=#ff0000>に</font>にかい たべます。）<br>I eat twice a day.<br><br>2. 林さん<font color=#ff0000>に</font>本をあげました。（はやしさん<font color=#ff0000>に</font>ほんをあげました。）<br>I gave a book <font color=#ff0000>to</font> Hayashi-san.<br><br>3. ねこがはこ<font color=#ff0000>に</font> 入りました。(ねこがはこ<font color=#ff0000>に</font>はいりました。)<br>A cat went <font color=#ff0000>into</font> a box.",
	"日本<font color=#ff0000>へ</font>行きます。（にほん<font color=#ff0000>へ</font>いきます。）　I will go <font color=#ff0000>to</font> Japan.<br>",
	"メキシカンレストラン<font color=#ff0000>で</font>タコスを食べます。<br>I will eat Tacos <font color=#ff0000>at</font> a Mexican restaurant.<br><br>てんぷらをはし<font color=#ff0000>で</font>食べます。<br>I eat Tempura <font color=#ff0000>with</font> chopsticks.<br><br>バス<font color=#ff0000>で</font>シアトルへ行きました。<br>I went to Seattle by bus.<br><br>病気<font color=#ff0000>で</font>寝ていました。（びょうき<font color=#ff0000>で</font>ねていました。）<br>I was in bed <font color=#ff0000>because</font> I was ill.",
	"1. ヤングさんは大きいです<font color=#ff0000>ね</font>。(ヤングさんはおおきいです<font color=#ff0000>ね</font>。)<br>Mr./Ms. Young is big, isn't he?",
	"1. 何を勉強しています<font color=#ff0000>か</font>。(なにをべんきょうしています<font color=#ff0000>か</font>。）<br>What are you studying? <br><br>2. 日本語<font color=#ff0000>か</font>スペイン語を勉強したいんです。(にほんご<font color=#ff0000>か</font>スペインごをべんきょうしたいんです。）<br>I would like to study Japanese or Spanish.",
	"1. リンゴ<font color=#ff0000>と</font>オレンジを食べました。　I ate apples<font color=#ff0000> and</font> oranges.<br><br>2. 私はキムさん<font color=#ff0000>と</font>話しました。（わたしはキムさん<font color=#ff0000>と</font>はなしました。）I talked with Kim-san. <br><br>3. 私は「こんにちは」<font color=#ff0000>と</font>言いました。(...いいました。）I said, 'hello.' <br><br>4. 「みつばさ」<font color=#ff0000>と</font>いう本を読んでいます。（...ほんをよんでいます。）<br>I am reading a book called 'Mitsubasa.'",
	"私は日本語<font color=#ff0000>や</font>スペイン語を勉強しています。(わたしはにほんご<font color=#ff0000>や</font>スベインごをべんきょうしています。)<br>I am studying Japanese <font color=#ff0000>and </font>Spanish <font color=#ff0000>among other things</font>.",
	"1. リンさんはすしを食べました。わたし<font color=#ff0000>も</font>食べました。<br> Lin ate Sushi. I <font color=#ff0000>also</font> ate Sushi.<br><br> わたしはタコスを食べます。BBQ<font color=#ff0000>も</font>食べます。<br>I eat Tacos. I eat BBQ, <font color=#ff0000>too</font>.<br><br>2. 日本ご<font color=#ff0000>も</font>フランスご<font color=#ff0000>も</font>はなします。<br>I speak <font color=#ff0000>both</font> Japanese and French.<br><br>3. クラスに学生が３０にん<font color=#ff0000>も</font>います。There are <font color=#ff0000>as many as</font> 30 students in a class.",
	"これはおいしいです<font color=#ff0000>よ</font>。This is tasty, [I am telling you].",
	"1. 私はパン<font color=#ff0000>を</font>食べます。I eat bread.<p>2. うち<font color=#ff0000>を</font>出ます。（うち<font color=#ff0000>を</font>出ます。）I leave home. </p><p>3. 道<font color=#ff0000>を</font>歩きます。（みち<font color=#ff0000>を</font>あるきます。) I walk <font color=#ff0000>through</font> the street.",
	"私<font color=#ff0000>の</font>大学（わたし<font color=#ff0000>の</font>だいがく）My college<p>友だち<font color=#ff0000>の</font>本（ともだち<font color=#ff0000>の</font>ほん）my friend<font color=#ff0000>'s</font> book</p><p>テキサス<font color=#ff0000>の</font>オースティン　Austin, Texas</p><p>日本<font color=#ff0000>の</font>町（にほん<font color=#ff0000>の</font>まち）a town <font color=#ff0000>in</font> Japan</p>",
	"元気<font color=#ff0000>な</font>人（げんき<font color=#ff0000>な</font>ひと）Active and healthy person<p>有名<font color=#ff0000>な</font>大学　（ゆうめい<font color=#ff0000>な</font>だいがく）famous college", 
	"1. 病気だ<font color=#ff0000>から</font>、学校を休みます。（びょうきだ<font color=#ff0000>から</font>、がっこうをやすみます。） I am sick, <font color=#ff0000>so</font> I will skip school.<p>2. １０時<font color=#ff0000>から</font>勉強します。(１０じ<font color=#ff0000>から</font>べんきょうします。）<br>I will study <font color=#ff0000>from</font> 10:00.<p>2. 私は長野<font color=#ff0000>から</font>来ました。（わたしはながの<font color=#ff0000>から</font>きました。）<br>I came <font color=#ff0000>from</font> Nagano.",
	"３時<font color=#ff0000>まで</font>勉強しました。（３じ<font color=#ff0000>まで</font>べんきょうしました。）<br>I studied <font color=#ff0000>until</font> 3:00.<p>２時から３時<font color=#ff0000>まで</font>テレビを見ました。（２じから３じ<font color=#ff0000>まで</font>テレビをみました。）<br>I watched TV from 2 <font color=#ff0000>to</font> 3.</p><p>ダラスからラレド<font color=#ff0000>まで</font>バスで行きました。（ダラスからラレド<font color=#ff0000>まで</font>バスでいきました。）<br>I went from Dallas <font color=#ff0000>to</font> Laredo by bus.</p>",
	"アメリカは日本<font color=#ff0000>より</font>大きいです。America is large<font color=#ff0000>r than</font> Japan.<p>林さんのほうが町田さん<font color=#ff0000>より</font>よく話します。（はやしさんのほうがまちださん<font color=#ff0000>より</font>よくはなします。）<br>Hayashi-san talked <font color=#ff0000>more than</font> Machida-san.",
	"肉<font color=#ff0000>だけ</font>（を）買いました。（にく<font color=#ff0000>だけ</font>（を）かいました。）<br>I bought <font color=#ff0000>only </font>meat.",
	"肉<font color=#ff0000>しか</font>食べません。（にく<font color=#ff0000>しか</font>たべません。）<br>I eat <font color=#ff0000>only </font>meat.",
	"ジェスターのBBQは安い<font color=#ff0000>し</font>おいしいです。（ジェスターのBBQはやすい<font color=#ff0000>し</font>おいしいです）<br>Jester's BBQ ia cheap  <font color=#ff0000>and </font>tasty.<br><br>トトロはかわいい<font color=#ff0000>し</font>、おもしろい<font color=#ff0000>し</font>、私は大好きです。(...わたしはだいすきです。)<br>Totoro is cute <font color=#ff0000>and </font> interesting, <font color=#ff0000>so</font> I love it.");
	
	
	
	function gotoChar(i) {
		document.getElementById("character").innerHTML=charArray[i];
		document.getElementById("characterDescription").innerHTML=charDescArray[i];
		document.getElementById("examples").innerHTML=examples[i];
	}
</script>

<title>Particle Dictionary</title>

</head>


<STYLE TYPE="text/css">
<!--
.leftArea {
	background-image:url(leftbarbackground.png);
	width:160px;
	min-height:600px;
	float: left;
}

#right-container {width:500px; float:right;}
.right-top {width:500px; height:15px; background:url('right-top.gif') top left no-repeat;}
.right-bottom {width:500px; height:15px; background:url('right-bottom.gif') top left no-repeat;}
.rightArea {
	background:url('right-middle.gif') top left repeat-y;
	width:500px;
	min-height:570px;
}

.mainBody {
	background-color:#FFC59A;
	width: 667px;
	position:relative;
	align: center;
	margin: 10px 10px 10px 10px;
}

.character {
	text-align:center;
	padding-top:20px;
	font-size: 32px;
	border-bottom: 1px solid black;
	height: 60px;
}

.characterDescription {
	text-align: left;
	padding: 20px 30px 15px 30px;
	font-size: 14px;
	border-bottom: 1px solid black;
	min-height:200px;
}

.examples {
	text-align: left;
	padding: 30px 30px 15px 30px;
	font-size: 14px;
}

.characterButtonLeft {
	background-image:url(characterbutton.png);
	padding-top: 4px;
	width:48px;
	height:42px;
	font-size: 20px;
	margin: 5px 8px 2px 18px;
	float:left;
	cursor: pointer;
	
}

.characterButtonRight {
    background-image:url(characterbutton.png);
	padding-top: 4px;
	width:48px;
	height:42px;
	font-size: 20px;
	margin: 5px 18px 2px 8px;
	float:right;
	cursor: pointer;
}


-->
</STYLE>

<body style="background-color:#FFC59A; text-align:center;">
<center>
<IMG SRC="particleslogo.png" style="margin-bottom:10px;">
<p align = "right"> <a href="../../../gparticle.php">return to Grammar Particle Lists</a>


<div id="mainBody" class="mainBody">
<div class="leftArea" id="leftArea">
	
	<div class="characterButtonLeft" onClick="gotoChar(0)">は</div>
	<div class="characterButtonRight" onClick="gotoChar(1)">が</div>
	<div class="characterButtonLeft" onClick="gotoChar(2)">に<font size=2>(1)</font></div>
	<div class="characterButtonRight" onClick="gotoChar(3)">に<font size=2>(2)</font></div>
	<div class="characterButtonLeft" onClick="gotoChar(4)">へ</div>
	<div class="characterButtonRight" onClick="gotoChar(5)">で</div>
	<div class="characterButtonLeft" onClick="gotoChar(6)">ね</div>
	<div class="characterButtonRight" onClick="gotoChar(7)">か</div>
	<div class="characterButtonLeft" onClick="gotoChar(8)">と</div>
	<div class="characterButtonRight" onClick="gotoChar(9)">や</div>
	<div class="characterButtonLeft" onClick="gotoChar(10)">も</div>
	<div class="characterButtonRight" onClick="gotoChar(11)">よ</div>
	<div class="characterButtonLeft" onClick="gotoChar(12)">を</div>
	<div class="characterButtonRight" onClick="gotoChar(13)">の</div>
	<div class="characterButtonLeft" onClick="gotoChar(14)">な</div>
	<div class="characterButtonRight" onClick="gotoChar(15)">から</div>
	<div class="characterButtonLeft" onClick="gotoChar(16)">まで</div>
	<div class="characterButtonRight" onClick="gotoChar(17)">より</div>
	<div class="characterButtonLeft" onClick="gotoChar(18)">だけ</div>
	<div class="characterButtonRight" onClick="gotoChar(19)">しか</div>
	<div class="characterButtonLeft" onClick="gotoChar(20)">し</div>
</div>
<div id="right-container">
    <div class="right-top"></div>
    <div class="rightArea" id="rightArea">
        <div class="character" id="character"></div>	
        <div class="characterDescription" id="characterDescription"></div>
        <div class="examples" id="examples"></div>
    </div>
    <div class="right-bottom"></div>
</div>




</div>

<script type="text/javascript">gotoChar(0);</script>

</body>
</html>
