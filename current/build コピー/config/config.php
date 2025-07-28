<?php

// サイト基本設定
define('SITE_NAME', 'よねだ鍼灸整骨院');
define('SITE_URL', 'http://www.yoneda.cc');
define('SITE_DESCRIPTION', 'よねだ鍼灸整骨院は田川・川崎で「安心」と「安全」を第一に、患者さんの悩みを取り除く治療院です。');

// ディレクトリ設定
define('ROOT_PATH', dirname(__DIR__));
define('BASE_URL', '/');

// エラー表示設定
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 文字エンコーディング設定
ini_set('default_charset', 'UTF-8');
mb_internal_encoding('UTF-8');

// セッション設定
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 