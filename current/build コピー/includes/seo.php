<?php
// SEO関連関数

function generateMetaTags($page_data) {
    $output = '';
    
    // OGP tags
    $output .= '<meta property="og:type" content="website">' . "\n";
    $output .= '<meta property="og:title" content="' . h($page_data['title']) . '">' . "\n";
    $output .= '<meta property="og:description" content="' . h($page_data['description']) . '">' . "\n";
    $output .= '<meta property="og:url" content="' . h(SITE_URL . $_SERVER['REQUEST_URI']) . '">' . "\n";
    $output .= '<meta property="og:site_name" content="' . h(SITE_NAME) . '">' . "\n";
    
    // Twitter Card
    $output .= '<meta name="twitter:card" content="summary">' . "\n";
    $output .= '<meta name="twitter:title" content="' . h($page_data['title']) . '">' . "\n";
    $output .= '<meta name="twitter:description" content="' . h($page_data['description']) . '">' . "\n";
    
    return $output;
}

function generateStructuredData($page_data) {
    $data = [
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => SITE_NAME,
        'description' => $page_data['description'],
        'url' => SITE_URL,
        'telephone' => '0947-44-7100',
        'address' => [
            '@type' => 'PostalAddress',
            'addressCountry' => 'JP',
            'addressRegion' => '福岡県',
            'addressLocality' => '田川市'
        ]
    ];
    
    return '<script type="application/ld+json">' . json_encode($data, JSON_UNESCAPED_UNICODE) . '</script>';
} 