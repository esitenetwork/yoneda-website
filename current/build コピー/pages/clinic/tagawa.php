<?php
require_once dirname(__FILE__) . '/../../config/config.php';
require_once dirname(__FILE__) . '/../../includes/page-data.php';

$page_key = 'clinic/tagawa';
$page_data = getPageData($page_key);
$page_header = 'よねだ鍼灸整骨院 田川院';

ob_start();
?>

<div class="content">
  <h3>よねだ鍼灸整骨院 田川院</h3>
  
  <div class="clinic-info">
    <h4>基本情報</h4>
    <table class="info-table">
      <tr>
        <th>院名</th>
        <td>よねだ鍼灸整骨院 田川院</td>
      </tr>
      <tr>
        <th>住所</th>
        <td>福岡県田川市○○○○</td>
      </tr>
      <tr>
        <th>電話番号</th>
        <td>0947-XX-XXXX</td>
      </tr>
      <tr>
        <th>営業時間</th>
        <td>平日 9:00-19:00<br>土曜 9:00-17:00<br>日祝 休診</td>
      </tr>
      <tr>
        <th>アクセス</th>
        <td>田川駅から徒歩○分</td>
      </tr>
    </table>
  </div>
  
  <div class="clinic-features">
    <h4>田川院の特徴</h4>
    <ul>
      <li>田川地区で長年愛される整骨院</li>
      <li>経験豊富なスタッフによる丁寧な治療</li>
      <li>最新の治療機器を完備</li>
      <li>駐車場完備</li>
      <li>バリアフリー対応</li>
    </ul>
  </div>
  
  <div class="clinic-map">
    <h4>アクセスマップ</h4>
    <p>地図がここに表示されます。</p>
  </div>
</div>

<?php
$content = ob_get_clean();
include dirname(__FILE__) . '/../../template.php';
?> 