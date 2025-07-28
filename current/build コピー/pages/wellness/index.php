<?php
require_once dirname(__FILE__) . '/../../config/config.php';
require_once dirname(__FILE__) . '/../../includes/page-data.php';

$page_key = 'wellness/index';
$page_data = getPageData($page_key);
$page_header = 'スリム＆リラックス';

ob_start();
?>

<div class="content">
  <h3>スリム＆リラックスメニュー</h3>
  <p>よねだ鍼灸整骨院では、治療だけでなく、健康維持や美容を目的としたメニューもご用意しています。</p>
  
  <div class="wellness-list">
    <div class="wellness-item">
      <h4><a href="<?php echo getPageUrl('wellness/ems-diet'); ?>">EMSダイエット</a></h4>
      <p>電気刺激による筋肉トレーニングで、効率的なダイエットをサポートします。</p>
    </div>
    
    <div class="wellness-item">
      <h4><a href="<?php echo getPageUrl('wellness/germanium'); ?>">ゲルマニウム温浴</a></h4>
      <p>ゲルマニウムの温浴効果で、疲労回復とリラックス効果を得られます。</p>
    </div>
    
    <div class="wellness-item">
      <h4><a href="<?php echo getPageUrl('wellness/ear-diet'); ?>">セルフ耳つぼダイエット</a></h4>
      <p>耳つぼを刺激することで、食欲抑制や代謝促進を図るダイエット法です。</p>
    </div>
    
    <div class="wellness-item">
      <h4><a href="<?php echo getPageUrl('wellness/supplement'); ?>">サプリメント</a></h4>
      <p>健康維持に役立つ各種サプリメントをご紹介しています。</p>
    </div>
    
    <div class="wellness-item">
      <h4><a href="<?php echo getPageUrl('wellness/faq'); ?>">よくある質問と答え</a></h4>
      <p>スリム＆リラックスメニューに関するよくある質問と回答をご覧いただけます。</p>
    </div>
  </div>
</div>

<?php
$content = ob_get_clean();
include dirname(__FILE__) . '/../../template.php';
?> 