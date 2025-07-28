<?php
/**
 * ページデータ取得関数
 */

function getPageData($page_key) {
    static $pages = null;
    if ($pages === null) {
        $pages = require __DIR__ . '/../config/pages.php';
    }
    
    return $pages[$page_key] ?? [
        'title' => 'よねだ鍼灸整骨院',
        'description' => '',
        'keywords' => '',
        'css' => 'common.css',
        'body_class' => 'sec',
        'breadcrumb' => [],
        'nav_active' => ''
    ];
}

function getCurrentPageKey() {
    $uri = $_SERVER['REQUEST_URI'];
    $path = parse_url($uri, PHP_URL_PATH);
    
    // URL → ページキーのマッピング
    $routes = [
        '/' => 'home',
        '/index.php' => 'home',
        '/pages/about/policy.php' => 'about/policy',
        '/pages/about/pricing.php' => 'about/pricing',
        '/pages/treatment/index.php' => 'treatment/index',
        '/pages/treatment/joint.php' => 'treatment/joint',
        '/pages/treatment/acupuncture.php' => 'treatment/acupuncture',
        '/pages/treatment/dsis.php' => 'treatment/dsis',
        '/pages/treatment/taping.php' => 'treatment/taping',
        '/pages/treatment/physical.php' => 'treatment/physical',
        '/pages/treatment/accident.php' => 'treatment/accident',
        '/pages/wellness/index.php' => 'wellness/index',
        '/pages/wellness/ems-diet.php' => 'wellness/ems-diet',
        '/pages/wellness/germanium.php' => 'wellness/germanium',
        '/pages/wellness/ear-diet.php' => 'wellness/ear-diet',
        '/pages/wellness/supplement.php' => 'wellness/supplement',
        '/pages/wellness/faq.php' => 'wellness/faq',
        '/pages/clinic/tagawa.php' => 'clinic/tagawa',
        '/pages/clinic/kawasaki.php' => 'clinic/kawasaki',
        '/pages/dayservice.php' => 'dayservice',
        '/pages/recruit.php' => 'recruit'
    ];
    
    return $routes[$path] ?? 'home';
}

/**
 * HTMLエスケープ関数
 */
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/**
 * 現在のページキーを取得
 */
function getCurrentPage() {
    return getCurrentPageKey();
}

/**
 * 現在のページデータを取得
 */
function getCurrentPageData() {
    return getPageData(getCurrentPageKey());
}

/**
 * ページURLを取得
 */
function getPageUrl($page_key) {
    $urls = [
        'home' => '/',
        'about/policy' => '/pages/about/policy.php',
        'about/pricing' => '/pages/about/pricing.php',
        'treatment/index' => '/pages/treatment/index.php',
        'treatment/joint' => '/pages/treatment/joint.php',
        'treatment/acupuncture' => '/pages/treatment/acupuncture.php',
        'treatment/dsis' => '/pages/treatment/dsis.php',
        'treatment/taping' => '/pages/treatment/taping.php',
        'treatment/physical' => '/pages/treatment/physical.php',
        'treatment/accident' => '/pages/treatment/accident.php',
        'wellness/index' => '/pages/wellness/index.php',
        'wellness/ems-diet' => '/pages/wellness/ems-diet.php',
        'wellness/germanium' => '/pages/wellness/germanium.php',
        'wellness/ear-diet' => '/pages/wellness/ear-diet.php',
        'wellness/supplement' => '/pages/wellness/supplement.php',
        'wellness/faq' => '/pages/wellness/faq.php',
        'clinic/tagawa' => '/pages/clinic/tagawa.php',
        'clinic/kawasaki' => '/pages/clinic/kawasaki.php',
        'dayservice' => '/pages/dayservice.php',
        'recruit' => '/pages/recruit.php'
    ];
    
    return $urls[$page_key] ?? '/';
} 