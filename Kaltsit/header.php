<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
    <title>
        <?php $this->options->title(); ?>
    </title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('kaltsit.css'); ?>">
    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>

<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<header id="header">
    <div class="container">
        <div class="logo">
            <?php if($this->options->logoUrl): ?>
                <a href="<?php $this->options->siteUrl(); ?>" id="logo">
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                </a>
            <?php else: ?>
                <a href="<?php $this->options->siteUrl(); ?>" id="logo">
                    <?php $this->options->title() ?>
                </a>
                <p class="description">
                    <?php $this->options->description() ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</header>