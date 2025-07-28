<?php
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/page-data.php';

$page_key = getCurrentPageKey();
$page_data = getPageData($page_key);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo h($page_data['title']); ?></title>
    <meta name="description" content="<?php echo h($page_data['description']); ?>">
    <meta name="keywords" content="<?php echo h($page_data['keywords']); ?>">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/<?php echo $page_data['css']; ?>">
    
    <!-- Google Analytics -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-643306-7']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</head>
<body class="<?php echo $page_data['body_class']; ?>">
    <div id="container">
        <div id="container-inner">
            <?php include __DIR__ . '/components/header.php'; ?>
            
            <?php if (!empty($page_data['breadcrumb'])): ?>
                <?php include __DIR__ . '/components/breadcrumb.php'; ?>
            <?php endif; ?>
            
            <div class="clearfix" id="contentbody">
                <div id="maincolumn" class="clearfix">
                    <?php if (isset($page_header)): ?>
                        <div class="pageheader" id="pageheader">
                            <h2><?php echo h($page_header); ?></h2>
                        </div>
                    <?php endif; ?>
                    
                    <div id="pagebody">
                        <?php echo $content; ?>
                    </div>
                </div>
                
                <?php include __DIR__ . '/components/nav.php'; ?>
            </div>
        </div>
        
        <?php include __DIR__ . '/components/footer.php'; ?>
    </div>
</body>
</html> 