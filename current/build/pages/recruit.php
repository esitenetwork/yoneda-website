<?php
require_once dirname(__FILE__) . '/../config/config.php';
require_once dirname(__FILE__) . '/../includes/page-data.php';

$page_key = 'recruit';
$page_data = getPageData($page_key);
$page_header = '採用情報';

ob_start();
?>

<div class="content">
  <h3>採用情報</h3>
  <p>よねだ鍼灸整骨院では、患者様に寄り添うことができるスタッフを募集しています。</p>
  
  <div class="recruit-positions">
    <h4>募集職種</h4>
    
    <div class="position-item">
      <h5>柔道整復師</h5>
      <ul>
        <li>資格：柔道整復師免許必須</li>
        <li>経験：未経験可</li>
        <li>勤務地：田川院・川崎院</li>
        <li>給与：経験・能力を考慮</li>
        <li>勤務時間：9:00-19:00（休憩1時間）</li>
      </ul>
    </div>
    
    <div class="position-item">
      <h5>鍼灸師</h5>
      <ul>
        <li>資格：はり師・きゅう師免許必須</li>
        <li>経験：未経験可</li>
        <li>勤務地：田川院・川崎院</li>
        <li>給与：経験・能力を考慮</li>
        <li>勤務時間：9:00-19:00（休憩1時間）</li>
      </ul>
    </div>
    
    <div class="position-item">
      <h5>受付スタッフ</h5>
      <ul>
        <li>資格：不問</li>
        <li>経験：未経験可</li>
        <li>勤務地：田川院・川崎院</li>
        <li>給与：経験・能力を考慮</li>
        <li>勤務時間：9:00-19:00（休憩1時間）</li>
      </ul>
    </div>
  </div>
  
  <div class="recruit-benefits">
    <h4>福利厚生</h4>
    <ul>
      <li>各種社会保険完備</li>
      <li>交通費支給</li>
      <li>有給休暇</li>
      <li>研修制度</li>
      <li>制服貸与</li>
    </ul>
  </div>
  
  <div class="recruit-contact">
    <h4>お問い合わせ</h4>
    <p>採用に関するお問い合わせは、お電話またはメールでお気軽にご連絡ください。</p>
    <p>電話番号：0947-XX-XXXX</p>
    <p>メール：recruit@yoneda.cc</p>
  </div>
</div>

<?php
$content = ob_get_clean();
include dirname(__FILE__) . '/../template.php';
?> 