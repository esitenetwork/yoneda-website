<!--start of header-->
<div id="header">
<h1 id="logo"><a href="<?php echo getBaseUrl(); ?>/">よねだ鍼灸整骨院</a></h1>
</div>
<div id="bcmb">
<p id="nav-home"><a href="<?php echo getBaseUrl(); ?>/">HOME</a></p>
<?php if (!empty($page_data['breadcrumb'])): ?>
<?php foreach ($page_data['breadcrumb'] as $breadcrumb): ?>
<p><a href="#"><?php echo h($breadcrumb); ?></a></p>
<?php endforeach; ?>
<?php endif; ?>
</div>
<!--end of header and start of contentbody--> 