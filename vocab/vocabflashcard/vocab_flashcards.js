// variables
var kanjiA = new Array();
var furiganaA = new Array();
var englishA = new Array();
var audioA = new Array();
var numFlashcards;
var map = new Array ();
var mapIndex;
var timeOutFuri; //powei feng fix 07-05-11
var timeOutEng;
var timeOutAudio;

// functions
function init() {
	for (i=0; i<numFlashcards; i++)
		{
			map[i] = i;
		}
	document.getElementById("kanji").innerHTML = "";
	document.getElementById("furigana").innerHTML = "";
	document.getElementById("english").innerHTML = "";
	mapIndex = -1;
	scramble();
	nextKanji();
}

function nextKanji() {
	if (mapIndex < numFlashcards-1)
		{
			clearTimeout(timeOutFuri);
			clearTimeout(timeOutEng);
			mapIndex++;
			document.getElementById("kanji").innerHTML = kanjiA[map[mapIndex]];
			document.getElementById("furigana").innerHTML = "";
			document.getElementById("english").innerHTML = "";
			//if (eval("document.f.displayF.checked") == true)
			if(document.getElementById("displayF").checked == true)	
				{
					timeOutFuri=setTimeout('showFurigana()', document.f.delay.value*1000);
				}
			else if (eval("document.f.displayE.checked") == true)
				{
					timeOutEng=setTimeout('showEnglish()', document.f.delay.value*1000);
				}
			else if (eval("document.f.displayA.checked") == true)
				{
					timeOutAudio=setTimeout('playSound()', document.f.delay.value*1000);
				}
		}
	else
		{
			done();
		}
}

function previousKanji() {
	if (mapIndex > 0)
		{
			clearTimeout(timeOutFuri);
			clearTimeout(timeOutEng);
			mapIndex--;
			document.getElementById("kanji").innerHTML = kanjiA[map[mapIndex]];
			document.getElementById("furigana").innerHTML = "";
			document.getElementById("english").innerHTML = "";
			if (eval("document.f.displayF.checked") == true)
				{
					timeOutFuri=setTimeout('showFurigana()', document.f.delay.value*1000);
				}
			else if (eval("document.f.displayE.checked") == true)
				{
					timeOutEng=setTimeout('showEnglish()', document.f.delay.value*1000);
				}
			else if (eval("document.f.displayA.checked") == true)
				{
					timeOutAudio=setTimeout('playSound()', document.f.delay.value*1000);
				}
		}
	else
		{
			done();
		}
}

function showFurigana() {
	document.getElementById("furigana").innerHTML = furiganaA[map[mapIndex]];
	if (eval("document.f.displayE.checked") == true)
		{
			timeOutEng=setTimeout('showEnglish()', document.f.delay.value*1000);
		}
	else if (eval("document.f.displayA.checked") == true)
		{
			timeOutAudio=setTimeout('playSound()', document.f.delay.value*1000);
		}
}

function showEnglish() {
	document.getElementById("english").innerHTML = englishA[map[mapIndex]];
	if (eval("document.f.displayA.checked") == true)
		{
			timeOutAudio=setTimeout('playSound()', document.f.delay.value*1000);
		}
}

function playSound(soundfile) {
	document.getElementById("audio").innerHTML="<embed src=\""+audioA[map[mapIndex]]+".mp3\" hidden=\"true\" autostart=\"true\" loop=\"false\" />";
}

function done() {
	alert('Click START for a new game.');
}

function scramble() {
	for (z = 0; z < 2; z++) {
		for (x = 0; x < numFlashcards; x++) {
			randomI = Math.floor(Math.random()*numFlashcards);
			randomVal = map[randomI];
			savedVal = map[x];
			map[x] = randomVal;
			map[randomI] = savedVal;
		}
	}
}
