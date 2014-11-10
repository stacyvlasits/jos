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
		header("Location:http://laits.utexas.edu/japanese/joshu/tables/table5.php");
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Katakana table 5</title>

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
    <dt>ア</dt>
    <dd>action: <strong>アクション</strong><br />
        America: <strong>アメリカ</strong><br />
        Arabia: <strong>アラビア</strong><br />
        Arkansas: <strong>アーカンソー</strong><br />
        aspirin: <strong>アスピリン</strong></dd>
    <dt>エ</dt>
    <dd>Ace: <strong>エース</strong><br />
        Aerobics: <strong>エアロビクス</strong><br />
        Air: <strong>エア</strong><br />
        April fool’s day: <strong>エイプリルフール</strong></dd>
    <dt>オ</dt>
    <dd>Audio: <strong>オーディオ</strong><br />
        Australia: <strong>オーストラリア</strong><br />
        Austin:  <strong>オースティン</strong></dd>
    </dl>
</div>

<div class="content b-content">
    <dl>
    <dt>バ</dt>
    <dd>bi; by; bye: <strong>バイ</strong><br />
        bar: <strong>バー</strong><br />
        bass; bath; bus: <strong>バス</strong><br />
        Bermuda: <strong>バーミューダ</strong><br />
        Bible: <strong>バイブル</strong><br />
        birthday: <strong>バースデー</strong><br />
        bounce: <strong>バウンス</strong><br />
        burner: <strong>バーナー</strong></dd> 
    
    <dt>ビ</dt>
    <dd>b; be; bee: <strong>ビー</strong><br />
        Beat: <strong>ビート</strong><br />
        Beer: <strong>ビール</strong><br />
        Big: <strong>ビッグ</strong><br />
        Billiard: <strong>ビリアード</strong><br />
        business: <strong>ビジネス</strong></dd> 
    
    <dt>ブ</dt>
    <dd>block: <strong>ブロック</strong><br />
        Blue: <strong>ブルー</strong><br />
        boom: <strong>ブーム</strong><br />
        Boots: <strong>ブーツ</strong><br />
        brown: <strong>ブラウン</strong><br />
        Buenos Aires: <strong>ブェノスアイレス</strong></dd> 
            
    <dt>ベ</dt>
    <dd>baby: <strong>ベービー</strong><br />
        base, bass: <strong>ベース</strong><br />
        bed: <strong>ベッド</strong><br />
        Belt: <strong>ベルト</strong><br />
        Best: <strong>ベスト</strong></dd> 
    
    <dt>ボ</dt>
    <dd>boat: <strong>ボート</strong><br />
        Bolivia: <strong>ボリビア</strong><br />
        bonus: <strong>ボーナス</strong><br />
        Boston: <strong>ボストン</strong></dd>
    </dl>
</div>

<div class="content c-content">
    <dl>
    <dt>カ</dt>
        <dd>Calendar: <strong>カレンダー</strong><br />
        California: <strong>カリフォルニア</strong><br />
        Camera: <strong>カメラ</strong><br />
        cover: <strong>カバー</strong><br />
        curry: <strong>カレー</strong><br />
        custard: <strong>カスタード</strong></dd>
    
    <dt>キ</dt>
        <dd>camp: <strong>キャンプ</strong><br />
        cast: <strong>キャスト</strong><br />
        catcher: <strong>キャッチャー</strong><br />
        Cuba: <strong>キューバ</strong></dd>
    
    <dt>ク</dt>
        <dd>Christmas: <strong>クリスマス</strong><br />
        class: <strong>クラス</strong><br />
        club: <strong>クラブ</strong><br />
        cool: <strong>クール</strong><br />
        cookie: <strong>クッキー</strong><br />
        cruiser: <strong>クルーザー</strong></dd>
    
    <dt>ケ</dt>
        <dd>cake: <strong>ケーキ</strong><br />
        Cambridge: <strong>ケンブリッジ</strong><br />
        care: <strong>ケアー</strong><br />
        case: <strong>ケース</strong></dd>
    
    <dt>コ</dt>
        <dd>call: <strong>コール</strong><br />
        coffee: <strong>コーヒー</strong><br />
        concert: <strong>コンサート</strong><br />
        corner: <strong>コーナー</strong><br />
        course: <strong>コース</strong></dd>
    
    <dt>サ</dt>
        <dd>circus: <strong>サーカス</strong><br />
        cyber: <strong>サイバー</strong></dd>
    
    <dt>シ</dt>
        <dd>Caesar: <strong>シーザー</strong><br />
        CD: <strong>シーディー</strong><br />
        cereal: <strong>シリアル</strong><br />
        Chicago: <strong>シカゴ</strong><br />
        city: <strong>シティー</strong></dd>
    
    <dt>セ</dt>
        <dd>Cellulose: <strong>セルロース</strong><br />
        Central: <strong>セントラル</strong></dd>
    
    <dt>チ</dt>
        <dd>champion: <strong>チャンピオン</strong><br />
        cheese: <strong>チーズ</strong><br />
        Chile: <strong>チリ</strong><br />
        Czechoslovakia: <strong>チェコスロバキア</strong></dd>
    </dl>
</div>

<div class="content d-content">
    <dl>
    <dt>ダ</dt>
        <dd>dance: <strong>ダンス</strong><br />
	    darling: <strong>ダーリン</strong><br />
	    diamond: <strong>ダイヤモンド</strong><br />
	    diet: <strong>ダイエット</strong><br />
		double: <strong>ダブル</strong><br />
		down: <strong>ダウン</strong></dd>
    
    <dt>デ</dt>
    	<dd>Data: <strong>データ</strong><br />
        day: <strong>デイ</strong><br />
        Death Valley: <strong>デスバレー</strong><br />
        deck: <strong>デッキ</strong><br />
        defense: <strong>ディフェンス</strong><br />
        dessert: <strong>デザート</strong><br />
        Detroit: <strong>デトロイト</strong><br />
        disc; disk: <strong>ディスク</strong><br />
        Disneyland: <strong>ディズニーランド</strong></dd>
        
    <dt>ド</dt>
        <dd>doctor: <strong>ドクター</strong><br />
	    door: <strong>ドア</strong><br />
	    dot: <strong>ドット</strong><br />
	    dry: <strong>ドライ</strong><br />
		due: <strong>ドュ</strong><br /></dd>        
    </dl>
</div>

<div class="content e-content">
    <dl>
    <dt>ア</dt>
    	<dd>Earth: <strong>アース</strong><br />
		encore: <strong>アンコール</strong><br />
		eye: <strong>アイ</strong></dd>

	<dt>イ</dt>
    	<dd>eleven: <strong>イレブン</strong><br />
		England: <strong>イングランド;イギリス</strong><br />
		eve: <strong>イブ</strong><br />
		event: <strong>イベント</strong></dd>
    
    <dt>エ</dt>
    	<dd>Egypt: <strong>エジプト</strong><br />
        elegant: <strong>エレガント</strong><br />
        elite: <strong>エリート</strong><br />
        El Savador: <strong>エルサルバドル</strong><br />
        endless: <strong>エンドレス</strong><br />
		energy: <strong>エネルギー</strong><br />
        extra: <strong>エキストラ</strong></dd> 
    </dl>
</div>

<div class="content f-content">
    <dl>
    <dt>フ</dt>
    	<dd>factory: <strong>ファクトリー</strong><br />
        fade: <strong>フェード</strong><br />
        fare, fair: <strong>フェア</strong><br />
        fashion: <strong>ファッション</strong><br />
        feel: <strong>フィール</strong><br />
        fever: <strong>フィーバー</strong><br />
        fiancé: <strong>フィアンセ</strong><br />
        final: <strong>ファナル</strong><br />
        Finland: <strong>フィンランド</strong><br />
        fire: <strong>ファイヤー</strong><br />
        floor: <strong>フロアー</strong><br />
        flu: <strong>フルー</strong><br />
        focus: <strong>フォーカス</strong><br />
        folk, fork: <strong>フォーク</strong><br />
        follow: <strong>フォロー</strong><br />
        food: <strong>フード</strong><br />
        football: <strong>フットボール</strong><br />
        France: <strong>フランス</strong><br />
        free-: <strong>フリー</strong><br />
        fresh: <strong>フレッシュ</strong><br />
        full: <strong>フル</strong><br />
        future: <strong>フューチャー</strong></dd>

	<dt>ホ</dt>
    	<dd>foil: <strong>ホイル;フォイル</strong></dd>
    </dl>
</div>

<div class="content g-content">
    <dl>
	<dt>ガ</dt>
    	<dd>gallon: <strong>ガロン</strong><br />
        garage: <strong>ガレージ</strong><br />
        Ghana: <strong>ガーナ</strong><br />
        girl: <strong>ガール</strong><br />
        glass: <strong>ガラス</strong><br />
        guard: <strong>ガード</strong><br />
        guide: <strong>ガイド</strong></dd>
        
    <dt>ギ</dt>
    	<dd>gag: <strong>ギャグ</strong><br />
        gamble: <strong>ギャンブル</strong><br />
        gap: <strong>ギャップ</strong><br />
        gear: <strong>ギアー</strong><br />
        gift: <strong>ギフト</strong><br />
        guitar: <strong>ギター</strong></dd>
    
    <dt>グ</dt>
    	<dd>global: <strong>グローバル</strong><br />
        google: <strong>グーグル</strong><br />
        Great: <strong>グレート</strong><br />
        green: <strong>グリーン</strong><br />
        group: <strong>グループ</strong><br />
        Guam: <strong>グアム</strong></dd>

	<dt>ゲ</dt>
    	<dd>gain: <strong>ゲイン</strong><br />
        game: <strong>ゲーム</strong><br />
        gate: <strong>ゲート</strong><br />
        guest: <strong>ゲスト</strong></dd>
        
	<dt>ゴ</dt>
    	<dd>goal: <strong>ゴール</strong><br />
        gold: <strong>ゴールド</strong><br />
        golf: <strong>ゴルフ</strong></dd>

	<dt>ジ</dt>
    	<dd>Georgia: <strong>ジョージア</strong><br />
        gesture: <strong>ジェスチャー</strong><br />
        gym: <strong>ジム</strong></dd>
    </dl>
</div>

<div class="content h-content">
    <dl>
    <dt>ア</dt>
    	<dd>hour: <strong>アワー</strong></dd>

	<dt>ハ</dt>
    	<dd>half: <strong>ハーフ</strong><br />
        Halloween: <strong>ハロウィーン</strong><br />
        hand: <strong>ハンド</strong><br />
        happy: <strong>ハッピー</strong><br />
        Harlem: <strong>ハーレム</strong><br />
        hello: <strong>ハロー</strong><br />
        hiking: <strong>ハイキング</strong><br />
        honey: <strong>ハニー</strong><br />
        house: <strong>ハウス</strong><br />
        Hungary: <strong>ハンガリー</strong></dd>
	
	<dt>ヒ</dt>
    	<dd>heater: <strong>ヒーター</strong><br />
        heel: <strong>ヒール</strong><br />
        hero: <strong>ヒーロー</strong><br />
        history: <strong>ヒストリー</strong><br />
        hit: <strong>ヒット</strong></dd>
        
    <dt>フ</dt>
    	<dd>hook: <strong>フック</strong><br />
        hula hoop: <strong>フラフープ</strong></dd>

	<dt>ヘ</dt>
    	<dd>hair: <strong>ヘアー</strong><br />
        healthy: <strong>ヘルシー</strong><br />
        helmet: <strong>ヘルメット</strong><br />
        hertz: <strong>ヘルツ</strong></dd>

	<dt>ホ</dt>
    	<dd>hall: <strong>ホール</strong><br />
        Hong Kong: <strong>ホンコン</strong><br />
        Honolulu: <strong>ホノルル</strong><br />
        hotdog: <strong>ホットドッグ</strong></dd>
    </dl>
</div>

<div class="content i-content">
    <dl>
    <dt>ア</dt>
        <dd>I: <strong>アイ</strong><br />
        ice: <strong>アイス</strong><br />
        item: <strong>アイテム</strong></dd>

	<dt>イ</dt>
    	<dd>Israel: <strong>イスラエル</strong><br />
        Italy: <strong>イタリア</strong></dd>
    </dl>
</div>

<div class="content j-content">
    <dl>
    <dt>ジ</dt>
    	<dd>jet: <strong>ジェット</strong><br />
        journalist: <strong>ジャーナリスト</strong><br />
        junior: <strong>ジュニア</strong></dd>
 
  <dt>ホ</dt>
    	<dd>
        Jose: <strong>ホゼ</strong><br />
    </dl>
</div>

<div class="content k-content">
    <dl>
	<dt>カ</dt>
    	<dd>Kansas: <strong>カンザス</strong><br />
        kernel: <strong>カーネル</strong><br />
        khaki: <strong>カーキ</strong><br />
        kite: <strong>カイト</strong></dd>

	<dt>キ</dt>
    	<dd>key: <strong>キー</strong><br />
        king: <strong>キング</strong><br />
        kiss: <strong>キス</strong><br />
        kitchen: <strong>キッチン</strong></dd>

	<dt>ク</dt>
    	<dd>krona: <strong>クローナ</strong></dd>
        
	<dt>ケ</dt>
    	<dd>Kentucky: <strong>ケンタッキー</strong><br />
        Kenya: <strong>ケニア</strong><br />
        ketchup: <strong>ケチャップ</strong></dd>

	<dt>コ</dt>
    	<dd>koala: <strong>コアラ</strong></dd>
    </dl>
</div>

<div class="content l-content">
    <dl>
    <dt>ラ</dt>
    	<dd>last: <strong>ラスト</strong><br />
        love: <strong>ラブ</strong><br />
        lucky: <strong>ラッキー</strong><br />
        lunch: <strong>ランチ</strong></dd>
        
	<dt>リ</dt>
    	<dd>leader: <strong>リーダー</strong><br />
        link: <strong>リンク</strong><br />
        lip: <strong>リップ</strong><br />
        list: <strong>リスト</strong></dd>

	<dt>ル</dt>
    	<dd>loose: <strong>ルーズ</strong><br />
        Luxembourg: <strong>ルクセンブルク</strong></dd>

	<dt>レ</dt>
    	<dd>leather: <strong>レザー</strong><br />
        lemon: <strong>レモン</strong><br />
        lever, liver:  <strong>レバー</strong></dd>

	<dt>ロ</dt>
    	<dd>local: <strong>ローカル</strong><br />
        lock: <strong>ロック</strong><br />
        locker: <strong>ロッカー</strong><br />
        login: <strong>ログイン</strong><br />
        long: <strong>ロング</strong></dd>
    </dl>
</div>

<div class="content m-content">
    <dl>
	<dt>マ</dt>
    	<dd>magnet: <strong>マグネット</strong><br />
        marker: <strong>マーカー</strong><br />
        micro: <strong>マイクロ</strong><br />
        mother: <strong>マザー</strong><br />
        mouse: <strong>マウス</strong><br />
        multi: <strong>マルチ</strong></dd>

	<dt>ミ</dt>
    	<dd>meeting: <strong>ミーティング</strong><br />
        milk: <strong>ミルク</strong><br />
        mix: <strong>ミックス</strong><br />
        music: <strong>ミュージック</strong><br />
        mystery: <strong>ミステリー</strong></dd>

	<dt>ム</dt>	
    	<dd>mood: <strong>ムード</strong></dd>

	<dt>メ</dt>
    	<dd>mail: <strong>メール</strong><br />
        main: <strong>メイン</strong><br />
        member: <strong>メンバー</strong><br />
        message: <strong>メッセージ</strong><br />
        Mexico: <strong>メキシコ</strong></dd>

	<dt>モ</dt>
    	<dd>mall: <strong>モール</strong><br />
        model: <strong>モデル</strong><br />
        morning: <strong>モーニング</strong></dd>

	<dt>ン</dt>
    	<dd>computer: <strong>コンピューター</strong></dd>
    </dl>
</div>

<div class="content n-content">
    <dl>
	<dt>ナ</dt>
    	<dd>nervous: <strong>ナーバス</strong><br />
        night: <strong>ナイト	</strong><br />
        nonsense: <strong>ナンセンス</strong><br />
        nursing: <strong>ナーシング</strong><br />
        number: <strong>ナンバー</strong></dd>

	<dt>二</dt>
    	<dd>need: <strong>二―ド</strong><br />
        neutral: <strong>ニュートラル</strong><br />
        New York: <strong>ニューヨーク</strong><br />
        nuclear: <strong>ニュークリア</strong></dd>

	<dt>ヌ</dt>
    	<dd>noodle: <strong>ヌードル</strong><br />
        noon: <strong>ヌーン</strong></dd>

	<dt>ネ</dt>
    	<dd>net: <strong>ネット</strong></dd>

	<dt>ノ</dt>
    	<dd>Nobel: <strong>ノーベル</strong><br />
        noise: <strong>ノイズ</strong><br />
        north: <strong>ノース</strong><br />
        Norway: <strong>ノルウェー</strong></dd>

	<dt>ン</dt>
    	<dd>Gu<strong><u>n</u></strong>dam: <strong>ガンダム</strong><br />
        u<strong><u>n</u></strong>der: <strong>アンダー</strong></dd>
    </dl>
</div>

<div class="content o-content">
    <dl>
	<dt>ア</dt>
    	<dd>outdoor: <strong>アウトドア</strong><br />
        outlet: <strong>アウトレット</strong></dd>
        
	<dt>オ</dt>
    	<dd>Oakland: <strong>オークランド</strong><br />
        oasis: <strong>オアシス</strong><br />
        office: <strong>オフィス</strong><br />
        ohio: <strong>オハイオ</strong><br />
        overtime: <strong>オーバタイム</strong></dd>
    </dl>
</div>

<div class="content p-content">
    <dl>
	<dt>サ</dt>
    	<dd>psychic: <strong>サイキック</strong></dd>

	<dt>パ</dt>
    	<dd>Pakistan: <strong>パキスタン</strong><br />
        Paris: <strong>パリス</strong><br />
        part-time: <strong>パートタイム</strong><br />
        pasta: <strong>パスタ</strong><br />
        percent: <strong>パーセント</strong><br />
        pilot: <strong>パイロット</strong><br />

	<dt>ピ</dt>
    	<dd>peace: <strong>ピース</strong><br />
        piano: <strong>ピアノ</strong><br />
        pyramid: <strong>ピラミッド</strong></dd>

	<dt>フ</dt>
    	<dd>Philadelphia: <strong>フィラデルフィア</strong><br />
        photo: <strong>フォート</strong></dd>

	<dt>プ</dt>
    	<dd>place: <strong>プレース</strong><br />
        pool: <strong>プール</strong><br />
        princess: <strong>プリンセス</strong><br />
        program: <strong>プログラム</strong><br />
		Puerto Rico: <strong>プエルトリコ</strong><br />
        pure: <strong>ピュア</strong></dd>

	<dt>ペ</dt>
    	<dd>pace: <strong>ペース</strong><br />
        pair: <strong>ペア</strong><br />
        Pennsylvania: <strong>ペンシルベニア</strong><br />
        Peru: <strong>ペルー</strong></dd>

	<dt>ポ</dt>
    	<dd>point: <strong>ポイント</strong><br />
        Poland: <strong>ポーランド</strong><br /></dd>
    </dl>
</div>

<div class="content q-content">
    <dl>
	<dt>キ</dt>
    	<dd>quinine: <strong>キニーネ</strong></dd>

	<dt>ク</dt>
    	<dd>quality: <strong>クオリティー</strong><br />
        queen: <strong>クイーン</strong><br />
        quest: <strong>クエスト</strong><br />
        quick: <strong>クイック</strong><br />
        quintet: <strong>クインテット</strong><br />
        quiz: <strong>クイズ</strong></dd>

	<dt>ケ</dt>
    	<dd>Quebec: <strong>ケベック</strong></dd>
    </dl>
</div>

<div class="content r-content">
    <dl>
	<dt>ラ</dt>
    	<dd>radio: <strong>ラジオ</strong><br />
        rub, rob: <strong>ラブ</strong></dd>

	<dt>リ</dt>
    	<dd>real: <strong>リアル</strong><br />
        recycle: <strong>リサイクル</strong><br />
        richard: <strong>リチャード</strong></dd>

	<dt>ル</dt>
    	<dd>rule: <strong>ルール</strong><br />
        Rumania: <strong>ルーマニア</strong></dd>

	<dt>レ</dt>
    	<dd>rail: <strong>レール</strong><br />
        rare: <strong>レア</strong><br />
        receipt: <strong>レシート</strong><br />
        reign, rain: <strong>レイン</strong></dd>

	<dt>ロ</dt>
    	<dd>robe: <strong>ローブ</strong><br />
        robot: <strong>ロボット</strong><br />
        Russia: <strong>ロシア</strong></dd>
    </dl>
</div>

<div class="content s-content">
    <dl>
	<dt>サ</dt>
    	<dd>Sacramento: <strong>サクラメント</strong><br />
        sample: <strong>サンプル</strong><br />
        silent: <strong>サイレント</strong><br />
        soccer: <strong>サッカー</strong><br />
        survivor: <strong>サバイバー</strong></dd>

	<dt>シ</dt>
    	<dd>share: <strong>シェアー</strong><br />
        ship: <strong>シップ</strong><br />
        shock: <strong>ショック</strong><br />
        Sidney: <strong>シドニー</strong><br />
        single: <strong>シングル</strong></dd>

	<dt>ス</dt>
    	<dd>scarf: <strong>スカーフ</strong><br />
        school: <strong>スクール</strong><br />
        Scotland: <strong>スコットランド</strong><br />
        space: <strong>スペース</strong><br />
        suit(s): <strong>スーツ</strong></dd>

	<dt>セ</dt>
    	<dd>safe: <strong>セーフ</strong><br />
        saint: <strong>セイント</strong><br />
        save: <strong>セーブ</strong><br />
        second: <strong>セカンド</strong><br />
        seminer: <strong>セミナー</strong></dd>

	<dt>ソ</dt>
    	<dd>soprano: <strong>ソプラノ</strong></dd>
    </dl>
</div>

<div class="content t-content">
    <dl>
	<dt>サ</dt>
    	<dd>third: <strong>サード</strong><br />
        thunder: <strong>サンダー</strong></dd>
        
    <dt>セ</dt>
    	<dd>Theodore: <strong>セオドア</strong><br />
       </dd>

	<dt>タ</dt>
    	<dd>tie: <strong>タイ</strong><br />
        tight: <strong>タイト</strong><br />
        time: <strong>タイム</strong><br />
        touch: <strong>タッチ</strong></dd>

	<dt>チ</dt>
    	<dd>Tibet: <strong>チベット</strong><br />
        ticket: <strong>チケット</strong></dd>

	<dt>ツ</dt>
    	<dd>twin: <strong>ツイン</strong><br />
        two; to: <strong>ツー</strong></dd>

	<dt>テ</dt>
    	<dd>table: <strong>テーブル</strong><br />
        tail, tale: <strong>テイル</strong><br />
        telephone: <strong>テレフォン</strong><br />
        theme: <strong>テーマ</strong></dd>

	<dt>ト</dt>
    	<dd>Thomas: <strong>トマス</strong><br />
        toilet: <strong>トイレット</strong><br />
		travel: <strong>トラベル</strong></dd>
    </dl>
</div>

<div class="content u-content">
    <dl>
	<dt>ア</dt>
    	<dd>Ultimate: <strong>アルティメット</strong><br />
        unlucky: <strong>アンラッキー</strong><br />
        upper: <strong>アッパー</strong><br />
        urban: <strong>アーバン</strong><br />
        usher: <strong>アッシャー</strong></dd>

	<dt>ウ</dt>
    	<dd>Uganda: <strong>ウガンダ</strong><br />
        ultra: <strong>ウルトラ</strong></dd>

	<dt>オ</dt>
    	<dd>ultimate: <strong>オルティメート</strong></dd>

	<dt>ユ</dt>
    	<dd>United Kingdom: <strong>ユナイテッド・キンダム</strong><br />
        university: <strong>ユニバシティー</strong><br />
        Utah: <strong>ユタ</strong></dd>
    </dl>
</div>

<div class="content v-content">
    <dl>
	<dt>ヴァ（バ）</dt>
    	<dd>value: <strong>ヴァリュー、バリュー</strong><br />
        viking: <strong>バイキング</strong><br />
        violin: <strong>ヴァイオリン、バイオリン</strong><br />
        Virginia: <strong>ヴァージニア、バージニア</strong><br />
        vodka: <strong>ヴァッカ</strong></dd>

	<dt>ヴィ（ビ）</dt>
    	<dd>vehicle: <strong>ヴィヒコル</strong><br />
        veil: <strong>ベール</strong><br />
        Venus: <strong>ビーナス</strong><br />
        Victoria: <strong>ビクトリア</strong><br />
        viola: <strong>ヴィオラ、ビオラ</strong><br />
        vintage: <strong>ヴィンテージ</strong></dd>

	<dt>ヴォ（ボ）</dt>
    	<dd>vocal: <strong>ヴォーカル、ボーカル</strong><br />
        volume: <strong>ボリューム</strong><br />
        volunteer: <strong>ヴォランティア、ボランティア</strong></dd>

	<dt>ヴェ（ベ）</dt>
    	<dd>vector: <strong>ヴェクター、ベクター</strong><br />
        Venezuela: <strong>ベネズエラ</strong><br />
        Vietnam: <strong>ベトナム</strong></dd>
    </dl>
</div>

<div class="content w-content">
    <dl>
    <dt>ウ</dt>
    	<dd>Wood: <strong>ウッド</strong><br />
        </dd>
    
	<dt>ウィ</dt>
    	<dd>we: <strong>ウィ-</strong><br />
        whisky: <strong>ウィスキー</strong><br />
        wing: <strong>ウィング</strong><br />
        Wisconsin: <strong>ウィスコンシン</strong></dd>

	<dt>ウェ</dt>
    	<dd>wave: <strong>ウェブ</strong><br />
        weight: <strong>ウェイト</strong></dd>

	<dt>ワ</dt>
    	<dd>wax: <strong>ワックス</strong><br />
        world: <strong>ワールド</strong><br />
        Wyoming: <strong>ワイオミング</strong></dd>

	<dt>ウォ</dt>
    	<dd>water: <strong>ウォーター</strong><br />
        warm, worm: <strong>ウォーム</strong></dd>
    </dl>
</div>

<div class="content x-content">
    <dl>
    <dt>シ</dt>
    	<dd>Xylophone: <strong>シロフォン</strong></dd>

	<dt>ゼ</dt>
    	<dd>Xerox: <strong>ゼロックス</strong></dd>
    </dl>
</div>

<div class="content y-content">
    <dl>
	<dt>イ</dt>
    	<dd>year: <strong>イヤー</strong><br />
        yes: <strong>イェス</strong></dd>

	<dt>エ</dt>
    	<dd>Yale, yell: <strong>エール</strong></dd>

	<dt>ヤ</dt>
    	<dd>young: <strong>ヤング</strong></dd>

	<dt>ユ</dt>
    	<dd>Yugoslavia: <strong>ユーゴスラビア</strong></dd>

	<dt>ヨ</dt>
    	<dd>yacht: <strong>ヨット</strong><br />
        yogurt: <strong>ヨーグルト</strong></dd>
    </dl>
</div>

<div class="content z-content">
    <dl>
    <dt>ザ</dt>
    	<dd>Zabaletta: <strong>ザバレタ</strong><br />
        </dd>
        
	<dt>ジ</dt>
    	<dd>zigzag: <strong>ジグザグ</strong><br />
        zipper: <strong>ジッパー</strong></dd>

	<dt>ズ</dt>
    	<dd>zucchini: <strong>ズッキーニ</strong></dd>

	<dt>ゼ</dt>
    	<dd>z: <strong>ゼット</strong><br />
        zebra: <strong>ゼブラ</strong><br />
        zero: <strong>ゼロ</strong><br />
        zeus: <strong>ゼウス</strong></dd>

	<dt>ゾ</dt>
    	<dd>zombie: <strong>ゾンビ</strong></dd>
    </dl>
</div>

<div id="player"></div>
<div class="clear"></div>
</div>

</body>
</html>
