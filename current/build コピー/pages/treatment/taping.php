<?php
require_once dirname(__FILE__) . '/../../config/config.php';
require_once dirname(__FILE__) . '/../../includes/page-data.php';

$page_key = 'treatment/taping';
$page_data = getPageData($page_key);
$page_header = 'テーピング';

ob_start();
?>

<div class="content">
  <h3>テーピング療法</h3>
  <p>テーピング療法は、スポーツ選手や一般の方の怪我の予防・治療に効果的な療法です。</p>
  
  <h4>テーピングの効果</h4>
  <ul>
    <li>関節の安定性向上</li>
    <li>筋肉のサポート</li>
    <li>痛みの軽減</li>
    <li>怪我の予防</li>
  </ul>
  
  <h4>適応症</h4>
  <ul>
    <li>捻挫</li>
    <li>腱鞘炎</li>
    <li>腰痛</li>
    <li>肩こり</li>
    <li>スポーツ障害</li>
  </ul>
  
  <p>当院では、患者様一人一人の症状に合わせて最適なテーピング方法を選択し、効果的な治療を行っています。</p>
</div>

<?php
$content = ob_get_clean();
include dirname(__FILE__) . '/../../template.php';
?> 