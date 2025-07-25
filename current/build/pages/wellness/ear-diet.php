<?php
require_once '../../config/config.php';
require_once '../../includes/page-data.php';

$page_key = 'wellness/ear-diet';
$page_data = getPageData($page_key);

ob_start();
?>
<h3 class="subtit" id="subtit">耳つぼダイエット</h3>
<div id="contents">
<p>耳には、たくさんのツボがありますが、その中の食欲中枢（満腹中枢）や、食事をしないことによるイライラを防止するツボを刺激して、無理なく食事制限ができるダイエットです。<br />
当院では、国家資格を持った鍼灸師が、ダイエットに有効なツボをマークし、それをデジタルカメラで撮影し、その写真を元に患者さん自身で、鍼ではない、金粒で耳ツボを刺激する方法です。</p>
</div>
<div id="mimitsubo">
<p><img src="images/b023_photo01.jpg" width="326" height="114" /></p>
<p>施術後ご説明し、スタートキットをお渡しいたします。交換の目安は5日です。5日経過したら、金粒を取り外し、よく洗った後にかぶれていないかを確認の上、また貼るようにしてください。かぶれ防止のため、一日あけることをお勧めします。</p>
</div>
<div id="price">
<p class="price">1回5,000円　（3ヶ月間 &amp; 施術料）</p>
</div>
</div>
<div id="pagefooter">

<h3 class="header">その他のメニュー</h3>

<ul class="pagelist">
<li><a href="<?php echo getPageUrl('wellness/ems-diet'); ?>">EMSダイエット</a></li>

<li><a href="<?php echo getPageUrl('wellness/germanium'); ?>">ゲルマニウム温浴</a></li>



<li><a href="<?php echo getPageUrl('wellness/supplement'); ?>">サプリメント</a></li>

<li><a href="<?php echo getPageUrl('wellness/faq'); ?>">よくある質問と答え</a></li>
</ul>
</div>
<?php
$content = ob_get_clean();

include '../../template.php';
?> 