<?php
$url = $_SERVER['QUERY_STRING'];
$url_check1 = 'https://www.limetorrents.lol/rss/2/';	// available domain 1
//$url_check2 = 'https://api.weather.com/';     // available domain 2

if (strncasecmp($url, $url_check1, strlen($url_check1)) == 0
//   ||strncasecmp($url, $url_check2, strlen($url_check2)) == 0
 ){
     $ch = curl_init($url);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($ch, CURLOPT_HEADER, false);
     $html = curl_exec($ch);
     curl_close($ch);
     echo '<html><title>LimeTorrents - RSS Feed</title>';
     echo $html;
  }
  else echo 'wrong request';
?>