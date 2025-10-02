<?php
include('mp3file.class.php');
$mp3file = new MP3File("killer.mp3");
#$duration1 = $mp3file->getDurationEstimate();//(faster) for CBR only
$duration2 = $mp3file->getDuration();//(slower) for VBR (or CBR)
#echo "duration: $duration1 seconds"."\n";
#echo "estimate: $duration2 seconds"."\n";
echo MP3File::formatTime($duration2)."\n";
?>