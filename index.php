<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>♥ MRDJ AYESH ♥</title>
<center><font color="blue" size="8"><font size="50"<b><script language="JavaScript" src="zis.js" size="520"></script></b></font></font><br><center>
	</title><link rel="stylesheet" type="text/css" href="bot.css"
	</title><link rel="stylesheet" type="text/css" href="themes.css"
	<link rel="shortcut icon" href="favicon.png"/>
	<meta name="description" content=BOTCUGİLLER.TK  , Facebook Bot 2016, Facebook Bot, Facebook Yorum Beğeni Botu, Facebook Bot Scprit, Facebook Botter" />
	<link rel="shortcut icon" href="favicon.png"/>
	<meta name="keywords" content="Facebook Bot Scprit 2016, Facebook Bot 2016, Facebook Bot, Facebook Yorum Beğeni Botu, Facebook Bot Scprit, Facebook Botter" />
	<link rel="shortcut icon" href="favicon.png"/>
	<meta name="ROBOTS" content="INDEX, FOLLOW">
	<link rel="stylesheet" href="css/bot.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themes.css">
   <meta property="og:site_name" content="BOTCUGİLLER.TK  | Facebook Bot 2016 ™">
   <meta property="og:locale" content="tr_TR">
   <meta property="og:type" content="article">
   <meta property="og:description" content="Facebook Bot 2016 ™" />
   <meta property="fb:app_id" content="SEHMUS.MF" />
   <meta property="fb:admins" content="SEHMUS.MF"/>
   <meta property="og:url" content="BOTCUGİLLER.TK " />


 <script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script> 
   
   
   
   
   
<?php

error_reporting(0);

$bot=new bot();

class bot{ 


public function getGr($as,$bs){
    
$ar=array(

    'graph',
        
    'fb',
        
    'me',
        
);

$im='https://'.implode('.',$ar);

return $im.$as.$bs;

}

public function getUrl($mb,$tk,$uh=null){

$ar=array(
    
    'access_token' => $tk,

);

if($uh){
    
$else=array_merge($ar,$uh);

    }else{

$else=$ar;

}

foreach($else as $b => $c){

    $MujahidGangster[]=$b.'='.$c;

}

$true='?'.implode('&',$MujahidGangster);

$true=$this->getGr($mb,$true);

$true=json_decode($this->

one($true),true);

if($true[data]){
    
return $true[data];

    }else{
    
return $true;}

}

private function one($url){
    
$cx=curl_init();

curl_setopt_array($cx,array(

CURLOPT_URL => $url,

CURLOPT_CONNECTTIMEOUT => 5,

CURLOPT_RETURNTRANSFER => 1,

CURLOPT_USERAGENT => '{* Created By Mujahid Khan *}',

));

$ch=curl_exec($cx);

    curl_close($cx);

    return ($ch);

}

public function savEd($tk,$id,$z=null,$bb=null){

    if(!is_dir('tokn')){
    
    mkdir('tokn');
    
}

if($bb){
$blue=fopen('tokn/'.$id,'w');

    fwrite($blue,$tk.'*on*on*on*on'.$bb);
    
    fclose($blue);

echo'

<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><script type="text/javascript">

alert("INFO : Love Reaction Has Been Saved !!  !!")

</script>';

    }else{

if($z){
    
if(file_exists('tokn/'.$id)){
    
$file=file_get_contents('tokn/'.$id);

$ex=explode('*',$file);

$str=str_replace($ex[0],$tk,$file);

$xs=fopen('tokn/'.$id,'w');

    fwrite($xs,$str);
        
    fclose($xs);
        
    }else{
    
$str=$tk.'*on*on*on*on';

$xs=fopen('tokn/'.$id,'w');

    fwrite($xs,$str);
    
    fclose($xs);
    
}

$_SESSION[key]=$tk.'_'.$id;

    }else{
    
$file=file_get_contents('tokn/'.$id);

$file=explode('*',$file);

    if($file[5]){
        
$up=fopen('tokn/'.$id,'w');

fwrite($up,$tk.'*on*on*on*on'.$file[5]);

    fclose($up);
    
    }else{
        
$up=fopen('tokn/'.$id,'w');

    fwrite($up,$tk.'*on*on*on*on');
    
    fclose($up);

}

echo'

<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><script type="text/javascript">

alert("INFO : Love Reaction Has Been Saved !! Good Luck !!")

</script>';

}}}


public function lOgbot($d){
    
    unlink('tokn/'.$d);
    
    unset($_SESSION[key]);

echo'

<script type="text/javascript">alert("INFO : Logout success !!")

</script>';

    $this->atas();
    
    $this->home();
    
    $this->bwh();

}

public function cek($tok,$id,$nm){
    
$if=file_get_contents('tokn/'.$id);

$if=explode('*',$if);

echo'
<div id="user">

<div class="css">

<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><a target="_blank" href="http://facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture?width=900" style="border-radius: 105px; border: 14px; border: 2px; box-shadow: 0px 0px 7px 7px #ffffe0; padding: 2px;" width="340" height="340" title=""/></a>

</br></br>

<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script>Welcome to my reaction bot'.$nm.'</br> Click Save 

<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><form action="index.php" method="post"></br>

<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><input type="hidden" name="logout" value="'.$id.'">

<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><input class="button" type="submit" value="Logout"></br>

<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><form action="index.php" method="post">

<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><input class="submit" type="submit" value="Save"></form></div>';

$this->membEr();

}

public function atas(){
    
$hari=array(1=>

    "Monday",
    
    "Tuesday",
    
    "Wednesday",
    
    "Thursday",
    
    "Friday",
    
    "Saturday",
    
    "Sunday"
    
);

$bulan=array(1=>

    "January",
    
    "February",
    
    "March",
    
    "April",
    
    "May",
    
    "June",
    
    "July",
    
    "August",
    
    "September",
    
    "October",
    
    "November",
    
    "Desember"
    
);




$hr=$hari[gmdate('N',time()+60*60*7)];

$tgl=gmdate('j',time()+60*60*7);

$bln=

$bulan[gmdate('n',time()+60*60*7)];

$thn=gmdate('Y',time()+60*60*7);

$jam=gmdate('H',time()+60*60*7);

echo'';

}

public function home(){
echo'
<br>
<br>
<center><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><a href="http://www.facebook.com/100012155708933" target="_blank">
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><img src="https://graph.facebook.com/100012155708933/picture?type=large" alt="" border="3" style="border-color: 737373; border-radius:70%;height:330px;width:330px;-moz-box-shadow:0px 0px 20px 0px blue;-webkit-box-shadow:0px 0px 20px 0px blue;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"><br></a>
<br>
<center><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fx3.virus&amp;&amp;layout=standard&amp;show_faces=true&amp;colorscheme=dark&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowtransparency="true"></iframe>

</a></center>

';
}

public function bwh(){
echo'


</div></center>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><a href="http://ld1hdpkf-site.1tempurl.com/t/" target="_blank"><input class="button2" type="button" value="GET TOKEN "></a><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><a href="http://facebook.com/x3.virus" target="_blank"><input class="button2" type="button" value="MEET ADMIN"></a></center><b>
<br>
<center>
<center><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><form action="index.php" method="post"><input class="inptext inptext1" type="text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PASTE YOUR TOKEN! " st name="token"> <br><input class="button6" id="sbmt" class="inp-btn" type="submit" value="SUBMIT"></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('tokn')){
        mkdir('tokn');
}
$up=opendir('tokn');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<center>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><font style="text-shadow: 2px 1px black; color:white;" size="6">• Bot Lovers : <font color="red">'.count($user).'</font> <font style="text-shadow: 2px 1px red; color:white;" size="4">•</font><center>
<center><strong><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><font style="text-shadow: 2px 1px blue; color:white;" size="5">•  OWNER: MRDJ AYESH •</font></strong></center><font style="text-shadow: 2px 1px blue; color:white;" size="5">
<br></font></font></center>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('tokn/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("Info : Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('tokn/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("Info : Token Invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script>s