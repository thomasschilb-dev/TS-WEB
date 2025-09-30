<?php

$audio_title = 'AUDIO'; // category
$audio_weblink = '/ts-computing/software/7z/audio/'; // relative path in the browser, weblink
$audio = '/var/www/html/thomasschilb/ts-computing/software/7z/audio'; // full directory of the files, sysdir

$chat_title = 'CHAT';
$chat_weblink = '/ts-computing/software/7z/chat/';
$chat = '/var/www/html/thomasschilb/ts-computing/software/7z/chat';

$files_var_title = 'FILES';
$files_var_weblink = '/ts-computing/software/7z/files/';
$files_var = '/var/www/html/thomasschilb/ts-computing/software/7z/files';

$filesharing_title = 'FILE-SHARING';
$filesharing_weblink = '/ts-computing/software/7z/filesharing/';
$filesharing = '/var/www/html/thomasschilb/ts-computing/software/7z/filesharing';

$graphicsart_title = 'GRAPHICS ART';
$graphicsart_weblink = '/ts-computing/software/7z/graphicsart/';
$graphicsart = '/var/www/html/thomasschilb/ts-computing/software/7z/graphicsart';

$portable_title = 'PORTABLE';
$portable_weblink = '/ts-computing/software/7z/portable/';
$portable = '/var/www/html/thomasschilb/ts-computing/software/7z/portable';

$system_title = 'SYSTEM';
$system_weblink = '/ts-computing/software/7z/system/';
$system = '/var/www/html/thomasschilb/ts-computing/software/7z/system';

$video_title = 'VIDEO';
$video_weblink = '/ts-computing/software/7z/video/';
$video = '/var/www/html/thomasschilb/ts-computing/software/7z/video';

echo '<b>'.$audio_title.'</b><br><br>';
$dir = $audio;
$files = array_diff(scandir($dir), array('.','..','index.php','index.html','.mp3','.MP3','.m4a','.M4A','.txt','.pdf','.7z'));  // exclude from directory scan
foreach($files as $file){$sizepath = $dir.'/'.$file;$bytes = filesize($sizepath);$size = human_filesize($bytes, 1);$withoutExt = preg_replace('/\.\w+$/', '', $file);
echo $withoutExt.'&nbsp;<font color="#808080">'.$size.'</font>&nbsp;[<a target="_blank" href="'.$audio_weblink.''.$file.'">7z</a>]<br>';}

echo '<br><b>'.$chat_title.'</b><br><br>';
$dir = $chat;
$files = array_diff(scandir($dir), array('.','..','index.php','index.html','.mp3','.MP3','.m4a','.M4A','.txt','.pdf','.7z'));  // exclude from directory scan
foreach($files as $file){$sizepath = $dir.'/'.$file;$bytes = filesize($sizepath);$size = human_filesize($bytes, 1);$withoutExt = preg_replace('/\.\w+$/', '', $file);
echo $withoutExt.'&nbsp;<font color="#808080">'.$size.'</font>&nbsp;[<a target="_blank" href="'.$chat_weblink.''.$file.'">7z</a>]<br>';}

echo '<br><b>'.$files_var_title.'</b><br><br>';
$dir = $files_var;
$files = array_diff(scandir($dir), array('.','..','index.php','index.html','.mp3','.MP3','.m4a','.M4A','.txt','.pdf','.7z'));  // exclude from directory scan
foreach($files as $file){$sizepath = $dir.'/'.$file;$bytes = filesize($sizepath);$size = human_filesize($bytes, 1);$withoutExt = preg_replace('/\.\w+$/', '', $file);
echo $withoutExt.'&nbsp;<font color="#808080">'.$size.'</font>&nbsp;[<a target="_blank" href="'.$files_var_weblink.''.$file.'">7z</a>]<br>';}

echo '<br><b>'.$filesharing_title.'</b><br><br>';
$dir = $filesharing;
$files = array_diff(scandir($dir), array('.','..','index.php','index.html','.mp3','.MP3','.m4a','.M4A','.txt','.pdf','.7z'));  // exclude from directory scan
foreach($files as $file){$sizepath = $dir.'/'.$file;$bytes = filesize($sizepath);$size = human_filesize($bytes, 1);$withoutExt = preg_replace('/\.\w+$/', '', $file);
echo $withoutExt.'&nbsp;<font color="#808080">'.$size.'</font>&nbsp;[<a target="_blank" href="'.$filesharing_weblink.''.$file.'">7z</a>]<br>';}

echo '<br><b>'.$graphicsart_title.'</b><br><br>';
$dir = $graphicsart;
$files = array_diff(scandir($dir), array('.','..','index.php','index.html','.mp3','.MP3','.m4a','.M4A','.txt','.pdf','.7z'));  // exclude from directory scan
foreach($files as $file){$sizepath = $dir.'/'.$file;$bytes = filesize($sizepath);$size = human_filesize($bytes, 1);$withoutExt = preg_replace('/\.\w+$/', '', $file);
echo $withoutExt.'&nbsp;<font color="#808080">'.$size.'</font>&nbsp;[<a target="_blank" href="'.$graphicsart_weblink.''.$file.'">7z</a>]<br>';}

echo '<br><b>'.$portable_title.'</b><br><br>';
$dir = $portable;
$files = array_diff(scandir($dir), array('.','..','index.php','index.html','.mp3','.MP3','.m4a','.M4A','.txt','.pdf','.7z'));  // exclude from directory scan
foreach($files as $file){$sizepath = $dir.'/'.$file;$bytes = filesize($sizepath);$size = human_filesize($bytes, 1);$withoutExt = preg_replace('/\.\w+$/', '', $file);
echo $withoutExt.'&nbsp;<font color="#808080">'.$size.'</font>&nbsp;[<a target="_blank" href="'.$portable_weblink.''.$file.'">7z</a>]<br>';}

echo '<br><b>'.$system_title.'</b><br><br>';
$dir = $system;
$files = array_diff(scandir($dir), array('.','..','index.php','index.html','.mp3','.MP3','.m4a','.M4A','.txt','.pdf','.7z'));  // exclude from directory scan
foreach($files as $file){$sizepath = $dir.'/'.$file;$bytes = filesize($sizepath);$size = human_filesize($bytes, 1);$withoutExt = preg_replace('/\.\w+$/', '', $file);
echo $withoutExt.'&nbsp;<font color="#808080">'.$size.'</font>&nbsp;[<a target="_blank" href="'.$system_weblink.''.$file.'">7z</a>]<br>';}

echo '<br><b>'.$video_title.'</b><br><br>';
$dir = $video;
$files = array_diff(scandir($dir), array('.','..','index.php','index.html','.mp3','.MP3','.m4a','.M4A','.txt','.pdf','.7z'));  // exclude from directory scan
foreach($files as $file){$sizepath = $dir.'/'.$file;$bytes = filesize($sizepath);$size = human_filesize($bytes, 1);$withoutExt = preg_replace('/\.\w+$/', '', $file);
echo $withoutExt.'&nbsp;<font color="#808080">'.$size.'</font>&nbsp;[<a target="_blank" href="'.$video_weblink.''.$file.'">7z</a>]<br>';}


?>
