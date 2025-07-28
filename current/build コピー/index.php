<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/page-data.php';

$page_key = 'home';
$page_data = getPageData($page_key);

ob_start();
?>

<div id="main-left">
    <!-- 川崎院移転のお知らせ -->
    <div id="kawasaki-notice">
        <p class="title">川崎院移転のお知らせ</p>
        <div class="body">
            <!-- 移転案内画像 -->
            <img src="images/kawasaki-notice.jpg" alt="川崎院移転のお知らせ" style="width: 100%; height: auto; margin-bottom: 15px;" />
            
            <!-- 新川崎院外観画像 -->
            <img src="images/kawasaki-new-building.jpg" alt="新川崎院外観" style="width: 100%; height: auto;" />
        </div>
    </div>
	
    <div id="wnew">
        <p class="title">交通事故治療はよねだ鍼灸整骨院へどうぞ</p>
        <p class="body"><img src="images/a00_img3.gif" width="178" height="120" /> いつもご覧いただき誠にありがとうございます。交通事故は車の損害だけでなく、身体にあたえる影響もすくなくありません。そんな時、信頼のおける治療院、相談先があると安心ですよね。当院では、国家資格をもったスタッフが症状にあった最適な治療を施します。また、病院と連携し専門的な検査・治療を行います。また平日夜7時半まで診療しておりますので、仕事帰りに立ち寄ることも可能です。交通事故にあったらお早めにご相談ください。詳しくは<a href="<?php echo getPageUrl('treatment/accident'); ?>">交通事故治療</a>のページをごらんください。</p>
    </div>
    
    <div class="con1">
        <h2>「安心」と「安全」を第一に、患者さんの悩みを取り除く治療院です。</h2>
        <p class="body"><img src="images/a00_img1.jpg" width="90" height="90" />当院では柔道整復師・鍼灸師・理学療法士とすべての国家資格を持った治療者が理論に基づいて行い、適切な治療を安心して受けることができます。また、ただ単に国家資格を持っているものを採用しているわけではありません。中身のともなわない治療者は当院には在籍しておりません。日々勉強を重ね、知識を追求し、患者さんの信頼を得られるよう徹底した教育をおこなっています。当院の基本理念は「安心」「安全」それから「的確」です。整体師やカイロプロテクター等の国家資格を有しない治療者による施術は一切おこなっておりません。</p>
    </div>
    
    <div class="con2">
        <h2>身体に関するお悩み気軽にご相談ください。</h2>
        <p class="body"><img src="images/a00_img2.jpg" width="80" height="104" />整骨院で扱う症状はほとんどが1度で治るものではありません。なるべく早期回復を目指していますが、それでも何度か通院していただかないといけません。各種保険・交通事故・労災等の保険に対応し、治療費の負担を軽減することで、治療を積極的に行えるようになり、その結果病気の早期回復が可能となります。<br />
        ※初診時には必ず保険証をお持ちください。</p>
    </div>
</div>

<div id="main-right">
    <p><a href="<?php echo getPageUrl('recruit'); ?>#bcmb">只今、柔道整復師さん募集中！</a></p>
    <p>&nbsp;</p>
    <ul>
        <li id="bnr-b03"><a href="<?php echo getPageUrl('dayservice'); ?>#pageheader">デイサービス</a></li>
        <li id="bnr-b013"><a href="<?php echo getPageUrl('treatment/dsis'); ?>#pageheader">DSIS足底挿板療法</a></li>
    </ul>
</div>

<?php
$content = ob_get_clean();
include __DIR__ . '/template.php';
?> 