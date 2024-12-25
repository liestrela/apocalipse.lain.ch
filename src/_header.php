<?php
	if (!isset($_GET['lang'])) $lang = 'en';
	else $lang = $_GET['lang'];
?>
<?php require_once('_langs.php');?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="/css/base.css">
<?php if (!empty($page_head)) { echo "\t\t",$page_head,"\n"; } ?>
        <title><?php if (empty($page_title)) { echo L_UNTITLEDPAGE; } else { echo $page_title; } ?></title>
    </head>
    <body>
        <div class="container">
            <div class="main">
                <a class="title" href="/<?php echo L_URLSUFFIX;?>">li</a>
				<span>li's website</span>
                <div class="buttons">
                    <a href="/blog/<?php echo L_URLSUFFIX;?>"><img src="/img/<?php echo P_MYBLOG;?>" height="40"></a>
                    <a href="/info/<?php echo L_URLSUFFIX;?>"><img src="/img/<?php echo P_INFO;?>" height="40"></a>
                    <a href="/pics/<?php echo L_URLSUFFIX;?>"><img src="/img/<?php echo P_PICS;?>" height="40"></a> <!-- /pics/index_old.php -->
                    <a href="/yt/" target="_blank"><img src="/img/<?php echo P_YOUTUBE;?>" height="40"></a>
                    <a href="/gh/" target="_blank"><img src="/img/<?php echo P_GITHUB;?>" height="40"></a>
                    <a href="/stuff/"><img src="/img/<?php echo P_STUFF;?>" height="40"></a>
                </div>
				<div class="choose-lang">
					<a href="<?php echo htmlspecialchars(strtok($_SERVER['REQUEST_URI'],'?'));?>"><img src="/img/flags/en.gif"></a>
					<a href="<?php echo htmlspecialchars(strtok($_SERVER['REQUEST_URI'],'?'));?>?lang=br"><img src="/img/flags/br.gif"></a>
				</div>
