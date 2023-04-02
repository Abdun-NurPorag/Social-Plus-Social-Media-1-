<?php
$profile=$_POST["profile"];
$email=$_POST["email"];
$filename ="accounts/profile/".$email."/".$profile.".html";

if (file_exists($filename)) {
   $myfile = fopen($filename, "r") or die("Unable to open file!");
echo fread($myfile,filesize($filename));
fclose($myfile);
} 
else {
    $myfile = fopen("fail.html", "r") or die("Unable to open file!");
echo fread($myfile,filesize("fail.html"));
fclose($myfile);
}
?>
