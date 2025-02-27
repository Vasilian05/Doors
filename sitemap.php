<?php

header('Content-Type: application/xml; charset=utf-8');

// Start the XML document
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
   <?php
   
   //in the future save the urls in db and loop them trough
   $urls = [
       [
           'loc' => 'https://artdecordoors.com/index.php',
           'lastmod' => '2025-02-26',
           'changefreq' => 'daily',
           'priority' => '1.0'
       ],
       [
           'loc' => 'https://artdecordoors.com/products.php?category=interior',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=23',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=25',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=26',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=27',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=28',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=29',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=30',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=31',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=32',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=33',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=34',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=35',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=36',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=37',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=38',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=39',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=40',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=41',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=42',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=43',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=44',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=45',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=46',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=47',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=48',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=49',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=50',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=51',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=52',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=53',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=54',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=55',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=56',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=57',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=58',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=59',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=60',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=61',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=62',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=63',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=64',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=65',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=66',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=67',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=68',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=69',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/product.php?category=interior&id=70',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ]
       ,
       [
           'loc' => 'https://artdecordoors.com/distributors.php',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ],
       [
           'loc' => 'https://artdecordoors.com/contacts.php',
           'lastmod' => '2025-02-26',
           'changefreq' => 'weekly',
           'priority' => '0.8'
       ]
       // Add more URLs here
   ];
   
   foreach ($urls as $url) {
       echo '<url>';
       echo '<loc>' . htmlspecialchars($url['loc']) . '</loc>';
       echo '<lastmod>' . $url['lastmod'] . '</lastmod>';
       echo '<changefreq>' . $url['changefreq'] . '</changefreq>';
       echo '<priority>' . $url['priority'] . '</priority>';
       echo '</url>';
   }
   ?>
</urlset>
