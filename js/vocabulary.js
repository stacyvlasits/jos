// VARIABLES ----------------------------------------------------------
// Object constructor 
function vocabWordRecord (kanji, hiragana, roomaji, partsofspeech, english, audio, sentenceJ, sentenceR, sentenceE) { 
   this.kanji = kanji; // index 0
   this.hiragana = hiragana; // index 1
   this.roomaji = roomaji; // index 2
   this.partsofspeech = partsofspeech;
   this.english = english;
   this.audio = audio;
   this.sentenceJ = sentenceJ;
   this.sentenceR = sentenceR;
   this.sentenceE = sentenceE;
}

function makeArray(length) { 
	this.length = length;
	for (i = 0; i < length; ++i) { 
		this[i] = null;
	} 
	return this;
}
var vocabListArray = new makeArray(0); // Array of vocabulary lists

/* ---------------------
** Current Vocabulary Lists
** ---------------------
** Emotions
** Colors 
** Animals
** Food and Eating
** Greetings
**
** Weather
** Sports
** Occupations
** Common Phrases
** Movement
** Classroom
** Math
** Building
** Relatives
** Meals
*/


// ----------------------------------------------------------
// Vocabulary List :: Colors
// ----------------------------------------------------------
			function constructVocab_Colors()
			{
			++vocabListArray.length;
			vocabListArray['Colors'] = new makeArray(0); 

			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'色',
				'いろ',
				'iro',
				'adj',
				'color',
				'../joshu/wav/iro.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'赤、赤い',
				'あか、あかい',
				'aka, akai',
				'n,adj',
				'red',
				'../joshu/wav/aka.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'青、青い',
				'あお、あおい',
				'ao, aoi',
				'n,adj',
				'blue',
				'../joshu/wav/ao.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'黄色、黄色い',
				'きいろ、きいろい',
				'kiiro, kiiroi',
				'n,adj',
				'yellow',
				'../joshu/wav/kiiro.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'緑',
				'みどり、グリーン',
				'midori, guriin',
				'n',
				'green',
				'../joshu/wav/midori.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'紫',
				'むらさき',
				'murasaki',
				'n',
				'purple',
				'../joshu/wav/murasaki.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'オレンジ',
				'orenji',
				'n',
				'orange',
				'../joshu/wav/orenji.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'灰色',
				'はいいろ',
				'haiiro',
				'n',
				'gray',
				'../joshu/wav/haiiro.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'白、白い',
				'しろ、しろい',
				'shiro, shiroi',
				'n,adj',
				'white',
				'../joshu/wav/shiro.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'黒、黒い',
				'くろ、くろい',
				'kuro, kuroi',
				'n,adj',
				'black',
				'../joshu/wav/kuro.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'茶色、茶色い',
				'ちゃいろ、ちゃいろい',
				'chairo, chairoi',
				'n,adj',
				'brown',
				'../joshu/wav/chairo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'水色',
				'みずいろ',
				'mizuiro',
				'n',
				'light blue',
				'../joshu/wav/mizuiro.wav',
				'空は水色だ。',
				'Sora wa mizuiro da.',
				'The sky is light blue.');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'ピンク',
				'pinku',
				'n',
				'pink',
				'../joshu/wav/pinku.wav',
				'空は水色だ。',
				'Sora wa mizuiro da.',
				'The sky is light blue.');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'桃色',
				'ももいろ',
				'momoiro',
				'n',
				'peach color',
				'../joshu/wav/momoiro.wav',
				'空は水色だ。',
				'Sora wa mizuiro da.',
				'The sky is light blue.');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'暗い',
				'くらい',
				'kurai',
				'adj',
				'dark',
				'../joshu/wav/kurai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'明るい',
				'あかるい',
				'akarui',
				'adj',
				'light, bright',
				'../joshu/wav/akarui.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			/*
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'冴えた色',
				'さえたいろ',
				'saetairo',
				'n',
				'bright color',
				'../joshu/wav/saetairo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			*/
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'薄い',
				'うすい',
				'usui',
				'adj',
				'light, pale',
				'../joshu/wav/usui.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'濃い',
				'こい',
				'koi',
				'n',
				'dark, deep',
				'../joshu/wav/koi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'派手(な)',
				'はで(な)',
				'hade(na)',
				'&nbsp;',
				'bright, gaudy',
				'../joshu/wav/hade.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Colors'].length;
			vocabListArray['Colors'][vocabListArray['Colors'].length-1] = new vocabWordRecord (
				'地味(な)',
				'じみ(な)',
				'jimi(na)',
				'&nbsp;',
				'muted, subdued color',
				'../joshu/wav/jimi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			return 'Colors';
			}



			function embedAudioList(cat)
			{
				for (var i=0; i<vocabListArray[cat].length; ++i)
				{
					document.writeln('<embed src="' + vocabListArray[cat][i].audio + '" autostart=false hidden=true name="sound' + i + '">');
				}
				//vocabListArray[cat][i].audio
				//	sound + i 
				//<embed src="six.wav" autostart=false hidden=true name="sound1">

			}



// ----------------------------------------------------------
// Vocabulary List :: Emotions
// ----------------------------------------------------------
			function constructVocab_Emotions()
			{
			++vocabListArray.length;
			vocabListArray['Emotions'] = new makeArray(0); 


			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'気持ち',
				'きもち',
				'kimochi',
				'n',
				'feeling; mood; atmosphere',
				'../joshu/wav/kimochi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'感じる',
				'かんじる',
				'kanjiru',
				'v',
				'to feel [an emotion]',
				'../joshu/wav/kanjiru.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'心',
				'こころ',
				'kokoro',
				'n',
				'mind; feeling; heart',
				'../joshu/wav/kokoro.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'嬉しい',
				'うれしい',
				'ureshii',
				'adj',
				'happy',
				'../joshu/wav/ureshii.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'喜ぶ',
				'よろこぶ',
				'yorokobu',
				'v',
				'to be happy',
				'../joshu/wav/yorokobu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'悲しい',
				'かなしい',
				'kanashii',
				'adj',
				'sad',
				'../joshu/wav/kanashii.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'悲しむ',
				'かなしむ',
				'kanashimu',
				'v',
				'to be sad',
				'../joshu/wav/kanashimu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'楽しい',
				'たのしい',
				'tanoshii',
				'adj',
				'enjoyable, fun',
				'../joshu/wav/tanoshii.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'楽しむ',
				'たのしむ',
				'tanoshimu',
				'v',
				'to have fun',
				'../joshu/wav/tanoshimu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'笑う',
				'わらう',
				'warau',
				'v',
				'to laugh; to smile',
				'../joshu/wav/warau.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'寂しい',
				'さびしい',
				'sabishii',
				'adj',
				'lonely',
				'../joshu/wav/sabishii.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'苦しい',
				'くるしい',
				'kurushii',
				'adj',
				'painful',
				'../joshu/wav/kurushii.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'怖い',
				'こわい',
				'kowai',
				'adj',
				'frightening; afraid',
				'../joshu/wav/kowai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'怖がる',
				'こわがる',
				'kowagaru',
				'v',
				'to be frightened',
				'../joshu/wav/kowagaru.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'恥ずかしい',
				'はずかしい',
				'hazukashii',
				'adj',
				'embarrassed',
				'../joshu/wav/hazukashii.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'泣く',
				'なく',
				'naku',
				'v',
				'to cry',
				'../joshu/wav/naku.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'怒る',
				'おこる',
				'okoru',
				'v',
				'to get angry',
				'../joshu/wav/okoru.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'怒っている',
				'おこっている',
				'okotteiru',
				'v',
				'to be angry',
				'../joshu/wav/okotteiru.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'驚く',
				'おどろく',
				'odoroku',
				'v',
				'to be surprised',
				'../joshu/wav/odoroku.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'びっくりする',
				'bikkuri suru',
				'v',
				'to be surprised',
				'../joshu/wav/bikkurisuru.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'心配',
				'しんぱい',
				'shinpai',
				'n',
				'worry',
				'../joshu/wav/shinpai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'心配する',
				'しんぱいする',
				'shinpai suru',
				'v',
				'to be worried',
				'../joshu/wav/shinpaisuru.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'安心',
				'あんしん',
				'anshin',
				'n',
				'relief',
				'../joshu/wav/anshin.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'安心する',
				'あんしんする',
				'anshin suru',
				'v',
				'to be relieved',
				'../joshu/wav/anshinsuru.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'がっかりする',
				'gakkari suru',
				'v',
				'to be disappointed',
				'../joshu/wav/gakkarisuru.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'イライラする',
				'iraira suru',
				'v',
				'to be irritated',
				'../joshu/wav/irairasuru.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Emotions'].length;
			vocabListArray['Emotions'][vocabListArray['Emotions'].length-1] = new vocabWordRecord (
				'困る',
				'こまる',
				'komaru',
				'v',
				'to have difficulty; to be troubled',
				'../joshu/wav/komaru.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');


			return 'Emotions';
			}


// ----------------------------------------------------------
// Vocabulary List :: Occupations
// ----------------------------------------------------------
			function constructVocab_Occupations()
			{
			++vocabListArray.length;
			vocabListArray['Occupations'] = new makeArray(0);


			++vocabListArray['Occupations'].length;
			vocabListArray['Occupations'][vocabListArray['Occupations'].length-1] = new vocabWordRecord (
				'色',
				'いろ',
				'iro',
				'adj',
				'color',
				'../joshu/wav/blank.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			return 'Occupations';
			}

// ----------------------------------------------------------
// Vocabulary List :: Greetings
// ----------------------------------------------------------
			function constructVocab_Greetings()
			{
			++vocabListArray.length;
			vocabListArray['Greetings'] = new makeArray(0);


			++vocabListArray['Greetings'].length;
			vocabListArray['Greetings'][vocabListArray['Greetings'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'おはようございます。',
				'ohayoo gozaimasu',
				'&nbsp;',
				'Good morning. (formal)',
				'../joshu/wav/ohayoogozaimasu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Greetings'].length;
			vocabListArray['Greetings'][vocabListArray['Greetings'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'おはよう。',
				'ohayoo',
				'&nbsp;',
				'Good morning. (informal)',
				'../joshu/wav/ohayoo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Greetings'].length;
			vocabListArray['Greetings'][vocabListArray['Greetings'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'こんにちは。',
				'konnichi wa',
				'&nbsp;',
				'Good afternoon.',
				'../joshu/wav/konnichiwa.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Greetings'].length;
			vocabListArray['Greetings'][vocabListArray['Greetings'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'こんばんは。',
				'konban wa',
				'&nbsp;',
				'Good evening.',
				'../joshu/wav/konbanwa.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Greetings'].length;
			vocabListArray['Greetings'][vocabListArray['Greetings'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'おやすみなさい。',
				'oyasuminasai',
				'&nbsp;',
				'Good night. (formal)',
				'../joshu/wav/oyasuminasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Greetings'].length;
			vocabListArray['Greetings'][vocabListArray['Greetings'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'おやすみ。',
				'oyasumi',
				'&nbsp;',
				'Good night. (informal)',
				'../joshu/wav/oyasumi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');


















			
			++vocabListArray['Greetings'].length;
			vocabListArray['Greetings'][vocabListArray['Greetings'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'いただきます',
				'itadakimasu',
				'&nbsp;',
				'Let\'s start eating. (A phrase said before eating.)',
				'../joshu/wav/itadakimasu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Greetings'].length;
			vocabListArray['Greetings'][vocabListArray['Greetings'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'ごちそうさま',
				'gochisoosama',
				'&nbsp;',
				'a polite expression said after a meal',
				'../joshu/wav/gochisoosama.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Greetings'].length;
			vocabListArray['Greetings'][vocabListArray['Greetings'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'はじめまして',
				'hajimemashite',
				'&nbsp;',
				'How do you do?',
				'../joshu/wav/hajimemashite.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Greetings'].length;
			vocabListArray['Greetings'][vocabListArray['Greetings'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'どうぞよろしく。',
				'doozo yoroshiku',
				'&nbsp;',
				'It\'s nice to meet you.',
				'../joshu/wav/doozoyoroshiku.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Greetings'].length;
			vocabListArray['Greetings'][vocabListArray['Greetings'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'おめでとうございます。',
				'omedetoo gozaimasu',
				'&nbsp;',
				'Congratulations!',
				'../joshu/wav/omedetoogozaimasu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Greetings'].length;
			vocabListArray['Greetings'][vocabListArray['Greetings'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'さようなら',
				'sayoonara',
				'&nbsp;',
				'Good bye. (said before parting for a while)',
				'../joshu/wav/sayoonara.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Greetings'].length;
			vocabListArray['Greetings'][vocabListArray['Greetings'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'じゃあまた。',
				'jaa mata',
				'&nbsp;',
				'Good bye.',
				'../joshu/wav/jaamata.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Greetings'].length;
			vocabListArray['Greetings'][vocabListArray['Greetings'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'ではまた。',
				'dewa mata',
				'&nbsp;',
				'Good bye.',
				'../joshu/wav/dehamata.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Greetings'].length;
			vocabListArray['Greetings'][vocabListArray['Greetings'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'ではまたこのつぎ。',
				'dewa mata kono tsugi',
				'&nbsp;',
				'See you next time.',
				'../joshu/wav/dehamatakonotsugi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			


			return 'Greetings';
			}


// ----------------------------------------------------------
// Vocabulary List :: Food and Eating
// ----------------------------------------------------------
			function constructVocab_FoodandEating()
			{
			++vocabListArray.length;
			vocabListArray['Food and Eating'] = new makeArray(0);


			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'食べる',
				'たべる',
				'taberu',
				'v',
				'to eat',
				'../joshu/wav/taberu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'食べ物',
				'たべもの',
				'tabemono',
				'n',
				'food',
				'../joshu/wav/tabemono.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'飲む',
				'のむ',
				'nomu',
				'v',
				'to drink',
				'../joshu/wav/nomu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'飲み物',
				'のみもの',
				'nomimono',
				'n',
				'drink, beverage',
				'../joshu/wav/nomimono.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'食料品',
				'しょくりょうひん',
				'shokuryoohin',
				'n',
				'foodstuffs',
				'../joshu/wav/shokuryoohin.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'肉',
				'にく',
				'niku',
				'n',
				'meat',
				'../joshu/wav/niku.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'牛肉',
				'ぎゅうにく',
				'gyuuniku',
				'n',
				'beef',
				'../joshu/wav/gyuuniku.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'豚肉',
				'ぶたにく',
				'butaniku',
				'n',
				'pork',
				'../joshu/wav/butaniku.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'鳥肉',
				'とりにく',
				'toriniku',
				'n',
				'chicken',
				'../joshu/wav/toriniku.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'ラム',
				'ramu',
				'n',
				'lamb',
				'../joshu/wav/ramu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'魚',
				'さかな',
				'sakana',
				'n',
				'fish',
				'../joshu/wav/sakana.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'貝',
				'かい',
				'kai',
				'n',
				'shellfish',
				'../joshu/wav/kai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'まぐろ',
				'maguro',
				'n',
				'tuna',
				'../joshu/wav/maguro.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'さけ',
				'sake',
				'n',
				'salmon',
				'../joshu/wav/sake.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'いか',
				'ika',
				'n',
				'cuttlefish, squid',
				'../joshu/wav/ika.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'たこ',
				'tako',
				'n',
				'octopus',
				'../joshu/wav/tako.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'野菜',
				'やさい',
				'yasai',
				'n',
				'vegetable',
				'../joshu/wav/yasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'レタス',
				'retasu',
				'n',
				'lettuce',
				'../joshu/wav/retasu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'にんじん',
				'ninjin',
				'n',
				'carrot',
				'../joshu/wav/ninjin.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'豆',
				'まめ',
				'mame',
				'n',
				'bean, pea',
				'../joshu/wav/mame.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'じゃがいも',
				'jagaimo',
				'n',
				'potato',
				'../joshu/wav/jagaimo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'きゅうり',
				'kyuuri',
				'n',
				'cucumber',
				'../joshu/wav/kyuuri.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'玉ねぎ',
				'たまねぎ',
				'tamanegi',
				'n',
				'onion',
				'../joshu/wav/tamanegi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'トマト',
				'tomato',
				'n',
				'tomato',
				'../joshu/wav/tomato.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'ピーマン',
				'piiman',
				'n',
				'green pepper',
				'../joshu/wav/piiman.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'果物',
				'くだもの',
				'kudamono',
				'n',
				'fruit',
				'../joshu/wav/kudamono.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'バナナ',
				'banana',
				'n',
				'banana',
				'../joshu/wav/banana.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'みかん',
				'mikan',
				'n',
				'mandarin orange',
				'../joshu/wav/mikan.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'りんご',
				'ringo',
				'n',
				'apple',
				'../joshu/wav/ringo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'なし',
				'nashi',
				'n',
				'pear',
				'../joshu/wav/nashi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'ぶどう',
				'budoo',
				'n',
				'grape',
				'../joshu/wav/budoo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'レモン',
				'remon',
				'n',
				'lemon',
				'../joshu/wav/remon.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'パイナップル',
				'painappuru',
				'n',
				'pineapple',
				'../joshu/wav/painappuru.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'メロン',
				'meron',
				'n',
				'melon',
				'../joshu/wav/meron.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Food and Eating'].length;
			vocabListArray['Food and Eating'][vocabListArray['Food and Eating'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'いちご',
				'ichigo',
				'n',
				'strawberry',
				'../joshu/wav/ichigo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			return 'Food and Eating';
			}


// ----------------------------------------------------------
// Vocabulary List :: Drinks, i352
// ----------------------------------------------------------
			function constructVocab_Drinks()
			{
			++vocabListArray.length;
			vocabListArray['Drinks'] = new makeArray(0);


			++vocabListArray['Drinks'].length;
			vocabListArray['Drinks'][vocabListArray['Drinks'].length-1] = new vocabWordRecord (
				'色',
				'いろ',
				'iro',
				'adj',
				'color',
				'../joshu/wav/blank.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			return 'Drinks';
			}


// ----------------------------------------------------------
// Vocabulary List :: Leisure Activities
// ----------------------------------------------------------
			function constructVocab_LeisureActivities()
			{
			++vocabListArray.length;
			vocabListArray['Leisure Activities'] = new makeArray(0);


			++vocabListArray['Leisure Activities'].length;
			vocabListArray['Leisure Activities'][vocabListArray['Leisure Activities'].length-1] = new vocabWordRecord (
				'色',
				'いろ',
				'iro',
				'v',
				'color',
				'../joshu/wav/blank.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			return 'Leisure Activities';
			}

// ----------------------------------------------------------
// Vocabulary List :: Sports
// ----------------------------------------------------------
			function constructVocab_Sports()
			{
			++vocabListArray.length;
			vocabListArray['Sports'] = new makeArray(0); 

			++vocabListArray['Sports'].length;
			vocabListArray['Sports'][vocabListArray['Sports'].length-1] = new vocabWordRecord (
				'色',
				'いろ',
				'iro',
				'v',
				'color',
				'../joshu/wav/blank.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			return 'Sports';
			}


// ----------------------------------------------------------
// Vocabulary List :: Common Phrases
// ----------------------------------------------------------
			function constructVocab_CommonPhrases()
			{
			++vocabListArray.length;
			vocabListArray['Common Phrases'] = new makeArray(0); 

			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'はい',
				'hai',
				'&nbsp;',
				'yes',
				'../joshu/wav/hai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'いいえ',
				'iie',
				'&nbsp;',
				'no',
				'../joshu/wav/iie.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'どうぞ',
				'doozo',
				'&nbsp;',
				'Please (go ahead, have some, etc.)',
				'../joshu/wav/doozo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'おさきにどうぞ',
				'osaki ni doozo',
				'&nbsp;',
				'After you, please.',
				'../joshu/wav/osakinidoozo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'ありがとうございます。',
				'arigatoo gozaimasu',
				'&nbsp;',
				'Thank you. (formal)',
				'../joshu/wav/arigatoogozaimasu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'ありがとう。',
				'arigatoo',
				'&nbsp;',
				'Thank you. (informal)',
				'../joshu/wav/arigatoo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'どういたしまして。',
				'doo itashimashite',
				'&nbsp;',
				'You\'re welcome.',
				'../joshu/wav/dooitashimashite.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'いいえ、けっこうです。',
				'iie, kekkoo desu',
				'&nbsp;',
				'No, thank you.',
				'../joshu/wav/iiekekkoodesu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'ごめんなさい。',
				'gomennasai',
				'&nbsp;',
				'I\m sorry.',
				'../joshu/wav/gomennasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'すみません。',
				'sumimasen',
				'&nbsp;',
				'I\'m sorry; excuse me; thank you',
				'../joshu/wav/sumimasen.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'おげんきですか。',
				'ogenki desu ka',
				'&nbsp;',
				'How are you? (used when the speaker hasn\'t seen the person for a while)',
				'../joshu/wav/ogenkidesuka.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'できます。',
				'dekimasu',
				'&nbsp;',
				'I can do it; I am able to do it.',
				'../joshu/wav/dekimasu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'できません。',
				'dekimasen',
				'&nbsp;',
				'I cannot do it; I am not able to do it.',
				'../joshu/wav/dekimasen.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'日本語',
				'にほんご',
				'nihongo',
				'&nbsp;',
				'Japanese',
				'../joshu/wav/nihongo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'英語',
				'えいご',
				'eigo',
				'&nbsp;',
				'English',
				'../joshu/wav/eigo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'日本語はできません。',
				'にほんごはできません。',
				'nihongo ha dekimasen',
				'&nbsp;',
				'I cannot speak Japanese.',
				'../joshu/wav/nihongohadekimasen.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'英語が/はできます。',
				'えいごが/はできます。',
				'eigo ga/ha dekimasu',
				'&nbsp;',
				'I can speak English.',
				'../joshu/wav/eigogadekimasu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'英語できますか。',
				'えいごできますか。',
				'eigo dekimasu ka',
				'&nbsp;',
				'Can you speak English?',
				'../joshu/wav/eigodekimasuka.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'分かりません。',
				'わかりません。',
				'wakarimasen',
				'&nbsp;',
				'I don\'t understand.',
				'../joshu/wav/wakarimasen.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'分かります。',
				'わかります。',
				'wakarimasu',
				'&nbsp;',
				'I understand.',
				'../joshu/wav/wakarimasu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'分かりますか。',
				'わかりますか。',
				'wakarimasuka',
				'&nbsp;',
				'Do you understand?',
				'../joshu/wav/wakarimasuka.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'下さい',
				'ください',
				'kudasai',
				'&nbsp;',
				'Please [give me; let me do something]',
				'../joshu/wav/kudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'書いてください。',
				'かいてください。',
				'kaite kudasai',
				'&nbsp;',
				'Please read [this].',
				'../joshu/wav/kaitekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'電話してください。',
				'でんわしてください。',
				'denwa shite kudasai',
				'&nbsp;',
				'Please call.',
				'../joshu/wav/denwashitekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'おなかがすいた。',
				'onaka ga suita',
				'&nbsp;',
				'I\'m hungry.',
				'../joshu/wav/onakagasuita.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'食べましょう',
				'たべましょう',
				'tabemashoo',
				'&nbsp;',
				'Let\'s eat.',
				'../joshu/wav/tabemashoo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'いただきます',
				'itadakimasu',
				'&nbsp;',
				'Let\'s start eating. (A phrase said before eating.)',
				'../joshu/wav/itadakimasu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'おいしい',
				'oishii',
				'&nbsp;',
				'delicious',
				'../joshu/wav/oishii.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'まずい',
				'mazui',
				'&nbsp;',
				'This tastes terrible.',
				'../joshu/wav/mazui.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'さむいね。',
				'samui ne',
				'&nbsp;',
				'It\'s cold, isn\'t it! (colloquial expression)',
				'../joshu/wav/samuine.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'あついね。',
				'atsui ne',
				'&nbsp;',
				'It\'s hot, isn\'t it! (colloquial expression)',
				'../joshu/wav/atsuine.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'好きです。',
				'すきです。',
				'suki desu',
				'&nbsp;',
				'I like [it, her, etc.]',
				'../joshu/wav/sukidesu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'いりません。',
				'irimasen',
				'&nbsp;',
				'I don\'t need/want [it, any, etc.]',
				'../joshu/wav/irimasen.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'大丈夫ですか。',
				'だいじょうぶですか。',
				'dai joobu desu ka',
				'&nbsp;',
				'Are you okay?',
				'../joshu/wav/daijoobudesuka.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Common Phrases'].length;
			vocabListArray['Common Phrases'][vocabListArray['Common Phrases'].length-1] = new vocabWordRecord (
				'どうぞお大事に',
				'どうぞおだいじに',
				'doozo odaijini',
				'&nbsp;',
				'Take care of yourself. (said when someone is sick)',
				'../joshu/wav/doozoodaijini.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');




			return 'Common Phrases';
			}


// ----------------------------------------------------------
// Vocabulary List :: Animals
// ----------------------------------------------------------
			function constructVocab_Animals()
			{
			++vocabListArray.length;
			vocabListArray['Animals'] = new makeArray(0);


			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'動物',
				'どうぶつ',
				'doobutsu',
				'n',
				'animal',
				'../joshu/wav/doobutsu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'鰐',
				'わに',
				'wani',
				'n',
				'alligator',
				'../joshu/wav/wani.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'熊',
				'くま',
				'kuma',
				'n',
				'bear',
				'../joshu/wav/kuma.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'蜂',
				'はち',
				'hachi',
				'n',
				'bee',
				'../joshu/wav/hachi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'猫',
				'ねこ',
				'neko',
				'n',
				'cat',
				'../joshu/wav/neko.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'油虫',
				//'あぶらむし、コックローチ、ゴキブリ',
				'ゴキブリ',
				'gokiburi',
				'n',
				'cockroach',
				'../joshu/wav/gokiburi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'牛',//、牝牛',
				'うし',//、めうし',
				//'ushi, meushi',
				'ushi',
				'n',
				'cow',
				'../joshu/wav/ushi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'恐龍',
				'きょうりゅう',
				'kyooryuu',
				'n',
				'dinosaur',
				'../joshu/wav/kyooryuu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'犬',
				'いぬ',
				'inu',
				'n',
				'dog',
				'../joshu/wav/inu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'海豚',
				'いるか',
				'iruka',
				'n',
				'dolphin',
				'../joshu/wav/iruka.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'驢馬',
				'ろば',
				'roba',
				'n',
				'donkey',
				'../joshu/wav/roba.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'フェレット',
				'feretto',
				'n',
				'ferret',
				'../joshu/wav/feretto.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'魚',
				'さかな',
				'sakana',
				'n',
				'fish',
				'../joshu/wav/sakana.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'蝿',
				'はえ',
				'hae',
				'n',
				'fly',
				'../joshu/wav/hae.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'蛙',
				'かえる',
				'kaeru',
				'n',
				'frog',
				'../joshu/wav/kaeru.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			/*
 			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'天竺鼠',
				'てんじくねずみ',
				'tenjikunezumi',
				'n',
				'guinea pig',
				'../joshu/wav/tenjikunezumi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			*/
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'河馬',
				'かば',
				'kaba',
				'n',
				'hippo',
				'../joshu/wav/kaba.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'馬',
				'うま',
				'uma',
				'n',
				'horse',
				'../joshu/wav/uma.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				//'瓢虫、天道虫、七星天道虫',
				'てんとう虫',
				//'てんとうむし、てんとうむし、ななほしてんとうむし',
				'てんとうむし',
				'tentoomushi',
				'n',
				'ladybug',
				'../joshu/wav/tentoomushi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'仔羊、子羊、小羊',
				'こひつじ',
				'kohitsuji',
				'n',
				'lamb',
				'../joshu/wav/kohitsuji.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'蜥蜴',
				//'とかげ、せきえき',
				//'tokage, sekieki',
				'とかげ',
				'tokage',
				'n',
				'lizard',
				'../joshu/wav/tokage.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'猿',
				'さる',
				'saru',
				'n',
				'monkey',
				'../joshu/wav/saru.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'ムース',
				'muusu',
				'n',
				'moose',
				'../joshu/wav/muusu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'梟',
				'ふくろう',
				'fukuroo',
				'n',
				'owl',
				'../joshu/wav/fukuroo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				//'羊、綿羊',
				//'ひつじ、めんよう',
				//'hitsuji, menyoo',
				'羊',
				'ひつじ',
				'hitsuji',
				'n',
				'sheep',
				'../joshu/wav/hitsuji.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'蜘蛛',
				'くも',
				'kumo',
				'n',
				'spider',
				'../joshu/wav/kumo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'駝鳥',
				'だちょう',
				'dachoo',
				'n',
				'ostrich',
				'../joshu/wav/dachoo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'豚',
				'ぶた',
				'buta',
				'n',
				'pig',
				'../joshu/wav/buta.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'鳩',
				'はと',
				'hato',
				'n',
				'pigeon',
				'../joshu/wav/hato.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'白熊、北極熊',
				'しろくま、ほっきょくぐま',
				'shirokuma, hokkyokuguma',
				'n',
				'polar bear',
				'../joshu/wav/shirokuma.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'鮫',
				'さめ',
				'same',
				'n',
				'shark',
				'../joshu/wav/same.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'蛇',
				'へび',
				'hebi',
				'n',
				'snake',
				'../joshu/wav/hebi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'栗鼠',
				'りす',
				'risu',
				'n',
				'squirrel',
				'../joshu/wav/risu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'七面鳥',
				'しちめんちょう',
				'shichimenchoo',
				'n',
				'turkey',
				'../joshu/wav/shichimenchoo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'海亀',
				'うみがめ',
				'umigame',
				'n',
				'turtle',
				'../joshu/wav/umigame.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			/*
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'蝿地獄、蝿取り草',
				'はえじごく、はえとりそう',
				'haejigoku, haetorisoo',
				'n',
				'venus fly trap',
				'../joshu/wav/haejigoku.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			*/
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'雀蜂',
				'すずめばち',
				'suzumebachi',
				'n',
				'wasp',
				'../joshu/wav/suzumebachi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'鯨',
				'くじら',
				'kujira',
				'n',
				'whale',
				'../joshu/wav/kujira.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'山猫',
				'やまねこ',
				'yamaneko',
				'n',
				'wildcat',
				'../joshu/wav/yamaneko.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'虫',
				'むし',
				'mushi',
				'n',
				'worm',
				'../joshu/wav/mushi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'みみず',
				'mimizu',
				'n',
				'earthworm',
				'../joshu/wav/mimizu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
			++vocabListArray['Animals'].length;
			vocabListArray['Animals'][vocabListArray['Animals'].length-1] = new vocabWordRecord (
				'縞馬',
				'しまうま',
				'shimauma',
				'n',
				'zebra',
				'../joshu/wav/shimauma.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			return 'Animals';
			}



// ----------------------------------------------------------
// Vocabulary List :: Classsroom Expressions
// ----------------------------------------------------------

			function constructVocab_Classroom()
			{
			++vocabListArray.length;
			vocabListArray['Classroom Expressions'] = new makeArray(0);
//			vocabListArray['Classroom Expressions'].category = '教室で使う表現';

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'教室',
				'きょうしつ',
				'kyooshitsu',
				'n',
				'classroom',
				'../joshu/wav/kyooshitsu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'はじめましょう。',
				'hajimemashoo',
				'&nbsp;',
				'Let\'s start.',
				'../joshu/wav/hajimemashoo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'見てください。',
				'みてください。',
				'mitekudasai',
				'&nbsp;',
				'Please look.',
				'../joshu/wav/mitekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'読んでください。',
				'よんでください。',
				'yondekudasai',
				'&nbsp;',
				'Please read.',
				'../joshu/wav/yondekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'書いてください。',
				'かいてください。',
				'kaitekudasai',
				'&nbsp;',
				'Please write.',
				'../joshu/wav/kaitekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'聞いてください。',
				'きいてください。',
				'kiitekudasai',
				'&nbsp;',
				'Please listen.',
				'../joshu/wav/kiitekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'～ページを開けてください。',
				'～ページをあけてください。',
				'～peeji wo aketekudasai',
				'&nbsp;',
				'Please open page ～.',
				'../joshu/wav/peejiwoaketekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'日本語／英語で言ってください',
				'にほんご／えいごでいってください',
				'nihongo/eigo de ittekudasai ',
				'&nbsp;',
				'Please say in Japanese/English.',
				'../joshu/wav/nihongodeittekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'日本語を使ってください。',
				'にほんごをつかってください。',
				'nihongo wo tsukattekudasai',
				'&nbsp;',
				'Please use Japanese.',
				'../joshu/wav/nihongowotsukattekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'しゅくだい／作文を出してください。',
				'しゅくだい／さくぶんをだしてください。',
				'shukudai/sakubun wo dashitekudasai',
				'&nbsp;',
				'Please turn in HW, composition, etc.',
				'../joshu/wav/shukudaiwodashitekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'予習してきてください。',
				'よしゅうしてきてください。',
				'yoshuu shitekitekudasai',
				'&nbsp;',
				'Please come prepared (study in advance).',
				'../joshu/wav/yoshuushitekitekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'質問がありますか。',
				'しつもんがありますか。',
				'shitsumon ga arimasuka',
				'&nbsp;',
				'Do you have any questions?',
				'../joshu/wav/shitsumongaarimasuka.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'質問に答えてください。',
				'しつもんにこたえてください。',
				'shitsumon ni kotaetekudasai',
				'&nbsp;',
				'Please answer the question.',
				'../joshu/wav/shitsumonnikotaetekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'質問を作ってください。',
				'しつもんをつくってください。',
				'shitsumon wo tsukuttekudasai',
				'&nbsp;',
				'Please make up a question.',
				'../joshu/wav/shitsumonwotsukuttekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'ペアになってください。',
				'pea ni nattekudasai',
				'&nbsp;',
				'Please pair up.',
				'../joshu/wav/peaninattekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'ペアで練習してください。',
				'ペアでれんしゅうしてください。',
				'pea de renshuu shitekudasai',
				'&nbsp;',
				'Please practice in pairs.',
				'../joshu/wav/peaderenshuushitekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'会話をしてください。　',
				'かいわをしてください。　',
				'kaiwa wo shitekudasai',
				'&nbsp;',
				'Please engage in a conversation.',
				'../joshu/wav/kaiwawoshitekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'意見を言ってください。',
				'いけんをいってください。',
				'iken wo ittekudasai',
				'&nbsp;',
				'Please express your opinion.',
				'../joshu/wav/ikenwoittekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'文を作ってください。',
				'ぶんをつくってください。  ',
				'bun wo tsukuttekudasai',
				'&nbsp;',
				'Please compose a sentence.',
				'../joshu/wav/bunwotsukuttekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'文を言いかえてください。',
				'ぶんをいいかえてください。',
				'bun wo iikaetekudasai',
				'&nbsp;',
				'Please rephrase the sentence.',
				'../joshu/wav/bunwoiikaetekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'文を書きかえてください。',
				'ぶんをかきかえてください。',
				'bun wo kakikaetekudasai',
				'&nbsp;',
				'Please rewrite the sentence.',
				'../joshu/wav/bunwokakikaetekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'文を完成してください。',
				'ぶんをかんせいしてください。',
				'bun wo kansei shitekudasai',
				'&nbsp;',
				'Please complete the sentence.',
				'../joshu/wav/bunwokanseishitekudasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');


			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'～さん、おねがいします。',
				'～san, onegaishimasu',
				'&nbsp;',
				'～さん、please (do).',
				'../joshu/wav/sanonegaishimasu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'次の人',
				'つぎのひと',
				'tsugi no hito',
				'&nbsp;',
				'Next person.',
				'../joshu/wav/tsuginohito.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'誰か。',
				'だれか。',
				'dare ka',
				'&nbsp;',
				'Anyone?',
				'../joshu/wav/dareka.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'明日、試験／クイズがあります。',
				'あした、しけん／クイズがあります。',
				'ashita, shiken/kuizu ga arimasu',
				'&nbsp;',
				'Tomorrow, we will have an exam (quiz).',
				'../joshu/wav/ashitashikengaarimasu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'正しければ　○／T、間違っていれば　X／F を　入れなさい。',
				'ただしければ　○／T、まちがっていれば　X／F を　はいれなさい。',
				'tadashikereba ○／T, machigatteireba X／F wo hairenasai',
				'&nbsp;',
				'Enter 0 (T) if it is correct, X (F) if it is wrong.',
				'../joshu/wav/tadashikerebamachigatteirebawohairenasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'正しいものに（正しい方に）○をつけなさい。',
				'ただしいものに（ただしいほうに）○をつけなさい。',
				'tadashiimono ni (tadashiihou ni) ○ wo tsukenasai',
				'&nbsp;',
				'Mark 0 to the one that is correct.',
				'../joshu/wav/tadashiihoonimaruwotsukenasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'次の文を読んで、質問にこたえなさい。',
				'つぎのぶんをよんで、しつもんにこたえなさい。',
				'tsugi no bun wo yonde, shitsumon ni kotaenasai',
				'&nbsp;',
				'Please read the following passage and answer the questions.',
				'../joshu/wav/tsuginobunwoyondeshitsumonnikotaenasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Classroom Expressions'].length;
			vocabListArray['Classroom Expressions'][vocabListArray['Classroom Expressions'].length-1] = new vocabWordRecord (
				'文を作りなさい。',
				'ぶんをつくりなさい。',
				'bun wo tsukurinasai',
				'&nbsp;',
				'Make up a sentence.',
				'../joshu/wav/bunwotsukurinasai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

				return 'Classroom Expressions';
			}





// ----------------------------------------------------------
// Vocabulary List :: Parts of Speech
// ----------------------------------------------------------
			function constructVocab_PartsofSpeech()
			{
			++vocabListArray.length;
			vocabListArray['Parts of Speech'] = new makeArray(0);

			++vocabListArray['Parts of Speech'].length;
			vocabListArray['Parts of Speech'][vocabListArray['Parts of Speech'].length-1] = new vocabWordRecord (
				'名詞',
				'めいし',
				'meishi',
				'&nbsp;',
				'Nouns',
				'../joshu/wav/meishi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Parts of Speech'].length;
			vocabListArray['Parts of Speech'][vocabListArray['Parts of Speech'].length-1] = new vocabWordRecord (
				'動詞',
				'どうし',
				'dooshi',
				'&nbsp;',
				'Verbs',
				'../joshu/wav/dooshi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Parts of Speech'].length;
			vocabListArray['Parts of Speech'][vocabListArray['Parts of Speech'].length-1] = new vocabWordRecord (
				'形容詞',
				'けいようし',
				'keiyooshi',
				'&nbsp;',
				'Adjectives',
				'../joshu/wav/keiyooshi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Parts of Speech'].length;
			vocabListArray['Parts of Speech'][vocabListArray['Parts of Speech'].length-1] = new vocabWordRecord (
				'副詞',
				'ふくし',
				'fukushi',
				'&nbsp;',
				'Adverbs',
				'../joshu/wav/fukushi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Parts of Speech'].length;
			vocabListArray['Parts of Speech'][vocabListArray['Parts of Speech'].length-1] = new vocabWordRecord (
				'助詞',
				'じょし',
				'joshi',
				'&nbsp;',
				'Particles',
				'../joshu/wav/joshi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Parts of Speech'].length;
			vocabListArray['Parts of Speech'][vocabListArray['Parts of Speech'].length-1] = new vocabWordRecord (
				'数詞',
				'すうし',
				'suushi',
				'&nbsp;',
				'Counters',
				'../joshu/wav/suushi.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Parts of Speech'].length;
			vocabListArray['Parts of Speech'][vocabListArray['Parts of Speech'].length-1] = new vocabWordRecord (
				'現在形',
				'げんざいけい',
				'genzaikei',
				'&nbsp;',
				'present tense',
				'../joshu/wav/genzaikei.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Parts of Speech'].length;
			vocabListArray['Parts of Speech'][vocabListArray['Parts of Speech'].length-1] = new vocabWordRecord (
				'過去形',
				'かこけい',
				'kakokei',
				'&nbsp;',
				'past tense',
				'../joshu/wav/kakokei.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Parts of Speech'].length;
			vocabListArray['Parts of Speech'][vocabListArray['Parts of Speech'].length-1] = new vocabWordRecord (
				'可能形',
				'かのうけい',
				'kanookei',
				'&nbsp;',
				'potential form',
				'../joshu/wav/kanookei.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Parts of Speech'].length;
			vocabListArray['Parts of Speech'][vocabListArray['Parts of Speech'].length-1] = new vocabWordRecord (
				'受け身形',
				'うけみけい',
				'ukemikei',
				'&nbsp;',
				'passive form',
				'../joshu/wav/ukemikei.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Parts of Speech'].length;
			vocabListArray['Parts of Speech'][vocabListArray['Parts of Speech'].length-1] = new vocabWordRecord (
				'使役形',
				'しえきけい',
				'shiekikei',
				'&nbsp;',
				'causative form',
				'../joshu/wav/shiekikei.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Parts of Speech'].length;
			vocabListArray['Parts of Speech'][vocabListArray['Parts of Speech'].length-1] = new vocabWordRecord (
				'使役受け身形',
				'しえきうけみけい',
				'shieki ukemikei',
				'&nbsp;',
				'causative-passive form',
				'../joshu/wav/shiekiukemikei.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Parts of Speech'].length;
			vocabListArray['Parts of Speech'][vocabListArray['Parts of Speech'].length-1] = new vocabWordRecord (
				'尊敬語',
				'そんけいご',
				'sonkeigo',
				'&nbsp;',
				'honorifics',
				'../joshu/wav/sonkeigo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Parts of Speech'].length;
			vocabListArray['Parts of Speech'][vocabListArray['Parts of Speech'].length-1] = new vocabWordRecord (
				'丁寧語',
				'ていねいご',
				'teineigo',
				'&nbsp;',
				'polite form',
				'../joshu/wav/teineigo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

 　			++vocabListArray['Parts of Speech'].length;
			vocabListArray['Parts of Speech'][vocabListArray['Parts of Speech'].length-1] = new vocabWordRecord (
				'謙譲語',
				'けんじょうご',
				'kenjoogo',
				'&nbsp;',
				'humble form',
				'../joshu/wav/kenjoogo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

				return 'Parts of Speech';
			}


// ----------------------------------------------------------
// Vocabulary List :: Lessons
// ----------------------------------------------------------
			function constructVocab_Lessons()
			{
			++vocabListArray.length;
			vocabListArray['Lessons'] = new makeArray(0);

			++vocabListArray['Lessons'].length;
			vocabListArray['Lessons'][vocabListArray['Lessons'].length-1] = new vocabWordRecord (
				'第１課',
				'だいいっか',
				'dai ikka',
				'&nbsp;',
				'Chapter (Lesson) #1',
				'../joshu/wav/daiikka.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');
 　
			++vocabListArray['Lessons'].length;
			vocabListArray['Lessons'][vocabListArray['Lessons'].length-1] = new vocabWordRecord (
				'単語',
				'たんご',
				'tango',
				'&nbsp;',
				'vocabulary',
				'../joshu/wav/tango.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Lessons'].length;
			vocabListArray['Lessons'][vocabListArray['Lessons'].length-1] = new vocabWordRecord (
				'漢字',
				'かんじ',
				'kanji',
				'&nbsp;',
				'&nbsp;',
				'../joshu/wav/kanji.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Lessons'].length;
			vocabListArray['Lessons'][vocabListArray['Lessons'].length-1] = new vocabWordRecord (
				'文法',
				'ぶんぽう',
				'bunpoo',
				'&nbsp;',
				'grammar',
				'../joshu/wav/bunpoo.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Lessons'].length;
			vocabListArray['Lessons'][vocabListArray['Lessons'].length-1] = new vocabWordRecord (
				'文法ノート',
				'ぶんぽうノート',
				'bunpoo nooto',
				'&nbsp;',
				'grammar notes',
				'../joshu/wav/bunpoonooto.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Lessons'].length;
			vocabListArray['Lessons'][vocabListArray['Lessons'].length-1] = new vocabWordRecord (
				'文法練習',
				'ぶんぽうれんしゅう',
				'bunpoo renshuu',
				'&nbsp;',
				'grammar exercises',
				'../joshu/wav/bunpoorenshuu.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Lessons'].length;
			vocabListArray['Lessons'][vocabListArray['Lessons'].length-1] = new vocabWordRecord (
				'読み物',
				'よみもの',
				'yomimono',
				'&nbsp;',
				'reading material',
				'../joshu/wav/yomimono.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Lessons'].length;
			vocabListArray['Lessons'][vocabListArray['Lessons'].length-1] = new vocabWordRecord (
				'速読',
				'そくどく',
				'sokudoku',
				'&nbsp;',
				'speed reading',
				'../joshu/wav/sokudoku.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Lessons'].length;
			vocabListArray['Lessons'][vocabListArray['Lessons'].length-1] = new vocabWordRecord (
				'宿題',
				'しゅくだい',
				'shukudai',
				'&nbsp;',
				'homework',
				'../joshu/wav/shukudai.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Lessons'].length;
			vocabListArray['Lessons'][vocabListArray['Lessons'].length-1] = new vocabWordRecord (
				'&nbsp;',
				'ペアワーク',
				'pea waaku',
				'&nbsp;',
				'pair work',
				'../joshu/wav/peawaaku.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

			++vocabListArray['Lessons'].length;
			vocabListArray['Lessons'][vocabListArray['Lessons'].length-1] = new vocabWordRecord (
				'作文',
				'さくぶん',
				'sakubun',
				'&nbsp;',
				'composition',
				'../joshu/wav/sakubun.wav',
				'sample Japanese sentence',
				'sample roomaji sentence',
				'English translation');

 				return 'Lessons';
			}
 

