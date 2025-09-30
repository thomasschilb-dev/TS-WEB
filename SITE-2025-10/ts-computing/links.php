<?php
	$dir = "/var/www/html/thomasschilb/ts-computing/links/awesome"; // relative directory of the files
	
	$files = array_diff(scandir($dir), array('.','..','index.php','index.html','.mp3','.MP3','.m4a','.M4A','.txt','.pdf','.7z','.htm','.html','.HTML'));  // exclude from scandir

    	foreach($files as $file)
	{
		$sizepath = $dir.'/'.$file;
		$bytes = filesize($sizepath);
		$size = human_filesize($bytes, 1);
		$withoutExt = preg_replace('/\.\w+$/', '', $file);
#		echo '<a target="_blank" href="/howto/txt'.$file.'">'.$withoutExt.'</a><font color="#808080">&nbsp;['.$size.']</font><br>';
		echo $withoutExt.'</a>&nbsp;<font color="#808080">'.$size.'</font>&nbsp;[<a target="_blank" href="/ts-computing/links/awesome/'.$file.'">html</a>]<br>';
	}
?>
