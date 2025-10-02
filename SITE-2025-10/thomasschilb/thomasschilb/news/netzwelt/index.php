<?php
$news = simplexml_load_file('https://feeds.feedburner.com/netzwelt.xml');
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
echo '<pre>';
foreach($feeds as $result) { echo '<a href="'.$result['link'], '" target="_blank">'.$result['title'], '</a><br><br>'; }
echo '</pre>';
?>
