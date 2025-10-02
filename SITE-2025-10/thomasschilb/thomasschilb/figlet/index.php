<html>

<pre>
   _ _ _         _ _                 _ _ _   _ _ _   
 | _ _     |   /   _ `   |         | _ _       |     
 |         |   \ _ _ >   | _ _ _   | _ _ _     |     

<form action="index.php" method="GET">
 Input Text: <input type="text" name="figtext"><br><br>
 <input type="submit">
</form>
<hr>
</pre>
<?php

if (isset($_GET["figtext"])) {
$folder = '/var/www/html/thomasschilb/figlet/fonts';
$text=$_GET["figtext"];
$files = array_diff(scandir($folder), array('..', '.'));
foreach($files as $file) {
echo 'Download: <a href="fonts/'.$file.'">'.$file.'</a>', "\n";
$asciip = shell_exec("figlet ".$text." -d ".$folder." -f ".$file." | sed 's/./& /g;s/ / /g'");
echo '<pre>'.$asciip.'</pre>';}}

else {
$folder = '/var/www/html/thomasschilb/figlet/fonts';
$text="TS";
$files = array_diff(scandir($folder), array('..', '.'));
foreach($files as $file) {
echo 'Download: <a href="fonts/'.$file.'">'.$file.'</a>', "\n";
$asciip = shell_exec("figlet ".$text." -d ".$folder." -f ".$file." | sed 's/./& /g;s/ / /g'");
echo '<pre>'.$asciip.'</pre>';}
}

?>