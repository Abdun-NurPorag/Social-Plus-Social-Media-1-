<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Plus</title>
    <link rel="stylesheet"href="index.css"></rel>
    <!---body content---->
    <body><center>
      <font color="white"><b><h2>Account Creation Successfull</h2></b></font>
        <div id="div1">
            <center>
                <center>
                    <form action="login.php"method="post">
                    <font id="title">
                        <br>
                       <b>SOCIAL plUS LOG In</b>
                    </font>
                </center>
                <br>
                <input type="text"placeholder="Profile name"id="n"name="profile"required>
                <br>
                <input type="text"placeholder="Email"id="n"name="email"required>
                <br>
                <input type="password"placeholder="Password"id="n"name="password"required>
                <br>
                <br><br>
                <input type="Submit"value="Log in"id="submit">
                
                </form>
                <input type="button"value="Cancle"id="cancle">
                
                <br>
                <a href="new.html"id="link1">New account</a>
            </center>
        </div></center>
        
        
        
        
<?php
  $profile=$_POST["profile"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$pass=$_POST["password"];
$conpass=$_POST["conpass"];
$country=$_POST["country"];
$dob=$_POST["dob"];
$bio=$_POST["bio"];
$folder=$email;
$file=$profile.".html";
$location="accounts/profile/".$folder."/".$file;
if (file_exists($location)) {
  echo("Profile is exists with this email and username,Profile doesnot create");
}
else{
  $profile=$_POST["profile"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$pass=$_POST["password"];
$conpass=$_POST["conpass"];
$country=$_POST["country"];
$dob=$_POST["dob"];
$bio=$_POST["bio"];
$folder=$email;
$file=$profile.".html";
mkdir("accounts/database/".$folder);
$loc="accounts/database/".$folder."/".$file;
$filecreate=fopen($loc,"w") or die ("unable to open");
fwrite($filecreate,$profile."<br>",);
fwrite($filecreate,$email."<br>");
fwrite($filecreate,$mobile."<br>");
fwrite($filecreate,$pass."<br>");
fwrite($filecreate,$conpass."<br>");
fwrite($filecreate,$country."<br>");
fwrite($filecreate,$dob."<br>");
fwrite($filecreate,$bio."<br>");
fclose($filecreate);
$profile=$_POST["profile"];
$email=$_POST["email"];
$main="<style type='text/css'>   
#float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#0C9;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}

#nav{

        position: fixed;
        width:100%;
        height:100px;
        top:1;
        left:0;
        right:1px;
        background-color:#FF5400;
        overflow:1;
        border-bottom:2px solid #80FF00;
    }
    span{
        display:none ;
       
    }
    :target{
        display: block;
    }
   #ft1{
       color:white;
       font-size:30;
   }
   button{
       background-color:white;
       border:none;
       outline:none;
       color:#00B3FF;
       width:20%;
       height:40px;
    margin:0;
   
   }
#iframe{
width:100%;
height:67%;
left:1%;
top:0;
border:none;
outline:none;
position:fixted;
}
#post{
width:100%;
height:160px;
border-radius:5px;
background-color:00B4FF;

}
#circle{
width:70px;
height:70px;
color:white;
font-size:40;
background-color:6100FF;
border-radius:50%;
}
#button{
width:60px;
height:50px;
border-radius:5px;
outline:none;
background-color:FF4C00;
border:none;
}
</style><meta name='viewport'content='width=device-width, initial-scale=1.0'> <link rel='stylesheet'href='ratchet.css'></rel>
<div id='nav'><b><font id='ft1'>Social Plus</font></b><center></br><br><a href='#tar1'><button>Home</button></a><a href='#tar2'><button>Massage</button></a><a href='#tar3'><button>Notification</button></a>
<a href='#tar4'><button>Settings</button></a></div><br><br><br><br><br><span id='tar1'>
<iframe src='home.html'id='iframe'></iframe>
<a href='post.html'>
    <button id='float'>Post</button>
</a>

</span><span id='tar2'><div id='cir'></div><div id='bio'></div></span><span id='tar3'>
<iframe src='notification.html'id='iframe'></iframe>
</span><span id='tar4'>
<ul class='table-view'>
  <li class='table-view-cell'>
    Profile Guard
    <div class='toggle active'>
      <div class='toggle-handle'></div>
    </div>
  </li>
  <li class='table-view-cell'>
    Ai Protection
    <div class='toggle active'>
      <div class='toggle-handle'></div>
</li>
<li class='table-view-cell'>
    Account Auto Check up
    <div class='toggle active'>
      <div class='toggle-handle'></div>
</li>
<li class='table-view-cell'>
    Auto upload
    <div class='toggle'>
      <div class='toggle-handle'></div>
</li>
<li class='table-view-cell'>
    AI
    <div class='toggle'>
      <div class='toggle-handle'></div>
</li>
    </ul>
<br>
<center><code>Social Plus2023©All rights Reserved</code></center>
</span>";
$folder=$email;
$file=$profile.".html";
mkdir("accounts/profile/".$folder);
$location="accounts/profile/".$folder."/".$file;
$write=fopen($location,"w");
fwrite($write,$main);
fclose($write);
}

    
    
    
    













