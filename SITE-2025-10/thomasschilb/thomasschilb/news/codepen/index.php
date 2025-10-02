<?php
/*
http://news.google.com/news?pz=1&cf=all&ned=us&hl=en&topic=n&output=rss
*/

$news = simplexml_load_file('https://blog.codepen.io/feed/');

$feeds = array();

$i = 0;

foreach ($news->channel->item as $item) 
{
    preg_match('@src="([^"]+)"@', $item->description, $match);
    $parts = explode('<font size="-1">', $item->description);

    $feeds[$i]['title'] = (string) $item->title; 
    $feeds[$i]['link'] = (string) $item->link;
    $i++;
}

// print_r($feeds);

//foreach ($feeds[0] as $x) {
//  echo $x.'<br>';
//}
echo '<pre>';
foreach($feeds as $result) {
    echo '<a href="'.$result['link'], '" target="_blank">'.$result['title'], '</a><br><br>';
}
echo '</pre>';
?>
