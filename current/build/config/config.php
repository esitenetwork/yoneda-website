<?php
/**
 * よねだ鍼灸整骨院 サイト設定
 */

// 環境判定
function detectEnvironment() {
    if (isset($_SERVER['HTTP_HOST'])) {
        $host = $_SERVER['HTTP_HOST'];
        if (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false) {
            return 'development';
        } elseif (strpos($host, 'yoneda.cc') !== false) {
            return 'production';
        } else {
            return 'staging';
        }
    }
    return 'development';
}

// 環境設定
$environment = detectEnvironment();

// ベースURL設定
$base_urls = [
    'development' => 'http://localhost:8080',
    'staging' => 'https://staging.yoneda.cc',
    'production' => 'https://www.yoneda.cc'
];

$base_url = $base_urls[$environment] ?? $base_urls['development'];

// 外部リソースURL設定 (画像、JS、CSSなど)
$external_base_url = 'https://www.yoneda.cc'; // 本番環境の絶対URL

/**
 * ベースURLを取得
 */
function getBaseUrl() {
    global $base_url;
    return $base_url;
}

/**
 * 外部リソースのURLを取得
 */
function getExternalResourceUrl($path) {
    global $external_base_url;
    return $external_base_url . '/' . ltrim($path, '/');
}

/**
 * 画像URLを取得
 */
function getImageUrl($path) {
    return getExternalResourceUrl('images/' . $path);
}

/**
 * CSSファイルのURLを取得
 */
function getCssUrl($path) {
    return getExternalResourceUrl('css/' . $path);
}

/**
 * JavaScriptファイルのURLを取得
 */
function getJsUrl($path) {
    return getExternalResourceUrl('js/' . $path);
}

// サイト基本設定
define('SITE_NAME', 'よねだ鍼灸整骨院');
define('SITE_DESCRIPTION', 'よねだ鍼灸整骨院は田川・川崎で「安心」と「安全」を第一に、患者さんの悩みを取り除く治療院です。');

// 文字エンコーディング設定
ini_set('default_charset', 'UTF-8');
mb_internal_encoding('UTF-8');

// エラー表示設定（開発環境のみ）
if ($environment === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
} 