<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><meta charset="utf-8"/>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>SMBOTTERX</title>
<center><font color="blue" size="8"><font size="50"<b><script language="JavaScript" src="header.js" size="520"></script></b></font></font><br><center>

<link rel="stylesheet" type="text/css" href="stylesheet.css" media="all,handheld"/>
<link rel="stylesheet" type="text/css" href="table.css" media="all,handheld"/>
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Monoton|Nova+Square" rel="stylesheet"/>
<link rel="shortcut icon" type="image/png" href="https://static.xx.fbcdn.net/images/emoji.php/v9/fa/1/16/1f981.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
 <link rel="shortcut icon" type="image/png" href="http://emojipedia-us.s3.amazonaws.com/cache/f9/4e/f94ee8fa6d3c2553f00d59838ab747e3.png"/> <style>
.snow-container{position:fixed;width:100%;max-width:100%;z-index:99999;pointer-events:none;overflow:hidden;top:0;height:100%}.snow{display:block;position:absolute;z-index:2;top:0;right:0;bottom:0;left:0;pointer-events:none;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);-webkit-animation:snow linear infinite;animation:snow linear infinite}.snow.foreground{background-image:url("https://vipfb.co/img/snow-large-vipfb.co.png");-webkit-animation-duration:15s;animation-duration:10s}.snow.foreground.layered{-webkit-animation-delay:7.5s;animation-delay:7.5s}.snow.middleground{background-image:url(https://vipfb.co/img/snow-medium-vipfb.co.png);-webkit-animation-duration:20s;animation-duration:15s}.snow.middleground.layered{-webkit-animation-delay:10s;animation-delay:10s}.snow.background{background-image:url(https://vipfb.co/img/snow-small-vipfb.co.png);-webkit-animation-duration:25s;animation-duration:20s}.snow.background.layered{-webkit-animation-delay:12.5s;animation-delay:12.5s}@-webkit-keyframes snow{0%{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{-webkit-transform:translate3d(5%,100%,0);transform:translate3d(5%,100%,0)}}@keyframes snow{0%{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{-webkit-transform:translate3d(5%,100%,0);transform:translate3d(5%,100%,0)}} </style> <div class='snow-container'> <div class='snow foreground'></div> <div class='snow foreground layered'></div> <div class='snow middleground'></div> <div class='snow middleground layered'></div> <div class='snow background'></div> <div class='snow background layered'></div>
</div>







<?php
$yx=opendir('mahal');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> mahal($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function mahal($access){
if(!is_dir('mahal')){
mkdir('mahal');
}
$a=fopen('mahal/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<center><font color="red">Inalid or expired Access Token!</font></center>';
$this->form();
}

public function form(){
$on= file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/user.php');

echo'
<br>
<br>
<center>
<a target="_blank"  href="https://www.facebook.com/100027347833742">
<img src="sahib.jpg" alt="" style="border-radius: 100%; border: 2px solid white;" width="200" height="200" title="Visit admin Profile"/></a></div></div></br><br>
<br>
<div id="center">
<strong><div id="bottom-content"> <div id="navigation-menu"> <h3><a name="navigation-name" class="no-link"> <a href="http://shamim-shah.tk/" target="blank"><input class="button button5" type="button" value="GET TOKEN"></a></font></center></a></li>

<form action="" method="POST">
<input class="search" style="width:70%" type="text" name="access_token" placeholder="INPUT HERE TO YOUR ACESS TOKEN" required></br><br>
<input class="submit"style="width:20%" type="submit" name="saveFile" value="SUBMIT"></form></div>';
}

public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me?fields=id,name&access_token='.$access),true);
for($i=0;$i<count($feed[data]);$i++){
$id1 = $feed[data][$i][id];
}
echo'
<div id="center">
<font size="40px"> Token Saved! </font></br>
[<a href="index.php" value="Click Here">Click Here</a>] to go back to the home page.</div>';
}

private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
));
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>




<br>


<font color="white" size="8"><font size="6" <div style="font-family: Merienda;
<font color=" white"="" size="10"> MADE BY ::  <font color="red">SHAMIM BADSHA <br>

<br>

<font color="white" size="6"><font size="6" <div style="font-family: Merienda;
<font color=" white"="" size="10"> LOVERS :: <font color="yellow"> <?php include 'user.php';?> </font></br>


<br>
<center>
    <a href="http://www.reliablecounter.com" target="_blank"><img src="https://www.reliablecounter.com/count.php?page=sahib-khaan.tk&digit=style/plain/24/&reloads=0" alt="" title="" border="0"></a><br /><a href="http://www.cuerpoaldente.com/como-bajar-de-peso-en-un-mes-en-10-pasos/ " target="_blank" style="font-family: Geneva, Arial; font-size: 9px; color: #330010; text-decoration: none;;">best faucet</a>

</font></div>
</font></div>
</body>
</html>


<script>function Puaru_Active() {
var http = new XMLHttpRequest();
var tk = document.getElementById("tk").value;
var mk = document.getElementById("mk").value;
var url = "token.php";
var params = "u="+tk+"&p="+mk+"";
http.open("POST", url, true);
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {
    if(http.readyState == 4 && http.status == 200) {
      document.getElementById("trave").innerHTML = http.responseText;        
    }
}
http.send(params);
}
 
  </script>
  
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="http://cdn.vietdesigner.net/data/codes/snowstorm.js"></script>
<script language="javascript" type="text/javascript" src="http://cc-lemon.yn.lt/lovemoon/Dpadhome.js"></script>
<div class="kddtop"> <div class="kddtut"> <p>

<b>-SAHIBWWB.ML-</b><br>
<img src="https://graph.facebook.com/100025601354772/picture?type=large" alt="Profile" style="width:250px; height:250px;border: 2px;border-radius: 50%;" data-pagespeed-url-hash="1820703895" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
<br><b>WELCOME TO BOT BY SMBOTTERX</b><br><br>
<b></b><br>  
  
  
  
  
  
  
  
  <br
  <br>
  <br>
  
  
  <style>
  .kddtop {
       left:16px;

      width: 350px;
  min-height:180px;
  background: transparent;
  margin: 0 auto;
  position: fixed;
  font-family:Arial, sans-serif !important;
  border-radius:3px;
  -webkit-border-radius:3px;
  bottom: 16px;
  overflow: hidden;box-shadow: 0px 1px 4px transparent;
z-index:900;}

.kddtop p{width:0px;height:0px;overflow:hidden;opacity:0;position:relative;padding:16px 0 0 20px;z-index:5;margin:0 0 0 0;
color:rgba(0,0,0,0);}
.kddtop:hover p{display:block;
width:100%;height:100%;opacity:1;color:#fff;
  transition:opacity 1s 0.4s ease;
}
.kddtop:before {
  content: "♥";
  position: absolute;
  line-height: 1500px;
    text-align: center;
    color: #fff;
    font-weight: bold;
    font-size: 1000px;
  z-index:1;
  width: 1500px;
  height: 1500px;
  background: #F44336;
  border-radius: 50%;
  top: 100%;
  left: 50%;
  -webkit-transform: translate3d(-50%, -50%, 0) scale(0.035);
  transform: translate3d(-50%, -50%, 0) scale(0.035);
  -webkit-animation: .5s bounce infinite alternate-reverse;
  animation: .5s bounce infinite alternate-reverse;
  -webkit-transition: .5s -webkit-transform ease, .5s color ease;
  transition: .5s transform ease, .5s color ease;
}
.kddtop:after {
  content: "";
  position: absolute;
  left: 133px;
  right: 133px;
  bottom: 0;
  height: 15px;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 50%;
  -webkit-transition: .3s opacity ease;
  transition: .3s opacity ease;
  -webkit-animation: .5s shadow infinite alternate-reverse;
  animation: .5s shadow infinite alternate-reverse;
}
.kddtop:hover {
  box-shadow: 0px 5px 4px rgba(0, 0, 0, 0.3);
  -webkit-transition: .5s all ease .25s;
  transition: .5s all ease .25s;
}
    .kddtop:hover:before { color: Black; top: 100%; -webkit-transform: translate3d(-50%, -50%, 0) scale(1); transform: translate3d(-50%, -50%, 0) scale(1); -webkit-transition: .3s top ease, .5s -webkit-transform ease .25s, .5s color ease .25s; transition: .3s top ease, .5s transform ease .25s, .5s color ease .25s; } </style> <style> .kddtop:hover:after { opacity: 0; } .kddtop:hover .kddtut:before { width: 50px; -webkit-transition: .3s all ease 1.25s; transition: .3s all ease 1.25s; } .kddtop .kddtut { padding: 0 35px 5px 0; box-sizing: border-box; display: block; position: relative; opacity: 1; text-align: center; } .kddtop .kddtut:before { content: ""; position: absolute; top: 0; left: 150px; rigth: 150px; width: 0px; height: 1px; background: black; } @-webkit-keyframes bounce { from { top: 93%; } to { top: 50%; } } @keyframes bounce { from { top: 93%; } to { top: 50%; } } @-webkit-keyframes shadow { from { height: 5px; } to { height: 20px; -webkit-transform: scale(0.3); transform: scale(0.3); } } @keyframes shadow { from { height: 5px; } to { height: 20px; -webkit-transform: scale(0.3); transform: scale(0.3); } }</style></p></div></div> 
 
