<?php
	$dir = "/var/www/html/prescene/dl/tracks"; // relative directory of the files
	
	$files = array_diff(scandir($dir), array('.','..','index.php','index.html','.mp3','.MP3','.m4a','.M4A'));  // exclude from scandir

    	foreach($files as $file)
	{
		$sizepath = $dir.'/'.$file;
		$bytes = filesize($sizepath);
		$size = human_filesize($bytes, 1);
		$withoutExt = preg_replace('/\.\w+$/', '', $file);
		echo '<a target="_blank" href="/dl/tracks/'.$file.'">'.$withoutExt.'</a><font color="#808080">&nbsp;['.$size.']</font><br>';
	}
?>
