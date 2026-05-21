<?php
// Generate sitemap with all location pages
$locationPages = array();

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('.'));
foreach ($iterator as $fileInfo) {
    if ($fileInfo->isFile() && $fileInfo->getExtension() === 'php') {
        $file = $fileInfo->getPathname();
        $file = preg_replace('/^\.\//', '', $file); // remove leading ./

        // 1. Root location pages (e.g., cosmetic-facial-surgery-in-delhi.php)
        if (strpos($file, '/') === false) {
            if (preg_match("/^[a-z0-9\-]+-in-[a-z0-9\-]+\.php$/", $file)) {
                $urlPath = preg_replace('/\.php$/', '', $file);
                $locationPages[] = "https://gnathosface.com/" . $urlPath;
            }
        } 
        // 2. Directory location pages
        else {
            $allowedDirs = ['difficulty-chewing-treatment', 'face-swelling-doctor', 'face-treatment', 'jaw-clicking-treatment', 'jaw-pain-treatment', 'maxillofacial', 'mouth-opening-problem-treatment', 'facial-injury-doctor'];
            $parts = explode('/', $file);
            $dir = $parts[0];
            
            if (in_array($dir, $allowedDirs)) {
                $urlPath = preg_replace('/\.php$/', '', $file);
                // If it's an index.php, map it to the directory
                $urlPath = preg_replace('/\/index$/', '/', $urlPath);
                $locationPages[] = "https://gnathosface.com/" . $urlPath;
            }
        }
    }
}

sort($locationPages);

// Generate XML
$xml = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
       xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
       xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
             http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
';

// Static pages with high priority
$staticPages = array(
    array('url' => '/', 'priority' => '1.00'),
    array('url' => '/about', 'priority' => '0.80'),
    array('url' => '/tmj-disorders', 'priority' => '0.80'),
    array('url' => '/facial-injuries', 'priority' => '0.80'),
    array('url' => '/orthognathic-surgery', 'priority' => '0.80'),
    array('url' => '/cysts-tumors-face', 'priority' => '0.80'),
    array('url' => '/cosmetic-facial-surgery', 'priority' => '0.80'),
    array('url' => '/rhinoplasty', 'priority' => '0.80'),
    array('url' => '/obstructive-sleep-apnea', 'priority' => '0.80'),
    array('url' => '/oral-cancer', 'priority' => '0.80'),
    array('url' => '/jaw-reconstruction', 'priority' => '0.80'),
    array('url' => '/facial-swelling', 'priority' => '0.80'),
    array('url' => '/tmj-arthroscopy', 'priority' => '0.80'),
    array('url' => '/skin-grafts-and-flaps', 'priority' => '0.80'),
    array('url' => '/orthognathic-surgery-treatment', 'priority' => '0.80'),
    array('url' => '/cyst-tumors-treatment', 'priority' => '0.80'),
    array('url' => '/cosmetic-facial-surgery-treatment', 'priority' => '0.80'),
    array('url' => '/rhinoplasty-treatment', 'priority' => '0.80'),
    array('url' => '/osa-treatment', 'priority' => '0.80'),
    array('url' => '/oral-cancer-treatment', 'priority' => '0.80'),
    array('url' => '/facial-swelling-treatment', 'priority' => '0.80'),
    array('url' => '/reconstructive-surgery', 'priority' => '0.80'),
    array('url' => '/contact-us', 'priority' => '0.80'),
);

$today = date('Y-m-d\TH:i:s+00:00');

// Add static pages
foreach ($staticPages as $page) {
    $xml .= '<url>
  <loc>https://gnathosface.com' . $page['url'] . '</loc>
  <lastmod>' . $today . '</lastmod>
  <priority>' . $page['priority'] . '</priority>
</url>
';
}

// Add location pages
foreach ($locationPages as $url) {
    $xml .= '<url>
  <loc>' . $url . '</loc>
  <lastmod>' . $today . '</lastmod>
  <priority>0.80</priority>
</url>
';
}

$xml .= '</urlset>';

// Write to sitemap
file_put_contents('sitemap.xml', $xml);

echo "Generated sitemap.xml with " . count($staticPages) . " static pages and " . count($locationPages) . " location pages\n";
echo "Total URLs: " . (count($staticPages) + count($locationPages)) . "\n";
?>