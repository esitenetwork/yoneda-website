<?php
require_once '../../config/config.php';
require_once '../../includes/page-data.php';

$page_key = 'wellness/germanium';
$page_data = getPageData($page_key);

ob_start();
?>
<h3 class="subtit" id="subtit">ゲルマニウム温浴</h3>
<div id="contents">
<p><img src="images/b022_photo1.jpg" alt="ゲルマニウム温浴" width="250" height="373" />アロエや朝鮮人参、温泉水に含まれる有機ゲルマニウムを溶かした42～43℃の温水に25分間手と足を浸ける事で、皮膚呼吸により、有機ゲルマニウムが全身を巡り、短時間で多量の汗をかくことが出来ます。一度体内に入ったゲルマニウムは24時間後には老廃物と共に体外に排出され、ただ座っているだけで体内を大掃除してくれます。さらにここでは温浴と同時に酸素も吸入するので、より効率的に温浴の効果を体感できます。新陳代謝の活発化による脂肪燃焼はもちろん、エステ効果も期待できる今話題の温浴法です。</p>
</div>
<div id="price">
<p class="price">1回1,000円/25分</p>
<p class="price-sub">お得な回数券あります。　11回券10,000円　/　25回券20,000円</p>
<h4 class="price-sub">本気でダイエットにチャレンジしたい方に朗報！</h4>
<p class="price-sub">EMS &amp; ゲルマニウム温浴の30日間短期集中コース。1日1回1,000円でEMSとゲルマニウムを30日間ご利用できます。短期間で代謝をアップさせて、痩せやすい身体づくりができます。</p>
<p class="price">30日間チケット。30,000円 （1日1回 ESMとゲルマニウム温浴のセット）</p>
</div>
</div>
<div id="pagefooter">

<h3 class="header">その他のメニュー</h3>

<ul class="pagelist">
<li><a href="<?php echo getPageUrl('wellness/ems-diet'); ?>">EMSダイエット</a></li>



<li><a href="<?php echo getPageUrl('wellness/ear-diet'); ?>">セルフ耳つぼダイエット</a></li>

<li><a href="<?php echo getPageUrl('wellness/supplement'); ?>">サプリメント</a></li>

<li><a href="<?php echo getPageUrl('wellness/faq'); ?>">よくある質問と答え</a></li>
</ul>
</div>
<?php
$content = ob_get_clean();

include '../../template.php';
?> 