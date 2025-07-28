<?php if (!empty($page_data['breadcrumb'])): ?>
<div id="bcmb-list" class="breadcrumb">
    <div class="list">
        <a href="<?php echo getBaseUrl(); ?>">ホーム</a>
        <?php foreach ($page_data['breadcrumb'] as $breadcrumb): ?>
            &gt; <?php echo h($breadcrumb); ?>
        <?php endforeach; ?>
    </div>
</div>
<?php endif; ?> 