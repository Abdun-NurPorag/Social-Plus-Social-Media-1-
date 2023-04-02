<meta name='viewport'content='width=device-width, initial-scale=1.0'>
<?php
$info=$_POST["massage"];
$mainpost="<br><div id='post'>".$info."</div><br>\n";
$myfile = fopen("home.html", "a") or die("Unable to open file!");
fwrite($myfile,$mainpost);
fclose($myfile);
?>
<style tyep=" text/css">
  #iframe{
width:100%;
height:400px;
left:1%;
top:0;
border:none;
outline:none;
position:fixted;
}
</style>
<iframe src="home.html">
  
</iframe>
<div id='profile'>
<div id='post'><div id='circle'>P</div><a href='post.html'><button onclick='create()'id='bt1'>Create</button></a></div>