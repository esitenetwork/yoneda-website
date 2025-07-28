<?php
require_once '../../config/config.php';
require_once '../../includes/page-data.php';

$page_key = 'treatment/physical';
$page_data = getPageData($page_key);

ob_start();
?>
<h3 class="subtit" id="subtit">物理療法</h3>
<div class="box clearfix" id="sec1">
<h4>マイクロウェルダー</h4>
<div>
<p class="float-left"><img src="images/b015_photo01.jpg" alt="マイクロウェルダー" width="220" height="165" /><span class="fsize80"><br />
▲マイクロウェルダー</span><br />
</p>
<h5>温熱・振動・磁力の力による３つの効果</h5>
<ol>
<li>温熱による血流の増加</li>
<li>振動による筋緊張の緩和</li>
<li>磁力による血流増加と筋緊張の緩和</li>
</ol>
</div>
</div>
<div class="box clearfix">
<h4>干渉電流型低周波治療器</h4>
<div>
<p class="float-left"><img src="images/b015_photo02.jpg" alt="干渉電流型低周波治療器" width="220" height="165" /><br />
<span class="fsize80">▲干渉電流型低周波治療器</span></p>
<p>表在組織、深部組織の両方を電流にて刺激し、筋肉の緊張を緩和し、痛みの改善、血流改善を行います。</p>
</div>
</div>
<div class="box clearfix">
<h4>可変高域中周波変調刺激装置（スティモア）</h4>
<div class="left">
<p class="float-left"><img src="images/b015_photo03.jpg" alt="可変高域中周波変調刺激装置（スティモア）" width="220" height="165" /><br />
<span class="fsize80">▲可変高域中周波変調刺激装置（スティモア）</span></p>
<p>スティモアは、従来の治療器と全く異なる刺激パターンで治療を行う新しい治療器です。（通常の電気治療器より、深部の筋肉及び、広い範囲の部位を治療可能）</p>
</div>
</div>
<div class="box clearfix">
<h4>メドマー</h4>
<div>
<p class="float-left"><img src="images/b015_photo04.jpg" alt="メドマー" width="220" height="165" /><br />
<span class="fsize80">▲メドマー</span></p>
<p>空気の力で、脚全体を優しく揉みほぐし、脚に停滞している血液とリンパ液の流れをよくします。（脚のむくみ等に有効です。）</p>
</div>
</div>
<div class="box">
<h4>スーパーライザー</h4>
<p>スーパーライザーは、光の中でもっとも深達性の高い波長帯の近赤外線を高出力でスポット状に照射することを可能にした初めての光線治療器です。組織の深部まで赤外線が到達することにより、関節痛、深部筋肉の緊張緩和、痛みの改善が可能です。</p>
<p>&nbsp;</p>
<p><img src="images/b015_photo05.jpg" alt="スーパーライザー" width="454" height="165" /></p>
<p class="fsize80">▲スーパーライザー</p>
</div>
<div class="box clearfix" id="sec6">
	<h4>総合刺激装置ES-520</h4>
<div>
<p class="float-left"><img src="images/b015_photo06.jpg" alt="総合刺激装置ES-520" width="153" height="165" /><br />
<span class="fsize80">▲総合刺激装置ES-520</span></p>
<p>通常の低周波治療器とは、まったく違う中周波治療器で、通常では届かない深部筋肉に刺激を加えることにより、筋肉の痛み、緊張の緩和を行います。又、この治療器は、マイクロカレント（微弱電流）治療を行えるので、スポーツ選手の筋損傷等の治癒を促進することができます。</p>
</div>
</div>
</div>
<div id="pagefooter">

<h3 class="header">その他の治療</h3>

<ul class="pagelist">
<li><a href="<?php echo getPageUrl('treatment/joint'); ?>">関節治療</a></li>

<li><a href="<?php echo getPageUrl('treatment/acupuncture'); ?>">鍼灸</a></li>

<li><a href="<?php echo getPageUrl('treatment/dsis'); ?>">DSIS足底挿板療法</a></li>

<li><a href="<?php echo getPageUrl('treatment/taping'); ?>">テーピング</a></li>



<li><a href="<?php echo getPageUrl('treatment/accident'); ?>">交通事故治療</a></li>
</ul>
</div>
<?php
$content = ob_get_clean();

include '../../template.php';
?> 