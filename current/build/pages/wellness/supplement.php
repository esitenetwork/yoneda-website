<?php
require_once '../../config/config.php';
require_once '../../includes/page-data.php';

$page_key = 'wellness/supplement';
$page_data = getPageData($page_key);

ob_start();
?>
<h3 class="subtit" id="subtit">サプリメント</h3>
<div id="contents">
<p>当院のサプリメントは安全かつ低価格（通常価格の10~20％引き）です。<br />
安心して使用できる大手メーカー（明治製菓、大塚製薬、森永製菓）を使用しております。</p>
<p><img src="images/b024_photo1.jpg" alt="サプリメント" width="500" height="333" /></p>
</div>
</div>
<div id="pagefooter">

<h3 class="header">その他のメニュー</h3>

<ul class="pagelist">
<li><a href="<?php echo getPageUrl('wellness/ems-diet'); ?>">EMSダイエット</a></li>

<li><a href="<?php echo getPageUrl('wellness/germanium'); ?>">ゲルマニウム温浴</a></li>

<li><a href="<?php echo getPageUrl('wellness/ear-diet'); ?>">セルフ耳つぼダイエット</a></li>



<li><a href="<?php echo getPageUrl('wellness/faq'); ?>">よくある質問と答え</a></li>
</ul>
</div>
<?php
$content = ob_get_clean();

include '../../template.php';
?> 