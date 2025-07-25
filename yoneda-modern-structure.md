# よねだ鍼灸整骨院 モダンPHP構成設計

## 推奨フォルダ構成

```
current/
├── index.php                    # トップページ
├── config/
│   ├── config.php              # サイト基本設定・ページデータ
│   ├── pages.php               # ページ情報の一元管理
│   └── routes.php              # URL管理（将来用）
├── includes/
│   ├── functions.php           # 共通関数
│   ├── page-data.php           # ページデータ取得関数
│   └── seo.php                 # SEO関連関数
├── components/
│   ├── header.php              # 共通ヘッダー
│   ├── footer.php              # 共通フッター
│   ├── nav.php                 # ナビゲーション
│   ├── breadcrumb.php          # パンくずリスト
│   └── page-header.php         # ページヘッダー
├── pages/
│   ├── about/
│   │   ├── policy.php          # 基本方針 (a01)
│   │   └── pricing.php         # 料金案内 (a03)
│   ├── treatment/
│   │   ├── index.php           # 治療メニュー一覧
│   │   ├── joint.php           # 関節治療 (b011)
│   │   ├── acupuncture.php     # 鍼灸 (b012)
│   │   ├── dsis.php            # DSIS足底挿板療法 (b013)
│   │   ├── taping.php          # テーピング (b014)
│   │   ├── physical.php        # 物理療法 (b015)
│   │   └── accident.php        # 交通事故治療 (b016)
│   ├── wellness/
│   │   ├── index.php           # スリム＆リラックス一覧
│   │   ├── ems-diet.php        # EMSダイエット (b021)
│   │   ├── germanium.php       # ゲルマニウム温浴 (b022)
│   │   ├── ear-diet.php        # セルフ耳つぼダイエット (b023)
│   │   ├── supplement.php      # サプリメント (b024)
│   │   └── faq.php             # よくある質問 (b025)
│   ├── clinic/
│   │   ├── tagawa.php          # 田川院
│   │   └── kawasaki.php        # 川崎院
│   ├── dayservice.php          # デイサービス (b03)
│   └── recruit.php             # 採用情報 (d01)
├── css/
│   ├── style.css               # メインCSS（common.css統合）
│   ├── home.css                # トップページ用
│   ├── page.css                # 下層ページ共通
│   └── components.css          # コンポーネント用
├── js/
│   ├── main.js                 # メインJS
│   └── navigation.js           # ナビゲーション用
├── images/                     # 既存画像をそのまま
└── uploads/                    # 将来のアップロード用
```

---

## 設定ファイル設計

### config/pages.php（ページデータ一元管理）
```php
<?php
return [
    // トップページ
    'home' => [
        'title' => '田川・川崾｜よねだ鍼灸整骨院ホームページ',
        'description' => 'よねだ鍼灸整骨院は田川・川崎で「安心」と「安全」を第一に、患者さんの悩みを取り除く治療院です。',
        'keywords' => '米田,よねだ,福岡,筑豊,田川,川崎,整骨院,鍼灸',
        'css' => 'home.css',
        'body_class' => 'home'
    ],
    
    // 初めての方
    'about/policy' => [
        'title' => '（田川飯塚の整骨院）基本方針｜田川・川崎｜よねだ鍼灸整骨院',
        'description' => '高い意識をもって「安心」「安全」「的確」、これは当院の掲げ...福岡県田川の鍼灸整骨院',
        'keywords' => '米田,よねだ,福岡,筑豊,田川,飯塚,整骨院,鍼灸',
        'css' => 'page.css',
        'body_class' => 'sec',
        'breadcrumb' => ['初めての方', '基本方針'],
        'nav_active' => 'nav-a01'
    ],
    
    'about/pricing' => [
        'title' => '（田川飯塚の整骨院）料金案内｜田川・川崎｜よねだ鍼灸整骨院',
        'description' => 'よねだ鍼灸整骨院の料金案内ページです。',
        'keywords' => '米田,よねだ,福岡,筑豊,田川,飯塚,整骨院,鍼灸,料金',
        'css' => 'page.css',
        'body_class' => 'sec',
        'breadcrumb' => ['初めての方', '料金案内'],
        'nav_active' => 'nav-a02'
    ],
    
    // 治療メニュー
    'treatment/joint' => [
        'title' => '（田川飯塚の整骨院）関節治療｜田川・川崎｜よねだ鍼灸整骨院',
        'description' => 'よねだ鍼灸整骨院の関節治療についてご紹介します。',
        'keywords' => '関節治療,整骨院,田川,川崎',
        'css' => 'page.css',
        'body_class' => 'sec',
        'breadcrumb' => ['業務内容', '治療', '関節治療'],
        'nav_active' => 'sub-b011'
    ],
    
    'treatment/acupuncture' => [
        'title' => '（田川飯塚の整骨院）鍼灸｜田川・川崎｜よねだ鍼灸整骨院',
        'description' => 'よねだ鍼灸整骨院の鍼灸治療についてご紹介します。',
        'keywords' => '鍼灸,はり,きゅう,整骨院,田川,川崎',
        'css' => 'page.css',
        'body_class' => 'sec',
        'breadcrumb' => ['業務内容', '治療', '鍼灸'],
        'nav_active' => 'sub-b012'
    ],
    
    // その他のページも同様に定義...
    
    // 院案内
    'clinic/tagawa' => [
        'title' => '（田川飯塚の整骨院）よねだ鍼灸整骨院 田川院｜田川・川崎｜よねだ鍼灸整骨院',
        'description' => 'よねだ鍼灸整骨院 田川院のご案内です。',
        'keywords' => '田川院,田川,整骨院,鍼灸,アクセス',
        'css' => 'page.css',
        'body_class' => 'sec',
        'breadcrumb' => ['院案内', 'よねだ鍼灸整骨院 田川院'],
        'nav_active' => 'nav-c01'
    ]
];
```

### includes/page-data.php（ページデータ取得関数）
```php
<?php
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
    
    // URL → ページキーのマッピング
    $routes = [
        '/' => 'home',
        '/index.php' => 'home',
        '/pages/about/policy.php' => 'about/policy',
        '/pages/about/pricing.php' => 'about/pricing',
        '/pages/treatment/joint.php' => 'treatment/joint',
        '/pages/treatment/acupuncture.php' => 'treatment/acupuncture',
        '/pages/clinic/tagawa.php' => 'clinic/tagawa',
        // 必要に応じて追加
    ];
    
    return $routes[$path] ?? 'home';
}
```

---

## ページテンプレート設計

### 共通テンプレート（pages/template.php）
```php
<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/page-data.php';

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
    <link rel="stylesheet" href="css/<?php echo $page_data['css']; ?>">
    
    <!-- Google Analytics -->
    <script>
        // GA4 または Universal Analytics
    </script>
</head>
<body class="<?php echo $page_data['body_class']; ?>">
    <div id="container">
        <div id="container-inner">
            <?php include __DIR__ . '/../components/header.php'; ?>
            
            <?php if (!empty($page_data['breadcrumb'])): ?>
                <?php include __DIR__ . '/../components/breadcrumb.php'; ?>
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
                
                <?php include __DIR__ . '/../components/nav.php'; ?>
            </div>
        </div>
        
        <?php include __DIR__ . '/../components/footer.php'; ?>
    </div>
</body>
</html>
```

---

## CSS統合戦略

### 1. 共通CSS統合
```css
/* css/style.css - 全ページ共通 */
@charset "utf-8";

/* 既存のcommon.cssの内容をベースに */
/* リセット、レイアウト、ナビゲーション等 */
```

### 2. ページ別CSS最適化
```css
/* css/page.css - 下層ページ共通 */
/* 既存のa01.css, b.css等の共通部分を統合 */

/* css/home.css - トップページ専用 */
/* 既存のhome.cssをベースに */
```

---

## 移行手順

### Phase 1: 基盤構築
1. **config/pages.php** でページデータ一元管理
2. **共通テンプレート** の作成
3. **components/** の分割・最適化

### Phase 2: ページ移行
1. **トップページ**（index.php）
2. **主要ページ**（基本方針、料金案内等）
3. **治療メニュー** 系ページ
4. **院案内** 系ページ

### Phase 3: 最適化
1. **CSS統合・最適化**
2. **JavaScript統合**
3. **SEO最適化**
4. **パフォーマンス最適化**

---

## SEO維持戦略

### URL構造
```
旧: /a01.html → 新: /pages/about/policy.php
旧: /b01/b011.html → 新: /pages/treatment/joint.php
旧: /tenpo/tagawa.html → 新: /pages/clinic/tagawa.php
```

### リダイレクト設定（.htaccess）
```apache
# 旧URL → 新URLへの301リダイレクト
RewriteRule ^a01\.html$ /pages/about/policy.php [R=301,L]
RewriteRule ^a03\.html$ /pages/about/pricing.php [R=301,L]
RewriteRule ^b01/b011\.html$ /pages/treatment/joint.php [R=301,L]
# 以下、全ページ分追加
```

---

この構成により、**保守性・拡張性・SEO維持**を両立した現代的なサイトに移行できます。