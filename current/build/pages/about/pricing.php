<?php
require_once '../../config/config.php';
require_once '../../includes/page-data.php';

$page_key = 'about/pricing';
$page_data = getPageData($page_key);

ob_start();
?>
<div class="con1"> 
<h3 class="mds">各種保険に対応し、治療費の負担を軽減</h3>
<div class="body">
<p><img src="images/a03_img1.jpg" width="113" height="147" />整骨院で扱う症状はほとんどが1度で治るものではありません。なるべく早期回復を目指していますが、それでも何度か通院していただかないといけません。当院では各種保険・交通事故・労災等の保険に対応し、治療費の負担を軽減することで、治療を積極的に行えるようになり、その結果病気の早期回復が可能となります。</p>
<p>&nbsp;</p>
<p style="color:red">※初診時には必ず保険証をお持ちください。</p>
</div>
</div>
<div class="con2"> 
<h3 class="mds">料金案内</h3>
<div class="box">
<table class="price">
<caption>治療に関する料金</caption>

<tr>
<th rowspan="2" scope="row">鍼</th>
<td class="s1"><p>整骨院治療の延長での鍼治療（1部位につき）</p></td>
<td class="td2 s1">1,000円/部位</td>
</tr>
<tr>
<td class="s2">上記以外（花粉症、自律神経調節など）</td>
<td class="td2 s2">1,500円/回</td>
</tr>
<tr>
<th scope="row">灸</th>
<td class="s1">1個30円</td>
<td class="s1">&nbsp;</td>
</tr>
</table>
<p>&nbsp;</p>
</div>
<div class="box">
<table class="price">
<caption>
スリム&amp;リラックス
</caption>
<tr>
<th rowspan="2" scope="row">EMS</th>
<td class="td1">1回30分</td>
<td class="td2"><p> 1,000円/回</p></td>
</tr>
<tr>
<td>回数券</td>
<td class="td2"><p>11回券10,000円</p>
<p>25回券20,000円</p></td>
</tr>
<tr>
<th rowspan="2" scope="row">ゲルマニウム温浴</th>
<td>1回25分</td>
<td class="td2"><p> 1,000円/回</p></td>
</tr>
<tr>
<td>回数券</td>
<td class="td2"><p>11回券10,000円</p>
<p>25回券20,000円</p></td>
</tr>
<tr>
<th rowspan="2" scope="row">セルフ耳つぼ</th>
<td>院内にて施術</td>
<td class="td2">500円/回</td>
</tr>
<tr>
<td>各自セルフにて施術</td>
<td class="td2"><p>　5,000円/3ヶ月</p></td>
</tr>
<tr>
<th scope="row">ツインビートII</th>
<td><span class="td2">1ヶ月レンタル</span></td>
<td class="td2">　25,000円/1ヶ月</td>
</tr>
</table>
<p>&nbsp;</p>
</div>
</div>
<?php
$content = ob_get_clean();

include '../../template.php';
?> 