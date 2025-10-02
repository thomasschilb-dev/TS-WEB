<?php
/*
http://news.google.com/news?pz=1&cf=all&ned=us&hl=en&topic=n&output=rss
*/

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
foreach($feeds as $result) {
    echo '<a href="'.$result['link'], '" target="_blank">'.$result['title'], '</a><br><br>';
}
echo '</pre>';
/*
$xml = new SimpleXMLElement('<root/>');
array_walk_recursive($feeds, array ($xml, 'addChild'));
print $xml->asXML('rss.xml');
*/
// Creating new SimpleXMLElement object from $user
$xml = new SimpleXMLElement($feeds);

// Printing as XML
echo $xml->saveXML();
echo $xml->saveXML('rss.xml');
?>
