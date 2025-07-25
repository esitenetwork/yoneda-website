<?php
// 共通関数ファイル

// デバッグ用関数
function debug($var) {
    if (defined('DEBUG') && DEBUG) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
}

// 安全な配列アクセス
function array_get($array, $key, $default = null) {
    return isset($array[$key]) ? $array[$key] : $default;
}

// メールアドレス検証
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// 電話番号フォーマット
function format_phone($phone) {
    return preg_replace('/(\d{3})(\d{4})(\d{4})/', '$1-$2-$3', $phone);
} 