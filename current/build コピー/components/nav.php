<!--end of maincolumn and start of sidebar-->
<div id="leftcolumn">
  <div id="nav">
    <h3>初めての方</h3>
    <ul>
      <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'nav-a01') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('about/policy'); ?>">基本方針</a></li>
      <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'nav-a02') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('about/pricing'); ?>">料金案内</a></li>
    </ul>
    <h3>業務内容</h3>
    <ul>
      <li><a href="#">治　療</a>
        <ul>
          <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'sub-b011') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('treatment/joint'); ?>">関節治療</a></li>
          <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'sub-b012') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('treatment/acupuncture'); ?>">鍼灸</a></li>
          <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'sub-b013') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('treatment/dsis'); ?>">DSIS足底挿板療法</a></li>
          <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'sub-b014') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('treatment/taping'); ?>">テーピング</a></li>
          <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'sub-b015') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('treatment/physical'); ?>">物理療法</a></li>
          <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'sub-b016') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('treatment/accident'); ?>">交通事故治療</a></li>
        </ul>
      </li>
      <li><a href="<?php echo getPageUrl('treatment/accident'); ?>">交通事故治療</a></li>
      <li><a href="#">スリム＆リラックス</a>
        <ul>
          <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'sub-b021') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('wellness/ems-diet'); ?>">EMSダイエット</a></li>
          <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'sub-b022') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('wellness/germanium'); ?>">ゲルマニウム温浴</a></li>
          <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'sub-b023') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('wellness/ear-diet'); ?>">セルフ耳つぼダイエット</a></li>
          <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'sub-b024') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('wellness/supplement'); ?>">サプリメント</a></li>
          <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'sub-b025') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('wellness/faq'); ?>">よくある質問と答え </a></li>
        </ul>
      </li>
      <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'nav-b04') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('dayservice'); ?>">デイサービス</a></li>
    </ul>
    <h3>院案内</h3>
    <ul>
      <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'nav-c01') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('clinic/tagawa'); ?>">よねだ鍼灸整骨院 田川院</a></li>
      <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'nav-c02') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('clinic/kawasaki'); ?>">よねだ鍼灸整骨院 川崎院</a></li>
    </ul>
    <h3>その他</h3>
    <ul>
      <li<?php echo (isset($page_data['nav_active']) && $page_data['nav_active'] === 'nav-d01') ? ' class="active"' : ''; ?>><a href="<?php echo getPageUrl('recruit'); ?>">採用情報</a></li>
    </ul>
  </div>
</div>
<!--end of sidebar--> 