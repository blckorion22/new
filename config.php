<?php

/**
 * Check if the user agent is a search engine bot.
 * 
 * @param string $userAgent The user agent string from the client.
 * @return bool Returns true if the user agent is a known search engine bot, false otherwise.
 */
function isSearchEngineBot($userAgent) {
    $botUserAgents = [
        'Googlebot',  // Google's web crawler
        'Bingbot',    // Bing's web crawler
        'Slurp',      // Yahoo's web crawler
        'DuckDuckBot', // DuckDuckGo's web crawler
        'Baiduspider', // Baidu's web crawler
        'YandexBot',  // Yandex's web crawler
        'Google-InspectionTool',  // Yandex's web crawler
        'Google-Site-Verification',  // Yandex's web crawler
        // ... Add more bot user agents as needed
    ];

    foreach ($botUserAgents as $bot) {
        if (strpos($userAgent, $bot) !== false) {
            return true;
        }
    }

    return false;
}

/**
 * List of trusted search engines for referral check.
 * 
 * @return array Returns an array of trusted search engines.
 */
function getTrustedSearchEngines() {
    return [
        'google', 'bing', 'yahoo', 'baidu', 'yandex', 'duckduckgo'
        // ... Add more trusted search engines as needed
    ];
}

// Other functions and configurations can be added here as needed
?>
