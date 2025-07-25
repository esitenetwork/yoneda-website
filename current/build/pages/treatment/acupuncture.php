<?php
require_once '../../config/config.php';
require_once '../../includes/page-data.php';

$page_key = 'treatment/acupuncture';
$page_data = getPageData($page_key);

ob_start();
?>
<h3 class="subtit" id="subtit">鍼灸</h3>
<p id="sec1"><img src="images/b012_photo01.jpg" alt="鍼灸治療" width="211" height="140" />鍼灸治療に対して、ツボ、東洋医学、経絡のようなイメージを持つ方もいらっしゃるでしょうが、当院では、解剖学、運動生理学など、現代医学に基づいた治療を行っております。治療に用いる鍼は直径が髪の細さです。だから痛みを感じることはそれほどありません。</p>
<div id="sec2">
	<h3>スポーツ鍼灸とは？</h3>
	<p>陸上競技、繰り返し動作（バレーボール、バスケットボールのジャンプ動作、テニス、卓球のスイングなど）による、あらゆる痛み、また、野球の投球動作、バレーボールのアタックなどによるオーバーユース（使いすぎ）に対して行う鍼灸治療です。</p>
					</div>
<div id="sec3">
	<h3>鍼灸治療</h3>
	<div class="box">
		<p><img src="images/b012_photo02.jpg" alt="置鍼" width="185" height="125" /></p>
		<h4>置鍼</h4>
		<p>これは、身体に刺した鍼を一定時間体内に留めることにより、鍼の効果を高めます。</p>
	</div>
	<div class="box">
		<p><img src="images/b012_photo03.jpg" alt="低周波置鍼療法" width="185" height="125" /></p>
		<h4>低周波置鍼療法</h4>
		<p>頑固な痛みなどに有効で、置鍼をしている鍼に低周波を一定時間流して治療を行います。</p>
	</div>
	<div class="box">
		<p><img src="images/b012_photo04.jpg" alt="艾（もぐさ）療法" width="185" height="125" /></p>
		<h4>艾（もぐさ）療法</h4>
		<p>艾と皮膚の間に隙間があるので、火傷しにくく、心地良い熱感が得られます。</p>
	</div>
					</div>
<div id="sec4">
	<h3>使用する鍼について</h3>
	<p>当院で使用する鍼は全て、ディスポーザブル（使い捨て）の鍼です。そのため、感染症などの心配はありません。ご安心ください。</p>
					</div>
</div>
<div id="pagefooter">

<h3 class="header">その他の治療</h3>

<ul class="pagelist">
<li><a href="<?php echo getPageUrl('treatment/joint'); ?>">関節治療</a></li>



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