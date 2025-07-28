<?php
require_once '../../config/config.php';
require_once '../../includes/page-data.php';

$page_key = 'about/policy';
$page_data = getPageData($page_key);

ob_start();
?>
<div class="con1">
<h3 class="mds">高い意識をもって</h3>
<div class="body"><p class="spacer">&nbsp;</p> 
<p> <strong>「安心」「安全」「的確」</strong>、これは当院の掲げる基本方針であり、常に全ての治療者及びスタッフがこの基本方針を念頭に置いて患者さんへの対応を行っています。当院を受診するほとんどの患者さんは、「○○が痛い」、「○○が曲がらない、または伸びない」、「○○の筋肉が張っている」、「○○がしびれた感じがする」という症状を訴えてこられます。これらの症状の原因として最も多いのは<span class="tmarker1">"関節が動かない、関節が動きすぎる、関節が正常な方向に動かない"</span>などの<span class="tmarker3">「関節の動きの異常」</span>や"<span class="tmarker1">脊柱の左右、前後のずれ、腕や脚の関節のずれ</span>"が原因となっている<span class="tmarker3">「関節の位置の異常」</span>という場合が殆どです。<br />
これらのように、本来個々の関節が持っている「正常な関節の機能」から逸脱し、異常な症状を呈した状態を「関節機能異常」と呼びますが、このような「関節機能異常」  は、レントゲンやMRI、CT等の検査機器では写らない事が多く、実際に、評価、治療を行わなければ判断することができません。<br />
当院では理学療法士や医師が用いる<span class="tmarker2">理学テスト</span>（神経系テスト、筋力テスト、関節可動域テスト、スポーツであれば動作分析）による&quot;評価&quot;を行い、JF（Joint     Facilitation）という<span class="tmarker2">関節治療</span>を用いて、その症状の原因がどの部分（脳、脊髄神経、末梢神経、筋肉、靭帯、関節）なのかを判断し、個々の患者さ  んにあった治療を施していきます。"整骨（接骨）院"というのは患者さんの身体に直接手を触れる仕事で、痛みや不具合を感じ取り、どのように治療を施していくかは<span class="tmarker3">治療者がそれまでに培った知識と経験、それから技術が直接反映されます。</span>だから、当院は「安心」「安全」「的確」にこだわります。人の身体を扱うことの責任と、どのように治療を行っていくかの判断の重要性を肝に命じ、日々の治療にあたっています。</p>
</div>
</div>
<div class="con2 clearfix">
<p class="img"><img width="180" height="250" alt="院長" src="images/a01_profile-photo.jpg" /></p>
<div class="body">
<h3 class="mds">プロフィール</h3>
<ul>
<li>米田　稔 -YONEDA MINORU- （院長）</li>
<li>平成9年3月、宮崎リハビリテーション学院理学療法科卒業</li> 
<li>同年理学療法士免許を取得し、県内の医院・診療所リハビリテーション科に勤務</li>
<li>平成12年4月、福岡柔道整復専門学校柔道整復師科に入学し、柔道整復師免許を取得</li>
<li>現在もより専門的な分野での資格取得に務めている。</li>
</ul>
</div>
</div>
<?php
$content = ob_get_clean();

include '../../template.php';
?> 