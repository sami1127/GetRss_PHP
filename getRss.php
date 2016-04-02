<?php
ini_set("include_path", '/var/www/html/get_rss_php/lib/XML_RSS-1.1.0a1' . PATH_SEPARATOR . ini_get("include_path") );

require_once "XML/RSS.php";

$rss = new XML_RSS("http://hamusoku.com/index.rdf");
$rss->parse();
$blogs = array();
// getItems$B%a%=%C%I$GI,MW$J(Bitem$BMWAG$r<hF@(B
foreach ($rss->getItems() as $key => $item) {
        $blogs[$key]['link'] = $item['link'];
            $blogs[$key]['title'] = $item['title'];
}
// $B>e5-$G<hF@$7$?%G!<%?$rI=<((B
foreach ($blogs as $key => $blog) {
        echo "<a href = '{$blog['link']}'>{$blog['title']}</a><br />";
}
