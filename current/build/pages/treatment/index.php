<?php
require_once dirname(__FILE__) . '/../../config/config.php';
require_once dirname(__FILE__) . '/../../includes/page-data.php';

$page_key = 'treatment/index';
$page_data = getPageData($page_key);
$page_header = '治療メニュー';

ob_start();
?>

<div class="content">
  <h3>治療メニュー一覧</h3>
  <p>よねだ鍼灸整骨院では、様々な治療法を組み合わせて患者様一人一人に最適な治療を提供しています。</p>
  
  <div class="treatment-list">
    <div class="treatment-item">
      <h4><a href="<?php echo getPageUrl('treatment/joint'); ?>">関節治療</a></h4>
      <p>関節の痛みや動きの制限に対して、手技療法や運動療法を組み合わせた治療を行います。</p>
    </div>
    
    <div class="treatment-item">
      <h4><a href="<?php echo getPageUrl('treatment/acupuncture'); ?>">鍼灸</a></h4>
      <p>東洋医学に基づく鍼灸治療で、痛みの軽減や体調改善を図ります。</p>
    </div>
    
    <div class="treatment-item">
      <h4><a href="<?php echo getPageUrl('treatment/dsis'); ?>">DSIS足底挿板療法</a></h4>
      <p>足のバランスを整えることで、全身の痛みや不調を改善する療法です。</p>
    </div>
    
    <div class="treatment-item">
      <h4><a href="<?php echo getPageUrl('treatment/taping'); ?>">テーピング</a></h4>
      <p>関節の安定性向上や痛みの軽減を目的としたテーピング療法です。</p>
    </div>
    
    <div class="treatment-item">
      <h4><a href="<?php echo getPageUrl('treatment/physical'); ?>">物理療法</a></h4>
      <p>電気療法や温熱療法などの物理的刺激を用いた治療法です。</p>
    </div>
    
    <div class="treatment-item">
      <h4><a href="<?php echo getPageUrl('treatment/accident'); ?>">交通事故治療</a></h4>
      <p>交通事故による怪我の治療と、保険手続きのサポートを行います。</p>
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();
include dirname(__FILE__) . '/../../template.php';
?> 