<?php
require_once '../../config/config.php';
require_once '../../includes/page-data.php';

$page_key = 'treatment/dsis';
$page_data = getPageData($page_key);

ob_start();
?>
<h3 class="subtit" id="subtit">DSIS足底挿板療法</h3>
<p class="section">従来の足底板は、歩行を見ずに作製されていました。そのため、きちんとした根拠のないまま、ただ外側だけを厚くしたり、サイズが合わず靴の中で足底板が動き回っていたりと、逆に歩行姿勢を悪くするのでは？と思ってしまうものが多々見受けられました。<br />
	DSIS足底挿板療法は、従来の足底挿板と違い、個人個人の歩行の仕方と足の裏の形状を測定し、その人に合わせたパッドを靴の中敷に貼り付けることにより、正しい歩行姿勢を促します。<br />
	また、DSIS足底挿板療法は、外反母趾変形やタコ・ウオノメなどの足底の異常や痛み、バランスの悪い歩き方によって生じる腰痛、膝痛などを改善することが出来ます。<br />
	さらに、Ｘ脚やＯ脚変形の方やその予防としても有効で、スポーツのパフォーマンス向上としても非常に効果的です。<br />
DSISの足底板をお使いになることで、正しい歩行を行い。身体への負担を減らし、効率のよい代謝を促すことができます。</p>
<h3 id="midashi">作成手順</h3>
<p><img src="images/b013_photo01.jpg" width="630" height="165" /></p>
<ol>
	<li>その人の足に関するトラブル等を細かく聞き、フットプリンター、メジャー等を使い、足の荷重状況や、大きさを調べます。</li>
	<li>パッドを削ってインソールを作製。</li>
	<li>インソールの状況をチェックし、微調整を行います。</li>
	<li>オーダーインソールの完成です。その後、実際に使っていただき、状況に応じて、微調整を行っていきます。</li>
					</ol>
<p>「骨盤のズレ」という言葉をよく耳にしますが、ズレは一時的に治したところで、根本を治さなければ、また元に戻ってしまいます。「骨盤のズレ」と『歩き方』は密接な関係にあります。今一度、ご自分の歩き方を見直されてはいかがでしょうか？</p>
</div>
<div id="pagefooter">

<h3 class="header">その他の治療</h3>

<ul class="pagelist">
<li><a href="<?php echo getPageUrl('treatment/joint'); ?>">関節治療</a></li>

<li><a href="<?php echo getPageUrl('treatment/acupuncture'); ?>">鍼灸</a></li>



<li><a href="<?php echo getPageUrl('treatment/taping'); ?>">テーピング</a></li>

<li><a href="<?php echo getPageUrl('treatment/physical'); ?>">物理療法</a></li>

<li><a href="<?php echo getPageUrl('treatment/accident'); ?>">交通事故治療</a></li>
</ul>
</div>
<?php
$content = ob_get_clean();

include '../../template.php';
?> 