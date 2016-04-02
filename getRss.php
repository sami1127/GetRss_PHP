<?php
ini_set("include_path", '/var/www/html/get_rss_php/lib/XML_RSS-1.1.0a1' . PATH_SEPARATOR . ini_get("include_path") );

require_once "XML/RSS.php";

$rss = new XML_RSS("http://hamusoku.com/index.rdf");
$rss->parse();
$blogs = array();
// getItemsメソッドで必要なitem要素を取得
foreach ($rss->getItems() as $key => $item) {
        $blogs[$key]['link'] = $item['link'];
            $blogs[$key]['title'] = $item['title'];
}
// 上記で取得したデータを表示
foreach ($blogs as $key => $blog) {
        echo "<a href = '{$blog['link']}'>{$blog['title']}</a><br />";
}
