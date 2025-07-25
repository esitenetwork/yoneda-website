<?php

function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function getPageData($page_key) {
    static $pages = null;
    if ($pages === null) {
        $pages = require __DIR__ . '/../config/pages.php';
    }
    
    return $pages[$page_key] ?? [
        'title' => 'よねだ鍼灸整骨院',
        'description' => '',
        'keywords' => '',
        'css' => 'page.css',
        'body_class' => 'sec',
        'breadcrumb' => [],
        'nav_active' => ''
    ];
}

function getCurrentPageKey() {
    $uri = $_SERVER['REQUEST_URI'];
    $path = parse_url($uri, PHP_URL_PATH);
    
    // ファイル名を取得
    $basename = basename($_SERVER['PHP_SELF'], '.php');
    
    // ディレクトリ構造に基づくマッピング
    if (strpos($_SERVER['PHP_SELF'], '/pages/about/') !== false) {
        return 'about/' . $basename;
    } elseif (strpos($_SERVER['PHP_SELF'], '/pages/treatment/') !== false) {
        return 'treatment/' . $basename;
    } elseif (strpos($_SERVER['PHP_SELF'], '/pages/wellness/') !== false) {
        return 'wellness/' . $basename;
    } elseif (strpos($_SERVER['PHP_SELF'], '/pages/clinic/') !== false) {
        return 'clinic/' . $basename;
    } elseif (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) {
        return $basename;
    } else {
        return 'home';
    }
}

function getPageUrl($page_key) {
    $url_mapping = [
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
    
    return $url_mapping[$page_key] ?? '/';
}

function getBaseUrl() {
    return BASE_URL;
}

function getImageUrl($image_name) {
    return 'images/' . $image_name;
} 