<?php
require_once dirname(__FILE__) . '/../config/config.php';
require_once dirname(__FILE__) . '/../includes/page-data.php';

$page_key = 'dayservice';
$page_data = getPageData($page_key);
$page_header = 'デイサービス';

ob_start();
?>

<div class="content">
  <h3>デイサービス</h3>
  <p>よねだ鍼灸整骨院では、高齢者の方々の健康維持と生活の質向上を目的としたデイサービスを提供しています。</p>
  
  <div class="service-features">
    <h4>サービスの特徴</h4>
    <ul>
      <li>専門スタッフによる介護サービス</li>
      <li>リハビリテーション機能</li>
      <li>入浴サービス</li>
      <li>食事サービス</li>
      <li>レクリエーション活動</li>
      <li>送迎サービス</li>
    </ul>
  </div>
  
  <div class="service-schedule">
    <h4>利用時間</h4>
    <p>平日 9:00-17:00（送迎時間含む）</p>
  </div>
  
  <div class="service-target">
    <h4>対象者</h4>
    <ul>
      <li>要介護認定を受けた方</li>
      <li>65歳以上の方</li>
      <li>介護保険の適用対象者</li>
    </ul>
  </div>
  
  <div class="service-contact">
    <h4>お問い合わせ</h4>
    <p>デイサービスの利用について詳しくお知りになりたい方は、お気軽にお電話でご相談ください。</p>
    <p>電話番号：0947-XX-XXXX</p>
  </div>
</div>

<?php
$content = ob_get_clean();
include dirname(__FILE__) . '/../template.php';
?> 