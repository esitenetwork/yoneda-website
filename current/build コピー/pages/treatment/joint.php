<?php
require_once '../../config/config.php';
require_once '../../includes/page-data.php';

$page_key = 'treatment/joint';
$page_data = getPageData($page_key);

ob_start();
?>
<h3 id="subtit" class="subtit">関節治療</h3>
<p>関節治療は、整体師や他の柔道整復師が行うような整体（カイロプラクティック）とは異なった治療法です。</p>
<p>当院が関節治療を積極的に行う理由として以下のようなことがあげられます。</p>
<ol>
    <li>治療を行いながら痛みの原因の判断（診断）が出来る。</li>
    <li>関節をボキボキと動かす矯正のような危険はなく、安全である。</li>
    <li>結果がその場ででる。</li>
    <li>理論的である。</li>
    <li>その時だけ楽になるような対症療法ではなく、原因から治療する方法である。</li>
</ol>
<p><img width="630" height="320" src="images/b011_photo01.jpg" alt="" /></p>
</div>
<div id="pagefooter">

<h3 class="header">その他の治療</h3>

<ul class="pagelist">


<li><a href="<?php echo getPageUrl('treatment/acupuncture'); ?>">鍼灸</a></li>

<li><a href="<?php echo getPageUrl('treatment/dsis'); ?>">DSIS足底挿板療法</a></li>

<li><a href="<?php echo getPageUrl('treatment/taping'); ?>">テーピング</a></li>

<li><a href="<?php echo getPageUrl('treatment/physical'); ?>">物理療法</a></li>

<li><a href="<?php echo getPageUrl('treatment/accident'); ?>">交通事故治療</a></li>
</ul>
</div>
<?php
$content = ob_get_clean();

include '../../template.php';
?> 