<?php
require_once '../../config/config.php';
require_once '../../includes/page-data.php';

$page_key = 'wellness/ems-diet';
$page_data = getPageData($page_key);

ob_start();
?>
<h3 class="subtit" id="subtit">EMSダイエット</h3>
<div id="contents">
<p><img src="images/b021_photo1.jpg" alt="EMSダイエット" width="250" height="376" />ＥＭＳとはElectrical Muscle Stimulationの略で、電気を流して筋肉を鍛える運動法です。筋肉を直接刺激する中周波治療器なので、低周波治療器等によくみられる皮膚がチクチクする痛みが全くなく、効率よく筋肉を鍛えることができ、なにより30分寝ているだけで、およそ<span class="tmarker3">２４０Kcal</span>を消費できるのが特長です。これを通常の運動で消費するには、ウォーキング1時間30分、ジョギング45分、腹筋運動30分程度が必要です。<br />
オリンピック代表チームも練習プログラムに取り入れている注目の医療機器です。</p>
</div>
<div id="price">
<p class="price">1回1,000円/30分</p>
<p class="price-sub">お得な回数券あります。　11回券10,000円　/　25回券20,000円</p>
<h4 class="price-sub">本気でダイエットにチャレンジしたい方に朗報！</h4>
<p class="price-sub">EMS &amp; ゲルマニウム温浴の30日間短期集中コース。1日1回1,000円でEMSとゲルマニウムを30日間ご利用できます。短期間で代謝をアップさせて、痩せやすい身体づくりができます。</p>
<p class="price">30日間チケット。30,000円 （1日1回 ESMとゲルマニウム温浴のセット）</p>
</div>
</div>
<div id="pagefooter">

<h3 class="header">その他のメニュー</h3>

<ul class="pagelist">


<li><a href="<?php echo getPageUrl('wellness/germanium'); ?>">ゲルマニウム温浴</a></li>

<li><a href="<?php echo getPageUrl('wellness/ear-diet'); ?>">セルフ耳つぼダイエット</a></li>

<li><a href="<?php echo getPageUrl('wellness/supplement'); ?>">サプリメント</a></li>

<li><a href="<?php echo getPageUrl('wellness/faq'); ?>">よくある質問と答え</a></li>
</ul>
</div>
<?php
$content = ob_get_clean();

include '../../template.php';
?> 