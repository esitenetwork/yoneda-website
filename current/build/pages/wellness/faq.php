<?php
require_once dirname(__FILE__) . '/../../config/config.php';
require_once dirname(__FILE__) . '/../../includes/page-data.php';

$page_key = 'wellness/faq';
$page_data = getPageData($page_key);
$page_header = 'よくある質問と答え';

ob_start();
?>

<div class="content">
  <h3>よくある質問と答え</h3>
  <p>スリム＆リラックスメニューに関するよくある質問と回答をご紹介します。</p>
  
  <div class="faq-list">
    <div class="faq-item">
      <h4>Q. EMSダイエットは痛くありませんか？</h4>
      <p>A. EMSダイエットは痛みを伴わない安全な治療法です。電気刺激により筋肉を効率的に鍛えることができます。</p>
    </div>
    
    <div class="faq-item">
      <h4>Q. ゲルマニウム温浴の効果はどのくらい続きますか？</h4>
      <p>A. 個人差がありますが、通常は1週間程度効果が持続します。定期的に利用されることをお勧めします。</p>
    </div>
    
    <div class="faq-item">
      <h4>Q. 耳つぼダイエットは自分でできますか？</h4>
      <p>A. 基本的な方法はご自宅でも可能ですが、効果的な刺激方法については当院でご指導いたします。</p>
    </div>
    
    <div class="faq-item">
      <h4>Q. サプリメントは薬と併用できますか？</h4>
      <p>A. お薬を服用されている方は、事前に医師にご相談ください。当院でも詳しくご説明いたします。</p>
    </div>
    
    <div class="faq-item">
      <h4>Q. どのメニューから始めるのがおすすめですか？</h4>
      <p>A. ご希望や体調に応じて最適なメニューをご提案いたします。まずはご相談ください。</p>
    </div>
  </div>
  
  <p>その他のご質問がございましたら、お気軽にお問い合わせください。</p>
</div>

<?php
$content = ob_get_clean();
include dirname(__FILE__) . '/../../template.php';
?> 