<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">

<?php
$id = $_GET['l'];

if (!$id)
	$id = "a";

$idlist = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");

foreach ($idlist as $alpha) {
	if ($alpha == $id)
		$letter = $alpha; }
	
	if (!$letter)
		header("Location:http://laits.utexas.edu/japanese/joshu/tables/table_katakana_names.php");
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Katakana names table</title>

<link rel="stylesheet" type="text/css" href="styles.css">

<style>
.<?php echo($letter); ?> {background:#538bff; color:#fff !important;}
.<?php echo($letter); ?>-content {display:block;}
</style>

</head>

<body>

<div id="top"></div>
<div id="container">

<a class="letters a" href="?l=a">a</a>
<a class="letters b" href="?l=b">b</a>
<a class="letters c" href="?l=c">c</a>
<a class="letters d" href="?l=d">d</a>
<a class="letters e" href="?l=e">e</a>
<a class="letters f" href="?l=f">f</a>
<a class="letters g" href="?l=g">g</a>
<a class="letters h" href="?l=h">h</a>
<a class="letters i" href="?l=i">i</a>
<a class="letters j" href="?l=j">j</a>
<a class="letters k" href="?l=k">k</a>
<a class="letters l" href="?l=l">l</a>
<a class="letters m" href="?l=m">m</a>
<a class="letters n" href="?l=n">n</a>
<a class="letters o" href="?l=o">o</a>
<a class="letters p" href="?l=p">p</a>
<a class="letters q" href="?l=q">q</a>
<a class="letters r" href="?l=r">r</a>
<a class="letters s" href="?l=s">s</a>
<a class="letters t" href="?l=t">t</a>
<a class="letters u" href="?l=u">u</a>
<a class="letters v" href="?l=v">v</a>
<a class="letters w" href="?l=w">w</a>
<a class="letters x" href="?l=x">x</a>
<a class="letters y" href="?l=y">y</a>
<a class="letters z" href="?l=z">z</a>


<div class="content a-content">
    <dl>
    <dt>Aa</dt>
    <dd>
    	Aakash: <strong>アーカシュ</strong><br />
        Aaron: <strong>アーロン</strong><br />
    	Aashika: <strong>アーシカー</strong><br />
        Abrams: <strong>エーブラムズ</strong><br />
        Abriele: <strong>アブリエル</strong><br />
        Acho: <strong>アチョ</strong><br />
    	Adam: <strong>アダム</strong><br />
        Adams: <strong>アダムズ</strong><br />
        Adossi: <strong>アドッシー</strong><br />
        Adhikary: <strong>アドヒカリー</strong><br />
        Adrian, Adrienne: <strong>エードリアン、エイドリアン</strong><br />
        Aggrey: <strong>アグレイ</strong><br />
        Ahmard: <strong>アーマード</strong><br /> 
        Aiden: <strong>エイデン</strong><br />
        Akina: <strong>アキーナ</strong><br />
    </dd>
    
    
     <dt>Al</dt>
    <dd>
        Alan: <strong>アラン</strong><br />
        Albert: <strong>アルバート</strong><br />
        Aldridge: <strong>オルドリッジ</strong><br />
        Alexandra: <strong>アレクサンドラ、アレキサンドラ</strong><br />
        Alexander: <strong>アレキサンダー</strong><br />
    	Alex; Alexie; Alexis: <strong>アレックス；　アレクシー；　アレクシス</strong><br />
    	Alice: <strong>アリス</strong><br />
        Alina: <strong>アリーナ</strong><br />
        Allen: <strong>アレン</strong><br />
        Allison: <strong>アリソン</strong><br />
    	Amanda: <strong>アマンダ</strong><br />
        Amber: <strong>アンバー</strong><br />
        Amy: <strong>エイミー</strong><br />
        Ana: <strong>アナ</strong><br />
        Anderson: <strong>アンダーソン</strong><br />
        Andrew; Andy; Drew: <strong>アンドリュー、アンドゥリュー；　アンディー；　ドゥルー</strong><br />
        Andrews: <strong>アンドリューズ、アンドゥリューズ</strong><br />
        An, Ann, Anne: <strong>アン</strong><br />
        Anastasia: <strong>アナスタシア</strong><br />
        Andrea: <strong>アンドレア</strong><br />
        Andrus: <strong>アンドラス</strong><br />
        Angela: <strong>アンジェラ</strong><br />
        Angus: <strong>アンガス</strong><br />
        Ann, An, Anne: <strong>アン</strong><br />
        Annie: <strong>アニー</strong><br />
        Antony: <strong>アントニー</strong><br />
        Anthony: <strong>アンソニー</strong><br />
        Anusha: <strong>アヌシャ</strong><br />
        </dd>
    
    
     <dt>Ao</dt>
    <dd>
        Applewhite: <strong>アプルホワイト</strong><br />
        April: <strong>エイプリル</strong><br />
        Arenas: <strong>アレナス、アレーナス</strong><br />
        Arina: <strong>アリナ、アリーナ</strong><br />
        Armando: <strong>アルマンド</strong><br />
        Armstrong: <strong>アームストロング</strong><br />
        Arnoldo: <strong>アノールド、アノルド</strong><br />
        Arriaran: <strong>アリアラン</strong><br />
        Ashcraft: <strong>アッシュクラフト</strong><br />
        Ashleigh: <strong>アッシュリー</strong><br />
        Ashley: <strong>アッシュリー</strong><br />
        Ashton: <strong>アシュトン</strong><br />
        Atchley: <strong>アチュリー</strong><br />
        Audrey: <strong>アウドリ、オードリー</strong><br />
		August: <strong>オーガスト；アウガスト</strong><br />
        Augustin: <strong>オーガスティン；アウガスティン</strong><br />
        Aus: <strong>アウス</strong><br />
         Austin:  <strong>オースティン</strong><br />
        Avery: <strong>アヴェリー、アベリー</strong><br />
        Azad: <strong>アザード</strong><br />
        Azreal: <strong>アズリエル</strong><br />
     </dd>
     </dl>
</div>




<div class="content b-content">
    <dl>
    <dt>Ba</dt>
    <dd>
    	Bailey: <strong>ベイリー
        </strong><br />
    	Balbay: <strong>バルベイ </strong><br />
    	Baker: <strong>ベーカー</strong><br />
    	Barack: <strong>バラク</strong><br />
        Barbara: <strong>バーバラ</strong><br />
    	Barnes: <strong>バーンズ</strong><br />
        Barnet: <strong>バーネット</strong><br /> 
    	Barr: <strong>バー</strong><br />
        Barrett: <strong>バレット</strong><br />
        Batt: <strong>バット</strong><br />
       </dd>
    <dt>Be</dt>
    <dd>
        Beard、Bierd: <strong>ビアード</strong><br />
        Bernice: <strong>バーニス、ベニース</strong><br />
        Becky: <strong>ベッキー</strong><br />
        Belcher: <strong>ベルチャー</strong><br />
        Belisle: <strong>ベリスリー</strong><br />
        Bell: <strong>ベル</strong><br />
    	Ben: <strong>ベン</strong><br />
        Benjamin: <strong>ベンジャミン</strong><br /> 
        Bennett: <strong>ベネット</strong><br />
        Benning: <strong>ベニング</strong><br /> 
        Benson: <strong>ベンソン</strong><br />	
    	Berkson: <strong>バークソン</strong><br />
        Bernett: <strong>バーネット</strong><br />
        Berryhill: <strong>ベリーヒル</strong><br />
        Betsy; Betty: <strong>ベッツィー</strong><br />
        Beverly: <strong>ビバリー</strong><br />
        </dd>
    <dt>Bh</dt>
    <dd>
        
        Bhuvana: <strong>ブヴァナ、ブバナ</strong><br />
        Bible: <strong>バイブル</strong><br />
    	Biden: <strong>バイデン</strong><br />
        Bill; Billy: <strong>ビル；　ビリー</strong><br />
        Bird: <strong>バード</strong><br />
        Blackburn: <strong>ブラックバーン</strong><br />
        Blaine: <strong>ブレイン</strong><br />
        Blair, Blaire: <strong>ブレア、ブレアー</strong><br />
        Blake: <strong>ブレイク</strong><br />
		Blane: <strong>ブレイン</strong><br />
        Blick: <strong>ブリック</strong><br />
        Bleware: <strong>ボレウェアー</strong><br />
        Bob; bobby: <strong>ボブ；　ボビー</strong><br />
        Boddicker: <strong>ボディカー</strong><br />
        Boone: <strong>ブーン</strong><br />
        Bourneuf: <strong>ブルヌフ</strong><br />
        Boutelle: <strong>ボウテル</strong><br />
    	Bowers: <strong>ボーワーズ</strong><br />
        Bown: <strong>ボーン</strong><br />
    	Boyce: <strong>ボイス</strong><br />
    	Boyer: <strong>ボイヤー</strong><br />
        Boyd: <strong>ボイド</strong><br />
     	</dd>
    <dt>Br</dt>
    <dd>
        Bradley; Brad: <strong>ブラッドリー；　ブラッド</strong><br />
    	Brady: <strong>ブラディー</strong><br />
        Bram: <strong>ブラム</strong><br />
    	Bray: <strong>ブレイ</strong><br />
		Bryce: <strong>ブライス</strong><br />
    	Brendan: <strong>ブレンダン</strong><br />
        Bremen: <strong>ブレメン</strong><br />
        Brereton: <strong>ブレレトン</strong><br />
        Brewster: <strong>ブルースター</strong><br />
        Brian: <strong>ブライアン</strong><br />
        Briana: <strong>ブリアナ</strong><br />
        Britt: <strong>ブリット</strong><br />
        Brittainey; Brittany: <strong>ブリッタニー</strong><br />
      	Britney: <strong>ブリトニー</strong><br />
        Brock: <strong>ブロック</strong><br />
        Brooke: <strong>ブルック</strong><br />
		Brooks: <strong>ブルックス</strong><br />
        Brown, Browne: <strong>ブラウン</strong><br /> 
        Bruce: <strong>ブルース</strong><br />
        Bruins: <strong>ブルーインズ、フルーンズ</strong><br />
        Bruno: <strong>ブルーノ</strong><br />
        Bryant: <strong>ブライアント</strong><br /> 
        Buchanan: <strong>バカナン</strong><br />
        Buckman: <strong>バックマン</strong><br />
        Burns: <strong>バーンズ</strong><br />
     	Butler: <strong>バトラー</strong><br />
        Byndom: <strong>ビンダム</strong><br />
        Byrne: <strong>バーン (f)</strong><br />
        
         </dd>
       </dl>
</div>



<div class="content c-content">
    <dl>
    <dt>Ca</dt>
        <dd>
        Cade: <strong>ケード</strong><br />
		Cai: <strong>カイ、ツァイ</strong><br />
        Calderon: <strong>カルデロン</strong><br />
        Calvin: <strong>カルビン</strong><br />
        Camacho: <strong>カマチョ</strong><br />
        Cambridge: <strong>ケンブリッジ</strong><br />
        Cameron: <strong>カメロン、キャメロン</strong><br />
        Canright: <strong>キャンライト</strong><br />
        Carl: <strong>カール</strong><br />
        Carlin: <strong>カーリン</strong><br />
        Carol, Carroll: <strong>キャロル</strong><br />
        Carrington: <strong>カリングトン、キャリングトン</strong><br />
		Carroll, Carol: <strong>キャロル</strong><br />
        Carter: <strong>カーター</strong><br />
       	Cat; Catherine: <strong>キャット；　キャサリーン</strong><br />
        Cather: <strong>ケーサー</strong><br />
        Catherine; Cat: <strong>キャサリーン; キャット</strong><br />
        Cardenas: <strong>カーディナス</strong><br />
        Carmel: <strong>カーメル</strong><br />
        Caroline: <strong>キャロライン</strong><br />
        Carolinna: <strong>カロリナ、キャロリナ</strong><br />
        Case: <strong>ケース</strong><br />
        Cassy: <strong>カシー</strong><br />
        Cathy: <strong>キャシー</strong><br /> 
        Cavrak: <strong>キャバラック</strong><br />
        Cecilia: <strong>セシリア</strong><br />
        Celina: <strong>セリナ</strong><br />
        Cesar: <strong>セサル</strong><br />
        </dd>
    
    <dt>Ce</dt>
        <dd>
        Chan: <strong>チャン</strong><br />
        Chang: <strong>チャン、チャング</strong><br />
        Chavana: <strong>チャバナ</strong><br />
        Chalk: <strong>チョーク</strong><br />
        Chapman: <strong>チャプマン</strong><br />
        Charles: <strong>チャールズ</strong><br />
        Chambers: <strong>チェンバーズ</strong><br />
        Chela: <strong>チェラ</strong><br />
        Chelette: <strong>シェレット</strong><br />
        Chen: <strong>チェン</strong><br />
        Cheng: <strong>チェン、チェング</strong><br />
        Chiang: <strong>チアング</strong><br />
        Chiles: <strong>チリズ</strong><br />
        Choi: <strong>チョイ、チェ</strong><br />
        Chris; Christopher: <strong>クリス；　クリストファー</strong><br />
        Christensen: <strong>クリスチャンセン</strong><br />
        Christian: <strong>クリスチャン</strong><br />
        Christiansen: <strong>クリスチャンセン</strong><br />
        Christianson: <strong>クリスチャンソン</strong><br />
        Christie: <strong>クリスティー</strong><br />
        Christina: <strong>クリスティーナ</strong><br />
        Christine: <strong>クリスティン、クリスティーン</strong><br />
        Christopher; Chris: <strong>クリストファー；　クリス</strong><br />
        Chu: <strong>チュ、チュー</strong><br />
        Chua: <strong>チュア</strong><br />
        Chuang: <strong>チュアング</strong><br />
        Chumreonlert: <strong>チュムレオンラート</strong><br />
       </dd>
    
    <dt>Ci</dt>
        <dd>
        Cian Mei: <strong>シャーメイ</strong><br />
        Cicchini: <strong>チッチーニ</strong><br />
        Cindy: <strong>シンディー</strong><br />
        Clagett: <strong>クラジェット</strong><br />
        Clark: <strong>クラーク</strong><br />
        Clay; Clayton: <strong>クレイ、クレイトン</strong><br />
        Cleve: <strong>クレーブ</strong><br />
        Clement: <strong>クレメント</strong><br />
        Cleo: <strong>クレオ</strong><br />
        Clint: <strong>クリント</strong><br />
        Clinton: <strong>クリントン</strong><br />
        
        
        </dd>
    <dt>Co</dt>
    <dd>
    	Cobbins: <strong>コビンズ</strong><br />
        Cobbs: <strong>コッブス</strong><br />
        Coco: <strong>ココ</strong><br />
        Cokie: <strong>コーキー</strong><br />
        Cody: <strong>コーディー</strong><br />
        Coleman: <strong>コールマン</strong><br />
        Colleen: <strong>コリーン</strong><br />
        Collin: <strong>コリン</strong><br />
        Collins: <strong>コリンズ</strong><br />
        Colt: <strong>コルト</strong><br />
        Connie: <strong>コニー</strong><br />
        Connor: <strong>コナー</strong><br />
        Conradt: <strong>コンラッド</strong><br />
        Cook; Cooke: <strong>クック</strong><br />
        Cooper: <strong>クーパー</strong><br />
        Cora: <strong>コラ</strong><br />
        Carey: <strong>キャリー</strong><br />
		Corey: <strong>コーリー</strong><br />
        Cornell: <strong>コーネル</strong><br />
        Coroiescu: <strong>コロイエスク</strong><br />
        Corrie: <strong>コリー</strong><br />
        Cortez: <strong>コーテス</strong><br />
        Corvyn: <strong>コーベン</strong><br />
        Cotton: <strong>コットン</strong><br />
        Coutney, Courteney, Courtenay: <strong>コートニー</strong><br />
        Craig: <strong>クレッグ</strong><br />
        Cristina : <strong>クリスティーナ</strong><br />
        Cruciani: <strong>クルチアーニ</strong><br />
        Crystal: <strong>クリスタル</strong><br /> 
        Curtis: <strong>カーティス</strong><br />
        Cynthia: <strong>シンシア</strong><br />
        
        </dd>
    
    </dl>
</div>








<div class="content d-content">
    <dl>
    <dt>Da</dt>
        <dd>
        Daddeo: <strong>ダディオ</strong><br />
        Damion: <strong>ダミオン</strong><br />
        Damon: <strong>ダモン</strong><br />
        Dan: <strong>ダン</strong><br />
        Dane: <strong>デーン</strong><br />
        Dang: <strong>ダング</strong><br />
        Daniel: <strong>ダニエル</strong><br />
        Daniels: <strong>ダニエルズ</strong><br />
        Darcy, D'Drcy; Darsey: <strong>ダーシー</strong><br />
        Darian: <strong>ダリアン</strong><br />
        Dario: <strong>ダリオ</strong><br />
        Darius: <strong>ダリアス</strong><br />
        Darrell: <strong>ダレル</strong><br />
        Dart: <strong>ダート</strong><br />
        David: <strong>デービット、ダビデ</strong><br />
		Davidson: <strong>デービッドソン</strong><br />
        Davis: <strong>デービス</strong><br />
        Dawn: <strong>デウン</strong><br />
            </dd>
    
    <dt>De</dt>
    	<dd>
        De'Aires: <strong>デ・アイレス</strong><br />
        Dean: <strong> ディーン</strong><br />
        Deborah: <strong>デボラ</strong><br />
        Deginald: <strong>デジノルド</strong><br />
        Delores: <strong>デロレス</strong><br />
        Demarco: <strong>ディマーコ</strong><br />
        Denning: <strong>デニング</strong><br />
        DeSean: <strong>デショーン、ディショーン</strong><br />
        Desiree: <strong>デジレー</strong><br /> 
        Destinee: <strong>デスティニー</strong><br />
        Dexter: <strong>デクスター</strong><br />
		Diana: <strong>ダイアナ</strong><br />
        Dick: <strong>ディック</strong><br />
        Diedra: <strong>ディードラ</strong><br />
        Diehi: <strong>ダイール</strong><br />
        Dillon: <strong>ディロン</strong><br />
        Dion: <strong>ディオン</strong><br />
        DiSanto: <strong>ディサント</strong><br />
        Disney: <strong>ディズニー</strong><br />
        Divya: <strong>ディヴヤ</strong><br />
         </dd>
    
    <dt>Dm</dt>
    	<dd>
   
        Do: <strong>ド</strong><br />
        Dogus: <strong>ドーウシュ</strong><br />
        Doleen: <strong>ドリーン</strong><br />
        Dominic: <strong>ドミニック</strong><br />
        Dominique: <strong>ドミニーク</strong><br />
        Doolittle: <strong>ドゥーリトル；　ドゥーリトゥル</strong><br />
        Doris : <strong>ドリス</strong><br />
    	Douangkesone: <strong>ドアンケソン</strong><br />
        Douglas: <strong>ダグラス</strong><br />
        Dover: <strong>ドーバー</strong><br />
        Dowell: <strong>ドーウェル</strong><br />
        Dragovits: <strong>ドラゴビッツ、ドラゴヴィッツ</strong><br />
        Dravannti: <strong>ドラバンティ、ドゥラヴァンティ</strong></strong><br />
        Drew: <strong>ドゥルー</strong><br />
        Duane: <strong>ドゥウェイン</strong><br /> 
        Duffey: <strong>ダッフィー</strong><br />
        Durant: <strong>デゥラン、デゥラント</strong><br />
        Dustin: <strong>ダスティン</strong><br />
 	    Dyer: <strong>ダイヤー</strong><br />
        Dyle: <strong>ドイル</strong><br />
		</dd>        
    </dl>
</div>




<div class="content e-content">
    <dl>
    <dt>E</dt>
    	<dd> 
        Earl: <strong>アール</strong><br />
        Earnesia: <strong>アネージア</strong><br />
        Earnest: <strong>アーネスト</strong><br />
        Eddie; Edward: <strong>エディー；　エドワード</strong><br />
        Edward: <strong>エドワード</strong><br />
        Edwin: <strong>エドウィン</strong><br />
        Edwina: <strong>エドウィナ</strong><br />
        Eells: <strong>イールズ</strong><br />
        Elam: <strong>エラム</strong><br />
        Elinore: <strong>エリノア</strong><br />
        Elissa: <strong>エリサ、エリッサ</strong><br />
        Elizabeth: <strong>エリザベス</strong><br />
        Elliott: <strong>エリオット</strong><br />
		Elly: <strong>エリー</strong><br />
        Ellzy: <strong>エルジー（f）</strong><br />
        Elmer: <strong>エルマー</strong><br />
        Eloy: <strong>イーロイ</strong><br />
        Elysia: <strong>エリシア</strong><br />
         </dd>
    
    <dt>Em</dt>
    	<dd>
   		Emily: <strong>エミリー</strong><br />
        Emma: <strong>エマ</strong><br />
        Emmanuel: <strong>エマヌエル</strong><br />
        Emperatriz: <strong>エンペラトリツ</strong><br />
        Endsley: <strong>エンズリー（f）</strong><br />
        Engle: <strong>イングル、エングル</strong><br />
        Enriquez: <strong>エンリケス</strong><br />
        Epps: <strong>エプス</strong><br />
        Eric, Erik, Erick: <strong>エリックー</strong><br />
        Erika: <strong>エリカ</strong><br />
        Erin: <strong>エリン、エリーン</strong><br />
		Ernest: <strong>アーネスト</strong><br />
        Erskin: <strong>アースキン</strong><br />
        Erwin: <strong>アーウィン</strong><br />
        Eryon: <strong>エリオン</strong><br />
        Espinosa: <strong>エスピノーサ、エスピノーザ</strong><br />
        Esther: <strong>エッサー</strong><br />
        Estrella: <strong>エストレーラ</strong><br />
        Ethan: <strong>イーサン</strong><br />
        Eva: <strong>エバ、エヴァ</strong><br />
       </dd> 
    </dl>
</div>




<div class="content f-content">
    <dl>
    <dt>F</dt>
    	<dd>Faith: <strong>フェイス</strong><br />
        Faucette: <strong>フォーセット</strong><br />
		Faustin: <strong>ファウスティン</strong><br />
        Feight: <strong>フェイト</strong><br />
        Fenner: <strong>フェナー</strong><br />
        Fernando: <strong>フェルナンド、ファーナンド</strong><br />
        Fisette: <strong>フィッシャー</strong><br />
        Fisher: <strong>フィセット</strong><br />
        Fitzhenry: <strong>フィッツヘンリー</strong><br />
        Fletcher: <strong>フレッチャー</strong><br />
        Florence: <strong>フローレンス</strong><br />
        Flores: <strong>フローレス</strong><br />
        Florinda: <strong>フロリンダ</strong><br />
        Florindo: <strong>フロリンド</strong><br />
        Floyd: <strong>フロイド</strong><br />
        Fondren: <strong>フォンドレン</strong><br />
        Fontenette: <strong>フォンテネッテ、フォンテネット</strong><br />
        Ford: <strong>フォード</strong><br />
        Foster: <strong>フォスター</strong><br />
        Foswhitt: <strong>フォスウェット</strong><br />
        Frances: <strong>フランセス</strong><br />
        Francis: <strong>フランシス</strong><br />
        Frank: <strong>フランク</strong><br />
        Friad: <strong>フリアッド</strong><br />
        Friedheim: <strong>フレッドハイム</strong><br />
        Fu-Ying: <strong>フ・イング</strong><br />
        </dd>

    </dl>
</div>





<div class="content g-content">
    <dl>
	<dt>Gs</dt>
    	<dd>
        Gabriel: <strong>ゲーブリエル、ガブリエル</strong><br />
        Gail, Gale, Gayle: <strong>ゲイル</strong><br /> 
        Gain: <strong>ゲイン</strong><br />
        Gale, Gayle, Gail : <strong>ゲイル</strong><br />
        Gayle, Gail, Gale: <strong>ゲイル</strong><br />
        Gandhi: <strong>ガンジー、ガンディー</strong><br />
        Garcia: <strong>ガルシア</strong><br />
        Gardner: <strong>ガードナー</strong><br />
        Garrett: <strong>ギャレット</strong><br />
        Garrick: <strong>ガリック</strong><br />
        Gary: <strong>ゲリー</strong><br />
        Garza: <strong>ガーザ</strong><br />
        Gaskin: <strong>ギャスキン</strong><br />
        </dd>
        
  <dt>Ge</dt>
    	<dd>      
        
        Gene: <strong>ジーン</strong><br />
        George: <strong>ジョージ</strong><br />
        Gibson: <strong>ギブソン</strong><br />
        Gideon: <strong>ギデオン</strong><br />
        Gilbert: <strong>ギルバート</strong><br />
        Giles: <strong>ギルス</strong><br />
        Gilliland: <strong>ギリランド</strong><br />
        Gin; Ginny: <strong>ジン；　ジニー</strong><br />
        Gold: <strong>ゴールド</strong><br />
        Goldman: <strong>ゴールドマン</strong><br />
        Gonzalez: <strong>ゴンザレス</strong><br />
        Goodman: <strong>グッドマン</strong><br />
        Goodwin: <strong>グッドウィン</strong><br />
        Gopal: <strong>ゴパル</strong><br />
        Gordon: <strong>ゴードン</strong><br />
        </dd>
        
  <dt>Gr</dt>
    	<dd>      
        
        Gracely: <strong>グレイスリー、グレースリー</strong><br />
        Graham: <strong>グラハム</strong><br />
        Grant: <strong>グラント</strong><br />
        Greg; Gregory: <strong>クレッグ；　グレゴリー</strong><br />
        Gremillion: <strong>グレミリオン</strong><br />
        Gressett: <strong>グレセット</strong><br />
        Guerra: <strong>グエラ</strong><br />
        Guevara: <strong>ゲバラ</strong><br />
        Gulas: <strong>グラース</strong><br />
        Gulbans: <strong>グルバンス</strong><br />
		Gunawan: <strong>グナワン</strong><br />
		Gus: <strong>ガス</strong><br />
        Gutierrez: <strong>グティアレス</strong><br />
        Guy: <strong>ガイ</strong><br />
        </dd>
    </dl>
</div>




<div class="content h-content">
    <dl>
    <dt>Ha</dt>
   <dd>
   		Haar: <strong>ハー</strong><br /> 
		Hague: <strong>ハーグ</strong><br />
        Hahn: <strong>ハン</strong><br />
        Hales: <strong>ヘイルズ、ヘイルス</strong><br />
        Haleva: <strong>ヘルヴァ</strong><br />
        Hall: <strong>ホール</strong><br />
        Halstead: <strong>ハルステッド</strong><br />
        Hamilton: <strong>ハミルトン</strong><br />
        Hamphley: <strong>ハンフリー</strong><br />
        Hampton: <strong>ハンプトン</strong><br />
        Hannah: <strong>ハンナ</strong><br />
        Hanphley: <strong>ハンフリー</strong><br />
        Hanter: <strong>ハンター</strong><br />
        Harkins: <strong>ハーキンズ</strong><br />
        Harris: <strong>ハリス</strong><br />
        Harrison: <strong>ハリソン</strong><br />
        Harzer: <strong>ハーザー</strong><br />
        </dd>
    <dt>He</dt>
   <dd> 
        
        Heidenreich: <strong>ヘイデンレイシュ</strong><br />
        Hailey: <strong>ヘイリー</strong><br />
        Heather: <strong>ヘザー</strong><br />
		Helen: <strong>ヘレン</strong><br />
        Hendrickson: <strong>ヘンドリックソン</strong><br />
        Henry: <strong>ヘンリー</strong><br />
        Henson: <strong>ヘンソン</strong><br />
        Hereydun: <strong>フェレドゥーン</strong><br />
        Herman: <strong>ハーマン</strong><br />
        Hernandez: <strong>ヘルナンデス</strong><br />
        Heval: <strong>ヘボーン</strong><br />
   		Hicks: <strong>ヒックス</strong><br />
        Higgins: <strong>ヒギンズ</strong><br />
        Hilda: <strong>ヒルダ</strong><br />
        Hill: <strong>ヒル</strong><br />
        Hillary: <strong>ヒラリー</strong><br />
        Hilton: <strong>ヒルトン</strong><br />
        Hix: <strong>ヒックス</strong><br />
        </dd>
    <dt>Hm</dt>
   <dd> 
        
         Hoagland: <strong>ホーグランド</strong><br />
        Hoffman: <strong>ホフマン</strong><br />
        Hohmann: <strong>ホフマン</strong><br />
        Holman: <strong>ホーマン</strong><br />
        Hooks: <strong>フックス</strong><br />
        Hooker: <strong>フーカー、フッカー</strong><br />
        Hopkin: <strong>ホプキン</strong><br />
        Hosfeld: <strong>ホスフェルド、ホスフェルト</strong><br />
        Hossain: <strong>ホセイン</strong><br />
        Howard: <strong>ハワード、ホワード</strong><br />
        Howell: <strong>ホーウェル</strong><br />
        Huang: <strong>フォアン</strong><br />
        Huey: <strong>ヒューイ</strong><br />
        Hughey: <strong>ヒューイ</strong><br /> 
		Hung: <strong>フング</strong><br /> 
        Hunter: <strong>ハンター</strong><br /> 
        Hussey: <strong>ハッセー（f）</strong><br />
        Hye-sun: <strong>ヒェソン</strong><br />
        </dd>
    </dl>
</div>





<div class="content i-content">
    <dl>
    <dt>I</dt>
        
    	<dd>
        Ian: <strong>イーアン、イアン</strong></strong><br />
		Imad: <strong>イマード</strong><br />
        Irby: <strong>アービー</strong></strong><br />
        Israel: <strong>イスラエル、イズラエル</strong></strong><br />
        Isaac: <strong>アイセック、イサク</strong><br />
        Isabel: <strong>イザベル</strong><br />
        Ivey: <strong>アイビー</strong><br />
       </dd>
    </dl>
</div>




<div class="content j-content">
    <dl>
    <dt>Ja</dt>
    	<dd>
        Jack: <strong>ジャック</strong><br />
        Jackson: <strong>ジャクソン</strong><br />
        Jacqueline: <strong>ジャクリーン</strong><br />
        Jaggers: <strong>ジャガーズ</strong><br />
        Jai: <strong>ジャイ</strong><br />
        James; Jim: <strong>ジェームズ; ジム</strong><br />
        Jamie: <strong>ジェイミー</strong><br />
        Jamison: <strong>ジェミソン</strong><br />
        Janardhanan: <strong>ジャナダナン</strong><br />
        Jannell: <strong>ジャネル</strong><br />
        Jane: <strong>ジェーン</strong><br />
        Janese: <strong>ジャネス</strong><br />
		Janet; Jannett: <strong>ジャネット</strong><br />
        Jang: <strong>チャン</strong><br />
        Jared: <strong>ジャレッド</strong><br />
        Jaren: <strong>ジャレン</strong><br />
        Jasmine: <strong>ジャスミン</strong><br />
        Jason: <strong>ジェーソン</strong><br />
        Jaxon: <strong>ジャクソン</strong><br />
        Jay: <strong>ジェイ、ジェー</strong><br />
        Jean: <strong>ジーン</strong><br />
        Jeff; Jeffrey: <strong>ジェフ；　ジェフリー</strong><br />
        Jeffcoat: <strong>ジェフコート</strong><br />
        Jefferson: <strong>ジェファーソン</strong><br />
        Jennie; Jennifer: <strong>ジェニー；　ジェニファー</strong><br />
        Jeong: <strong>ジョオン</strong><br />
        Jeong-sun: <strong>ジョオンソン</strong><br />
        Jeremy: <strong>ジェレミー</strong><br />
        Jerome: <strong>ジェローム</strong><br />
        Jerritte: <strong>ジャレット</strong><br />
        Jess: <strong>ジェス</strong><br />
        Jessica: <strong>ジェシカ</strong><br />
        Jesse, Jessie: <strong>ジェッシー</strong><br />
		Jiang: <strong>ジャン</strong><br />
        Jillian: <strong>ジリアン</strong><br />
        Jim; James: <strong>ジム; ジェームズ</strong><br />
		Jivan: <strong>ジーヴァン; ジーバン</strong><br />
        </dd>
      
      <dt>Jm</dt>
      <dd>
        Joan: <strong>ジョアン</strong><br />
        Jobst: <strong>ジョブスト</strong><br />
        Jody: <strong>ジョディー</strong><br />
        Jon, John; Johnny: <strong>ジョン；　ジョニー</strong><br />
        Johansson: <strong>ヨハンソン</strong><br />
        Johnson: <strong>ジョンソン</strong><br />
        Joe; Joseph: <strong>ジョー；　ジョセフ、ヨセフ</strong><br />
        Joel: <strong>ジョエル</strong><br />
        Joey: <strong>ジョーイ</strong><br />
        Jonathan: <strong>ジョナサン</strong><br />
        Jones: <strong>ジョーンズ</strong><br />
        Jorge: <strong>ホルヘ</strong><br />
        Jose: <strong>ホゼ</strong><br />
        Josh; Joshua: <strong>ジョシュ；　ジョシュア</strong><br />
        Joseph; Joe: <strong>ジョセフ、ヨセフ；　ジョー</strong><br />
        Jordan: <strong>ジョーダン</strong><br />
        Joy: <strong>ジョイ</strong><br />
        Juanita: <strong>ワニタ</strong><br />
        Juarez: <strong>ワレズ</strong><br />
        Judy; Judith: <strong>ジュディー；　ジュディス</strong><br />
        Julia\: <strong>ジュリア</strong><br />
        Juliann: <strong>ジュリアン</strong><br />
        Jun, June: <strong>ジュン</strong><br />
        Justin: <strong>ジャスティン</strong><br />
        Justo: <strong>ジャスト</strong><br />
		Jyoti: <strong>ジョティ</strong><br />
   
       </dd>
    </dl>
</div>





<div class="content k-content">
    <dl>
	<dt>Ka</dt>
    	<dd>
        Kacie: <strong>ケイシー、ケーシー</strong><br />
        Kailash: <strong>カイラシュ</strong><br />
        Kala: <strong>カーラ</strong><br />
        Kalee: <strong>ケリー</strong><br />
        Kamal: <strong>カマル</strong><br />
        Kamala: <strong>カマラ</strong><br />
        Kannan: <strong>カンナン、カナン</strong><br />
        Kara: <strong>カラ、カーラ</strong><br />
        Karen: <strong>キャレン、カレン</strong><br />
        Karwan: <strong>カルワン</strong><br />
        Kasinger: <strong>ケシンジャー</strong><br />
        Kate; Katie: <strong>ケート；　ケーティー</strong><br />
        Katelyn: <strong>ケートラン</strong><br />
        Katharine; Kathleen: <strong>キャサリン</strong><br />
        Katrina: <strong>カトリナ</strong><br />
        Kayla: <strong>ケーラ</strong><br />
          
        </dd>

	<dt>Ke</dt>
    	<dd>
        Kearney: <strong>カーニー</strong><br />
        Keenam: <strong>キーナム</strong><br />
        Keenan: <strong>キーナン</strong><br />
        Keeshen: <strong>キーシェン</strong><br />
        Keller: <strong>ケラー</strong><br />
        Kelley, Kelly: <strong>ケリー</strong><br />
        Kelm: <strong>ケルム</strong><br />
		Kelsey: <strong>ケルシー</strong><br />
        Kelton: <strong>ケルトン</strong><br />
        Ken: <strong>ケン</strong><br />
        Kennedy: <strong>ケネディー</strong><br />
        Kenny: <strong>ケニー</strong><br />
        Kenton: <strong>ケントン</strong><br />
        Ketelyn: <strong>キートラン</strong><br />
        Kevin: <strong>ケビン、ケヴィン</strong><br />
        Khan: <strong>カーン</strong><br />
        Kheeston: <strong>キーストン</strong><br />
		Khine: <strong>カイン</strong><br />
          
        </dd>

	<dt>Ki</dt>
    	<dd>
        Kirkendoll: <strong>カーケンドール</strong><br />
       	Kiahra: <strong>キアラー</strong><br />
        Kiley: <strong>キリー</strong><br />
       	Kim: <strong>キム</strong><br />
		Kimberly: <strong>キンバリー</strong><br />
        Kindlel: <strong>キンドル</strong><br />
        King: <strong>キング</strong><br />
        Kirsten: <strong>カースティン</strong><br />
        Kirkhoff: <strong>カークホフ</strong><br />
        Kirwin, Kierwinn: <strong>カーウィン</strong><br />
        Kisner: <strong>キスナー</strong><br />
        Kitchen: <strong>キッチン</strong><br />
        Klotz: <strong>クロッツ</strong><br />
        Knight: <strong>ナイト</strong><br />
          
        </dd>

	<dt>Ko</dt>
    	<dd>
        Kocher: <strong>コッチャー、コッハー</strong><br />
        Koh: <strong>コ，コー</strong><br />
        Kori: <strong>コーリ、コリ</strong><br />
        Kreig: <strong>クレーグ、クレッグ</strong><br />
        Kriegel: <strong>クリーゲル</strong><br />
        Krista: <strong>クリスタ</strong><br />
        Kristen, Kristin, Khrystean: <strong>クリステン、クリスティン</strong><br />
        krona: <strong>クローナ</strong><br />
        Kruger: <strong>クルガー</strong><br />
        Kurzawski: <strong>クルザウスキー</strong><br />
        Kyle: <strong>カイル</strong><br />
        Kylee: <strong>カイリー</strong><br />
        
        </dd>
  
    </dl>
</div>




<div class="content l-content">
    <dl>
    <dt>La</dt>
    	<dd> 
        Labar: <strong>ラバー</strong><br />
        Lacey: <strong>レイシー</strong><br />
        LaGuette: <strong>ラゲット</strong><br />
		Lai: <strong>ライ</strong><br />
        Laird: <strong>レアード</strong><br />
        Lakshmi: <strong>ラクシミ</strong><br />
        Lam: <strong>ラム</strong><br />
        LaMarcus: <strong>ラマーカス</strong><br />
        Lance: <strong>ランス</strong><br />
        Laura: <strong>ローラ</strong><br />
        Lauren: <strong>ローレン</strong><br />
        Lauree, Laurrie: <strong>ローリー</strong><br />
        Le: <strong>リ、リー</strong><br />
        Lee: <strong>リー、イ</strong><br />
        Leila: <strong>レイラ</strong><br />
        Lencha: <strong>レンチャ</strong><br />
        Leng: <strong>レン</strong><br />
        Lentz: <strong>レンツ</strong><br />
        Lepnardo: <strong>レオナルド</strong><br />
        Leslie: <strong>レスリー</strong><br />
        Lessels: <strong>レサーズ</strong><br />
		Lew: <strong>ルー</strong><br />
        Lewis: <strong>ルイス</strong><br />
        Lexy: <strong>レクシー</strong><br />
        
        
       </dd>

	<dt>Lf</dt>
    	<dd>
        Li: <strong>リー</strong><br />
        Lillian: <strong>リリアン</strong><br />
        Lilliana: <strong>リリアナ</strong><br />
        Lily: <strong>リリー</strong><br />
        Lindsey; Lindzy: <strong>リンジー</strong><br />
        Lin: <strong>リン</strong><br />
        Linda; Lynda: <strong>リンダ</strong><br />
        Lindfors: <strong>リンドフォース</strong><br />
		Linz: <strong>リンズ</strong><br />
        Lippsmeyer: <strong>リップスメーヤー</strong><br />
        Lisa: <strong>リサ</strong><br />
         Lisenbee: <strong>リセンビー</strong><br />
        Liu: <strong>リュ、リュー、リュウ、リウ、ルー</strong><br />
        Liulinbo: <strong>リュリンボ</strong><br />
        Liz: <strong>リズ</strong><br />
        </dd>
        
    <dt>Lo</dt>
    	<dd>
        Loeffler: <strong>レフラー</strong><br /> 
        Logan: <strong>ローガン</strong><br />
        Lonnie: <strong>ロニー</strong><br />
        Looper: <strong>ルーパー</strong><br /> 
        Lori: <strong>ローリー</strong><br />
        Loryn: <strong>ローリン</strong><br />
        Lotus: <strong>ロータス</strong><br />
        Lovegren: <strong>ラブグレン</strong><br />
      	Lu: <strong>ルー</strong><br />
        Lucas: <strong>ルーカスン</strong><br />
        Luciano: <strong>ルシアノ</strong><br />
        Luis: <strong>ルイス</strong><br />
        Luke: <strong>ルーク、ルカ</strong><br />
        Luna: <strong>ルーナ</strong><br />
        Luther: <strong>ルーサー</strong><br />
		Luu: <strong>ルー</strong><br />
       </dd>

    </dl>
</div>




<div class="content m-content">
    <dl>
	<dt>Ma</dt>
    	<dd>
       Mac: <strong>マック</strong><br />
       McAbee: <strong>マッカビー</strong><br />
       McCarthy: <strong>マッカーシー</strong><br />
       McClaine: <strong>マックレイン</strong><br />
       McCoy: <strong>マッコーイ</strong><br />
       McCrary: <strong>マックラリー、マッククラリー</strong><br />
       McDonald: <strong>マクドナルド</strong><br />
       McGee: <strong>マックギー、マッギー</strong><br />
        McElveen: <strong>マックエルビーン、マックエルヴィーン</strong><br />
        McEntire: <strong>マッケンタイヤー</strong><br />
        Mack: <strong>マック</strong><br />
        Maclachlan: <strong>マクラクラン</strong><br />
        
        McMillan: <strong>マックミラン</strong><br />
        McMinn: <strong>マックミン</strong><br />
        McNamara: <strong>マックナマラ</strong><br />
        McNeal: <strong>マックニール</strong><br />
        McQuirter: <strong>マクォーター</strong><br />
        McWhorter: <strong>マックウォーター</strong><br />
            </dd>

	<dt>Mad</dt>
    	<dd>
        Madden: <strong>マデン、マッデン</strong><br /> 
        Madeline: <strong>マドライン</strong><br />
        Maggie; Margaret: <strong>マギー；マーガレット</strong><br />
        Major: <strong>メージャー</strong><br />
        Malathi: <strong>マラティ</strong><br />
        Malcolm: <strong>マルコム</strong><br />
        Malia, Maria: <strong>マリア</strong><br />
        Malo: <strong>マロ</strong><br />
        Malone: <strong>マローン</strong><br /> 
        Mann: <strong>マン</strong><br />
        Manuel: <strong>マニュエル</strong><br />
        Maples: <strong>メープルズ</strong><br />
        Maria, Malia: <strong>マリア</strong><br />
        Marie: <strong>マリー</strong><br />
        Mario: <strong>マリオ</strong><br />
        Margaret; Maggie; Peggy: <strong>マーガレット；　マギー；　ペギー</strong><br />
        Marjorie: <strong>マージョリー</strong><br />
        Mark: <strong>マーク</strong><br />
         Marquis: <strong>マキウィス</strong><br />
        Marquise: <strong>マルクィーズ、マルキース、マルキーズ</strong><br />
        Marrissa <strong>マリッサ</strong><br />
        Martel <strong>マルテル、マーテル</strong><br />
        Martin: <strong>マーティン</strong><br />
        Martinez: <strong>マルティネス、マルチネス</strong><br />
        Maryann: <strong>マリアン</strong><br />
        Mashburn: <strong>マシュバーン</strong><br />
        Mason: <strong>メイソン</strong><br />
        Matt; Matthew: <strong>マット；　マシュー、マタイ</strong><br />
        Mauricio: <strong>マウリシオ</strong><br />
        Maurreen: <strong>モーリーン</strong><br />
        Mary: <strong>メアリー</strong><br />
        Max: <strong>マックス</strong><br />
        Maxon: <strong>マキソン、マクソン</strong><br />
        Maxwell: <strong>マックスウェル</strong><br />
        Maya: <strong>マヤ</strong><br />
        </dd>

	<dt>Mb</dt>
    	<dd>
        Meagan: <strong>ミーガン、メーガン</strong><br />
        Medina: <strong>メディナ</strong><br />
        Megan: <strong>メーガン、ミーガン</strong><br />
        Melchionni: <strong>メルチオーニ</strong><br />
        Melin: <strong>ミリンダ、メリンダ、マリンダ</strong><br />
        Melinda: <strong>メリン</strong><br />
        Melissa: <strong>メリサ</strong><br />
        Melone: <strong>メローネ、メローン</strong><br />
        Mendoza: <strong>メンドーサ、メンドーザ</strong><br />
        Mercedes: <strong>メルセデス、メーセデス</strong><br />
        Meyer: <strong>マイヤー</strong><br />
        Michael: <strong>マイケル</strong><br />
        Michelle: <strong>ミッシェル</strong><br />
        MicKayla: <strong>マッケーラ</strong><br />
        Mike: <strong>マイク</strong><br />
        Mims: <strong>ミムズ</strong><br />
        Min: <strong>ミン</strong><br />
		Mina: <strong>ミナ</strong><br />
        Mirna: <strong>ミルナ</strong><br />        
        Mishra: <strong>ミシュラ</strong><br />
        Mitchell: <strong>ミッチェル</strong><br />
        Mitra: <strong>ミトラ</strong><br />
        Mlinac: <strong>メリナック</strong><br />
           </dd>

	<dt>Mn</dt>
    	<dd>
        Monroe: <strong>モンロー</strong><br />
        Montoya: <strong>モントヤ</strong><br />
        Mooney: <strong>ムーニー</strong><br />
        Moore: <strong>モア</strong><br />
		Morales: <strong>モラレス</strong><br />
        Moreau: <strong>モロー</strong><br />
        Moreira: <strong>モレイラ</strong><br />
        Moreno: <strong>モレノ</strong><br />
        Moss: <strong>モス</strong><br /> 
        Mousner: <strong>マウズナー</strong><br />
        Mouton: <strong>ムートン</strong><br /> 
        Muschamp: <strong>マスチャンプ</strong><br />
        Musslewhite: <strong>ムッセルワイト</strong><br />
        Myra: <strong>マイラ</strong><br />
        </dd>
    </dl>
</div>





<div class="content n-content">
    <dl>
	<dt>Na</dt>
    	<dd>
       Nabil: <strong>ナビル</strong><br />
       Nadia: <strong>ナディア</strong><br />
	   Nagy: <strong>ネギー</strong><br />
       Namaky: <strong>ナマキー</strong><br />
       Namusu: <strong>ナムス</strong><br />
       Nan: <strong>ナン</strong><br />
       Nancy: <strong>ナンシー</strong><br />
       Naomi: <strong>ナオミ</strong><br />
       Napier: <strong>ネピア</strong><br />
       Narayanan: <strong>ナラヤナン</strong><br />
       Nash: <strong>ナッシュ</strong><br />
       Natalie: <strong>ナタリー</strong><br />
       Natasha: <strong>ナターシャ</strong><br />
       Nate: <strong>ネイト、ネート</strong><br />
       Nathan: <strong>ネイサン</strong><br />
       Nauder: <strong>ナウダー</strong><br />
       Nelson: <strong>ネルソン</strong><br />
       Newman: <strong>ニューマン</strong><br />
       Newton: <strong>ニュートン</strong><br />
       Newzad: <strong>ノザード</strong><br />
       Ngo: <strong>ノ</strong><br />
       Nguyen: <strong>ニュエン、ウェン、ヌエン、ウィン、グエン</strong><br />
        </dd>

	<dt>Ni</dt>
    	<dd>
        Nicole: <strong>二コール</strong><br />
        Nicolas: <strong>ニコラス</strong><br />
        Nick; Nicolas: <strong>ニック；　ニコラス</strong><br />
        Nickleson: <strong>ニクルソン</strong><br />
        Nielsen: <strong>ニールセン</strong><br />
       Nina : <strong>ニーナ</strong><br />
       Nobel: <strong>ノーベル</strong><br />
        Noel: <strong>ノエル</strong><br />
        Norman: <strong>ノーマン</strong><br />
        Nolan: <strong>ノーラン</strong><br />
        Norton: <strong>ノートン</strong><br />
        Nosek: <strong>ノーゼック</strong><br />
        </dd>
     
    </dl>
</div>




<div class="content o-content">
    <dl>
	<dt>O</dt>
    	<dd>
    	Obama: <strong>オバマ</strong><br />
        Ochard: <strong>オチャード</strong><br />
        O'Connell: <strong>オコーネル</strong><br />
        Ogden: <strong>オグデン</strong><br />
        Oh: <strong>オー</strong><br />
        Okafor: <strong>オカファー</strong><br />
        Oliver: <strong>オリバー</strong><br />
        Olmstead: <strong>オルムステッド</strong><br />
        Oralia: <strong>オラリア</strong><br />
        Ontko: <strong>オントコ</strong><br />
        Orlando: <strong>オーランド</strong><br />
        Ornellas: <strong>オネラス</strong><br />
        Oscar: <strong>オスカー</strong><br />
        Osterman: <strong>オスターマン</strong><br />
         
        </dd>
    </dl>
</div>





<div class="content p-content">
    <dl>
	<dt>P</dt>
   	  <dd>
      	Paden: <strong>パーデン、ペイデン</strong><br />
        Padgett: <strong>パジェット</strong><br />
        Padilla: <strong>パディラ</strong><br />
        Page: <strong>ページ</strong><br />
        Pam: <strong>パム</strong><br />
		Pamplin: <strong>パンプリン</strong><br />
        Paris: <strong>パリス</strong><br />
        Park: <strong>パーク</strong><br />
        Parker: <strong>パーカー</strong><br />
        Paschall: <strong>パスカル</strong><br />
        Pat; Patrick: <strong>パット；　パトリック</strong><br />
		Patel: <strong>パテル</strong><br />
        Pati, Patti; Patricia: <strong>パティ；　パトリシア</strong><br />
        Paul: <strong>ポール</strong><br />
        Paula: <strong>ポーラ</strong><br />
        Paulino: <strong>ポウリーノ、ポーリーノ</strong><br />
        Payton: <strong>ペイトン</strong><br />
        Pedersen: <strong>ペダーセン</strong><br />
        Peilun: <strong>ペイルン</strong><br />
        Peggy: <strong>ペギー</strong><br />
        Perla: <strong>パーラ</strong><br />
        Perron: <strong>ペローン</strong><br />
        Peter: <strong>ピーター</strong><br />
        Petri: <strong>ペトリ</strong><br />
        Pfluger: <strong>フルーガー</strong><br />
        Phillips: <strong>フィリップス</strong><br />
        Pierce: <strong>ピアス、ピアース</strong><br />
        Pitt: <strong>ピット</strong><br />
        Pittman: <strong>ピットマン</strong><br />
        
        </dd>

	<dt>Pm</dt>
    	<dd>
        Plotsky: <strong>プラツキー</strong><br />
        Poehlmann: <strong>ポールマン</strong><br />
        Pollard: <strong>ポラード</strong><br />
        Porter: <strong>ポーター</strong><br />
      	Posey: <strong>ポージー</strong><br />
      	Poston: <strong>ポストン</strong><br />
        Power: <strong>パワー</strong><br />
		Prakash: <strong>プラカシ</strong><br />
      	Prefume: <strong>プレヒューム</strong><br />
        Price: <strong>プライス</strong><br />
        Priebe: <strong>プリーベ</strong><br />
        Prum: <strong>プラム</strong><br />
        Puente: <strong>プエンテ</strong><br />
        Pujara: <strong>プジャラ</strong><br />
		Purvis: <strong>パービス</strong><br />
        Puthaaroon: <strong>プサルーン</strong><br />
        Pyndus: <strong>ピンドス</strong><br />
        </dd>

    </dl>
</div>





<div class="content q-content">
    <dl>
	<dt>Q</dt>
    	<dd>
       Qingzi: <strong>クィンズィ</strong><br />
	    Quach: <strong>クァチ</strong><br />
        Quitugua:<strong></strong><br />
        Quocviet:<strong>クォックヴィエット, クォック・ヴィエット</strong><br />

	</dd>
    </dl>
</div>



<div class="content r-content">
    <dl>
	<dt>Ra</dt>
    	<dd>
        Raam: <strong>ラーム</strong><br />
        Rachel: <strong>レイチェル</strong><br />
        Rafaela: <strong>ラファエラ</strong><br />
		Rajal: <strong>ラジャル</strong><br />
        Rahul: <strong>ラフル</strong><br />
        Rama: <strong>ラマ</strong><br />
        Ramirez: <strong>ラミレス</strong><br />
        Ran: <strong>ラン</strong><br />
        Randall: <strong>ランドール</strong><br />
        Randy: <strong>ランディー</strong><br />
        Raven: <strong>レイヴン</strong><br />
        Ray: <strong>レイ</strong><br />
        Raygan: <strong>ライガン</strong><br />
        Ryan: <strong>ライアン</strong><br />
        Ravi: <strong>ラヴィ、ラビ</strong><br />
       	Reade: <strong>リード</strong><br />
        Rebecca; Rebeka: <strong>リベカ、レベッカ</strong><br />
        Reed: <strong>リード</strong><br />
        Reggie: <strong>レジー</strong><br />
        Regina: <strong>レジーナ</strong><br />
        Regnery: <strong>レグネリー</strong><br />
        Reliford: <strong>レリフォード</strong><br />
        Rema: <strong>レマ-</strong><br />
		Reyna: <strong>レイナ</strong><br />
        Rhee: <strong>リー</strong><br />
        Rhonda: <strong>ロンダ</strong><br />
        Richard; Rick: <strong>リチャード；　リック</strong><br />
        Richardson: <strong>リチャードソン</strong><br />
        Rick: <strong>リック</strong><br />
        Rikki: <strong>リッキー</strong><br />
        Riley: <strong>ライリ、ライリー</strong><br />
        Ritter: <strong>リッター</strong><br />
		Rizzo: <strong>リゾ</strong><br />
        Rivera: <strong>リベラ、リヴェラ</strong><br />
        </dd>

	<dt>Rm</dt>
    	<dd>
        Roberson: <strong>ロバーソン</strong><br />
        Robert; Roberts: <strong>ロバート；　ロバーツ</strong><br />
        Roberta: <strong>ロバータ</strong><br />
        Roberto: <strong>ロべルト、ロベート</strong><br />
        Robertson: <strong>ロバートソン</strong><br />
        Robinson: <strong>ロビンソン</strong><br />
        Rochelle: <strong>ロチェル</strong><br />
        Rodrigues, Rodriguez: <strong>ロドリゲス</strong><br />
        Rockwell: <strong>ロックウェル</strong><br />
        Rogoyski: <strong>ロゴイスキー</strong><br />
        Rollins: <strong>ローリンズ</strong><br />
        Ronald: <strong>ロナルド</strong><br />
        Rose: <strong>ローズ</strong><br />
        Ross: <strong>ロス</strong><br />
        Rostopchina: <strong>ロストップチナ</strong><br />
        Rove: <strong>ロウブ、ローブ</strong><br />
        Roy: <strong>ロイ</strong><br />
        Royal: <strong>ロイヤル</strong><br />
        Rucker: <strong>ラッカー</strong><br />
        Ruddock: <strong>ルドック</strong><br />
        Rudy: <strong>ルーディー</strong><br />
        Russ: <strong>ラス</strong><br />
		Ruth: <strong>ルース</strong><br />
        </dd>
    </dl>
</div>




<div class="content s-content">
    <dl>
	<dt>Sa</dt>
    	<dd>
        Sadberry: <strong>サドベリー、サッドベリー</strong><br />
        Saenz: <strong>サエンツ</strong><br />
        Sahana: <strong>サハナ</strong><br />
        Salazar: <strong>サラザー</strong><br />
        Salima: <strong>サリマ</strong><br />
        Sally: <strong>サリー</strong><br />
        Salwa: <strong>サルワ</strong><br />
        Sam: <strong>サム</strong><br />
        Samantha: <strong>サマンサ</strong><br />
        Sandra: <strong>サンドラ</strong><br />
        Santos: <strong>サントス</strong><br />
        Sara, Sarah: <strong>サラ</strong><br />
        Sarai: <strong>サライ</strong><br />
        Sarathi: <strong>サラシ</strong><br />
        Sasha: <strong>サーシャ</strong><br />
        Sathasivan: <strong>ササシバン、ササシヴァン</strong><br />
        Savony: <strong>サヴァニー</strong><br />
        Scales: <strong>スケールズ</strong><br />
        Scarlett: <strong>スカーレット</strong><br />
        Schneider: <strong>シュナイダー</strong><br />
        Schmidt: <strong>シュミッツ</strong><br />
        Schultz: <strong>ショルツ</strong><br />
        Schiller: <strong>シラー</strong><br />
        Schreiber: <strong>シュライバー</strong><br />
        Scot, scott: <strong>スコット</strong><br />
        Sean: <strong>シェーン、シェイン、ショーン</strong><br />
        Searles: <strong>シアーレス</strong><br />
        Senakarn: <strong>セナカーン</strong><br />
        Sergio: <strong>サージオ</strong><br />
       
        </dd>

	<dt>Sh</dt>
    	<dd>
        Sha'Dare: <strong>シャデア</strong><br />
        Shakti: <strong>シャクティ</strong><br />
        Shane: <strong>シェエン、シェーン</strong><br />
        Shannah: <strong>シャナ</strong><br />
        Shannon: <strong>シャノン</strong><br />
        Sharon: <strong>シャロン</strong><br />
        Shawn: <strong>ショーン</strong><br />
        Shead: <strong>シード、シェード</strong><br />
       Shelby: <strong>シェルビー</strong><br />
        Shelly: <strong>シェリー</strong><br />
        Shenning: <strong>シェニング</strong><br />
        Sherrod: <strong>シェロード</strong><br />
		Shi: <strong>シ</strong><br />
        Shields: <strong>シールズ</strong><br />
	   Shiva, Siva: <strong>シヴァ、シバ</strong><br />
        Shivakumar, Sivakumar: <strong>シヴァクマール、シバクマール</strong><br />
        Shridar, Sridhar: <strong>シュリダル</strong><br />
        Sidhu: <strong>シドゥ</strong><br />
        Sidney: <strong>シドニー</strong><br />
        Siegle: <strong>シーグル</strong><br />
        Sievers: <strong>シーバーズ</strong><br />
        Simms: <strong>シムズ</strong><br />
        Simon, Simone: <strong>シモン、サイモン</strong><br />
        Singer: <strong>シンガー</strong><br />
		Singletary: <strong>シングルタリ</strong><br />
        Sisi: <strong>シシー</strong><br />
        Siva, Shiva: <strong>シヴァ、シバ</strong><br />
        Sivakumar, Shivakumar: <strong>シヴァクマール、シバクマール</strong><br />
        Slough: <strong>スラウ</strong><br />
       </dd>

	<dt>Sm</dt>
    	<dd>
        Smith: <strong>スミス</strong><br />
        Snow: <strong>スノー</strong><br />
        Soland: <strong>ソランド</strong><br />
        Sophia: <strong>ソフィア</strong><br />
        Stacy: <strong>ステーシー</strong><br />
        Stafford: <strong>スタッフォード</strong><br />
        Staha: <strong>スタハー</strong><br />
        Stalker: <strong>ストーカー</strong><br />
        Stan; Stanley: <strong>スタン；　スタンリー</strong><br />
        Stapp: <strong>スタップ</strong><br />
        Stefanie, Stephanie: <strong>ステファニー</strong><br />
     	Stephen: <strong>スティーブン、ステファン</strong><br />
        Stephens: <strong>スティーブンス、ステファンズ</strong><br />
        Steve; Steven: <strong>スティーブ；　スティーブン</strong><br />
        Sterling: <strong>スターリング</strong><br />
        Strong: <strong>ストロング</strong><br />
        Stuart: <strong>スチュアート</strong><br />
        Su: <strong>ス、スー</strong><br />
        Sutherland: <strong>サザランド</strong><br />
        Sullivan: <strong>サリバン</strong><br />
        Suloni: <strong>スローニ</strong><br />
        Summerville: <strong>サマービル、サマーヴィル</strong><br />
        Susan: <strong>スーザン</strong><br />
        Susanna: <strong>スザナ</strong><br />
        Sutton: <strong>スートン</strong><br />
        Swanson: <strong>スワンソン</strong><br />
        Sydmill: <strong>シドミル</strong><br />
         </dd>
        
    </dl>
</div>




<div class="content t-content">
    <dl>
	<dt>Ta</dt>
    	<dd>
        Tallie: <strong>タリー</strong><br />
        Tamara: <strong>タマラ</strong><br />
        Tamra: <strong>タムラ</strong><br />
        Tan: <strong>タン</strong><br />
        Tang: <strong>タング</strong><br />
        Tanya: <strong>ターニャ</strong><br />
        Tariq: <strong>タリック</strong><br />
        Tasha: <strong>ターシャ</strong><br />
        Taylor: <strong>タイラー</strong><br />
        Teylar: <strong>テイラー</strong><br />
        TenBargey: <strong>テンバージ</strong><br />
        Terera: <strong>テレサ</strong><br />
        Teri, Terry: <strong>テリー</strong><br />
        Terrell: <strong>テレル、テレール</strong><br />
        Tevin: <strong>テヴィン、テビン</strong><br />
        Theodore: <strong>セオドア</strong><br />
        Thompson: <strong>トンプソン</strong><br />
        Thrasher: <strong>スラッシャー</strong><br />
        Thuong: <strong>トゥオング</strong><br />
        Tianyi : <strong>テンイ</strong><br />
        Tiff; Tiffany: <strong>ティフ；　ティファニー</strong><br />
       	Tim; Timothy: <strong>ティム；　ティムシー、ティモシー</strong><br />
        Timmons: <strong>ティモンズ</strong><br />
        Tina: <strong>ティーナ</strong><br />
    </dd>
      <dt>Tm</dt>
    	<dd>  
        Todd: <strong>トッド</strong><br />
        Tolleson: <strong>トレソン、トルソン</strong><br />
        Tom; Thomas: <strong>トム；　トーマス</strong><br />
        Tony: <strong>トニー</strong><br />
        Torbert: <strong>トーバート</strong><br />
        Torgersen: <strong>トーガーセン</strong><br />
        Tori; Torie: <strong>トーリ；　トーリー</strong><br />
        Tran: <strong>トラン</strong><br />
        Travis: <strong>トラビス</strong><br />
        Traylon: <strong>トレイラン</strong><br />
        Trent: <strong>トレント、トゥレント</strong><br />
        Tresselt: <strong>トレッセルト</strong><br />
        Trey: <strong>トゥレイ、トレイ</strong><br />
        Tristan: <strong>テゥリスタン</strong><br />
        Trung: <strong>トラン、トラング</strong><br />
        Truong: <strong>トロング、トゥロング</strong><br />
        Tsai: <strong>ツァイ</strong><br />
		 Tu: <strong>トゥー、ツー</strong><br />
        Tucker: <strong>タッカー</strong><br />
        Tyler: <strong>タイラー</strong><br />
        Tyrell: <strong>タイレル</strong><br />
        </dd>
    </dl>
</div>




<div class="content u-content">
    <dl>
	<dt>U</dt>
    	<dd>
        Usher: <strong>アッシャー</strong><br />
        Uzri: <strong>ウズリ</strong><br />
        </dd>
    </dl>
</div>




<div class="content v-content">
    <dl>
	<dt>V</dt>
    	<dd>
        Vaccaro: <strong>バカロ、バッカロ、ヴァカロ、ヴァッカロ</strong><br />
        Vaishali: <strong>ヴァイシャリ、バイシャリ</strong><br />
        Vallley: <strong>ヴァレー、ヴァレイ</strong><br />
        Van Olphan: <strong>ヴァンオルプァン</strong><br />
        Varez: <strong>バレス、ヴァレス</strong><br /> 
        Vaughan: <strong>ボーン、ヴォーン</strong><br />
        Vector: <strong>ヴェクター、ベクター</strong><br />
        Velez: <strong>ベレス、ヴェレス</strong><br />
       	Veronica: <strong>ベロニカ</strong><br />
        Victor: <strong>ビクター</strong><br />
        Victoria: <strong>ビクトリア、ヴィクトリア</strong><br />
        Vikas: <strong>ヴィカス、ビカス</strong><br />
        Vince: <strong>ビンズ、ヴィンズ</strong><br />
        Vincent: <strong>ビンセント、ヴィンセント</strong><br />
        Virgil: <strong>バージル</strong><br />
        Virginia; Gin; Ginny: <strong>ヴァージニア、バージニア；　ジン；　ジニー</strong><br /> 
        Vitray: <strong>ビトレー、ヴィトレー</strong><br />
        Vo: <strong>ヴォ</strong><br />
        Vodak: <strong>ボダック、ヴォダック</strong><br />
		Vodnik: <strong>ボドニク、ヴォドニク</strong><br /> 
        Vondrell: <strong>ボンドゥエル</strong><br />
        Votteler: <strong>バテラー</strong><br />
		Vuong: <strong>ブオング、ヴォング</strong><br />
        </dd>
    </dl>
</div>




<div class="content w-content">
    <dl>
    <dt>W</dt>
    	<dd>
      	Walgreen: <strong>ウォルグリーン</strong><br />
        Walker: <strong>ウォーカー</strong><br />
        Walt: <strong>ウォルト</strong><br />
       	Walters: <strong>ウォルターズ</strong><br />
        Wang: <strong>ワン</strong><br />
        Ward: <strong>ワード</strong><br />
        Wares: <strong>ウェアス</strong><br />
        Washington: <strong>ワシントン</strong><br />
        Watson: <strong>ワトソン</strong><br />
        Wayne: <strong>ウェイン</strong><br />
        Webster: <strong>ウェブスター</strong><br />
        WebsterLove: <strong>ウェブスターラブ</strong><br />
		Weems: <strong>ウィムス</strong><br />
        Weidmann: <strong>ウェイドマン</strong><br />
        Weir: <strong>ウィアー</strong><br />
        Weldon: <strong>ウェルドン</strong><br />
        Wendt: <strong>ウェンツ</strong><br />
        Wes: <strong>ウェス</strong><br />
        Wesley: <strong>ウェスリー、ウエスリー</strong><br />
        Wesson: <strong>ウェサン、ウエサン</strong><br />
         </dd>
      <dt>Wh</dt>
    	<dd> 
        Whaley: <strong>ウェーリー、ウェイリー</strong><br />
        White: <strong>ホワイト</strong><br />
        Whitfield: <strong>ウィットフィールド、ホイットフィールド</strong><br />
        Whitney: <strong>ウィットニー、ホイットニー</strong><br />
        Whittaker: <strong>ウィテカー</strong><br />
        Whittaker: <strong>ウィタッカー、ホィタッカー</strong><br />
        Wilcox: <strong>ウィルコック</strong><br />
        Wiley: <strong>ウィリー</strong><br />
        Will: <strong>ウィル</strong><br />
        William: <strong>ウィリアム</strong><br />
        Williams: <strong>ウィリアムズ</strong><br />
        Williamson: <strong>ウィリアムソン</strong><br />
        Willis: <strong>ウィリス</strong><br />
        Wilmore: <strong>ウィルモア</strong><br />
        Wilson: <strong>ウィルソン</strong><br />
        Winder: <strong>ウィンダー</strong><br />
        Wong: <strong>ウォング</strong><br />
       Wood: <strong>ウッド</strong><br />
       Wynn: <strong>ウィン</strong><br />
       </dd>
    </dl>
</div>





<div class="content x-content">
    <dl>
    <dt>X</dt>
    	<dd>
		Xiao: <strong>シアオ</strong><br />
        Xing: <strong>シング</strong><br />
		Xuan: <strong>シュアン</strong><br />
        <dd>Xue: <strong>シュエ</strong><br />
        </dd>
    </dl>
</div>





<div class="content y-content">
    <dl>
	<dt>Y</dt>
    	<dd>
        Yang: <strong>ヤン</strong><br />
        Yao: <strong>ヤオ</strong><br />
        Yogi: <strong>ヨギ、ヨギー</strong><br />
        You: <strong>ユウ、ユー</strong><br />
        Young: <strong>ヤング</strong><br />
        Yu: <strong>ユー</strong><br />
        Yue: <strong>ユエ</strong><br />
        Yuan: <strong>ユアン</strong><br />
        Yvonne: <strong>イボーン</strong><br />
       </dd>

 </dl>
</div>




<div class="content z-content">
    <dl>
	<dt>Z</dt>
    	<dd>Zabaletta: <strong>ザバレタ</strong><br />
        Zachary: <strong>ザッカリー</strong><br />
        Zagorski: <strong>ザゴースキー</strong><br />
        Zahra, Zara: <strong>ザラ</strong><br />
        Zajicek: <strong>ザジセック</strong><br />
        Zea: <strong>ジー（f）</strong><br />
        Zhang: <strong>ジャン, ザン</strong><br />
        Zoe: <strong>ゾイ</strong><br />
        Zumberge: <strong>ザンバーグ</strong><br />
        Zuyzes: <strong>ザイゼス</strong><br />
        Zych: <strong>ジッチ</strong><br />
        
       </dd>
    </dl>
</div>



<div id="player"></div>
<div class="clear"></div>
</div>

</body>
</html>